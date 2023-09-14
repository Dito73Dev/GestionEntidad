<?php
$tdataglobal_users_contratistas = array();
$tdataglobal_users_contratistas[".searchableFields"] = array();
$tdataglobal_users_contratistas[".ShortName"] = "global_users_contratistas";
$tdataglobal_users_contratistas[".OwnerID"] = "";
$tdataglobal_users_contratistas[".OriginalTable"] = "global_users";


$tdataglobal_users_contratistas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataglobal_users_contratistas[".originalPagesByType"] = $tdataglobal_users_contratistas[".pagesByType"];
$tdataglobal_users_contratistas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataglobal_users_contratistas[".originalPages"] = $tdataglobal_users_contratistas[".pages"];
$tdataglobal_users_contratistas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataglobal_users_contratistas[".originalDefaultPages"] = $tdataglobal_users_contratistas[".defaultPages"];

//	field labels
$fieldLabelsglobal_users_contratistas = array();
$fieldToolTipsglobal_users_contratistas = array();
$pageTitlesglobal_users_contratistas = array();
$placeHoldersglobal_users_contratistas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_users_contratistas["Spanish"] = array();
	$fieldToolTipsglobal_users_contratistas["Spanish"] = array();
	$placeHoldersglobal_users_contratistas["Spanish"] = array();
	$pageTitlesglobal_users_contratistas["Spanish"] = array();
	$fieldLabelsglobal_users_contratistas["Spanish"]["idusrglobal"] = "Idusrglobal";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["idusrglobal"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["idusrglobal"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["id_fk"] = "Código interno";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["id_fk"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["id_fk"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["Username"] = "Usuario del sistema";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["Username"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["Username"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["Password"] = "Password";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["Password"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["Password"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_email"] = "Correo electrónico";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_email"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_email"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_name"] = "Nombres";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_name"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_name"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_lname"] = "Apellidos";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_lname"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_lname"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_nombresfull"] = "Nombres completos";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_nombresfull"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_nombresfull"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_personalid"] = "Documento";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_personalid"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_personalid"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_inicial"] = "Usr Inicial";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_inicial"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_inicial"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_sessini"] = "Usr Sessini";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_sessini"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_sessini"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_image"] = "Usr Image";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_image"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_image"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_status_nomina"] = "Usr Status Nomina";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_status_nomina"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_status_nomina"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_status"] = "Usr Status";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_status"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_status"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_rdnkey"] = "Usr Rdnkey";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_rdnkey"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_rdnkey"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_type_vinc"] = "Usr Type Vinc";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_type_vinc"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_type_vinc"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_type_vinculacion"] = "Usr Type Vinculacion";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_type_vinculacion"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_type_vinculacion"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_status_sol"] = "Usr Status Sol";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_status_sol"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_status_sol"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_dependencia"] = "Usr Dependencia";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_dependencia"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_dependencia"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["user_dep"] = "User Dep";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["user_dep"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["user_dep"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_entidad"] = "Usr Entidad";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_entidad"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_entidad"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_not"] = "Usr Not";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_not"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_not"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_not_msj"] = "Usr Not Msj";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_not_msj"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_not_msj"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_jefe"] = "Usr Jefe";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_jefe"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_jefe"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_minequipo_lider"] = "Usr Minequipo Lider";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_minequipo_lider"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_minequipo_lider"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_minequipo_grupo"] = "Usr Minequipo Grupo";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_minequipo_grupo"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_minequipo_grupo"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_me"] = "Global Rol Me";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_me"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_me"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_gh"] = "Global Rol Gh";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_gh"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_gh"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_almacen"] = "Rol Almacen";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_almacen"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_almacen"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_ci"] = "Global Rol Ci";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_ci"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_ci"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_contratos"] = "Contratos";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_contratos"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_contratos"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_hojar"] = "Global Rol Hojar";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_hojar"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_hojar"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_inmuebles"] = "Global Rol Inmuebles";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_inmuebles"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_inmuebles"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_siis"] = "Global Rol Siis";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_siis"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_siis"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_cpanel"] = "Global Rol Cpanel";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_cpanel"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_cpanel"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_dashboard"] = "Global Rol Dashboard";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_dashboard"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_dashboard"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_zf"] = "Global Rol Zf";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_zf"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_zf"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_sipi"] = "Global Rol Sipi";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_sipi"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_sipi"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_cej"] = "Global Rol Cej";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_cej"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_cej"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_jc3"] = "Global Rol Jc3";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_jc3"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_jc3"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_th"] = "Global Rol Th";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_th"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_th"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_sid"] = "Global Rol Sid";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_sid"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_sid"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol"] = "Global Rol";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_cont"] = "Global Rol Cont";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_cont"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_cont"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["globla_rol_ct"] = "Globla Rol Ct";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["globla_rol_ct"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["globla_rol_ct"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_procjur"] = "Global Rol Procjur";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_procjur"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_procjur"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_comacc"] = "Global Rol Comacc";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_comacc"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_comacc"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_gestion"] = "Global Rol Gestion";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_gestion"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_gestion"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_ciudadano"] = "Global Rol Ciudadano";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_ciudadano"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_ciudadano"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["global_rol_ciudadano_dep"] = "Global Rol Ciudadano Dep";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["global_rol_ciudadano_dep"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["global_rol_ciudadano_dep"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["sys_user"] = "Usuario";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["sys_user"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["sys_user"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["sys_date"] = "Fecha";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["sys_date"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["sys_date"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["sys_time"] = "Hora";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["sys_time"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["sys_time"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["sys_ntries_usr"] = "Sys Ntries Usr";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["sys_ntries_usr"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["sys_ntries_usr"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["sys_registrationdate_usr"] = "Sys Registrationdate Usr";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["sys_registrationdate_usr"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["sys_registrationdate_usr"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["sys_expiration_usr"] = "Sys Expiration Usr";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["sys_expiration_usr"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["sys_expiration_usr"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["sys_disabledate_usr"] = "Sys Disabledate Usr";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["sys_disabledate_usr"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["sys_disabledate_usr"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["sys_upd_fecha"] = "Sys Upd Fecha";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["sys_upd_fecha"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["sys_upd_fecha"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["sys_upd_user"] = "Sys Upd User";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["sys_upd_user"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["sys_upd_user"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["sys_upd_time"] = "Sys Upd Time";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["sys_upd_time"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["sys_upd_time"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["sys_update_info"] = "Sys Update Info";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["sys_update_info"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["sys_update_info"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["sys_update_family_info"] = "Sys Update Family Info";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["sys_update_family_info"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["sys_update_family_info"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_update_almacen"] = "Usr Update Almacen";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_update_almacen"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_update_almacen"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["sys_anio"] = "Sys Anio";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["sys_anio"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["sys_anio"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["ctrl"] = "Ctrl";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["ctrl"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["ctrl"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_dep"] = "Dependencia";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_dep"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_dep"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_cargo"] = "Cargo";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_cargo"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_cargo"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_regpago"] = "Usr Regpago";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_regpago"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_regpago"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_extension"] = "Extensión";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_extension"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_extension"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_piso"] = "Usr Piso";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_piso"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_piso"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_datebirth"] = "Fecha de nacimiento";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_datebirth"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_datebirth"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["ctrl_pedidoalmacen"] = "Ctrl Pedidoalmacen";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["ctrl_pedidoalmacen"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["ctrl_pedidoalmacen"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["ctrl_contacto"] = "Ctrl Contacto";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["ctrl_contacto"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["ctrl_contacto"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["usr_emergencia"] = "Usr Emergencia";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["usr_emergencia"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["usr_emergencia"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["upd_date"] = "Upd Date";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["upd_date"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["upd_date"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["active"] = "Estado";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["active"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["active"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["groupid"] = "Grupo";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["groupid"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["groupid"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["habilita_almacen"] = "Habilita Almacen";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["habilita_almacen"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["habilita_almacen"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["estado_vinculacion_mincit"] = "Estado Vinculacion Mincit";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["estado_vinculacion_mincit"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["estado_vinculacion_mincit"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["phone"] = "Celular";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["phone"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["phone"] = "";
	$fieldLabelsglobal_users_contratistas["Spanish"]["phone1"] = "Celular 2";
	$fieldToolTipsglobal_users_contratistas["Spanish"]["phone1"] = "";
	$placeHoldersglobal_users_contratistas["Spanish"]["phone1"] = "";
	if (count($fieldToolTipsglobal_users_contratistas["Spanish"]))
		$tdataglobal_users_contratistas[".isUseToolTips"] = true;
}


	$tdataglobal_users_contratistas[".NCSearch"] = true;



$tdataglobal_users_contratistas[".shortTableName"] = "global_users_contratistas";
$tdataglobal_users_contratistas[".nSecOptions"] = 0;

$tdataglobal_users_contratistas[".mainTableOwnerID"] = "";
$tdataglobal_users_contratistas[".entityType"] = 1;
$tdataglobal_users_contratistas[".connId"] = "dbusers_at_localhost";


$tdataglobal_users_contratistas[".strOriginalTableName"] = "global_users";

	



$tdataglobal_users_contratistas[".showAddInPopup"] = false;

$tdataglobal_users_contratistas[".showEditInPopup"] = false;

$tdataglobal_users_contratistas[".showViewInPopup"] = false;

$tdataglobal_users_contratistas[".listAjax"] = false;
//	temporary
//$tdataglobal_users_contratistas[".listAjax"] = false;

	$tdataglobal_users_contratistas[".audit"] = true;

	$tdataglobal_users_contratistas[".locking"] = true;


$pages = $tdataglobal_users_contratistas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_users_contratistas[".edit"] = true;
	$tdataglobal_users_contratistas[".afterEditAction"] = 1;
	$tdataglobal_users_contratistas[".closePopupAfterEdit"] = 1;
	$tdataglobal_users_contratistas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_users_contratistas[".add"] = true;
$tdataglobal_users_contratistas[".afterAddAction"] = 1;
$tdataglobal_users_contratistas[".closePopupAfterAdd"] = 1;
$tdataglobal_users_contratistas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_users_contratistas[".list"] = true;
}



$tdataglobal_users_contratistas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_users_contratistas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_users_contratistas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_users_contratistas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_users_contratistas[".printFriendly"] = true;
}



$tdataglobal_users_contratistas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_users_contratistas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_users_contratistas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_users_contratistas[".isUseAjaxSuggest"] = true;





$tdataglobal_users_contratistas[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_users_contratistas[".buttonsAdded"] = false;

$tdataglobal_users_contratistas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_users_contratistas[".isUseTimeForSearch"] = false;


$tdataglobal_users_contratistas[".badgeColor"] = "2F4F4F";


$tdataglobal_users_contratistas[".allSearchFields"] = array();
$tdataglobal_users_contratistas[".filterFields"] = array();
$tdataglobal_users_contratistas[".requiredSearchFields"] = array();

$tdataglobal_users_contratistas[".googleLikeFields"] = array();
$tdataglobal_users_contratistas[".googleLikeFields"][] = "idusrglobal";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "id_fk";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "Username";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "Password";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_email";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_name";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_lname";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_nombresfull";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_personalid";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_inicial";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_sessini";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_image";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_status_nomina";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_status";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_rdnkey";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_type_vinc";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_type_vinculacion";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_status_sol";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_dependencia";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "user_dep";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_entidad";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_not";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_not_msj";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_jefe";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_minequipo_lider";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_minequipo_grupo";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_me";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_gh";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_almacen";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_ci";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_contratos";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_hojar";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_inmuebles";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_siis";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_cpanel";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_dashboard";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_zf";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_sipi";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_cej";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_jc3";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_th";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_sid";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_cont";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "globla_rol_ct";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_procjur";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_comacc";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_gestion";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_ciudadano";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "global_rol_ciudadano_dep";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "sys_user";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "sys_date";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "sys_time";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "sys_ntries_usr";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "sys_registrationdate_usr";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "sys_expiration_usr";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "sys_disabledate_usr";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "sys_upd_fecha";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "sys_upd_user";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "sys_upd_time";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "sys_update_info";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "sys_update_family_info";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_update_almacen";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "sys_anio";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "ctrl";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_dep";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_cargo";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_regpago";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_extension";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_piso";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_datebirth";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "ctrl_pedidoalmacen";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "ctrl_contacto";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "usr_emergencia";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "upd_date";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "active";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "groupid";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "habilita_almacen";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "estado_vinculacion_mincit";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "phone";
$tdataglobal_users_contratistas[".googleLikeFields"][] = "phone1";



$tdataglobal_users_contratistas[".tableType"] = "list";

$tdataglobal_users_contratistas[".printerPageOrientation"] = 0;
$tdataglobal_users_contratistas[".nPrinterPageScale"] = 100;

$tdataglobal_users_contratistas[".nPrinterSplitRecords"] = 40;

$tdataglobal_users_contratistas[".geocodingEnabled"] = false;










$tdataglobal_users_contratistas[".pageSize"] = 20;

$tdataglobal_users_contratistas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_users_contratistas[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_users_contratistas[".orderindexes"] = array();


$tdataglobal_users_contratistas[".sqlHead"] = "SELECT idusrglobal, id_fk, Username, Password, usr_email, usr_name, usr_lname, usr_nombresfull, usr_personalid, usr_inicial, usr_sessini, usr_image, usr_status_nomina, usr_status, usr_rdnkey, usr_type_vinc, usr_type_vinculacion, usr_status_sol, usr_dependencia, user_dep, usr_entidad, usr_not, usr_not_msj, usr_jefe, usr_minequipo_lider, usr_minequipo_grupo, global_rol_me, global_rol_gh, global_rol_almacen, global_rol_ci, global_rol_contratos, global_rol_hojar, global_rol_inmuebles, global_rol_siis, global_rol_cpanel, global_rol_dashboard, global_rol_zf, global_rol_sipi, global_rol_cej, global_rol_jc3, global_rol_th, global_rol_sid, global_rol, global_rol_cont, globla_rol_ct, global_rol_procjur, global_rol_comacc, global_rol_gestion, global_rol_ciudadano, global_rol_ciudadano_dep, sys_user, sys_date, sys_time, sys_ntries_usr, sys_registrationdate_usr, sys_expiration_usr, sys_disabledate_usr, sys_upd_fecha, sys_upd_user, sys_upd_time, sys_update_info, sys_update_family_info, usr_update_almacen, sys_anio, ctrl, usr_dep, usr_cargo, usr_regpago, usr_extension, usr_piso, usr_datebirth, ctrl_pedidoalmacen, ctrl_contacto, usr_emergencia, upd_date, active, groupid, habilita_almacen, estado_vinculacion_mincit, phone, phone1";
$tdataglobal_users_contratistas[".sqlFrom"] = "FROM global_users";
$tdataglobal_users_contratistas[".sqlWhereExpr"] = "(usr_type_vinc = 2)";
$tdataglobal_users_contratistas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_users_contratistas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_users_contratistas[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_users_contratistas[".highlightSearchResults"] = true;

$tableKeysglobal_users_contratistas = array();
$tableKeysglobal_users_contratistas[] = "idusrglobal";
$tdataglobal_users_contratistas[".Keys"] = $tableKeysglobal_users_contratistas;


$tdataglobal_users_contratistas[".hideMobileList"] = array();




//	idusrglobal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idusrglobal";
	$fdata["GoodName"] = "idusrglobal";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","idusrglobal");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idusrglobal";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idusrglobal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["idusrglobal"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "idusrglobal";
//	id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_fk";
	$fdata["GoodName"] = "id_fk";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_fk";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["id_fk"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "id_fk";
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","Username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Username";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Username";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["Username"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "Username";
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","Password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Password";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Password";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=35";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["Password"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "Password";
//	usr_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usr_email";
	$fdata["GoodName"] = "usr_email";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_email";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_email"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_email";
//	usr_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "usr_name";
	$fdata["GoodName"] = "usr_name";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_name"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_name";
//	usr_lname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "usr_lname";
	$fdata["GoodName"] = "usr_lname";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_lname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_lname";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_lname";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_lname"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_lname";
//	usr_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "usr_nombresfull";
	$fdata["GoodName"] = "usr_nombresfull";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_nombresfull");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_nombresfull";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_nombresfull";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_nombresfull"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_nombresfull";
//	usr_personalid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "usr_personalid";
	$fdata["GoodName"] = "usr_personalid";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_personalid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_personalid";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_personalid";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contractor_master";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"id_fk", 'lookupF'=>"contractor_id");
	$edata["autoCompleteFields"][] = array('masterF'=>"usr_email", 'lookupF'=>"contractor_email_mincit");
	$edata["autoCompleteFields"][] = array('masterF'=>"usr_name", 'lookupF'=>"contractor_name");
	$edata["autoCompleteFields"][] = array('masterF'=>"usr_lname", 'lookupF'=>"contractor_lname");
	$edata["autoCompleteFields"][] = array('masterF'=>"usr_nombresfull", 'lookupF'=>"contractor_nombresfull");
	$edata["autoCompleteFields"][] = array('masterF'=>"usr_dep", 'lookupF'=>"contractor_dependencia");
	$edata["autoCompleteFields"][] = array('masterF'=>"usr_datebirth", 'lookupF'=>"ct_fecha_nacimiento");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "contractor_doc_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "contractor_doc_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Documento %value% ya se encuentra registrado!", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_personalid"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_personalid";
//	usr_inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "usr_inicial";
	$fdata["GoodName"] = "usr_inicial";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_inicial");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_inicial";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_inicial";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=2";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_inicial"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_inicial";
//	usr_sessini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "usr_sessini";
	$fdata["GoodName"] = "usr_sessini";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_sessini");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "usr_sessini";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_sessini";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_sessini"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_sessini";
//	usr_image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "usr_image";
	$fdata["GoodName"] = "usr_image";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_image");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_image";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_image";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_image"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_image";
//	usr_status_nomina
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "usr_status_nomina";
	$fdata["GoodName"] = "usr_status_nomina";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_status_nomina");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usr_status_nomina";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_status_nomina";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_status_nomina"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_status_nomina";
//	usr_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "usr_status";
	$fdata["GoodName"] = "usr_status";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_status");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "usr_status";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_status"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_status";
//	usr_rdnkey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "usr_rdnkey";
	$fdata["GoodName"] = "usr_rdnkey";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_rdnkey");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_rdnkey";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_rdnkey";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_rdnkey"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_rdnkey";
//	usr_type_vinc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "usr_type_vinc";
	$fdata["GoodName"] = "usr_type_vinc";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_type_vinc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_type_vinc";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_type_vinc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_type_vinc"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_type_vinc";
//	usr_type_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "usr_type_vinculacion";
	$fdata["GoodName"] = "usr_type_vinculacion";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_type_vinculacion");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "usr_type_vinculacion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_type_vinculacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_type_vinculacion"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_type_vinculacion";
//	usr_status_sol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "usr_status_sol";
	$fdata["GoodName"] = "usr_status_sol";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_status_sol");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "usr_status_sol";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_status_sol";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_status_sol"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_status_sol";
//	usr_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "usr_dependencia";
	$fdata["GoodName"] = "usr_dependencia";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_dependencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_dependencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_dependencia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=3";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_dependencia"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_dependencia";
//	user_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "user_dep";
	$fdata["GoodName"] = "user_dep";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","user_dep");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "user_dep";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_dep";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["user_dep"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "user_dep";
//	usr_entidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "usr_entidad";
	$fdata["GoodName"] = "usr_entidad";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_entidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usr_entidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_entidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_entidad"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_entidad";
//	usr_not
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "usr_not";
	$fdata["GoodName"] = "usr_not";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_not");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "usr_not";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_not";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_not"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_not";
//	usr_not_msj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "usr_not_msj";
	$fdata["GoodName"] = "usr_not_msj";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_not_msj");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "usr_not_msj";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_not_msj";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_not_msj"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_not_msj";
//	usr_jefe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "usr_jefe";
	$fdata["GoodName"] = "usr_jefe";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_jefe");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usr_jefe";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_jefe";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_jefe"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_jefe";
//	usr_minequipo_lider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "usr_minequipo_lider";
	$fdata["GoodName"] = "usr_minequipo_lider";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_minequipo_lider");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "usr_minequipo_lider";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_minequipo_lider";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_minequipo_lider"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_minequipo_lider";
//	usr_minequipo_grupo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "usr_minequipo_grupo";
	$fdata["GoodName"] = "usr_minequipo_grupo";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_minequipo_grupo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usr_minequipo_grupo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_minequipo_grupo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_minequipo_grupo"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_minequipo_grupo";
//	global_rol_me
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "global_rol_me";
	$fdata["GoodName"] = "global_rol_me";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_me");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_me";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_me";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_me"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_me";
//	global_rol_gh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "global_rol_gh";
	$fdata["GoodName"] = "global_rol_gh";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_gh");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_gh";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_gh";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_gh"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_gh";
//	global_rol_almacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "global_rol_almacen";
	$fdata["GoodName"] = "global_rol_almacen";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_almacen");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_almacen";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_almacen";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "global_rol_almacen";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "rol_name";

	

	
	$edata["LookupOrderBy"] = "rol_name";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_almacen"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_almacen";
//	global_rol_ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "global_rol_ci";
	$fdata["GoodName"] = "global_rol_ci";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_ci");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_ci";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_ci";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_ci"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_ci";
//	global_rol_contratos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "global_rol_contratos";
	$fdata["GoodName"] = "global_rol_contratos";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_contratos");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_contratos";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_contratos";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "global_rol_c";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_rol";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "rol_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_contratos"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_contratos";
//	global_rol_hojar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "global_rol_hojar";
	$fdata["GoodName"] = "global_rol_hojar";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_hojar");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_hojar";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_hojar";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_hojar"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_hojar";
//	global_rol_inmuebles
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "global_rol_inmuebles";
	$fdata["GoodName"] = "global_rol_inmuebles";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_inmuebles");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_inmuebles";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_inmuebles";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_inmuebles"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_inmuebles";
//	global_rol_siis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "global_rol_siis";
	$fdata["GoodName"] = "global_rol_siis";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_siis");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_siis";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_siis";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_siis"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_siis";
//	global_rol_cpanel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "global_rol_cpanel";
	$fdata["GoodName"] = "global_rol_cpanel";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_cpanel");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_cpanel";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_cpanel";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_cpanel"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_cpanel";
//	global_rol_dashboard
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "global_rol_dashboard";
	$fdata["GoodName"] = "global_rol_dashboard";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_dashboard");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_dashboard";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_dashboard";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_dashboard"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_dashboard";
//	global_rol_zf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "global_rol_zf";
	$fdata["GoodName"] = "global_rol_zf";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_zf");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_zf";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_zf";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_zf"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_zf";
//	global_rol_sipi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "global_rol_sipi";
	$fdata["GoodName"] = "global_rol_sipi";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_sipi");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_sipi";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_sipi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_sipi"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_sipi";
//	global_rol_cej
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "global_rol_cej";
	$fdata["GoodName"] = "global_rol_cej";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_cej");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_cej";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_cej";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_cej"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_cej";
//	global_rol_jc3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "global_rol_jc3";
	$fdata["GoodName"] = "global_rol_jc3";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_jc3");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_jc3";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_jc3";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_jc3"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_jc3";
//	global_rol_th
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "global_rol_th";
	$fdata["GoodName"] = "global_rol_th";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_th");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_th";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_th";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_th"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_th";
//	global_rol_sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "global_rol_sid";
	$fdata["GoodName"] = "global_rol_sid";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_sid");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_sid";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_sid";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_sid"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_sid";
//	global_rol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "global_rol";
	$fdata["GoodName"] = "global_rol";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol";
//	global_rol_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "global_rol_cont";
	$fdata["GoodName"] = "global_rol_cont";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_cont");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "global_rol_cont";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_cont";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=2";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_cont"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_cont";
//	globla_rol_ct
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "globla_rol_ct";
	$fdata["GoodName"] = "globla_rol_ct";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","globla_rol_ct");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "globla_rol_ct";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "globla_rol_ct";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["globla_rol_ct"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "globla_rol_ct";
//	global_rol_procjur
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "global_rol_procjur";
	$fdata["GoodName"] = "global_rol_procjur";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_procjur");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_procjur";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_procjur";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_procjur"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_procjur";
//	global_rol_comacc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "global_rol_comacc";
	$fdata["GoodName"] = "global_rol_comacc";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_comacc");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_comacc";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_comacc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_comacc"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_comacc";
//	global_rol_gestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "global_rol_gestion";
	$fdata["GoodName"] = "global_rol_gestion";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_gestion");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_gestion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_gestion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_gestion"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_gestion";
//	global_rol_ciudadano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "global_rol_ciudadano";
	$fdata["GoodName"] = "global_rol_ciudadano";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_ciudadano");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_ciudadano";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_ciudadano";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_ciudadano"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_ciudadano";
//	global_rol_ciudadano_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "global_rol_ciudadano_dep";
	$fdata["GoodName"] = "global_rol_ciudadano_dep";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","global_rol_ciudadano_dep");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "global_rol_ciudadano_dep";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "global_rol_ciudadano_dep";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["global_rol_ciudadano_dep"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "global_rol_ciudadano_dep";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["sys_user"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "sys_user";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","sys_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "sys_date";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["sys_date"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "sys_date";
//	sys_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "sys_time";
	$fdata["GoodName"] = "sys_time";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","sys_time");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "sys_time";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["sys_time"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "sys_time";
//	sys_ntries_usr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "sys_ntries_usr";
	$fdata["GoodName"] = "sys_ntries_usr";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","sys_ntries_usr");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sys_ntries_usr";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_ntries_usr";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["sys_ntries_usr"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "sys_ntries_usr";
//	sys_registrationdate_usr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "sys_registrationdate_usr";
	$fdata["GoodName"] = "sys_registrationdate_usr";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","sys_registrationdate_usr");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "sys_registrationdate_usr";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_registrationdate_usr";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["sys_registrationdate_usr"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "sys_registrationdate_usr";
//	sys_expiration_usr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "sys_expiration_usr";
	$fdata["GoodName"] = "sys_expiration_usr";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","sys_expiration_usr");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sys_expiration_usr";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_expiration_usr";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["sys_expiration_usr"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "sys_expiration_usr";
//	sys_disabledate_usr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "sys_disabledate_usr";
	$fdata["GoodName"] = "sys_disabledate_usr";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","sys_disabledate_usr");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_disabledate_usr";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_disabledate_usr";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["sys_disabledate_usr"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "sys_disabledate_usr";
//	sys_upd_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "sys_upd_fecha";
	$fdata["GoodName"] = "sys_upd_fecha";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","sys_upd_fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "sys_upd_fecha";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_upd_fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["sys_upd_fecha"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "sys_upd_fecha";
//	sys_upd_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "sys_upd_user";
	$fdata["GoodName"] = "sys_upd_user";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","sys_upd_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_upd_user";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_upd_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=60";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["sys_upd_user"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "sys_upd_user";
//	sys_upd_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "sys_upd_time";
	$fdata["GoodName"] = "sys_upd_time";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","sys_upd_time");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "sys_upd_time";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_upd_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["sys_upd_time"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "sys_upd_time";
//	sys_update_info
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "sys_update_info";
	$fdata["GoodName"] = "sys_update_info";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","sys_update_info");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sys_update_info";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_update_info";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["sys_update_info"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "sys_update_info";
//	sys_update_family_info
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "sys_update_family_info";
	$fdata["GoodName"] = "sys_update_family_info";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","sys_update_family_info");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sys_update_family_info";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_update_family_info";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["sys_update_family_info"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "sys_update_family_info";
//	usr_update_almacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "usr_update_almacen";
	$fdata["GoodName"] = "usr_update_almacen";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_update_almacen");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "usr_update_almacen";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_update_almacen";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_update_almacen"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_update_almacen";
//	sys_anio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "sys_anio";
	$fdata["GoodName"] = "sys_anio";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","sys_anio");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "sys_anio";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_anio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["sys_anio"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "sys_anio";
//	ctrl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "ctrl";
	$fdata["GoodName"] = "ctrl";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","ctrl");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ctrl";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ctrl";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["ctrl"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "ctrl";
//	usr_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "usr_dep";
	$fdata["GoodName"] = "usr_dep";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_dep");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usr_dep";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_dep";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_dep"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_dep";
//	usr_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "usr_cargo";
	$fdata["GoodName"] = "usr_cargo";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_cargo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usr_cargo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_cargo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cargo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_cargo"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_cargo";
//	usr_regpago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "usr_regpago";
	$fdata["GoodName"] = "usr_regpago";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_regpago");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "usr_regpago";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_regpago";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_regpago"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_regpago";
//	usr_extension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "usr_extension";
	$fdata["GoodName"] = "usr_extension";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_extension");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_extension";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_extension";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=16";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_extension"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_extension";
//	usr_piso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "usr_piso";
	$fdata["GoodName"] = "usr_piso";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_piso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_piso";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_piso";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_piso"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_piso";
//	usr_datebirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "usr_datebirth";
	$fdata["GoodName"] = "usr_datebirth";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_datebirth");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "usr_datebirth";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_datebirth";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 0;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_datebirth"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_datebirth";
//	ctrl_pedidoalmacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "ctrl_pedidoalmacen";
	$fdata["GoodName"] = "ctrl_pedidoalmacen";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","ctrl_pedidoalmacen");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ctrl_pedidoalmacen";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ctrl_pedidoalmacen";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["ctrl_pedidoalmacen"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "ctrl_pedidoalmacen";
//	ctrl_contacto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "ctrl_contacto";
	$fdata["GoodName"] = "ctrl_contacto";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","ctrl_contacto");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ctrl_contacto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ctrl_contacto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["ctrl_contacto"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "ctrl_contacto";
//	usr_emergencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "usr_emergencia";
	$fdata["GoodName"] = "usr_emergencia";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","usr_emergencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_emergencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_emergencia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["usr_emergencia"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "usr_emergencia";
//	upd_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "upd_date";
	$fdata["GoodName"] = "upd_date";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","upd_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "upd_date";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "upd_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["upd_date"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "upd_date";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","active");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "active";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["active"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "active";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","groupid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "groupid";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["groupid"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "groupid";
//	habilita_almacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "habilita_almacen";
	$fdata["GoodName"] = "habilita_almacen";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","habilita_almacen");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "habilita_almacen";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "habilita_almacen";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["habilita_almacen"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "habilita_almacen";
//	estado_vinculacion_mincit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "estado_vinculacion_mincit";
	$fdata["GoodName"] = "estado_vinculacion_mincit";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","estado_vinculacion_mincit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado_vinculacion_mincit";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_vinculacion_mincit";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["estado_vinculacion_mincit"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "estado_vinculacion_mincit";
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "phone";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["phone"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "phone";
//	phone1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "phone1";
	$fdata["GoodName"] = "phone1";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_contratistas","phone1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "phone1";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone1";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_users_contratistas["phone1"] = $fdata;
		$tdataglobal_users_contratistas[".searchableFields"][] = "phone1";


$tables_data["global_users_contratistas"]=&$tdataglobal_users_contratistas;
$field_labels["global_users_contratistas"] = &$fieldLabelsglobal_users_contratistas;
$fieldToolTips["global_users_contratistas"] = &$fieldToolTipsglobal_users_contratistas;
$placeHolders["global_users_contratistas"] = &$placeHoldersglobal_users_contratistas;
$page_titles["global_users_contratistas"] = &$pageTitlesglobal_users_contratistas;


changeTextControlsToDate( "global_users_contratistas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_users_contratistas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_users_contratistas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_users_contratistas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idusrglobal, id_fk, Username, Password, usr_email, usr_name, usr_lname, usr_nombresfull, usr_personalid, usr_inicial, usr_sessini, usr_image, usr_status_nomina, usr_status, usr_rdnkey, usr_type_vinc, usr_type_vinculacion, usr_status_sol, usr_dependencia, user_dep, usr_entidad, usr_not, usr_not_msj, usr_jefe, usr_minequipo_lider, usr_minequipo_grupo, global_rol_me, global_rol_gh, global_rol_almacen, global_rol_ci, global_rol_contratos, global_rol_hojar, global_rol_inmuebles, global_rol_siis, global_rol_cpanel, global_rol_dashboard, global_rol_zf, global_rol_sipi, global_rol_cej, global_rol_jc3, global_rol_th, global_rol_sid, global_rol, global_rol_cont, globla_rol_ct, global_rol_procjur, global_rol_comacc, global_rol_gestion, global_rol_ciudadano, global_rol_ciudadano_dep, sys_user, sys_date, sys_time, sys_ntries_usr, sys_registrationdate_usr, sys_expiration_usr, sys_disabledate_usr, sys_upd_fecha, sys_upd_user, sys_upd_time, sys_update_info, sys_update_family_info, usr_update_almacen, sys_anio, ctrl, usr_dep, usr_cargo, usr_regpago, usr_extension, usr_piso, usr_datebirth, ctrl_pedidoalmacen, ctrl_contacto, usr_emergencia, upd_date, active, groupid, habilita_almacen, estado_vinculacion_mincit, phone, phone1";
$proto0["m_strFrom"] = "FROM global_users";
$proto0["m_strWhere"] = "(usr_type_vinc = 2)";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "usr_type_vinc = 2";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usr_type_vinc",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 2";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "idusrglobal",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto6["m_sql"] = "idusrglobal";
$proto6["m_srcTableName"] = "global_users_contratistas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_fk",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto8["m_sql"] = "id_fk";
$proto8["m_srcTableName"] = "global_users_contratistas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto10["m_sql"] = "Username";
$proto10["m_srcTableName"] = "global_users_contratistas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto12["m_sql"] = "Password";
$proto12["m_srcTableName"] = "global_users_contratistas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_email",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto14["m_sql"] = "usr_email";
$proto14["m_srcTableName"] = "global_users_contratistas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_name",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto16["m_sql"] = "usr_name";
$proto16["m_srcTableName"] = "global_users_contratistas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_lname",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto18["m_sql"] = "usr_lname";
$proto18["m_srcTableName"] = "global_users_contratistas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_nombresfull",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto20["m_sql"] = "usr_nombresfull";
$proto20["m_srcTableName"] = "global_users_contratistas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_personalid",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto22["m_sql"] = "usr_personalid";
$proto22["m_srcTableName"] = "global_users_contratistas";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_inicial",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto24["m_sql"] = "usr_inicial";
$proto24["m_srcTableName"] = "global_users_contratistas";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_sessini",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto26["m_sql"] = "usr_sessini";
$proto26["m_srcTableName"] = "global_users_contratistas";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_image",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto28["m_sql"] = "usr_image";
$proto28["m_srcTableName"] = "global_users_contratistas";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_status_nomina",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto30["m_sql"] = "usr_status_nomina";
$proto30["m_srcTableName"] = "global_users_contratistas";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_status",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto32["m_sql"] = "usr_status";
$proto32["m_srcTableName"] = "global_users_contratistas";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_rdnkey",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto34["m_sql"] = "usr_rdnkey";
$proto34["m_srcTableName"] = "global_users_contratistas";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_type_vinc",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto36["m_sql"] = "usr_type_vinc";
$proto36["m_srcTableName"] = "global_users_contratistas";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_type_vinculacion",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto38["m_sql"] = "usr_type_vinculacion";
$proto38["m_srcTableName"] = "global_users_contratistas";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_status_sol",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto40["m_sql"] = "usr_status_sol";
$proto40["m_srcTableName"] = "global_users_contratistas";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_dependencia",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto42["m_sql"] = "usr_dependencia";
$proto42["m_srcTableName"] = "global_users_contratistas";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "user_dep",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto44["m_sql"] = "user_dep";
$proto44["m_srcTableName"] = "global_users_contratistas";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_entidad",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto46["m_sql"] = "usr_entidad";
$proto46["m_srcTableName"] = "global_users_contratistas";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_not",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto48["m_sql"] = "usr_not";
$proto48["m_srcTableName"] = "global_users_contratistas";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_not_msj",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto50["m_sql"] = "usr_not_msj";
$proto50["m_srcTableName"] = "global_users_contratistas";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_jefe",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto52["m_sql"] = "usr_jefe";
$proto52["m_srcTableName"] = "global_users_contratistas";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_minequipo_lider",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto54["m_sql"] = "usr_minequipo_lider";
$proto54["m_srcTableName"] = "global_users_contratistas";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_minequipo_grupo",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto56["m_sql"] = "usr_minequipo_grupo";
$proto56["m_srcTableName"] = "global_users_contratistas";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_me",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto58["m_sql"] = "global_rol_me";
$proto58["m_srcTableName"] = "global_users_contratistas";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_gh",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto60["m_sql"] = "global_rol_gh";
$proto60["m_srcTableName"] = "global_users_contratistas";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_almacen",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto62["m_sql"] = "global_rol_almacen";
$proto62["m_srcTableName"] = "global_users_contratistas";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_ci",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto64["m_sql"] = "global_rol_ci";
$proto64["m_srcTableName"] = "global_users_contratistas";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_contratos",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto66["m_sql"] = "global_rol_contratos";
$proto66["m_srcTableName"] = "global_users_contratistas";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_hojar",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto68["m_sql"] = "global_rol_hojar";
$proto68["m_srcTableName"] = "global_users_contratistas";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_inmuebles",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto70["m_sql"] = "global_rol_inmuebles";
$proto70["m_srcTableName"] = "global_users_contratistas";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_siis",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto72["m_sql"] = "global_rol_siis";
$proto72["m_srcTableName"] = "global_users_contratistas";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_cpanel",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto74["m_sql"] = "global_rol_cpanel";
$proto74["m_srcTableName"] = "global_users_contratistas";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_dashboard",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto76["m_sql"] = "global_rol_dashboard";
$proto76["m_srcTableName"] = "global_users_contratistas";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_zf",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto78["m_sql"] = "global_rol_zf";
$proto78["m_srcTableName"] = "global_users_contratistas";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_sipi",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto80["m_sql"] = "global_rol_sipi";
$proto80["m_srcTableName"] = "global_users_contratistas";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_cej",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto82["m_sql"] = "global_rol_cej";
$proto82["m_srcTableName"] = "global_users_contratistas";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_jc3",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto84["m_sql"] = "global_rol_jc3";
$proto84["m_srcTableName"] = "global_users_contratistas";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_th",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto86["m_sql"] = "global_rol_th";
$proto86["m_srcTableName"] = "global_users_contratistas";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_sid",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto88["m_sql"] = "global_rol_sid";
$proto88["m_srcTableName"] = "global_users_contratistas";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto90["m_sql"] = "global_rol";
$proto90["m_srcTableName"] = "global_users_contratistas";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_cont",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto92["m_sql"] = "global_rol_cont";
$proto92["m_srcTableName"] = "global_users_contratistas";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "globla_rol_ct",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto94["m_sql"] = "globla_rol_ct";
$proto94["m_srcTableName"] = "global_users_contratistas";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_procjur",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto96["m_sql"] = "global_rol_procjur";
$proto96["m_srcTableName"] = "global_users_contratistas";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_comacc",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto98["m_sql"] = "global_rol_comacc";
$proto98["m_srcTableName"] = "global_users_contratistas";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_gestion",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto100["m_sql"] = "global_rol_gestion";
$proto100["m_srcTableName"] = "global_users_contratistas";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_ciudadano",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto102["m_sql"] = "global_rol_ciudadano";
$proto102["m_srcTableName"] = "global_users_contratistas";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_ciudadano_dep",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto104["m_sql"] = "global_rol_ciudadano_dep";
$proto104["m_srcTableName"] = "global_users_contratistas";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto106["m_sql"] = "sys_user";
$proto106["m_srcTableName"] = "global_users_contratistas";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto108["m_sql"] = "sys_date";
$proto108["m_srcTableName"] = "global_users_contratistas";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_time",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto110["m_sql"] = "sys_time";
$proto110["m_srcTableName"] = "global_users_contratistas";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_ntries_usr",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto112["m_sql"] = "sys_ntries_usr";
$proto112["m_srcTableName"] = "global_users_contratistas";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_registrationdate_usr",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto114["m_sql"] = "sys_registrationdate_usr";
$proto114["m_srcTableName"] = "global_users_contratistas";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_expiration_usr",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto116["m_sql"] = "sys_expiration_usr";
$proto116["m_srcTableName"] = "global_users_contratistas";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_disabledate_usr",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto118["m_sql"] = "sys_disabledate_usr";
$proto118["m_srcTableName"] = "global_users_contratistas";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_upd_fecha",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto120["m_sql"] = "sys_upd_fecha";
$proto120["m_srcTableName"] = "global_users_contratistas";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_upd_user",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto122["m_sql"] = "sys_upd_user";
$proto122["m_srcTableName"] = "global_users_contratistas";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_upd_time",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto124["m_sql"] = "sys_upd_time";
$proto124["m_srcTableName"] = "global_users_contratistas";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_update_info",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto126["m_sql"] = "sys_update_info";
$proto126["m_srcTableName"] = "global_users_contratistas";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_update_family_info",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto128["m_sql"] = "sys_update_family_info";
$proto128["m_srcTableName"] = "global_users_contratistas";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_update_almacen",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto130["m_sql"] = "usr_update_almacen";
$proto130["m_srcTableName"] = "global_users_contratistas";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_anio",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto132["m_sql"] = "sys_anio";
$proto132["m_srcTableName"] = "global_users_contratistas";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "ctrl",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto134["m_sql"] = "ctrl";
$proto134["m_srcTableName"] = "global_users_contratistas";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_dep",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto136["m_sql"] = "usr_dep";
$proto136["m_srcTableName"] = "global_users_contratistas";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_cargo",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto138["m_sql"] = "usr_cargo";
$proto138["m_srcTableName"] = "global_users_contratistas";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_regpago",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto140["m_sql"] = "usr_regpago";
$proto140["m_srcTableName"] = "global_users_contratistas";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_extension",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto142["m_sql"] = "usr_extension";
$proto142["m_srcTableName"] = "global_users_contratistas";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_piso",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto144["m_sql"] = "usr_piso";
$proto144["m_srcTableName"] = "global_users_contratistas";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_datebirth",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto146["m_sql"] = "usr_datebirth";
$proto146["m_srcTableName"] = "global_users_contratistas";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "ctrl_pedidoalmacen",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto148["m_sql"] = "ctrl_pedidoalmacen";
$proto148["m_srcTableName"] = "global_users_contratistas";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "ctrl_contacto",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto150["m_sql"] = "ctrl_contacto";
$proto150["m_srcTableName"] = "global_users_contratistas";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_emergencia",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto152["m_sql"] = "usr_emergencia";
$proto152["m_srcTableName"] = "global_users_contratistas";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "upd_date",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto154["m_sql"] = "upd_date";
$proto154["m_srcTableName"] = "global_users_contratistas";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto156["m_sql"] = "active";
$proto156["m_srcTableName"] = "global_users_contratistas";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto158["m_sql"] = "groupid";
$proto158["m_srcTableName"] = "global_users_contratistas";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "habilita_almacen",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto160["m_sql"] = "habilita_almacen";
$proto160["m_srcTableName"] = "global_users_contratistas";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_vinculacion_mincit",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto162["m_sql"] = "estado_vinculacion_mincit";
$proto162["m_srcTableName"] = "global_users_contratistas";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto164["m_sql"] = "phone";
$proto164["m_srcTableName"] = "global_users_contratistas";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "phone1",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_contratistas"
));

$proto166["m_sql"] = "phone1";
$proto166["m_srcTableName"] = "global_users_contratistas";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto168=array();
$proto168["m_link"] = "SQLL_MAIN";
			$proto169=array();
$proto169["m_strName"] = "global_users";
$proto169["m_srcTableName"] = "global_users_contratistas";
$proto169["m_columns"] = array();
$proto169["m_columns"][] = "active";
$proto169["m_columns"][] = "covid_fecha";
$proto169["m_columns"][] = "covid_sn";
$proto169["m_columns"][] = "ctrl";
$proto169["m_columns"][] = "ctrl_contacto";
$proto169["m_columns"][] = "ctrl_pedidoalmacen";
$proto169["m_columns"][] = "estado_vinculacion_mincit";
$proto169["m_columns"][] = "ext_security_id";
$proto169["m_columns"][] = "global_rol";
$proto169["m_columns"][] = "global_rol_almacen";
$proto169["m_columns"][] = "global_rol_cej";
$proto169["m_columns"][] = "global_rol_ci";
$proto169["m_columns"][] = "global_rol_ciudadano";
$proto169["m_columns"][] = "global_rol_ciudadano_dep";
$proto169["m_columns"][] = "global_rol_comacc";
$proto169["m_columns"][] = "global_rol_cont";
$proto169["m_columns"][] = "global_rol_contratos";
$proto169["m_columns"][] = "global_rol_cpanel";
$proto169["m_columns"][] = "global_rol_dashboard";
$proto169["m_columns"][] = "global_rol_gestion";
$proto169["m_columns"][] = "global_rol_gh";
$proto169["m_columns"][] = "global_rol_hojar";
$proto169["m_columns"][] = "global_rol_inmuebles";
$proto169["m_columns"][] = "global_rol_jc3";
$proto169["m_columns"][] = "global_rol_me";
$proto169["m_columns"][] = "global_rol_procjur";
$proto169["m_columns"][] = "global_rol_sid";
$proto169["m_columns"][] = "global_rol_siis";
$proto169["m_columns"][] = "global_rol_sipi";
$proto169["m_columns"][] = "global_rol_th";
$proto169["m_columns"][] = "global_rol_zf";
$proto169["m_columns"][] = "globla_rol_ct";
$proto169["m_columns"][] = "groupid";
$proto169["m_columns"][] = "habilita_almacen";
$proto169["m_columns"][] = "id_fk";
$proto169["m_columns"][] = "idusrglobal";
$proto169["m_columns"][] = "Password";
$proto169["m_columns"][] = "phone";
$proto169["m_columns"][] = "phone1";
$proto169["m_columns"][] = "reset_date";
$proto169["m_columns"][] = "reset_token";
$proto169["m_columns"][] = "sys_anio";
$proto169["m_columns"][] = "sys_date";
$proto169["m_columns"][] = "sys_disabledate_usr";
$proto169["m_columns"][] = "sys_expiration_usr";
$proto169["m_columns"][] = "sys_ntries_usr";
$proto169["m_columns"][] = "sys_registrationdate_usr";
$proto169["m_columns"][] = "sys_time";
$proto169["m_columns"][] = "sys_upd_fecha";
$proto169["m_columns"][] = "sys_upd_time";
$proto169["m_columns"][] = "sys_upd_user";
$proto169["m_columns"][] = "sys_update_family_info";
$proto169["m_columns"][] = "sys_update_info";
$proto169["m_columns"][] = "sys_user";
$proto169["m_columns"][] = "upd_date";
$proto169["m_columns"][] = "user_dep";
$proto169["m_columns"][] = "Username";
$proto169["m_columns"][] = "userpic";
$proto169["m_columns"][] = "usr_cargo";
$proto169["m_columns"][] = "usr_datebirth";
$proto169["m_columns"][] = "usr_dep";
$proto169["m_columns"][] = "usr_dep_sup";
$proto169["m_columns"][] = "usr_dependencia";
$proto169["m_columns"][] = "usr_directivo";
$proto169["m_columns"][] = "usr_edl";
$proto169["m_columns"][] = "usr_email";
$proto169["m_columns"][] = "usr_emergencia";
$proto169["m_columns"][] = "usr_entidad";
$proto169["m_columns"][] = "usr_extension";
$proto169["m_columns"][] = "usr_firma";
$proto169["m_columns"][] = "usr_firma_b";
$proto169["m_columns"][] = "usr_hojaruta";
$proto169["m_columns"][] = "usr_image";
$proto169["m_columns"][] = "usr_inicial";
$proto169["m_columns"][] = "usr_jefe";
$proto169["m_columns"][] = "usr_lname";
$proto169["m_columns"][] = "usr_minequipo_grupo";
$proto169["m_columns"][] = "usr_minequipo_lider";
$proto169["m_columns"][] = "usr_name";
$proto169["m_columns"][] = "usr_nombresfull";
$proto169["m_columns"][] = "usr_not";
$proto169["m_columns"][] = "usr_not_msj";
$proto169["m_columns"][] = "usr_personalid";
$proto169["m_columns"][] = "usr_piso";
$proto169["m_columns"][] = "usr_rdnkey";
$proto169["m_columns"][] = "usr_regpago";
$proto169["m_columns"][] = "usr_sessini";
$proto169["m_columns"][] = "usr_status";
$proto169["m_columns"][] = "usr_status_nomina";
$proto169["m_columns"][] = "usr_status_sol";
$proto169["m_columns"][] = "usr_type_vinc";
$proto169["m_columns"][] = "usr_type_vinculacion";
$proto169["m_columns"][] = "usr_update_almacen";
$proto169["m_columns"][] = "vacuna_a_fecha";
$proto169["m_columns"][] = "vacuna_autoriza";
$proto169["m_columns"][] = "vacuna_autoriza_email";
$proto169["m_columns"][] = "vacuna_b_fecha";
$proto169["m_columns"][] = "vacuna_b_fechaprog";
$proto169["m_columns"][] = "vacuna_c_fecha";
$proto169["m_columns"][] = "vacuna_consentimiento_sn";
$proto169["m_columns"][] = "vacuna_dosis";
$proto169["m_columns"][] = "vacuna_etapa";
$proto169["m_columns"][] = "vacuna_interes";
$proto169["m_columns"][] = "vacuna_nombre";
$proto169["m_columns"][] = "vacuna_obs";
$proto169["m_columns"][] = "vacuna_sn";
$obj = new SQLTable($proto169);

$proto168["m_table"] = $obj;
$proto168["m_sql"] = "global_users";
$proto168["m_alias"] = "";
$proto168["m_srcTableName"] = "global_users_contratistas";
$proto170=array();
$proto170["m_sql"] = "";
$proto170["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto170["m_column"]=$obj;
$proto170["m_contained"] = array();
$proto170["m_strCase"] = "";
$proto170["m_havingmode"] = false;
$proto170["m_inBrackets"] = false;
$proto170["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto170);

$proto168["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto168);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_users_contratistas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_users_contratistas = createSqlQuery_global_users_contratistas();


	
								;

																																																																																	

$tdataglobal_users_contratistas[".sqlquery"] = $queryData_global_users_contratistas;



include_once(getabspath("include/global_users_contratistas_events.php"));
$tdataglobal_users_contratistas[".hasEvents"] = true;

?>