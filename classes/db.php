<?php
class DB
{
	public static function CurrentConnection()
	{
		global $currentConnection;
		return $currentConnection ? $currentConnection : DB::DefaultConnection();
	}

	public static function CurrentConnectionId()
	{
		$conn = DB::CurrentConnection();
		return $conn->connId;
	}

	public static function DefaultConnection()
	{
		global $cman;
		return $cman->getDefault();
	}

	public static function ConnectionByTable( $table )
	{
		global $cman;
		return $cman->byTable($table);
	}

	public static function ConnectionByName( $name )
	{
		global $cman;
		return $cman->byName( $name );
	}

	public static function SetConnection( $connection )
	{
		global $currentConnection;
		if ( is_string( $connection ) )
		{
			$currentConnection = DB::ConnectionByName( $connection );
		}
		else if ( is_a($connection, 'Connection') ) {
		 	$currentConnection = $connection;
		}
	}

	public static function LastId()
	{
		return DB::CurrentConnection()->getInsertedId();
	}

	public static function Query( $sql )
	{
		return DB::CurrentConnection()->querySilent( $sql );
	}

	public static function Exec( $sql )
	{
		return DB::CurrentConnection()->execSilent( $sql ) != NULL;
	}

	public static function LastError()
	{
		return DB::CurrentConnection()->lastError();
	}
	/**
	 * @param Array $userOrders array("field1", "field2") -> ORDER BY field1, field2
	 * array( array( "field1", "d" ), "field2" ) -> ORDER BY field1 DESC, field2
	 * array( array( "field1", "a" ), array( "field2", "d" ) ) -> ORDER BY field1 ASC, field2 DESC
	*/
	public static function Select( $table, $userConditions = array(), $userOrders = array() )
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource )
			return false;

		$dc = new DsCommand();
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$dc->order = array();

		foreach( $userOrders as $userOrder ){
			if( is_array( $userOrder ) ){
				$orderClause = array( "column" => $userOrder[0] );
				$dir = $userOrder[1];
				switch ( $dir ) {
					case "a":
						$orderClause["dir"] = "ASC";
						break;
					case "d":
						$orderClause["dir"] = "DESC";
						break;
				}
			}
			else
				$orderClause = array( "column" => $userOrder );

			$dc->order[] = $orderClause;
		}
		$queryResult = $dataSource->getList( $dc );
		return $queryResult;
	}

	public static function SelectValue( $field, $table, $userConditions = array(), $order = array() ){
		$rs = DB::Select( $table, $userConditions, $order );
		if( !$rs )
			return false;
		$data = $rs->fetchAssoc();
		if( $data[ $field ] )
			return $data[ $field ];
		return false;
	}

	public static function Delete($table, $userConditions = array() )
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource )
			return false;

		$dc = new DsCommand();
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$prep = $dataSource->prepareSQL( $dc );
		if( $prep["where"] == "" )
			return false;
		$ret = $dataSource->deleteSingle( $dc, false );
		return $ret;
	}

	public static function Insert($table, $data)
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource ) {
			return false;
		}
		$dc = new DsCommand();
		$dc->values = $data;
		$result = $dataSource->insertSingle( $dc );
		return !!$result;
	}

	public static function Update($table, $data, $userConditions)
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource ) {
			return false;
		}
		if( !$userConditions ) {
			return false;
		}
		$dc = new DsCommand();
		$dc->values = $data;
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$result = $dataSource->updateSingle( $dc, false );
		return !!$result;
	}

	public static function Count( $table, $userConditions = array() ){
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
        if( !$dataSource )
            return false;
        $dc = new DsCommand();
        $dc->filter = DB::_createFilterCondition( $userConditions );
        $count = $dataSource->getCount( $dc );
        return $count;
	}
	protected static function _createFilterCondition( $userConditions )
	{
		if( !is_array( $userConditions ) ) {
			return DataCondition::SQLCondition( $userConditions );
		}

		$conditions = array();
		foreach($userConditions as $fieldName => $value)
		{
			if ( is_null($value) ) {
				$conditions[] = DataCondition::FieldIs( $fieldName, dsopEMPTY, '' );
			} else {
				$conditions[] = DataCondition::FieldEquals( $fieldName, $value );
			}
		}
		return DataCondition::_And( $conditions );
	}


	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected static function _execSilentWithBlobProcessing($blobs, $dalSQL, $tableinfo, $autoincField = null)
	{
		$blobTypes = array();
		if( DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		DB::CurrentConnection()->execSilentWithBlobProcessing( $dalSQL, $blobs, $blobTypes, $autoincField );
	}

	protected static function _prepareValue($value, $type)
	{
		if ( is_null($value) )
			return "NULL";

		if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( DB::CurrentConnection()->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";

				return "?";
			}

			if( DB::CurrentConnection()->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}

		if( IsNumberType($type) && !is_numeric($value) )
		{
			$value = trim($value);
			$value = str_replace(",", ".", $value);
			if ( !is_numeric($value) )
				return "NULL";
		}

		if( IsDateFieldType($type) || IsTimeType($type) )
		{
			if( !$value )
				return "NULL";

			// timestamp
			if ( is_int($value) )
			{
				if ( IsDateFieldType($type) )
				{
					$value = getYMDdate($value) . " " . getHISdate($value);
				}
				else if ( IsTimeType($type) )
				{
					$value = getHISdate($value);
				}
			}

			return DB::CurrentConnection()->addDateQuotes( $value );
		}

		if( NeedQuotes($type) )
			return DB::CurrentConnection()->prepareString( $value );

		return $value;
	}

	/**
	 * 	Find table info stored in the project file
	 *
	 */
	public static function _findDalTable( $table, $conn = null )
	{
		global $dalTables;
		if( !$conn )
			$conn = DB::CurrentConnection();
		$tableName = $conn->getTableNameComponents( $table );

		DB::_fillTablesList( $conn );

		//	exact match
		foreach( $dalTables[$conn->connId] as $t ) {
			if( ( !$tableName["schema"] || $t["schema"] == $tableName["schema"] )
				&& $t["name"] == $tableName["table"] )
				return $t;
		}

		//	case-insensitive
		$tableName["schema"] = strtoupper( $tableName["schema"] );
		$tableName["table"] = strtoupper( $tableName["table"] );

		foreach( $dalTables[$conn->connId] as $t )
		{
			if( ( !$tableName["schema"] || strtoupper( $t["schema"] ) == $tableName["schema"] )
				&& strtoupper( $t["name"] ) == $tableName["table"] )
				return $t;
		}
		return null;
	}

	/**
	 * 	Get list of table field names and types
	 *	Check tables stored in the project first, then fetch it from the database.
	 *
	 */
	public static function _getTableInfo($table, $connId = null )
	{
		global $dal_info, $tableinfo_cache, $cman;
		if( !$connId )
			$connId = DB::CurrentConnectionId();

		//	prepare cache
		if( !isset($tableinfo_cache[ $connId ] ) )
			$tableinfo_cache[ $connId ] = array();

		$tableInfo = array();


		$tableDescriptor = DB::_findDalTable( $table, $cman->byId( $connId ) );

		if ( $tableDescriptor )
		{
			importTableInfo( $tableDescriptor["varname"] );

			$tableInfo["fields"] = $dal_info[ $tableDescriptor["varname"] ];

			if( $tableDescriptor["schema"] )
				$tableInfo["fullName"] = $tableDescriptor["schema"] . "." . $tableDescriptor["name"];
			else
				$tableInfo["fullName"] = $tableDescriptor["name"];
		}
		else
		{
			//	check cache first
			if( isset($tableinfo_cache[ $connId ][ $table ] ) )
				return $tableinfo_cache[ $connId ][ $table ];

			//	fetch table info from the database
			$helpSql = "select * from " . DB::CurrentConnection()->addTableWrappers( $table ) . " where 1=0";

			$tableInfo["fullName"] = $table;
			$tableInfo["fields"] = array();

			// in case getFieldsList throws error
			$tableinfo_cache[ $connId ][ $table ] = false;

			$fieldList = DB::CurrentConnection()->getFieldsList($helpSql);
			foreach ($fieldList as $f )
			{
				$tableInfo["fields"][ $f["fieldname"] ] = array( "type" => $f["type"], "name" => $f["fieldname"] );
			}
			$tableinfo_cache[ $connId ][ $table ] = $tableInfo;
		}

		return $tableInfo;
	}


	protected static function _fillTablesList( $conn )
	{
		global $dalTables;
		if( !$conn )
			$conn = DB::CurrentConnection();
		if( isset($dalTables[ $conn->connId ]) )
			return;
		$dalTables[ $conn->connId ] = array();
		if( "edl_at_localhost" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "cargo", "varname" => "edl_at_localhost__cargo", "altvarname" => "cargo", "connId" => "edl_at_localhost", "schema" => "", "connName" => "dbedl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "contrato", "varname" => "edl_at_localhost__contrato", "altvarname" => "contrato", "connId" => "edl_at_localhost", "schema" => "", "connName" => "dbedl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "dependencia", "varname" => "edl_at_localhost__dependencia", "altvarname" => "dependencia", "connId" => "edl_at_localhost", "schema" => "", "connName" => "dbedl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "dependencias_001", "varname" => "edl_at_localhost__dependencias_001", "altvarname" => "dependencias_001", "connId" => "edl_at_localhost", "schema" => "", "connName" => "dbedl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "funcionario", "varname" => "edl_at_localhost__funcionario", "altvarname" => "funcionario", "connId" => "edl_at_localhost", "schema" => "", "connName" => "dbedl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "nombramiento", "varname" => "edl_at_localhost__nombramiento", "altvarname" => "nombramiento", "connId" => "edl_at_localhost", "schema" => "", "connName" => "dbedl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "perfil", "varname" => "edl_at_localhost__perfil", "altvarname" => "perfil", "connId" => "edl_at_localhost", "schema" => "", "connName" => "dbedl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_estados", "varname" => "edl_at_localhost__tparam_estados", "altvarname" => "tparam_estados", "connId" => "edl_at_localhost", "schema" => "", "connName" => "dbedl at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_sn", "varname" => "edl_at_localhost__tparam_sn", "altvarname" => "tparam_sn", "connId" => "edl_at_localhost", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		}
		if( "dbct_at_localhost" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "contractor_master", "varname" => "dbct_at_localhost__contractor_master", "altvarname" => "contractor_master", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "contrato_attached_type", "varname" => "dbct_at_localhost__contrato_attached_type", "altvarname" => "contrato_attached_type", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "contrato_estados", "varname" => "dbct_at_localhost__contrato_estados", "altvarname" => "contrato_estados", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "contrato_forma_pago", "varname" => "dbct_at_localhost__contrato_forma_pago", "altvarname" => "contrato_forma_pago", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "contrato_natjuridica", "varname" => "dbct_at_localhost__contrato_natjuridica", "altvarname" => "contrato_natjuridica", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "contrato_pre", "varname" => "dbct_at_localhost__contrato_pre", "altvarname" => "contrato_pre", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "contrato_tipo", "varname" => "dbct_at_localhost__contrato_tipo", "altvarname" => "contrato_tipo", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "contrato_tipo_unidad", "varname" => "dbct_at_localhost__contrato_tipo_unidad", "altvarname" => "contrato_tipo_unidad", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_month", "varname" => "dbct_at_localhost__global_month", "altvarname" => "global_month", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "interventor_periodos", "varname" => "dbct_at_localhost__interventor_periodos", "altvarname" => "interventor_periodos", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "polizas_aseguradoras", "varname" => "dbct_at_localhost__polizas_aseguradoras", "altvarname" => "polizas_aseguradoras", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "polizas_tipo", "varname" => "dbct_at_localhost__polizas_tipo", "altvarname" => "polizas_tipo", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tipo_banco", "varname" => "dbct_at_localhost__tipo_banco", "altvarname" => "tipo_banco", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tipo_cta_banco", "varname" => "dbct_at_localhost__tipo_cta_banco", "altvarname" => "tipo_cta_banco", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tipo_docidentidad", "varname" => "dbct_at_localhost__tipo_docidentidad", "altvarname" => "tipo_docidentidad", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tipo_liquidacion", "varname" => "dbct_at_localhost__tipo_liquidacion", "altvarname" => "tipo_liquidacion", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_cajacomp", "varname" => "dbct_at_localhost__tparam_cajacomp", "altvarname" => "tparam_cajacomp", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_estcivil", "varname" => "dbct_at_localhost__tparam_estcivil", "altvarname" => "tparam_estcivil", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_fondopension", "varname" => "dbct_at_localhost__tparam_fondopension", "altvarname" => "tparam_fondopension", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_fondosalud", "varname" => "dbct_at_localhost__tparam_fondosalud", "altvarname" => "tparam_fondosalud", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_tipo_ct_000", "varname" => "dbct_at_localhost__tparam_tipo_ct_000", "altvarname" => "tparam_tipo_ct_000", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_tipo_ct_001", "varname" => "dbct_at_localhost__tparam_tipo_ct_001", "altvarname" => "tparam_tipo_ct_001", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_tipo_ct_002", "varname" => "dbct_at_localhost__tparam_tipo_ct_002", "altvarname" => "tparam_tipo_ct_002", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_tipo_ct_arl", "varname" => "dbct_at_localhost__tparam_tipo_ct_arl", "altvarname" => "tparam_tipo_ct_arl", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "vigencia", "varname" => "dbct_at_localhost__vigencia", "altvarname" => "vigencia", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		}
		if( "dbusers_at_localhost" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "divipola", "varname" => "dbusers_at_localhost__divipola", "altvarname" => "divipola", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "gestionentidad_v108uggroups", "varname" => "dbusers_at_localhost__gestionentidad_v108uggroups", "altvarname" => "gestionentidad_v108uggroups", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "gestionentidad_v108ugmembers", "varname" => "dbusers_at_localhost__gestionentidad_v108ugmembers", "altvarname" => "gestionentidad_v108ugmembers", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "gestionentidad_v108ugrights", "varname" => "dbusers_at_localhost__gestionentidad_v108ugrights", "altvarname" => "gestionentidad_v108ugrights", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_rol_almacen", "varname" => "dbusers_at_localhost__global_rol_almacen", "altvarname" => "global_rol_almacen", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_rol_c", "varname" => "dbusers_at_localhost__global_rol_c", "altvarname" => "global_rol_c", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_status", "varname" => "dbusers_at_localhost__global_status", "altvarname" => "global_status", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_users", "varname" => "dbusers_at_localhost__global_users", "altvarname" => "global_users", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		}
		if( "sep2_at_localhost" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "007_cdp", "varname" => "sep2_at_localhost__tbl007_cdp", "altvarname" => "tbl007_cdp", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "ep_agregada", "varname" => "sep2_at_localhost__ep_agregada", "altvarname" => "ep_agregada", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "ep_compromisos", "varname" => "sep2_at_localhost__ep_compromisos", "altvarname" => "ep_compromisos", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "ep_obligaciones", "varname" => "sep2_at_localhost__ep_obligaciones", "altvarname" => "ep_obligaciones", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "ep_reservas", "varname" => "sep2_at_localhost__ep_reservas", "altvarname" => "ep_reservas", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "global_ejecucion", "varname" => "sep2_at_localhost__global_ejecucion", "altvarname" => "global_ejecucion", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "rep_prg001_catalogopresupuestal", "varname" => "sep2_at_localhost__rep_prg001_catalogopresupuestal", "altvarname" => "rep_prg001_catalogopresupuestal", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "dbsep at 127.0.0.1");
			$dalTables[$conn->connId][] = array("name" => "tparam_tiporubro", "varname" => "sep2_at_localhost__tparam_tiporubro", "altvarname" => "tparam_tiporubro", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		}
	}

	public static function PrepareConnectionSQL( $conn, $sql,
		$arg1 = null,
		$arg2 = null,
		$arg3 = null,
		$arg4 = null,
		$arg5 = null,
		$arg6 = null,
		$arg7 = null,
		$arg8 = null,
		$arg9 = null,
		$arg10 = null ) {

		$prevConn = DB::CurrentConnection();
		DB::SetConnection( $conn );
		$result = DB::PrepareSQL( $sql, $arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8, $arg9, $arg10 );
		DB::SetConnection( $prevConn );
		return $result;
	}

	public static function PrepareSQL( $sql )
	{
		$args = func_get_args();

		$conn = DB::CurrentConnection();

		$tokens = DB::scanTokenString($sql);

		$replacements = array();
		// build array of replacements in this format:
		//	"offset" => position in the string where replacement should be done
		//  "len" => length of original substring to cut out
		//  "insert" => string to insert in place of cut out

		foreach ($tokens["matches"] as $i => $match) {
			$offset = $tokens["offsets"][$i];
			$token = $tokens["tokens"][$i];

			$repl = array(
				"offset" => $offset,
				"len" => strlen($match)
			);

			$val = "";
			if (is_numeric($token) && count( $args ) > $token) {
				$val = $args[(int)$token];
			} else {
				$val = RunnerContext::getValue($token);
			}


			/**
			 * Don't ever dare to alter this code!
			 * Everything outside quotes must be converted to number to avoid SQL injection
			 */
			 $inQuotes = $conn->positionQuoted( $sql, $offset );
			 if( is_array( $val ) ) {
				$_values = array();
				foreach( $val as $v ) {
					if ( $inQuotes ) {
						$_values[] = '\''.$conn->addSlashes( $v ).'\'';
					} else {
						$_values[] = DB::prepareNumberValue( $v );
					}
				}
				$glued = implode( ",", $_values );
				$repl["insert"] = $inQuotes ? substr( $glued, 1, strlen( $glued ) - 2 ) : $glued;
			} else {
				if( $inQuotes ) {
					$repl["insert"] = $conn->addSlashes( $val );
				} else {
					$repl["insert"] = DB::prepareNumberValue( $val );
				}
			}

			$replacements[] = $repl;
		}

		//	do replacements
		return RunnerContext::doReplacements( $sql, $replacements );
	}

	/**
	 *	@return Array
	 */
	public static function readSQLTokens( $sql )
	{
		$arr = DB::scanTokenString( $sql );
		return $arr["tokens"];
	}

	/**
	 *	@return Array
	 */
	public static function readMasterTokens( $sql )
	{
		$masterTokens = array();

		$allTokens = DB::readSQLTokens( $sql );
		foreach ( $allTokens as $key => $token )
		{
			$dotPos = strpos(  $token, "." );
			if( $dotPos !== FALSE && strtolower( substr( $token, 0, $dotPos ) ) == "master")
			{
				$masterTokens[] = $token;
			}
		}

		return $masterTokens;
	}

	/**
	 *	Scans SQL string, finds all tokens. Returns three arrays - 'tokens', 'matches' and 'offsets'
	 *  Offsets are positions of corresponding 'matches' items in the string
	 *  Example:
	 *  insert into table values (':aaa', :old.bbb, ':{master.order date}')
	 *  tokens: ["aaa", "old.bbb", "master.order date"]
	 *  matches: [":aaa", ":old.bbb", ":{master.order date}"]
	 *  offsets: [28, 35, 46]
	 *
	 *	Exceptions for tokens without {}
	 *	1. shouldn't start with number
	*		:62aaa
	 *	2. shouldn't follow letter
	 *		x:aaa
	 *	3. shouldn't follow :
	 *		::aaa
	 *
 	 *	@return Array [ "tokens" => Array, "matches" => Array, "offsets" => Array ]
	 */
	public static function scanTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = '/(?:[^\w\:]|^)(\:([a-zA-Z_]{1}[\w\.]*))|\:\{([^\:]*?)\}|(?:[^\w\:]|^)(\:([1-9]+[0-9]*))/';

		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			if ($m["submatches"][0] != "") {
				// first variant, no {}
				$matches[] = $m["submatches"][0];
				$tokens[] = $m["submatches"][1];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][0]);
			} else if ($m["submatches"][2] != "") {
				// second variant, in {}
				$matches[] = $m["match"];
				$tokens[] = $m["submatches"][2];
				$offsets[] = $m["offset"];
			} else if ($m["submatches"][3] != "") {
				// third variant, numeric like (:1, ':2')
				$matches[] = $m["submatches"][3];
				$tokens[] = $m["submatches"][4];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][3]);
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}

	public static function scanNewTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = "/\\\${[^\\s\{\\}]+}/";


		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			$match = $m["match"];
			if ( $match != "" ) {
				$matches[] = $match;
				$tokens[] = substr( $match, 2, strlen( $match ) - 3 );
				$offsets[] = $m["offset"];
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}


	public static function prepareNumberValue( $value )
	{
		$strvalue = str_replace( ",", ".", (string)$value );
		if( is_numeric($strvalue) )
			return $strvalue;
		return 0;
	}

	public static function Lookup( $sql ) {
		$result = DB::Query( $sql );
		if( !$result ) {
			return null;
		}
		$data = $result->fetchNumeric();
		if( !$data ) {
			return null;
		}
		return $data[0];
	}

	public static function DBLookup( $sql ) {
		return DB::Lookup( $sql );
	}

}

?>