<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["tparam_estados"] ) ) {
			$lookupTableLinks["tparam_estados"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados"]["dependencia.estado"] )) {
			$lookupTableLinks["tparam_estados"]["dependencia.estado"] = array();
		}
		$lookupTableLinks["tparam_estados"]["dependencia.estado"]["edit"] = array("table" => "dependencia", "field" => "estado", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"] )) {
			$lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"] = array();
		}
		$lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"]["edit"] = array("table" => "dependencia", "field" => "id_depto_superior", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["funcionario.idCargo"] )) {
			$lookupTableLinks["cargo"]["funcionario.idCargo"] = array();
		}
		$lookupTableLinks["cargo"]["funcionario.idCargo"]["edit"] = array("table" => "funcionario", "field" => "idCargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["funcionario.idDependencia"] )) {
			$lookupTableLinks["dependencia"]["funcionario.idDependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["funcionario.idDependencia"]["edit"] = array("table" => "funcionario", "field" => "idDependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["funcionario"] ) ) {
			$lookupTableLinks["funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["funcionario"]["funcionario.idEvaluador"] )) {
			$lookupTableLinks["funcionario"]["funcionario.idEvaluador"] = array();
		}
		$lookupTableLinks["funcionario"]["funcionario.idEvaluador"]["edit"] = array("table" => "funcionario", "field" => "idEvaluador", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["funcionario.idContrato"] )) {
			$lookupTableLinks["contrato"]["funcionario.idContrato"] = array();
		}
		$lookupTableLinks["contrato"]["funcionario.idContrato"]["edit"] = array("table" => "funcionario", "field" => "idContrato", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["funcionario.idNombramiento"] )) {
			$lookupTableLinks["nombramiento"]["funcionario.idNombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["funcionario.idNombramiento"]["edit"] = array("table" => "funcionario", "field" => "idNombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados"] ) ) {
			$lookupTableLinks["tparam_estados"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados"]["funcionario.estado_funcionario"] )) {
			$lookupTableLinks["tparam_estados"]["funcionario.estado_funcionario"] = array();
		}
		$lookupTableLinks["tparam_estados"]["funcionario.estado_funcionario"]["edit"] = array("table" => "funcionario", "field" => "estado_funcionario", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_000"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"]["tparam_tipo_ct_001.ct_tipo_id_fk"] )) {
			$lookupTableLinks["tparam_tipo_ct_000"]["tparam_tipo_ct_001.ct_tipo_id_fk"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_000"]["tparam_tipo_ct_001.ct_tipo_id_fk"]["edit"] = array("table" => "tparam_tipo_ct_001", "field" => "ct_tipo_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_001"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"]["tparam_tipo_ct_002.cta_tipo_id_fk"] )) {
			$lookupTableLinks["tparam_tipo_ct_001"]["tparam_tipo_ct_002.cta_tipo_id_fk"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_001"]["tparam_tipo_ct_002.cta_tipo_id_fk"]["edit"] = array("table" => "tparam_tipo_ct_002", "field" => "cta_tipo_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["vigencia"] ) ) {
			$lookupTableLinks["vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["vigencia"]["global_ejecucion.VIGENCIA"] )) {
			$lookupTableLinks["vigencia"]["global_ejecucion.VIGENCIA"] = array();
		}
		$lookupTableLinks["vigencia"]["global_ejecucion.VIGENCIA"]["edit"] = array("table" => "global_ejecucion", "field" => "VIGENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["global_ejecucion.USO_SN"] )) {
			$lookupTableLinks["tparam_sn"]["global_ejecucion.USO_SN"] = array();
		}
		$lookupTableLinks["tparam_sn"]["global_ejecucion.USO_SN"]["edit"] = array("table" => "global_ejecucion", "field" => "USO_SN", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tiporubro"] ) ) {
			$lookupTableLinks["tparam_tiporubro"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tiporubro"]["global_ejecucion.TIPO"] )) {
			$lookupTableLinks["tparam_tiporubro"]["global_ejecucion.TIPO"] = array();
		}
		$lookupTableLinks["tparam_tiporubro"]["global_ejecucion.TIPO"]["edit"] = array("table" => "global_ejecucion", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["global_ejecucion.DEPENDENCIA_ID"] )) {
			$lookupTableLinks["dependencia"]["global_ejecucion.DEPENDENCIA_ID"] = array();
		}
		$lookupTableLinks["dependencia"]["global_ejecucion.DEPENDENCIA_ID"]["edit"] = array("table" => "global_ejecucion", "field" => "DEPENDENCIA_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["global_ejecucion.RESPONSABLE_ID"] )) {
			$lookupTableLinks["global_users"]["global_ejecucion.RESPONSABLE_ID"] = array();
		}
		$lookupTableLinks["global_users"]["global_ejecucion.RESPONSABLE_ID"]["edit"] = array("table" => "global_ejecucion", "field" => "RESPONSABLE_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["global_ejecucion.DEPENDENCIA_SUP_ID"] )) {
			$lookupTableLinks["dependencias_001"]["global_ejecucion.DEPENDENCIA_SUP_ID"] = array();
		}
		$lookupTableLinks["dependencias_001"]["global_ejecucion.DEPENDENCIA_SUP_ID"]["edit"] = array("table" => "global_ejecucion", "field" => "DEPENDENCIA_SUP_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["funcionario"] ) ) {
			$lookupTableLinks["funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["funcionario"]["global_users.id_fk"] )) {
			$lookupTableLinks["funcionario"]["global_users.id_fk"] = array();
		}
		$lookupTableLinks["funcionario"]["global_users.id_fk"]["edit"] = array("table" => "global_users", "field" => "id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_rol_almacen"] ) ) {
			$lookupTableLinks["global_rol_almacen"] = array();
		}
		if( !isset( $lookupTableLinks["global_rol_almacen"]["global_users.global_rol_almacen"] )) {
			$lookupTableLinks["global_rol_almacen"]["global_users.global_rol_almacen"] = array();
		}
		$lookupTableLinks["global_rol_almacen"]["global_users.global_rol_almacen"]["edit"] = array("table" => "global_users", "field" => "global_rol_almacen", "page" => "edit");
		if( !isset( $lookupTableLinks["global_rol_c"] ) ) {
			$lookupTableLinks["global_rol_c"] = array();
		}
		if( !isset( $lookupTableLinks["global_rol_c"]["global_users.global_rol_contratos"] )) {
			$lookupTableLinks["global_rol_c"]["global_users.global_rol_contratos"] = array();
		}
		$lookupTableLinks["global_rol_c"]["global_users.global_rol_contratos"]["edit"] = array("table" => "global_users", "field" => "global_rol_contratos", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["global_users.usr_dep"] )) {
			$lookupTableLinks["dependencia"]["global_users.usr_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["global_users.usr_dep"]["edit"] = array("table" => "global_users", "field" => "usr_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["global_users.usr_cargo"] )) {
			$lookupTableLinks["cargo"]["global_users.usr_cargo"] = array();
		}
		$lookupTableLinks["cargo"]["global_users.usr_cargo"]["edit"] = array("table" => "global_users", "field" => "usr_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados"] ) ) {
			$lookupTableLinks["tparam_estados"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados"]["cargo.estado"] )) {
			$lookupTableLinks["tparam_estados"]["cargo.estado"] = array();
		}
		$lookupTableLinks["tparam_estados"]["cargo.estado"]["edit"] = array("table" => "cargo", "field" => "estado", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["global_users_contratistas.usr_personalid"] )) {
			$lookupTableLinks["contractor_master"]["global_users_contratistas.usr_personalid"] = array();
		}
		$lookupTableLinks["contractor_master"]["global_users_contratistas.usr_personalid"]["edit"] = array("table" => "global_users_contratistas", "field" => "usr_personalid", "page" => "edit");
		if( !isset( $lookupTableLinks["global_rol_almacen"] ) ) {
			$lookupTableLinks["global_rol_almacen"] = array();
		}
		if( !isset( $lookupTableLinks["global_rol_almacen"]["global_users_contratistas.global_rol_almacen"] )) {
			$lookupTableLinks["global_rol_almacen"]["global_users_contratistas.global_rol_almacen"] = array();
		}
		$lookupTableLinks["global_rol_almacen"]["global_users_contratistas.global_rol_almacen"]["edit"] = array("table" => "global_users_contratistas", "field" => "global_rol_almacen", "page" => "edit");
		if( !isset( $lookupTableLinks["global_rol_c"] ) ) {
			$lookupTableLinks["global_rol_c"] = array();
		}
		if( !isset( $lookupTableLinks["global_rol_c"]["global_users_contratistas.global_rol_contratos"] )) {
			$lookupTableLinks["global_rol_c"]["global_users_contratistas.global_rol_contratos"] = array();
		}
		$lookupTableLinks["global_rol_c"]["global_users_contratistas.global_rol_contratos"]["edit"] = array("table" => "global_users_contratistas", "field" => "global_rol_contratos", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["global_users_contratistas.usr_dep"] )) {
			$lookupTableLinks["dependencia"]["global_users_contratistas.usr_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["global_users_contratistas.usr_dep"]["edit"] = array("table" => "global_users_contratistas", "field" => "usr_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["global_users_contratistas.usr_cargo"] )) {
			$lookupTableLinks["cargo"]["global_users_contratistas.usr_cargo"] = array();
		}
		$lookupTableLinks["cargo"]["global_users_contratistas.usr_cargo"]["edit"] = array("table" => "global_users_contratistas", "field" => "usr_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["contractor_master.contractor_dependencia"] )) {
			$lookupTableLinks["dependencia"]["contractor_master.contractor_dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["contractor_master.contractor_dependencia"]["edit"] = array("table" => "contractor_master", "field" => "contractor_dependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados"] ) ) {
			$lookupTableLinks["tparam_estados"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados"]["dependencia_sj.estado"] )) {
			$lookupTableLinks["tparam_estados"]["dependencia_sj.estado"] = array();
		}
		$lookupTableLinks["tparam_estados"]["dependencia_sj.estado"]["edit"] = array("table" => "dependencia_SJ", "field" => "estado", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["dependencia_sj.id_depto_superior"] )) {
			$lookupTableLinks["dependencias_001"]["dependencia_sj.id_depto_superior"] = array();
		}
		$lookupTableLinks["dependencias_001"]["dependencia_sj.id_depto_superior"]["edit"] = array("table" => "dependencia_SJ", "field" => "id_depto_superior", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["funcionario_sj.idCargo"] )) {
			$lookupTableLinks["cargo"]["funcionario_sj.idCargo"] = array();
		}
		$lookupTableLinks["cargo"]["funcionario_sj.idCargo"]["edit"] = array("table" => "funcionario_SJ", "field" => "idCargo", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["funcionario_sj.idDependencia"] )) {
			$lookupTableLinks["dependencia"]["funcionario_sj.idDependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["funcionario_sj.idDependencia"]["edit"] = array("table" => "funcionario_SJ", "field" => "idDependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["funcionario"] ) ) {
			$lookupTableLinks["funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["funcionario"]["funcionario_sj.idEvaluador"] )) {
			$lookupTableLinks["funcionario"]["funcionario_sj.idEvaluador"] = array();
		}
		$lookupTableLinks["funcionario"]["funcionario_sj.idEvaluador"]["edit"] = array("table" => "funcionario_SJ", "field" => "idEvaluador", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["funcionario_sj.idContrato"] )) {
			$lookupTableLinks["contrato"]["funcionario_sj.idContrato"] = array();
		}
		$lookupTableLinks["contrato"]["funcionario_sj.idContrato"]["edit"] = array("table" => "funcionario_SJ", "field" => "idContrato", "page" => "edit");
		if( !isset( $lookupTableLinks["nombramiento"] ) ) {
			$lookupTableLinks["nombramiento"] = array();
		}
		if( !isset( $lookupTableLinks["nombramiento"]["funcionario_sj.idNombramiento"] )) {
			$lookupTableLinks["nombramiento"]["funcionario_sj.idNombramiento"] = array();
		}
		$lookupTableLinks["nombramiento"]["funcionario_sj.idNombramiento"]["edit"] = array("table" => "funcionario_SJ", "field" => "idNombramiento", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_estados"] ) ) {
			$lookupTableLinks["tparam_estados"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_estados"]["funcionario_sj.estado_funcionario"] )) {
			$lookupTableLinks["tparam_estados"]["funcionario_sj.estado_funcionario"] = array();
		}
		$lookupTableLinks["tparam_estados"]["funcionario_sj.estado_funcionario"]["edit"] = array("table" => "funcionario_SJ", "field" => "estado_funcionario", "page" => "edit");
		if( !isset( $lookupTableLinks["global_status"] ) ) {
			$lookupTableLinks["global_status"] = array();
		}
		if( !isset( $lookupTableLinks["global_status"]["contractor_master_sj.sys_status"] )) {
			$lookupTableLinks["global_status"]["contractor_master_sj.sys_status"] = array();
		}
		$lookupTableLinks["global_status"]["contractor_master_sj.sys_status"]["edit"] = array("table" => "contractor_master_SJ", "field" => "sys_status", "page" => "edit");
}

?>