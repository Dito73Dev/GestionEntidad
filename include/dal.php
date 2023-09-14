<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers(Security::loginTable());
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tbledl_at_localhost__cargo;
	var $tbledl_at_localhost__contrato;
	var $tbledl_at_localhost__dependencia;
	var $tbledl_at_localhost__dependencias_001;
	var $tbledl_at_localhost__funcionario;
	var $tbledl_at_localhost__nombramiento;
	var $tbledl_at_localhost__perfil;
	var $tbledl_at_localhost__tparam_estados;
	var $tbledl_at_localhost__tparam_sn;
	var $tbldbct_at_localhost__contractor_master;
	var $tbldbct_at_localhost__contrato_attached_type;
	var $tbldbct_at_localhost__contrato_estados;
	var $tbldbct_at_localhost__contrato_forma_pago;
	var $tbldbct_at_localhost__contrato_natjuridica;
	var $tbldbct_at_localhost__contrato_pre;
	var $tbldbct_at_localhost__contrato_tipo;
	var $tbldbct_at_localhost__contrato_tipo_unidad;
	var $tbldbct_at_localhost__global_month;
	var $tbldbct_at_localhost__interventor_periodos;
	var $tbldbct_at_localhost__polizas_aseguradoras;
	var $tbldbct_at_localhost__polizas_tipo;
	var $tbldbct_at_localhost__tipo_banco;
	var $tbldbct_at_localhost__tipo_cta_banco;
	var $tbldbct_at_localhost__tipo_docidentidad;
	var $tbldbct_at_localhost__tipo_liquidacion;
	var $tbldbct_at_localhost__tparam_cajacomp;
	var $tbldbct_at_localhost__tparam_estcivil;
	var $tbldbct_at_localhost__tparam_fondopension;
	var $tbldbct_at_localhost__tparam_fondosalud;
	var $tbldbct_at_localhost__tparam_tipo_ct_000;
	var $tbldbct_at_localhost__tparam_tipo_ct_001;
	var $tbldbct_at_localhost__tparam_tipo_ct_002;
	var $tbldbct_at_localhost__tparam_tipo_ct_arl;
	var $tbldbct_at_localhost__vigencia;
	var $tbldbusers_at_localhost__divipola;
	var $tbldbusers_at_localhost__gestionentidad_v108uggroups;
	var $tbldbusers_at_localhost__gestionentidad_v108ugmembers;
	var $tbldbusers_at_localhost__gestionentidad_v108ugrights;
	var $tbldbusers_at_localhost__global_rol_almacen;
	var $tbldbusers_at_localhost__global_rol_c;
	var $tbldbusers_at_localhost__global_status;
	var $tbldbusers_at_localhost__global_users;
	var $tblsep2_at_localhost__tbl007_cdp;
	var $tblsep2_at_localhost__ep_agregada;
	var $tblsep2_at_localhost__ep_compromisos;
	var $tblsep2_at_localhost__ep_obligaciones;
	var $tblsep2_at_localhost__ep_reservas;
	var $tblsep2_at_localhost__global_ejecucion;
	var $tblsep2_at_localhost__rep_prg001_catalogopresupuestal;
	var $tblsep2_at_localhost__tparam_tiporubro;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "cargo", "varname" => "edl_at_localhost__cargo", "altvarname" => "cargo", "connId" => "edl_at_localhost", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "contrato", "varname" => "edl_at_localhost__contrato", "altvarname" => "contrato", "connId" => "edl_at_localhost", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "dependencia", "varname" => "edl_at_localhost__dependencia", "altvarname" => "dependencia", "connId" => "edl_at_localhost", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "dependencias_001", "varname" => "edl_at_localhost__dependencias_001", "altvarname" => "dependencias_001", "connId" => "edl_at_localhost", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "funcionario", "varname" => "edl_at_localhost__funcionario", "altvarname" => "funcionario", "connId" => "edl_at_localhost", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "nombramiento", "varname" => "edl_at_localhost__nombramiento", "altvarname" => "nombramiento", "connId" => "edl_at_localhost", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "perfil", "varname" => "edl_at_localhost__perfil", "altvarname" => "perfil", "connId" => "edl_at_localhost", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_estados", "varname" => "edl_at_localhost__tparam_estados", "altvarname" => "tparam_estados", "connId" => "edl_at_localhost", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_sn", "varname" => "edl_at_localhost__tparam_sn", "altvarname" => "tparam_sn", "connId" => "edl_at_localhost", "schema" => "", "connName" => "dbedl at 127.0.0.1");
		$this->lstTables[] = array("name" => "contractor_master", "varname" => "dbct_at_localhost__contractor_master", "altvarname" => "contractor_master", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "contrato_attached_type", "varname" => "dbct_at_localhost__contrato_attached_type", "altvarname" => "contrato_attached_type", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "contrato_estados", "varname" => "dbct_at_localhost__contrato_estados", "altvarname" => "contrato_estados", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "contrato_forma_pago", "varname" => "dbct_at_localhost__contrato_forma_pago", "altvarname" => "contrato_forma_pago", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "contrato_natjuridica", "varname" => "dbct_at_localhost__contrato_natjuridica", "altvarname" => "contrato_natjuridica", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "contrato_pre", "varname" => "dbct_at_localhost__contrato_pre", "altvarname" => "contrato_pre", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "contrato_tipo", "varname" => "dbct_at_localhost__contrato_tipo", "altvarname" => "contrato_tipo", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "contrato_tipo_unidad", "varname" => "dbct_at_localhost__contrato_tipo_unidad", "altvarname" => "contrato_tipo_unidad", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_month", "varname" => "dbct_at_localhost__global_month", "altvarname" => "global_month", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "interventor_periodos", "varname" => "dbct_at_localhost__interventor_periodos", "altvarname" => "interventor_periodos", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "polizas_aseguradoras", "varname" => "dbct_at_localhost__polizas_aseguradoras", "altvarname" => "polizas_aseguradoras", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "polizas_tipo", "varname" => "dbct_at_localhost__polizas_tipo", "altvarname" => "polizas_tipo", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tipo_banco", "varname" => "dbct_at_localhost__tipo_banco", "altvarname" => "tipo_banco", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tipo_cta_banco", "varname" => "dbct_at_localhost__tipo_cta_banco", "altvarname" => "tipo_cta_banco", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tipo_docidentidad", "varname" => "dbct_at_localhost__tipo_docidentidad", "altvarname" => "tipo_docidentidad", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tipo_liquidacion", "varname" => "dbct_at_localhost__tipo_liquidacion", "altvarname" => "tipo_liquidacion", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_cajacomp", "varname" => "dbct_at_localhost__tparam_cajacomp", "altvarname" => "tparam_cajacomp", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_estcivil", "varname" => "dbct_at_localhost__tparam_estcivil", "altvarname" => "tparam_estcivil", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_fondopension", "varname" => "dbct_at_localhost__tparam_fondopension", "altvarname" => "tparam_fondopension", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_fondosalud", "varname" => "dbct_at_localhost__tparam_fondosalud", "altvarname" => "tparam_fondosalud", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_tipo_ct_000", "varname" => "dbct_at_localhost__tparam_tipo_ct_000", "altvarname" => "tparam_tipo_ct_000", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_tipo_ct_001", "varname" => "dbct_at_localhost__tparam_tipo_ct_001", "altvarname" => "tparam_tipo_ct_001", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_tipo_ct_002", "varname" => "dbct_at_localhost__tparam_tipo_ct_002", "altvarname" => "tparam_tipo_ct_002", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_tipo_ct_arl", "varname" => "dbct_at_localhost__tparam_tipo_ct_arl", "altvarname" => "tparam_tipo_ct_arl", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "vigencia", "varname" => "dbct_at_localhost__vigencia", "altvarname" => "vigencia", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at 127.0.0.1");
		$this->lstTables[] = array("name" => "divipola", "varname" => "dbusers_at_localhost__divipola", "altvarname" => "divipola", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		$this->lstTables[] = array("name" => "gestionentidad_v108uggroups", "varname" => "dbusers_at_localhost__gestionentidad_v108uggroups", "altvarname" => "gestionentidad_v108uggroups", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		$this->lstTables[] = array("name" => "gestionentidad_v108ugmembers", "varname" => "dbusers_at_localhost__gestionentidad_v108ugmembers", "altvarname" => "gestionentidad_v108ugmembers", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		$this->lstTables[] = array("name" => "gestionentidad_v108ugrights", "varname" => "dbusers_at_localhost__gestionentidad_v108ugrights", "altvarname" => "gestionentidad_v108ugrights", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_rol_almacen", "varname" => "dbusers_at_localhost__global_rol_almacen", "altvarname" => "global_rol_almacen", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_rol_c", "varname" => "dbusers_at_localhost__global_rol_c", "altvarname" => "global_rol_c", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_status", "varname" => "dbusers_at_localhost__global_status", "altvarname" => "global_status", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_users", "varname" => "dbusers_at_localhost__global_users", "altvarname" => "global_users", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at 127.0.0.1");
		$this->lstTables[] = array("name" => "007_cdp", "varname" => "sep2_at_localhost__tbl007_cdp", "altvarname" => "tbl007_cdp", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "ep_agregada", "varname" => "sep2_at_localhost__ep_agregada", "altvarname" => "ep_agregada", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "ep_compromisos", "varname" => "sep2_at_localhost__ep_compromisos", "altvarname" => "ep_compromisos", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "ep_obligaciones", "varname" => "sep2_at_localhost__ep_obligaciones", "altvarname" => "ep_obligaciones", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "ep_reservas", "varname" => "sep2_at_localhost__ep_reservas", "altvarname" => "ep_reservas", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "global_ejecucion", "varname" => "sep2_at_localhost__global_ejecucion", "altvarname" => "global_ejecucion", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "rep_prg001_catalogopresupuestal", "varname" => "sep2_at_localhost__rep_prg001_catalogopresupuestal", "altvarname" => "rep_prg001_catalogopresupuestal", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "dbsep at 127.0.0.1");
		$this->lstTables[] = array("name" => "tparam_tiporubro", "varname" => "sep2_at_localhost__tparam_tiporubro", "altvarname" => "tparam_tiporubro", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "dbsep at 127.0.0.1");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>