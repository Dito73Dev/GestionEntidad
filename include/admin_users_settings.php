<?php
$tdataadmin_users = array();
$tdataadmin_users[".searchableFields"] = array();
$tdataadmin_users[".ShortName"] = "admin_users";
$tdataadmin_users[".OwnerID"] = "";
$tdataadmin_users[".OriginalTable"] = "global_users";


$tdataadmin_users[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadmin_users[".originalPagesByType"] = $tdataadmin_users[".pagesByType"];
$tdataadmin_users[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadmin_users[".originalPages"] = $tdataadmin_users[".pages"];
$tdataadmin_users[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadmin_users[".originalDefaultPages"] = $tdataadmin_users[".defaultPages"];

//	field labels
$fieldLabelsadmin_users = array();
$fieldToolTipsadmin_users = array();
$pageTitlesadmin_users = array();
$placeHoldersadmin_users = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsadmin_users["Spanish"] = array();
	$fieldToolTipsadmin_users["Spanish"] = array();
	$placeHoldersadmin_users["Spanish"] = array();
	$pageTitlesadmin_users["Spanish"] = array();
	$fieldLabelsadmin_users["Spanish"]["active"] = "Active";
	$fieldToolTipsadmin_users["Spanish"]["active"] = "";
	$placeHoldersadmin_users["Spanish"]["active"] = "";
	$fieldLabelsadmin_users["Spanish"]["covid_fecha"] = "Covid Fecha";
	$fieldToolTipsadmin_users["Spanish"]["covid_fecha"] = "";
	$placeHoldersadmin_users["Spanish"]["covid_fecha"] = "";
	$fieldLabelsadmin_users["Spanish"]["covid_sn"] = "Covid Sn";
	$fieldToolTipsadmin_users["Spanish"]["covid_sn"] = "";
	$placeHoldersadmin_users["Spanish"]["covid_sn"] = "";
	$fieldLabelsadmin_users["Spanish"]["ctrl"] = "Ctrl";
	$fieldToolTipsadmin_users["Spanish"]["ctrl"] = "";
	$placeHoldersadmin_users["Spanish"]["ctrl"] = "";
	$fieldLabelsadmin_users["Spanish"]["ctrl_contacto"] = "Ctrl Contacto";
	$fieldToolTipsadmin_users["Spanish"]["ctrl_contacto"] = "";
	$placeHoldersadmin_users["Spanish"]["ctrl_contacto"] = "";
	$fieldLabelsadmin_users["Spanish"]["ctrl_pedidoalmacen"] = "Ctrl Pedidoalmacen";
	$fieldToolTipsadmin_users["Spanish"]["ctrl_pedidoalmacen"] = "";
	$placeHoldersadmin_users["Spanish"]["ctrl_pedidoalmacen"] = "";
	$fieldLabelsadmin_users["Spanish"]["estado_vinculacion_mincit"] = "Estado Vinculacion Mincit";
	$fieldToolTipsadmin_users["Spanish"]["estado_vinculacion_mincit"] = "";
	$placeHoldersadmin_users["Spanish"]["estado_vinculacion_mincit"] = "";
	$fieldLabelsadmin_users["Spanish"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipsadmin_users["Spanish"]["ext_security_id"] = "";
	$placeHoldersadmin_users["Spanish"]["ext_security_id"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol"] = "Global Rol";
	$fieldToolTipsadmin_users["Spanish"]["global_rol"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_almacen"] = "Global Rol Almacen";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_almacen"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_almacen"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_cej"] = "Global Rol Cej";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_cej"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_cej"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_ci"] = "Global Rol Ci";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_ci"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_ci"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_ciudadano"] = "Global Rol Ciudadano";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_ciudadano"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_ciudadano"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_ciudadano_dep"] = "Global Rol Ciudadano Dep";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_ciudadano_dep"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_ciudadano_dep"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_comacc"] = "Global Rol Comacc";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_comacc"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_comacc"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_cont"] = "Global Rol Cont";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_cont"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_cont"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_contratos"] = "Global Rol Contratos";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_contratos"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_contratos"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_cpanel"] = "Global Rol Cpanel";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_cpanel"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_cpanel"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_dashboard"] = "Global Rol Dashboard";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_dashboard"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_dashboard"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_gestion"] = "Global Rol Gestion";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_gestion"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_gestion"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_gh"] = "Global Rol Gh";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_gh"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_gh"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_hojar"] = "Global Rol Hojar";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_hojar"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_hojar"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_inmuebles"] = "Global Rol Inmuebles";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_inmuebles"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_inmuebles"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_jc3"] = "Global Rol Jc3";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_jc3"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_jc3"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_me"] = "Global Rol Me";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_me"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_me"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_procjur"] = "Global Rol Procjur";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_procjur"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_procjur"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_sid"] = "Global Rol Sid";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_sid"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_sid"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_siis"] = "Global Rol Siis";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_siis"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_siis"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_sipi"] = "Global Rol Sipi";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_sipi"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_sipi"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_th"] = "Global Rol Th";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_th"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_th"] = "";
	$fieldLabelsadmin_users["Spanish"]["global_rol_zf"] = "Global Rol Zf";
	$fieldToolTipsadmin_users["Spanish"]["global_rol_zf"] = "";
	$placeHoldersadmin_users["Spanish"]["global_rol_zf"] = "";
	$fieldLabelsadmin_users["Spanish"]["globla_rol_ct"] = "Globla Rol Ct";
	$fieldToolTipsadmin_users["Spanish"]["globla_rol_ct"] = "";
	$placeHoldersadmin_users["Spanish"]["globla_rol_ct"] = "";
	$fieldLabelsadmin_users["Spanish"]["groupid"] = "Groupid";
	$fieldToolTipsadmin_users["Spanish"]["groupid"] = "";
	$placeHoldersadmin_users["Spanish"]["groupid"] = "";
	$fieldLabelsadmin_users["Spanish"]["habilita_almacen"] = "Habilita Almacen";
	$fieldToolTipsadmin_users["Spanish"]["habilita_almacen"] = "";
	$placeHoldersadmin_users["Spanish"]["habilita_almacen"] = "";
	$fieldLabelsadmin_users["Spanish"]["id_fk"] = "Id Fk";
	$fieldToolTipsadmin_users["Spanish"]["id_fk"] = "";
	$placeHoldersadmin_users["Spanish"]["id_fk"] = "";
	$fieldLabelsadmin_users["Spanish"]["idusrglobal"] = "Idusrglobal";
	$fieldToolTipsadmin_users["Spanish"]["idusrglobal"] = "";
	$placeHoldersadmin_users["Spanish"]["idusrglobal"] = "";
	$fieldLabelsadmin_users["Spanish"]["Password"] = "Password";
	$fieldToolTipsadmin_users["Spanish"]["Password"] = "";
	$placeHoldersadmin_users["Spanish"]["Password"] = "";
	$fieldLabelsadmin_users["Spanish"]["phone"] = "Phone";
	$fieldToolTipsadmin_users["Spanish"]["phone"] = "";
	$placeHoldersadmin_users["Spanish"]["phone"] = "";
	$fieldLabelsadmin_users["Spanish"]["phone1"] = "Phone1";
	$fieldToolTipsadmin_users["Spanish"]["phone1"] = "";
	$placeHoldersadmin_users["Spanish"]["phone1"] = "";
	$fieldLabelsadmin_users["Spanish"]["reset_date"] = "Reset Date";
	$fieldToolTipsadmin_users["Spanish"]["reset_date"] = "";
	$placeHoldersadmin_users["Spanish"]["reset_date"] = "";
	$fieldLabelsadmin_users["Spanish"]["reset_token"] = "Reset Token";
	$fieldToolTipsadmin_users["Spanish"]["reset_token"] = "";
	$placeHoldersadmin_users["Spanish"]["reset_token"] = "";
	$fieldLabelsadmin_users["Spanish"]["sys_anio"] = "Sys Anio";
	$fieldToolTipsadmin_users["Spanish"]["sys_anio"] = "";
	$placeHoldersadmin_users["Spanish"]["sys_anio"] = "";
	$fieldLabelsadmin_users["Spanish"]["sys_date"] = "Sys Date";
	$fieldToolTipsadmin_users["Spanish"]["sys_date"] = "";
	$placeHoldersadmin_users["Spanish"]["sys_date"] = "";
	$fieldLabelsadmin_users["Spanish"]["sys_disabledate_usr"] = "Sys Disabledate Usr";
	$fieldToolTipsadmin_users["Spanish"]["sys_disabledate_usr"] = "";
	$placeHoldersadmin_users["Spanish"]["sys_disabledate_usr"] = "";
	$fieldLabelsadmin_users["Spanish"]["sys_expiration_usr"] = "Sys Expiration Usr";
	$fieldToolTipsadmin_users["Spanish"]["sys_expiration_usr"] = "";
	$placeHoldersadmin_users["Spanish"]["sys_expiration_usr"] = "";
	$fieldLabelsadmin_users["Spanish"]["sys_ntries_usr"] = "Sys Ntries Usr";
	$fieldToolTipsadmin_users["Spanish"]["sys_ntries_usr"] = "";
	$placeHoldersadmin_users["Spanish"]["sys_ntries_usr"] = "";
	$fieldLabelsadmin_users["Spanish"]["sys_registrationdate_usr"] = "Sys Registrationdate Usr";
	$fieldToolTipsadmin_users["Spanish"]["sys_registrationdate_usr"] = "";
	$placeHoldersadmin_users["Spanish"]["sys_registrationdate_usr"] = "";
	$fieldLabelsadmin_users["Spanish"]["sys_time"] = "Sys Time";
	$fieldToolTipsadmin_users["Spanish"]["sys_time"] = "";
	$placeHoldersadmin_users["Spanish"]["sys_time"] = "";
	$fieldLabelsadmin_users["Spanish"]["sys_upd_fecha"] = "Sys Upd Fecha";
	$fieldToolTipsadmin_users["Spanish"]["sys_upd_fecha"] = "";
	$placeHoldersadmin_users["Spanish"]["sys_upd_fecha"] = "";
	$fieldLabelsadmin_users["Spanish"]["sys_upd_time"] = "Sys Upd Time";
	$fieldToolTipsadmin_users["Spanish"]["sys_upd_time"] = "";
	$placeHoldersadmin_users["Spanish"]["sys_upd_time"] = "";
	$fieldLabelsadmin_users["Spanish"]["sys_upd_user"] = "Sys Upd User";
	$fieldToolTipsadmin_users["Spanish"]["sys_upd_user"] = "";
	$placeHoldersadmin_users["Spanish"]["sys_upd_user"] = "";
	$fieldLabelsadmin_users["Spanish"]["sys_update_family_info"] = "Sys Update Family Info";
	$fieldToolTipsadmin_users["Spanish"]["sys_update_family_info"] = "";
	$placeHoldersadmin_users["Spanish"]["sys_update_family_info"] = "";
	$fieldLabelsadmin_users["Spanish"]["sys_update_info"] = "Sys Update Info";
	$fieldToolTipsadmin_users["Spanish"]["sys_update_info"] = "";
	$placeHoldersadmin_users["Spanish"]["sys_update_info"] = "";
	$fieldLabelsadmin_users["Spanish"]["sys_user"] = "Sys User";
	$fieldToolTipsadmin_users["Spanish"]["sys_user"] = "";
	$placeHoldersadmin_users["Spanish"]["sys_user"] = "";
	$fieldLabelsadmin_users["Spanish"]["upd_date"] = "Upd Date";
	$fieldToolTipsadmin_users["Spanish"]["upd_date"] = "";
	$placeHoldersadmin_users["Spanish"]["upd_date"] = "";
	$fieldLabelsadmin_users["Spanish"]["user_dep"] = "User Dep";
	$fieldToolTipsadmin_users["Spanish"]["user_dep"] = "";
	$placeHoldersadmin_users["Spanish"]["user_dep"] = "";
	$fieldLabelsadmin_users["Spanish"]["Username"] = "Username";
	$fieldToolTipsadmin_users["Spanish"]["Username"] = "";
	$placeHoldersadmin_users["Spanish"]["Username"] = "";
	$fieldLabelsadmin_users["Spanish"]["userpic"] = "Userpic";
	$fieldToolTipsadmin_users["Spanish"]["userpic"] = "";
	$placeHoldersadmin_users["Spanish"]["userpic"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_cargo"] = "Usr Cargo";
	$fieldToolTipsadmin_users["Spanish"]["usr_cargo"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_cargo"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_datebirth"] = "Usr Datebirth";
	$fieldToolTipsadmin_users["Spanish"]["usr_datebirth"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_datebirth"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_dep"] = "Usr Dep";
	$fieldToolTipsadmin_users["Spanish"]["usr_dep"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_dep"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_dep_sup"] = "Usr Dep Sup";
	$fieldToolTipsadmin_users["Spanish"]["usr_dep_sup"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_dep_sup"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_dependencia"] = "Usr Dependencia";
	$fieldToolTipsadmin_users["Spanish"]["usr_dependencia"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_dependencia"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_directivo"] = "Usr Directivo";
	$fieldToolTipsadmin_users["Spanish"]["usr_directivo"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_directivo"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_edl"] = "Usr Edl";
	$fieldToolTipsadmin_users["Spanish"]["usr_edl"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_edl"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_email"] = "Usr Email";
	$fieldToolTipsadmin_users["Spanish"]["usr_email"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_email"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_emergencia"] = "Usr Emergencia";
	$fieldToolTipsadmin_users["Spanish"]["usr_emergencia"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_emergencia"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_entidad"] = "Usr Entidad";
	$fieldToolTipsadmin_users["Spanish"]["usr_entidad"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_entidad"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_extension"] = "Usr Extension";
	$fieldToolTipsadmin_users["Spanish"]["usr_extension"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_extension"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_firma"] = "Usr Firma";
	$fieldToolTipsadmin_users["Spanish"]["usr_firma"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_firma"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_firma_b"] = "Usr Firma B";
	$fieldToolTipsadmin_users["Spanish"]["usr_firma_b"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_firma_b"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_hojaruta"] = "Usr Hojaruta";
	$fieldToolTipsadmin_users["Spanish"]["usr_hojaruta"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_hojaruta"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_image"] = "Usr Image";
	$fieldToolTipsadmin_users["Spanish"]["usr_image"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_image"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_inicial"] = "Usr Inicial";
	$fieldToolTipsadmin_users["Spanish"]["usr_inicial"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_inicial"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_jefe"] = "Usr Jefe";
	$fieldToolTipsadmin_users["Spanish"]["usr_jefe"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_jefe"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_lname"] = "Usr Lname";
	$fieldToolTipsadmin_users["Spanish"]["usr_lname"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_lname"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_minequipo_grupo"] = "Usr Minequipo Grupo";
	$fieldToolTipsadmin_users["Spanish"]["usr_minequipo_grupo"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_minequipo_grupo"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_minequipo_lider"] = "Usr Minequipo Lider";
	$fieldToolTipsadmin_users["Spanish"]["usr_minequipo_lider"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_minequipo_lider"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_name"] = "Usr Name";
	$fieldToolTipsadmin_users["Spanish"]["usr_name"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_name"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_nombresfull"] = "Usr Nombresfull";
	$fieldToolTipsadmin_users["Spanish"]["usr_nombresfull"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_nombresfull"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_not"] = "Usr Not";
	$fieldToolTipsadmin_users["Spanish"]["usr_not"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_not"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_not_msj"] = "Usr Not Msj";
	$fieldToolTipsadmin_users["Spanish"]["usr_not_msj"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_not_msj"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_personalid"] = "Usr Personalid";
	$fieldToolTipsadmin_users["Spanish"]["usr_personalid"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_personalid"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_piso"] = "Usr Piso";
	$fieldToolTipsadmin_users["Spanish"]["usr_piso"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_piso"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_rdnkey"] = "Usr Rdnkey";
	$fieldToolTipsadmin_users["Spanish"]["usr_rdnkey"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_rdnkey"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_regpago"] = "Usr Regpago";
	$fieldToolTipsadmin_users["Spanish"]["usr_regpago"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_regpago"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_sessini"] = "Usr Sessini";
	$fieldToolTipsadmin_users["Spanish"]["usr_sessini"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_sessini"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_status"] = "Usr Status";
	$fieldToolTipsadmin_users["Spanish"]["usr_status"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_status"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_status_nomina"] = "Usr Status Nomina";
	$fieldToolTipsadmin_users["Spanish"]["usr_status_nomina"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_status_nomina"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_status_sol"] = "Usr Status Sol";
	$fieldToolTipsadmin_users["Spanish"]["usr_status_sol"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_status_sol"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_type_vinc"] = "Usr Type Vinc";
	$fieldToolTipsadmin_users["Spanish"]["usr_type_vinc"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_type_vinc"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_type_vinculacion"] = "Usr Type Vinculacion";
	$fieldToolTipsadmin_users["Spanish"]["usr_type_vinculacion"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_type_vinculacion"] = "";
	$fieldLabelsadmin_users["Spanish"]["usr_update_almacen"] = "Usr Update Almacen";
	$fieldToolTipsadmin_users["Spanish"]["usr_update_almacen"] = "";
	$placeHoldersadmin_users["Spanish"]["usr_update_almacen"] = "";
	$fieldLabelsadmin_users["Spanish"]["vacuna_a_fecha"] = "Vacuna A Fecha";
	$fieldToolTipsadmin_users["Spanish"]["vacuna_a_fecha"] = "";
	$placeHoldersadmin_users["Spanish"]["vacuna_a_fecha"] = "";
	$fieldLabelsadmin_users["Spanish"]["vacuna_autoriza"] = "Vacuna Autoriza";
	$fieldToolTipsadmin_users["Spanish"]["vacuna_autoriza"] = "";
	$placeHoldersadmin_users["Spanish"]["vacuna_autoriza"] = "";
	$fieldLabelsadmin_users["Spanish"]["vacuna_autoriza_email"] = "Vacuna Autoriza Email";
	$fieldToolTipsadmin_users["Spanish"]["vacuna_autoriza_email"] = "";
	$placeHoldersadmin_users["Spanish"]["vacuna_autoriza_email"] = "";
	$fieldLabelsadmin_users["Spanish"]["vacuna_b_fecha"] = "Vacuna B Fecha";
	$fieldToolTipsadmin_users["Spanish"]["vacuna_b_fecha"] = "";
	$placeHoldersadmin_users["Spanish"]["vacuna_b_fecha"] = "";
	$fieldLabelsadmin_users["Spanish"]["vacuna_b_fechaprog"] = "Vacuna B Fechaprog";
	$fieldToolTipsadmin_users["Spanish"]["vacuna_b_fechaprog"] = "";
	$placeHoldersadmin_users["Spanish"]["vacuna_b_fechaprog"] = "";
	$fieldLabelsadmin_users["Spanish"]["vacuna_c_fecha"] = "Vacuna C Fecha";
	$fieldToolTipsadmin_users["Spanish"]["vacuna_c_fecha"] = "";
	$placeHoldersadmin_users["Spanish"]["vacuna_c_fecha"] = "";
	$fieldLabelsadmin_users["Spanish"]["vacuna_consentimiento_sn"] = "Vacuna Consentimiento Sn";
	$fieldToolTipsadmin_users["Spanish"]["vacuna_consentimiento_sn"] = "";
	$placeHoldersadmin_users["Spanish"]["vacuna_consentimiento_sn"] = "";
	$fieldLabelsadmin_users["Spanish"]["vacuna_dosis"] = "Vacuna Dosis";
	$fieldToolTipsadmin_users["Spanish"]["vacuna_dosis"] = "";
	$placeHoldersadmin_users["Spanish"]["vacuna_dosis"] = "";
	$fieldLabelsadmin_users["Spanish"]["vacuna_etapa"] = "Vacuna Etapa";
	$fieldToolTipsadmin_users["Spanish"]["vacuna_etapa"] = "";
	$placeHoldersadmin_users["Spanish"]["vacuna_etapa"] = "";
	$fieldLabelsadmin_users["Spanish"]["vacuna_interes"] = "Vacuna Interes";
	$fieldToolTipsadmin_users["Spanish"]["vacuna_interes"] = "";
	$placeHoldersadmin_users["Spanish"]["vacuna_interes"] = "";
	$fieldLabelsadmin_users["Spanish"]["vacuna_nombre"] = "Vacuna Nombre";
	$fieldToolTipsadmin_users["Spanish"]["vacuna_nombre"] = "";
	$placeHoldersadmin_users["Spanish"]["vacuna_nombre"] = "";
	$fieldLabelsadmin_users["Spanish"]["vacuna_obs"] = "Vacuna Obs";
	$fieldToolTipsadmin_users["Spanish"]["vacuna_obs"] = "";
	$placeHoldersadmin_users["Spanish"]["vacuna_obs"] = "";
	$fieldLabelsadmin_users["Spanish"]["vacuna_sn"] = "Vacuna Sn";
	$fieldToolTipsadmin_users["Spanish"]["vacuna_sn"] = "";
	$placeHoldersadmin_users["Spanish"]["vacuna_sn"] = "";
	if (count($fieldToolTipsadmin_users["Spanish"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}


	$tdataadmin_users[".NCSearch"] = true;



$tdataadmin_users[".shortTableName"] = "admin_users";
$tdataadmin_users[".nSecOptions"] = 0;

$tdataadmin_users[".mainTableOwnerID"] = "";
$tdataadmin_users[".entityType"] = 1;
$tdataadmin_users[".connId"] = "dbusers_at_localhost";


$tdataadmin_users[".strOriginalTableName"] = "global_users";

	



$tdataadmin_users[".showAddInPopup"] = false;

$tdataadmin_users[".showEditInPopup"] = false;

$tdataadmin_users[".showViewInPopup"] = false;

$tdataadmin_users[".listAjax"] = false;
//	temporary
//$tdataadmin_users[".listAjax"] = false;

	$tdataadmin_users[".audit"] = false;

	$tdataadmin_users[".locking"] = false;


$pages = $tdataadmin_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadmin_users[".edit"] = true;
	$tdataadmin_users[".afterEditAction"] = 1;
	$tdataadmin_users[".closePopupAfterEdit"] = 1;
	$tdataadmin_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadmin_users[".add"] = true;
$tdataadmin_users[".afterAddAction"] = 1;
$tdataadmin_users[".closePopupAfterAdd"] = 1;
$tdataadmin_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadmin_users[".list"] = true;
}



$tdataadmin_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadmin_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadmin_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadmin_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadmin_users[".printFriendly"] = true;
}



$tdataadmin_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadmin_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadmin_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadmin_users[".isUseAjaxSuggest"] = true;





$tdataadmin_users[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_users[".buttonsAdded"] = false;

$tdataadmin_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_users[".isUseTimeForSearch"] = false;


$tdataadmin_users[".badgeColor"] = "008B8B";


$tdataadmin_users[".allSearchFields"] = array();
$tdataadmin_users[".filterFields"] = array();
$tdataadmin_users[".requiredSearchFields"] = array();

$tdataadmin_users[".googleLikeFields"] = array();
$tdataadmin_users[".googleLikeFields"][] = "active";
$tdataadmin_users[".googleLikeFields"][] = "covid_fecha";
$tdataadmin_users[".googleLikeFields"][] = "covid_sn";
$tdataadmin_users[".googleLikeFields"][] = "ctrl";
$tdataadmin_users[".googleLikeFields"][] = "ctrl_contacto";
$tdataadmin_users[".googleLikeFields"][] = "ctrl_pedidoalmacen";
$tdataadmin_users[".googleLikeFields"][] = "estado_vinculacion_mincit";
$tdataadmin_users[".googleLikeFields"][] = "ext_security_id";
$tdataadmin_users[".googleLikeFields"][] = "global_rol";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_almacen";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_cej";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_ci";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_ciudadano";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_ciudadano_dep";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_comacc";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_cont";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_contratos";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_cpanel";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_dashboard";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_gestion";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_gh";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_hojar";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_inmuebles";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_jc3";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_me";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_procjur";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_sid";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_siis";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_sipi";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_th";
$tdataadmin_users[".googleLikeFields"][] = "global_rol_zf";
$tdataadmin_users[".googleLikeFields"][] = "globla_rol_ct";
$tdataadmin_users[".googleLikeFields"][] = "groupid";
$tdataadmin_users[".googleLikeFields"][] = "habilita_almacen";
$tdataadmin_users[".googleLikeFields"][] = "id_fk";
$tdataadmin_users[".googleLikeFields"][] = "idusrglobal";
$tdataadmin_users[".googleLikeFields"][] = "Password";
$tdataadmin_users[".googleLikeFields"][] = "phone";
$tdataadmin_users[".googleLikeFields"][] = "phone1";
$tdataadmin_users[".googleLikeFields"][] = "reset_date";
$tdataadmin_users[".googleLikeFields"][] = "reset_token";
$tdataadmin_users[".googleLikeFields"][] = "sys_anio";
$tdataadmin_users[".googleLikeFields"][] = "sys_date";
$tdataadmin_users[".googleLikeFields"][] = "sys_disabledate_usr";
$tdataadmin_users[".googleLikeFields"][] = "sys_expiration_usr";
$tdataadmin_users[".googleLikeFields"][] = "sys_ntries_usr";
$tdataadmin_users[".googleLikeFields"][] = "sys_registrationdate_usr";
$tdataadmin_users[".googleLikeFields"][] = "sys_time";
$tdataadmin_users[".googleLikeFields"][] = "sys_upd_fecha";
$tdataadmin_users[".googleLikeFields"][] = "sys_upd_time";
$tdataadmin_users[".googleLikeFields"][] = "sys_upd_user";
$tdataadmin_users[".googleLikeFields"][] = "sys_update_family_info";
$tdataadmin_users[".googleLikeFields"][] = "sys_update_info";
$tdataadmin_users[".googleLikeFields"][] = "sys_user";
$tdataadmin_users[".googleLikeFields"][] = "upd_date";
$tdataadmin_users[".googleLikeFields"][] = "user_dep";
$tdataadmin_users[".googleLikeFields"][] = "Username";
$tdataadmin_users[".googleLikeFields"][] = "usr_cargo";
$tdataadmin_users[".googleLikeFields"][] = "usr_datebirth";
$tdataadmin_users[".googleLikeFields"][] = "usr_dep";
$tdataadmin_users[".googleLikeFields"][] = "usr_dep_sup";
$tdataadmin_users[".googleLikeFields"][] = "usr_dependencia";
$tdataadmin_users[".googleLikeFields"][] = "usr_directivo";
$tdataadmin_users[".googleLikeFields"][] = "usr_edl";
$tdataadmin_users[".googleLikeFields"][] = "usr_email";
$tdataadmin_users[".googleLikeFields"][] = "usr_emergencia";
$tdataadmin_users[".googleLikeFields"][] = "usr_entidad";
$tdataadmin_users[".googleLikeFields"][] = "usr_extension";
$tdataadmin_users[".googleLikeFields"][] = "usr_firma";
$tdataadmin_users[".googleLikeFields"][] = "usr_firma_b";
$tdataadmin_users[".googleLikeFields"][] = "usr_hojaruta";
$tdataadmin_users[".googleLikeFields"][] = "usr_image";
$tdataadmin_users[".googleLikeFields"][] = "usr_inicial";
$tdataadmin_users[".googleLikeFields"][] = "usr_jefe";
$tdataadmin_users[".googleLikeFields"][] = "usr_lname";
$tdataadmin_users[".googleLikeFields"][] = "usr_minequipo_grupo";
$tdataadmin_users[".googleLikeFields"][] = "usr_minequipo_lider";
$tdataadmin_users[".googleLikeFields"][] = "usr_name";
$tdataadmin_users[".googleLikeFields"][] = "usr_nombresfull";
$tdataadmin_users[".googleLikeFields"][] = "usr_not";
$tdataadmin_users[".googleLikeFields"][] = "usr_not_msj";
$tdataadmin_users[".googleLikeFields"][] = "usr_personalid";
$tdataadmin_users[".googleLikeFields"][] = "usr_piso";
$tdataadmin_users[".googleLikeFields"][] = "usr_rdnkey";
$tdataadmin_users[".googleLikeFields"][] = "usr_regpago";
$tdataadmin_users[".googleLikeFields"][] = "usr_sessini";
$tdataadmin_users[".googleLikeFields"][] = "usr_status";
$tdataadmin_users[".googleLikeFields"][] = "usr_status_nomina";
$tdataadmin_users[".googleLikeFields"][] = "usr_status_sol";
$tdataadmin_users[".googleLikeFields"][] = "usr_type_vinc";
$tdataadmin_users[".googleLikeFields"][] = "usr_type_vinculacion";
$tdataadmin_users[".googleLikeFields"][] = "usr_update_almacen";
$tdataadmin_users[".googleLikeFields"][] = "vacuna_a_fecha";
$tdataadmin_users[".googleLikeFields"][] = "vacuna_autoriza";
$tdataadmin_users[".googleLikeFields"][] = "vacuna_autoriza_email";
$tdataadmin_users[".googleLikeFields"][] = "vacuna_b_fecha";
$tdataadmin_users[".googleLikeFields"][] = "vacuna_b_fechaprog";
$tdataadmin_users[".googleLikeFields"][] = "vacuna_c_fecha";
$tdataadmin_users[".googleLikeFields"][] = "vacuna_consentimiento_sn";
$tdataadmin_users[".googleLikeFields"][] = "vacuna_dosis";
$tdataadmin_users[".googleLikeFields"][] = "vacuna_etapa";
$tdataadmin_users[".googleLikeFields"][] = "vacuna_interes";
$tdataadmin_users[".googleLikeFields"][] = "vacuna_nombre";
$tdataadmin_users[".googleLikeFields"][] = "vacuna_obs";
$tdataadmin_users[".googleLikeFields"][] = "vacuna_sn";



$tdataadmin_users[".tableType"] = "list";

$tdataadmin_users[".printerPageOrientation"] = 0;
$tdataadmin_users[".nPrinterPageScale"] = 100;

$tdataadmin_users[".nPrinterSplitRecords"] = 40;

$tdataadmin_users[".geocodingEnabled"] = false;










$tdataadmin_users[".pageSize"] = 20;

$tdataadmin_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataadmin_users[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_users[".orderindexes"] = array();


$tdataadmin_users[".sqlHead"] = "SELECT active,  	covid_fecha,  	covid_sn,  	ctrl,  	ctrl_contacto,  	ctrl_pedidoalmacen,  	estado_vinculacion_mincit,  	ext_security_id,  	global_rol,  	global_rol_almacen,  	global_rol_cej,  	global_rol_ci,  	global_rol_ciudadano,  	global_rol_ciudadano_dep,  	global_rol_comacc,  	global_rol_cont,  	global_rol_contratos,  	global_rol_cpanel,  	global_rol_dashboard,  	global_rol_gestion,  	global_rol_gh,  	global_rol_hojar,  	global_rol_inmuebles,  	global_rol_jc3,  	global_rol_me,  	global_rol_procjur,  	global_rol_sid,  	global_rol_siis,  	global_rol_sipi,  	global_rol_th,  	global_rol_zf,  	globla_rol_ct,  	groupid,  	habilita_almacen,  	id_fk,  	idusrglobal,  	Password,  	phone,  	phone1,  	reset_date,  	reset_token,  	sys_anio,  	sys_date,  	sys_disabledate_usr,  	sys_expiration_usr,  	sys_ntries_usr,  	sys_registrationdate_usr,  	sys_time,  	sys_upd_fecha,  	sys_upd_time,  	sys_upd_user,  	sys_update_family_info,  	sys_update_info,  	sys_user,  	upd_date,  	user_dep,  	Username,  	userpic,  	usr_cargo,  	usr_datebirth,  	usr_dep,  	usr_dep_sup,  	usr_dependencia,  	usr_directivo,  	usr_edl,  	usr_email,  	usr_emergencia,  	usr_entidad,  	usr_extension,  	usr_firma,  	usr_firma_b,  	usr_hojaruta,  	usr_image,  	usr_inicial,  	usr_jefe,  	usr_lname,  	usr_minequipo_grupo,  	usr_minequipo_lider,  	usr_name,  	usr_nombresfull,  	usr_not,  	usr_not_msj,  	usr_personalid,  	usr_piso,  	usr_rdnkey,  	usr_regpago,  	usr_sessini,  	usr_status,  	usr_status_nomina,  	usr_status_sol,  	usr_type_vinc,  	usr_type_vinculacion,  	usr_update_almacen,  	vacuna_a_fecha,  	vacuna_autoriza,  	vacuna_autoriza_email,  	vacuna_b_fecha,  	vacuna_b_fechaprog,  	vacuna_c_fecha,  	vacuna_consentimiento_sn,  	vacuna_dosis,  	vacuna_etapa,  	vacuna_interes,  	vacuna_nombre,  	vacuna_obs,  	vacuna_sn";
$tdataadmin_users[".sqlFrom"] = "FROM global_users";
$tdataadmin_users[".sqlWhereExpr"] = "";
$tdataadmin_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_users[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_users[".highlightSearchResults"] = true;

$tableKeysadmin_users = array();
$tableKeysadmin_users[] = "idusrglobal";
$tdataadmin_users[".Keys"] = $tableKeysadmin_users;


$tdataadmin_users[".hideMobileList"] = array();




//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","active");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

	
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


	$tdataadmin_users["active"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "active";
//	covid_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "covid_fecha";
	$fdata["GoodName"] = "covid_fecha";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","covid_fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "covid_fecha";

		$fdata["sourceSingle"] = "covid_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "covid_fecha";

	
	
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


	$tdataadmin_users["covid_fecha"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "covid_fecha";
//	covid_sn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "covid_sn";
	$fdata["GoodName"] = "covid_sn";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","covid_sn");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "covid_sn";

		$fdata["sourceSingle"] = "covid_sn";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "covid_sn";

	
	
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


	$tdataadmin_users["covid_sn"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "covid_sn";
//	ctrl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ctrl";
	$fdata["GoodName"] = "ctrl";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","ctrl");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ctrl";

		$fdata["sourceSingle"] = "ctrl";

	
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


	$tdataadmin_users["ctrl"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "ctrl";
//	ctrl_contacto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ctrl_contacto";
	$fdata["GoodName"] = "ctrl_contacto";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","ctrl_contacto");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ctrl_contacto";

		$fdata["sourceSingle"] = "ctrl_contacto";

	
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


	$tdataadmin_users["ctrl_contacto"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "ctrl_contacto";
//	ctrl_pedidoalmacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ctrl_pedidoalmacen";
	$fdata["GoodName"] = "ctrl_pedidoalmacen";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","ctrl_pedidoalmacen");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ctrl_pedidoalmacen";

		$fdata["sourceSingle"] = "ctrl_pedidoalmacen";

	
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


	$tdataadmin_users["ctrl_pedidoalmacen"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "ctrl_pedidoalmacen";
//	estado_vinculacion_mincit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "estado_vinculacion_mincit";
	$fdata["GoodName"] = "estado_vinculacion_mincit";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","estado_vinculacion_mincit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado_vinculacion_mincit";

		$fdata["sourceSingle"] = "estado_vinculacion_mincit";

	
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


	$tdataadmin_users["estado_vinculacion_mincit"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "estado_vinculacion_mincit";
//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","ext_security_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ext_security_id";

		$fdata["sourceSingle"] = "ext_security_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ext_security_id";

	
	
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


	$tdataadmin_users["ext_security_id"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "ext_security_id";
//	global_rol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "global_rol";
	$fdata["GoodName"] = "global_rol";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol";

		$fdata["sourceSingle"] = "global_rol";

	
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


	$tdataadmin_users["global_rol"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol";
//	global_rol_almacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "global_rol_almacen";
	$fdata["GoodName"] = "global_rol_almacen";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_almacen");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_almacen";

		$fdata["sourceSingle"] = "global_rol_almacen";

	
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


	$tdataadmin_users["global_rol_almacen"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_almacen";
//	global_rol_cej
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "global_rol_cej";
	$fdata["GoodName"] = "global_rol_cej";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_cej");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_cej";

		$fdata["sourceSingle"] = "global_rol_cej";

	
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


	$tdataadmin_users["global_rol_cej"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_cej";
//	global_rol_ci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "global_rol_ci";
	$fdata["GoodName"] = "global_rol_ci";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_ci");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_ci";

		$fdata["sourceSingle"] = "global_rol_ci";

	
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


	$tdataadmin_users["global_rol_ci"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_ci";
//	global_rol_ciudadano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "global_rol_ciudadano";
	$fdata["GoodName"] = "global_rol_ciudadano";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_ciudadano");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_ciudadano";

		$fdata["sourceSingle"] = "global_rol_ciudadano";

	
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


	$tdataadmin_users["global_rol_ciudadano"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_ciudadano";
//	global_rol_ciudadano_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "global_rol_ciudadano_dep";
	$fdata["GoodName"] = "global_rol_ciudadano_dep";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_ciudadano_dep");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "global_rol_ciudadano_dep";

		$fdata["sourceSingle"] = "global_rol_ciudadano_dep";

	
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


	$tdataadmin_users["global_rol_ciudadano_dep"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_ciudadano_dep";
//	global_rol_comacc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "global_rol_comacc";
	$fdata["GoodName"] = "global_rol_comacc";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_comacc");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_comacc";

		$fdata["sourceSingle"] = "global_rol_comacc";

	
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


	$tdataadmin_users["global_rol_comacc"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_comacc";
//	global_rol_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "global_rol_cont";
	$fdata["GoodName"] = "global_rol_cont";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_cont");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "global_rol_cont";

		$fdata["sourceSingle"] = "global_rol_cont";

	
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


	$tdataadmin_users["global_rol_cont"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_cont";
//	global_rol_contratos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "global_rol_contratos";
	$fdata["GoodName"] = "global_rol_contratos";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_contratos");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_contratos";

		$fdata["sourceSingle"] = "global_rol_contratos";

	
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


	$tdataadmin_users["global_rol_contratos"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_contratos";
//	global_rol_cpanel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "global_rol_cpanel";
	$fdata["GoodName"] = "global_rol_cpanel";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_cpanel");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_cpanel";

		$fdata["sourceSingle"] = "global_rol_cpanel";

	
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


	$tdataadmin_users["global_rol_cpanel"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_cpanel";
//	global_rol_dashboard
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "global_rol_dashboard";
	$fdata["GoodName"] = "global_rol_dashboard";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_dashboard");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_dashboard";

		$fdata["sourceSingle"] = "global_rol_dashboard";

	
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


	$tdataadmin_users["global_rol_dashboard"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_dashboard";
//	global_rol_gestion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "global_rol_gestion";
	$fdata["GoodName"] = "global_rol_gestion";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_gestion");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_gestion";

		$fdata["sourceSingle"] = "global_rol_gestion";

	
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


	$tdataadmin_users["global_rol_gestion"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_gestion";
//	global_rol_gh
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "global_rol_gh";
	$fdata["GoodName"] = "global_rol_gh";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_gh");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_gh";

		$fdata["sourceSingle"] = "global_rol_gh";

	
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


	$tdataadmin_users["global_rol_gh"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_gh";
//	global_rol_hojar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "global_rol_hojar";
	$fdata["GoodName"] = "global_rol_hojar";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_hojar");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_hojar";

		$fdata["sourceSingle"] = "global_rol_hojar";

	
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


	$tdataadmin_users["global_rol_hojar"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_hojar";
//	global_rol_inmuebles
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "global_rol_inmuebles";
	$fdata["GoodName"] = "global_rol_inmuebles";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_inmuebles");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_inmuebles";

		$fdata["sourceSingle"] = "global_rol_inmuebles";

	
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


	$tdataadmin_users["global_rol_inmuebles"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_inmuebles";
//	global_rol_jc3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "global_rol_jc3";
	$fdata["GoodName"] = "global_rol_jc3";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_jc3");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_jc3";

		$fdata["sourceSingle"] = "global_rol_jc3";

	
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


	$tdataadmin_users["global_rol_jc3"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_jc3";
//	global_rol_me
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "global_rol_me";
	$fdata["GoodName"] = "global_rol_me";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_me");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_me";

		$fdata["sourceSingle"] = "global_rol_me";

	
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


	$tdataadmin_users["global_rol_me"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_me";
//	global_rol_procjur
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "global_rol_procjur";
	$fdata["GoodName"] = "global_rol_procjur";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_procjur");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_procjur";

		$fdata["sourceSingle"] = "global_rol_procjur";

	
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


	$tdataadmin_users["global_rol_procjur"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_procjur";
//	global_rol_sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "global_rol_sid";
	$fdata["GoodName"] = "global_rol_sid";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_sid");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_sid";

		$fdata["sourceSingle"] = "global_rol_sid";

	
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


	$tdataadmin_users["global_rol_sid"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_sid";
//	global_rol_siis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "global_rol_siis";
	$fdata["GoodName"] = "global_rol_siis";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_siis");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_siis";

		$fdata["sourceSingle"] = "global_rol_siis";

	
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


	$tdataadmin_users["global_rol_siis"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_siis";
//	global_rol_sipi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "global_rol_sipi";
	$fdata["GoodName"] = "global_rol_sipi";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_sipi");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_sipi";

		$fdata["sourceSingle"] = "global_rol_sipi";

	
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


	$tdataadmin_users["global_rol_sipi"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_sipi";
//	global_rol_th
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "global_rol_th";
	$fdata["GoodName"] = "global_rol_th";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_th");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_th";

		$fdata["sourceSingle"] = "global_rol_th";

	
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


	$tdataadmin_users["global_rol_th"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_th";
//	global_rol_zf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "global_rol_zf";
	$fdata["GoodName"] = "global_rol_zf";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","global_rol_zf");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "global_rol_zf";

		$fdata["sourceSingle"] = "global_rol_zf";

	
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


	$tdataadmin_users["global_rol_zf"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "global_rol_zf";
//	globla_rol_ct
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "globla_rol_ct";
	$fdata["GoodName"] = "globla_rol_ct";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","globla_rol_ct");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "globla_rol_ct";

		$fdata["sourceSingle"] = "globla_rol_ct";

	
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


	$tdataadmin_users["globla_rol_ct"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "globla_rol_ct";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","groupid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "groupid";

		$fdata["sourceSingle"] = "groupid";

	
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


	$tdataadmin_users["groupid"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "groupid";
//	habilita_almacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "habilita_almacen";
	$fdata["GoodName"] = "habilita_almacen";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","habilita_almacen");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "habilita_almacen";

		$fdata["sourceSingle"] = "habilita_almacen";

	
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


	$tdataadmin_users["habilita_almacen"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "habilita_almacen";
//	id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "id_fk";
	$fdata["GoodName"] = "id_fk";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_fk";

		$fdata["sourceSingle"] = "id_fk";

	
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


	$tdataadmin_users["id_fk"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "id_fk";
//	idusrglobal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "idusrglobal";
	$fdata["GoodName"] = "idusrglobal";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","idusrglobal");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idusrglobal";

		$fdata["sourceSingle"] = "idusrglobal";

	
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


	$tdataadmin_users["idusrglobal"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "idusrglobal";
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","Password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Password";

		$fdata["sourceSingle"] = "Password";

	
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


	$tdataadmin_users["Password"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "Password";
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "phone";

		$fdata["sourceSingle"] = "phone";

	
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


	$tdataadmin_users["phone"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "phone";
//	phone1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "phone1";
	$fdata["GoodName"] = "phone1";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","phone1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "phone1";

		$fdata["sourceSingle"] = "phone1";

	
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


	$tdataadmin_users["phone1"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "phone1";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","reset_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "reset_date";

		$fdata["sourceSingle"] = "reset_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_date";

	
	
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


	$tdataadmin_users["reset_date"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "reset_date";
//	reset_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "reset_token";
	$fdata["GoodName"] = "reset_token";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","reset_token");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "reset_token";

		$fdata["sourceSingle"] = "reset_token";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_token";

	
	
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


	$tdataadmin_users["reset_token"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "reset_token";
//	sys_anio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "sys_anio";
	$fdata["GoodName"] = "sys_anio";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","sys_anio");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "sys_anio";

		$fdata["sourceSingle"] = "sys_anio";

	
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


	$tdataadmin_users["sys_anio"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "sys_anio";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","sys_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "sys_date";

		$fdata["sourceSingle"] = "sys_date";

	
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


	$tdataadmin_users["sys_date"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "sys_date";
//	sys_disabledate_usr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "sys_disabledate_usr";
	$fdata["GoodName"] = "sys_disabledate_usr";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","sys_disabledate_usr");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_disabledate_usr";

		$fdata["sourceSingle"] = "sys_disabledate_usr";

	
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


	$tdataadmin_users["sys_disabledate_usr"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "sys_disabledate_usr";
//	sys_expiration_usr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "sys_expiration_usr";
	$fdata["GoodName"] = "sys_expiration_usr";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","sys_expiration_usr");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sys_expiration_usr";

		$fdata["sourceSingle"] = "sys_expiration_usr";

	
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


	$tdataadmin_users["sys_expiration_usr"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "sys_expiration_usr";
//	sys_ntries_usr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "sys_ntries_usr";
	$fdata["GoodName"] = "sys_ntries_usr";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","sys_ntries_usr");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sys_ntries_usr";

		$fdata["sourceSingle"] = "sys_ntries_usr";

	
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


	$tdataadmin_users["sys_ntries_usr"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "sys_ntries_usr";
//	sys_registrationdate_usr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "sys_registrationdate_usr";
	$fdata["GoodName"] = "sys_registrationdate_usr";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","sys_registrationdate_usr");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "sys_registrationdate_usr";

		$fdata["sourceSingle"] = "sys_registrationdate_usr";

	
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


	$tdataadmin_users["sys_registrationdate_usr"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "sys_registrationdate_usr";
//	sys_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "sys_time";
	$fdata["GoodName"] = "sys_time";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","sys_time");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "sys_time";

		$fdata["sourceSingle"] = "sys_time";

	
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


	$tdataadmin_users["sys_time"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "sys_time";
//	sys_upd_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "sys_upd_fecha";
	$fdata["GoodName"] = "sys_upd_fecha";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","sys_upd_fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "sys_upd_fecha";

		$fdata["sourceSingle"] = "sys_upd_fecha";

	
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


	$tdataadmin_users["sys_upd_fecha"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "sys_upd_fecha";
//	sys_upd_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "sys_upd_time";
	$fdata["GoodName"] = "sys_upd_time";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","sys_upd_time");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "sys_upd_time";

		$fdata["sourceSingle"] = "sys_upd_time";

	
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


	$tdataadmin_users["sys_upd_time"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "sys_upd_time";
//	sys_upd_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "sys_upd_user";
	$fdata["GoodName"] = "sys_upd_user";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","sys_upd_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_upd_user";

		$fdata["sourceSingle"] = "sys_upd_user";

	
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


	$tdataadmin_users["sys_upd_user"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "sys_upd_user";
//	sys_update_family_info
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "sys_update_family_info";
	$fdata["GoodName"] = "sys_update_family_info";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","sys_update_family_info");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sys_update_family_info";

		$fdata["sourceSingle"] = "sys_update_family_info";

	
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


	$tdataadmin_users["sys_update_family_info"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "sys_update_family_info";
//	sys_update_info
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "sys_update_info";
	$fdata["GoodName"] = "sys_update_info";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","sys_update_info");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sys_update_info";

		$fdata["sourceSingle"] = "sys_update_info";

	
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


	$tdataadmin_users["sys_update_info"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "sys_update_info";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

		$fdata["sourceSingle"] = "sys_user";

	
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


	$tdataadmin_users["sys_user"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "sys_user";
//	upd_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "upd_date";
	$fdata["GoodName"] = "upd_date";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","upd_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "upd_date";

		$fdata["sourceSingle"] = "upd_date";

	
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


	$tdataadmin_users["upd_date"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "upd_date";
//	user_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "user_dep";
	$fdata["GoodName"] = "user_dep";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","user_dep");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "user_dep";

		$fdata["sourceSingle"] = "user_dep";

	
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


	$tdataadmin_users["user_dep"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "user_dep";
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","Username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Username";

		$fdata["sourceSingle"] = "Username";

	
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


	$tdataadmin_users["Username"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "Username";
//	userpic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "userpic";
	$fdata["GoodName"] = "userpic";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","userpic");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "userpic";

		$fdata["sourceSingle"] = "userpic";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userpic";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdataadmin_users["userpic"] = $fdata;
	//	usr_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "usr_cargo";
	$fdata["GoodName"] = "usr_cargo";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_cargo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usr_cargo";

		$fdata["sourceSingle"] = "usr_cargo";

	
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


	$tdataadmin_users["usr_cargo"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_cargo";
//	usr_datebirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "usr_datebirth";
	$fdata["GoodName"] = "usr_datebirth";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_datebirth");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "usr_datebirth";

		$fdata["sourceSingle"] = "usr_datebirth";

	
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


	$tdataadmin_users["usr_datebirth"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_datebirth";
//	usr_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "usr_dep";
	$fdata["GoodName"] = "usr_dep";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_dep");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usr_dep";

		$fdata["sourceSingle"] = "usr_dep";

	
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


	$tdataadmin_users["usr_dep"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_dep";
//	usr_dep_sup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "usr_dep_sup";
	$fdata["GoodName"] = "usr_dep_sup";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_dep_sup");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usr_dep_sup";

		$fdata["sourceSingle"] = "usr_dep_sup";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_dep_sup";

	
	
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


	$tdataadmin_users["usr_dep_sup"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_dep_sup";
//	usr_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "usr_dependencia";
	$fdata["GoodName"] = "usr_dependencia";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_dependencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_dependencia";

		$fdata["sourceSingle"] = "usr_dependencia";

	
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


	$tdataadmin_users["usr_dependencia"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_dependencia";
//	usr_directivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "usr_directivo";
	$fdata["GoodName"] = "usr_directivo";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_directivo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usr_directivo";

		$fdata["sourceSingle"] = "usr_directivo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_directivo";

	
	
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


	$tdataadmin_users["usr_directivo"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_directivo";
//	usr_edl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "usr_edl";
	$fdata["GoodName"] = "usr_edl";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_edl");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usr_edl";

		$fdata["sourceSingle"] = "usr_edl";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_edl";

	
	
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


	$tdataadmin_users["usr_edl"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_edl";
//	usr_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "usr_email";
	$fdata["GoodName"] = "usr_email";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_email";

		$fdata["sourceSingle"] = "usr_email";

	
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


	$tdataadmin_users["usr_email"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_email";
//	usr_emergencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "usr_emergencia";
	$fdata["GoodName"] = "usr_emergencia";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_emergencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_emergencia";

		$fdata["sourceSingle"] = "usr_emergencia";

	
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


	$tdataadmin_users["usr_emergencia"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_emergencia";
//	usr_entidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "usr_entidad";
	$fdata["GoodName"] = "usr_entidad";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_entidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usr_entidad";

		$fdata["sourceSingle"] = "usr_entidad";

	
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


	$tdataadmin_users["usr_entidad"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_entidad";
//	usr_extension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "usr_extension";
	$fdata["GoodName"] = "usr_extension";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_extension");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_extension";

		$fdata["sourceSingle"] = "usr_extension";

	
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


	$tdataadmin_users["usr_extension"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_extension";
//	usr_firma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "usr_firma";
	$fdata["GoodName"] = "usr_firma";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_firma");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_firma";

		$fdata["sourceSingle"] = "usr_firma";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_firma";

	
	
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
			$edata["EditParams"].= " maxlength=400";

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


	$tdataadmin_users["usr_firma"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_firma";
//	usr_firma_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "usr_firma_b";
	$fdata["GoodName"] = "usr_firma_b";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_firma_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_firma_b";

		$fdata["sourceSingle"] = "usr_firma_b";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_firma_b";

	
	
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
			$edata["EditParams"].= " maxlength=400";

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


	$tdataadmin_users["usr_firma_b"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_firma_b";
//	usr_hojaruta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "usr_hojaruta";
	$fdata["GoodName"] = "usr_hojaruta";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_hojaruta");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "usr_hojaruta";

		$fdata["sourceSingle"] = "usr_hojaruta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_hojaruta";

	
	
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


	$tdataadmin_users["usr_hojaruta"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_hojaruta";
//	usr_image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "usr_image";
	$fdata["GoodName"] = "usr_image";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_image");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_image";

		$fdata["sourceSingle"] = "usr_image";

	
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


	$tdataadmin_users["usr_image"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_image";
//	usr_inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "usr_inicial";
	$fdata["GoodName"] = "usr_inicial";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_inicial");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_inicial";

		$fdata["sourceSingle"] = "usr_inicial";

	
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


	$tdataadmin_users["usr_inicial"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_inicial";
//	usr_jefe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "usr_jefe";
	$fdata["GoodName"] = "usr_jefe";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_jefe");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usr_jefe";

		$fdata["sourceSingle"] = "usr_jefe";

	
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


	$tdataadmin_users["usr_jefe"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_jefe";
//	usr_lname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "usr_lname";
	$fdata["GoodName"] = "usr_lname";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_lname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_lname";

		$fdata["sourceSingle"] = "usr_lname";

	
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


	$tdataadmin_users["usr_lname"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_lname";
//	usr_minequipo_grupo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "usr_minequipo_grupo";
	$fdata["GoodName"] = "usr_minequipo_grupo";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_minequipo_grupo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usr_minequipo_grupo";

		$fdata["sourceSingle"] = "usr_minequipo_grupo";

	
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


	$tdataadmin_users["usr_minequipo_grupo"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_minequipo_grupo";
//	usr_minequipo_lider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "usr_minequipo_lider";
	$fdata["GoodName"] = "usr_minequipo_lider";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_minequipo_lider");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "usr_minequipo_lider";

		$fdata["sourceSingle"] = "usr_minequipo_lider";

	
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


	$tdataadmin_users["usr_minequipo_lider"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_minequipo_lider";
//	usr_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "usr_name";
	$fdata["GoodName"] = "usr_name";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_name";

		$fdata["sourceSingle"] = "usr_name";

	
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


	$tdataadmin_users["usr_name"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_name";
//	usr_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "usr_nombresfull";
	$fdata["GoodName"] = "usr_nombresfull";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_nombresfull");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_nombresfull";

		$fdata["sourceSingle"] = "usr_nombresfull";

	
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


	$tdataadmin_users["usr_nombresfull"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_nombresfull";
//	usr_not
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "usr_not";
	$fdata["GoodName"] = "usr_not";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_not");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "usr_not";

		$fdata["sourceSingle"] = "usr_not";

	
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


	$tdataadmin_users["usr_not"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_not";
//	usr_not_msj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "usr_not_msj";
	$fdata["GoodName"] = "usr_not_msj";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_not_msj");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "usr_not_msj";

		$fdata["sourceSingle"] = "usr_not_msj";

	
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


	$tdataadmin_users["usr_not_msj"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_not_msj";
//	usr_personalid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "usr_personalid";
	$fdata["GoodName"] = "usr_personalid";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_personalid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_personalid";

		$fdata["sourceSingle"] = "usr_personalid";

	
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=15";

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


	$tdataadmin_users["usr_personalid"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_personalid";
//	usr_piso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "usr_piso";
	$fdata["GoodName"] = "usr_piso";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_piso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_piso";

		$fdata["sourceSingle"] = "usr_piso";

	
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


	$tdataadmin_users["usr_piso"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_piso";
//	usr_rdnkey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "usr_rdnkey";
	$fdata["GoodName"] = "usr_rdnkey";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_rdnkey");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_rdnkey";

		$fdata["sourceSingle"] = "usr_rdnkey";

	
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


	$tdataadmin_users["usr_rdnkey"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_rdnkey";
//	usr_regpago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "usr_regpago";
	$fdata["GoodName"] = "usr_regpago";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_regpago");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "usr_regpago";

		$fdata["sourceSingle"] = "usr_regpago";

	
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


	$tdataadmin_users["usr_regpago"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_regpago";
//	usr_sessini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "usr_sessini";
	$fdata["GoodName"] = "usr_sessini";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_sessini");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "usr_sessini";

		$fdata["sourceSingle"] = "usr_sessini";

	
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


	$tdataadmin_users["usr_sessini"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_sessini";
//	usr_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "usr_status";
	$fdata["GoodName"] = "usr_status";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_status");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "usr_status";

		$fdata["sourceSingle"] = "usr_status";

	
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


	$tdataadmin_users["usr_status"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_status";
//	usr_status_nomina
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "usr_status_nomina";
	$fdata["GoodName"] = "usr_status_nomina";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_status_nomina");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usr_status_nomina";

		$fdata["sourceSingle"] = "usr_status_nomina";

	
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


	$tdataadmin_users["usr_status_nomina"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_status_nomina";
//	usr_status_sol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "usr_status_sol";
	$fdata["GoodName"] = "usr_status_sol";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_status_sol");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "usr_status_sol";

		$fdata["sourceSingle"] = "usr_status_sol";

	
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


	$tdataadmin_users["usr_status_sol"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_status_sol";
//	usr_type_vinc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "usr_type_vinc";
	$fdata["GoodName"] = "usr_type_vinc";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_type_vinc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_type_vinc";

		$fdata["sourceSingle"] = "usr_type_vinc";

	
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=4";

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


	$tdataadmin_users["usr_type_vinc"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_type_vinc";
//	usr_type_vinculacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "usr_type_vinculacion";
	$fdata["GoodName"] = "usr_type_vinculacion";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_type_vinculacion");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "usr_type_vinculacion";

		$fdata["sourceSingle"] = "usr_type_vinculacion";

	
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


	$tdataadmin_users["usr_type_vinculacion"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_type_vinculacion";
//	usr_update_almacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "usr_update_almacen";
	$fdata["GoodName"] = "usr_update_almacen";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","usr_update_almacen");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "usr_update_almacen";

		$fdata["sourceSingle"] = "usr_update_almacen";

	
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


	$tdataadmin_users["usr_update_almacen"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "usr_update_almacen";
//	vacuna_a_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "vacuna_a_fecha";
	$fdata["GoodName"] = "vacuna_a_fecha";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","vacuna_a_fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "vacuna_a_fecha";

		$fdata["sourceSingle"] = "vacuna_a_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vacuna_a_fecha";

	
	
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


	$tdataadmin_users["vacuna_a_fecha"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "vacuna_a_fecha";
//	vacuna_autoriza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "vacuna_autoriza";
	$fdata["GoodName"] = "vacuna_autoriza";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","vacuna_autoriza");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "vacuna_autoriza";

		$fdata["sourceSingle"] = "vacuna_autoriza";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vacuna_autoriza";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdataadmin_users["vacuna_autoriza"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "vacuna_autoriza";
//	vacuna_autoriza_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "vacuna_autoriza_email";
	$fdata["GoodName"] = "vacuna_autoriza_email";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","vacuna_autoriza_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "vacuna_autoriza_email";

		$fdata["sourceSingle"] = "vacuna_autoriza_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vacuna_autoriza_email";

	
	
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
			$edata["EditParams"].= " maxlength=120";

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


	$tdataadmin_users["vacuna_autoriza_email"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "vacuna_autoriza_email";
//	vacuna_b_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "vacuna_b_fecha";
	$fdata["GoodName"] = "vacuna_b_fecha";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","vacuna_b_fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "vacuna_b_fecha";

		$fdata["sourceSingle"] = "vacuna_b_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vacuna_b_fecha";

	
	
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


	$tdataadmin_users["vacuna_b_fecha"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "vacuna_b_fecha";
//	vacuna_b_fechaprog
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "vacuna_b_fechaprog";
	$fdata["GoodName"] = "vacuna_b_fechaprog";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","vacuna_b_fechaprog");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "vacuna_b_fechaprog";

		$fdata["sourceSingle"] = "vacuna_b_fechaprog";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vacuna_b_fechaprog";

	
	
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


	$tdataadmin_users["vacuna_b_fechaprog"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "vacuna_b_fechaprog";
//	vacuna_c_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "vacuna_c_fecha";
	$fdata["GoodName"] = "vacuna_c_fecha";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","vacuna_c_fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "vacuna_c_fecha";

		$fdata["sourceSingle"] = "vacuna_c_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vacuna_c_fecha";

	
	
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


	$tdataadmin_users["vacuna_c_fecha"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "vacuna_c_fecha";
//	vacuna_consentimiento_sn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "vacuna_consentimiento_sn";
	$fdata["GoodName"] = "vacuna_consentimiento_sn";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","vacuna_consentimiento_sn");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "vacuna_consentimiento_sn";

		$fdata["sourceSingle"] = "vacuna_consentimiento_sn";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vacuna_consentimiento_sn";

	
	
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


	$tdataadmin_users["vacuna_consentimiento_sn"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "vacuna_consentimiento_sn";
//	vacuna_dosis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "vacuna_dosis";
	$fdata["GoodName"] = "vacuna_dosis";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","vacuna_dosis");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "vacuna_dosis";

		$fdata["sourceSingle"] = "vacuna_dosis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vacuna_dosis";

	
	
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


	$tdataadmin_users["vacuna_dosis"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "vacuna_dosis";
//	vacuna_etapa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "vacuna_etapa";
	$fdata["GoodName"] = "vacuna_etapa";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","vacuna_etapa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "vacuna_etapa";

		$fdata["sourceSingle"] = "vacuna_etapa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vacuna_etapa";

	
	
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


	$tdataadmin_users["vacuna_etapa"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "vacuna_etapa";
//	vacuna_interes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "vacuna_interes";
	$fdata["GoodName"] = "vacuna_interes";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","vacuna_interes");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "vacuna_interes";

		$fdata["sourceSingle"] = "vacuna_interes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vacuna_interes";

	
	
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


	$tdataadmin_users["vacuna_interes"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "vacuna_interes";
//	vacuna_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "vacuna_nombre";
	$fdata["GoodName"] = "vacuna_nombre";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","vacuna_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "vacuna_nombre";

		$fdata["sourceSingle"] = "vacuna_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vacuna_nombre";

	
	
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


	$tdataadmin_users["vacuna_nombre"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "vacuna_nombre";
//	vacuna_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "vacuna_obs";
	$fdata["GoodName"] = "vacuna_obs";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","vacuna_obs");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "vacuna_obs";

		$fdata["sourceSingle"] = "vacuna_obs";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vacuna_obs";

	
	
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


	$tdataadmin_users["vacuna_obs"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "vacuna_obs";
//	vacuna_sn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "vacuna_sn";
	$fdata["GoodName"] = "vacuna_sn";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("admin_users","vacuna_sn");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "vacuna_sn";

		$fdata["sourceSingle"] = "vacuna_sn";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vacuna_sn";

	
	
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


	$tdataadmin_users["vacuna_sn"] = $fdata;
		$tdataadmin_users[".searchableFields"][] = "vacuna_sn";


$tables_data["admin_users"]=&$tdataadmin_users;
$field_labels["admin_users"] = &$fieldLabelsadmin_users;
$fieldToolTips["admin_users"] = &$fieldToolTipsadmin_users;
$placeHolders["admin_users"] = &$placeHoldersadmin_users;
$page_titles["admin_users"] = &$pageTitlesadmin_users;


changeTextControlsToDate( "admin_users" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["admin_users"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["admin_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_admin_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "active,  	covid_fecha,  	covid_sn,  	ctrl,  	ctrl_contacto,  	ctrl_pedidoalmacen,  	estado_vinculacion_mincit,  	ext_security_id,  	global_rol,  	global_rol_almacen,  	global_rol_cej,  	global_rol_ci,  	global_rol_ciudadano,  	global_rol_ciudadano_dep,  	global_rol_comacc,  	global_rol_cont,  	global_rol_contratos,  	global_rol_cpanel,  	global_rol_dashboard,  	global_rol_gestion,  	global_rol_gh,  	global_rol_hojar,  	global_rol_inmuebles,  	global_rol_jc3,  	global_rol_me,  	global_rol_procjur,  	global_rol_sid,  	global_rol_siis,  	global_rol_sipi,  	global_rol_th,  	global_rol_zf,  	globla_rol_ct,  	groupid,  	habilita_almacen,  	id_fk,  	idusrglobal,  	Password,  	phone,  	phone1,  	reset_date,  	reset_token,  	sys_anio,  	sys_date,  	sys_disabledate_usr,  	sys_expiration_usr,  	sys_ntries_usr,  	sys_registrationdate_usr,  	sys_time,  	sys_upd_fecha,  	sys_upd_time,  	sys_upd_user,  	sys_update_family_info,  	sys_update_info,  	sys_user,  	upd_date,  	user_dep,  	Username,  	userpic,  	usr_cargo,  	usr_datebirth,  	usr_dep,  	usr_dep_sup,  	usr_dependencia,  	usr_directivo,  	usr_edl,  	usr_email,  	usr_emergencia,  	usr_entidad,  	usr_extension,  	usr_firma,  	usr_firma_b,  	usr_hojaruta,  	usr_image,  	usr_inicial,  	usr_jefe,  	usr_lname,  	usr_minequipo_grupo,  	usr_minequipo_lider,  	usr_name,  	usr_nombresfull,  	usr_not,  	usr_not_msj,  	usr_personalid,  	usr_piso,  	usr_rdnkey,  	usr_regpago,  	usr_sessini,  	usr_status,  	usr_status_nomina,  	usr_status_sol,  	usr_type_vinc,  	usr_type_vinculacion,  	usr_update_almacen,  	vacuna_a_fecha,  	vacuna_autoriza,  	vacuna_autoriza_email,  	vacuna_b_fecha,  	vacuna_b_fechaprog,  	vacuna_c_fecha,  	vacuna_consentimiento_sn,  	vacuna_dosis,  	vacuna_etapa,  	vacuna_interes,  	vacuna_nombre,  	vacuna_obs,  	vacuna_sn";
$proto0["m_strFrom"] = "FROM global_users";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
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
	"m_strName" => "active",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto6["m_sql"] = "active";
$proto6["m_srcTableName"] = "admin_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "covid_fecha",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto8["m_sql"] = "covid_fecha";
$proto8["m_srcTableName"] = "admin_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "covid_sn",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto10["m_sql"] = "covid_sn";
$proto10["m_srcTableName"] = "admin_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ctrl",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto12["m_sql"] = "ctrl";
$proto12["m_srcTableName"] = "admin_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ctrl_contacto",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto14["m_sql"] = "ctrl_contacto";
$proto14["m_srcTableName"] = "admin_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ctrl_pedidoalmacen",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto16["m_sql"] = "ctrl_pedidoalmacen";
$proto16["m_srcTableName"] = "admin_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_vinculacion_mincit",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto18["m_sql"] = "estado_vinculacion_mincit";
$proto18["m_srcTableName"] = "admin_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto20["m_sql"] = "ext_security_id";
$proto20["m_srcTableName"] = "admin_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto22["m_sql"] = "global_rol";
$proto22["m_srcTableName"] = "admin_users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_almacen",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto24["m_sql"] = "global_rol_almacen";
$proto24["m_srcTableName"] = "admin_users";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_cej",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto26["m_sql"] = "global_rol_cej";
$proto26["m_srcTableName"] = "admin_users";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_ci",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto28["m_sql"] = "global_rol_ci";
$proto28["m_srcTableName"] = "admin_users";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_ciudadano",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto30["m_sql"] = "global_rol_ciudadano";
$proto30["m_srcTableName"] = "admin_users";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_ciudadano_dep",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto32["m_sql"] = "global_rol_ciudadano_dep";
$proto32["m_srcTableName"] = "admin_users";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_comacc",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto34["m_sql"] = "global_rol_comacc";
$proto34["m_srcTableName"] = "admin_users";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_cont",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto36["m_sql"] = "global_rol_cont";
$proto36["m_srcTableName"] = "admin_users";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_contratos",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto38["m_sql"] = "global_rol_contratos";
$proto38["m_srcTableName"] = "admin_users";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_cpanel",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto40["m_sql"] = "global_rol_cpanel";
$proto40["m_srcTableName"] = "admin_users";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_dashboard",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto42["m_sql"] = "global_rol_dashboard";
$proto42["m_srcTableName"] = "admin_users";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_gestion",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto44["m_sql"] = "global_rol_gestion";
$proto44["m_srcTableName"] = "admin_users";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_gh",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto46["m_sql"] = "global_rol_gh";
$proto46["m_srcTableName"] = "admin_users";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_hojar",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto48["m_sql"] = "global_rol_hojar";
$proto48["m_srcTableName"] = "admin_users";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_inmuebles",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto50["m_sql"] = "global_rol_inmuebles";
$proto50["m_srcTableName"] = "admin_users";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_jc3",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto52["m_sql"] = "global_rol_jc3";
$proto52["m_srcTableName"] = "admin_users";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_me",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto54["m_sql"] = "global_rol_me";
$proto54["m_srcTableName"] = "admin_users";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_procjur",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto56["m_sql"] = "global_rol_procjur";
$proto56["m_srcTableName"] = "admin_users";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_sid",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto58["m_sql"] = "global_rol_sid";
$proto58["m_srcTableName"] = "admin_users";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_siis",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto60["m_sql"] = "global_rol_siis";
$proto60["m_srcTableName"] = "admin_users";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_sipi",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto62["m_sql"] = "global_rol_sipi";
$proto62["m_srcTableName"] = "admin_users";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_th",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto64["m_sql"] = "global_rol_th";
$proto64["m_srcTableName"] = "admin_users";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "global_rol_zf",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto66["m_sql"] = "global_rol_zf";
$proto66["m_srcTableName"] = "admin_users";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "globla_rol_ct",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto68["m_sql"] = "globla_rol_ct";
$proto68["m_srcTableName"] = "admin_users";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto70["m_sql"] = "groupid";
$proto70["m_srcTableName"] = "admin_users";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "habilita_almacen",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto72["m_sql"] = "habilita_almacen";
$proto72["m_srcTableName"] = "admin_users";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "id_fk",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto74["m_sql"] = "id_fk";
$proto74["m_srcTableName"] = "admin_users";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "idusrglobal",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto76["m_sql"] = "idusrglobal";
$proto76["m_srcTableName"] = "admin_users";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto78["m_sql"] = "Password";
$proto78["m_srcTableName"] = "admin_users";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto80["m_sql"] = "phone";
$proto80["m_srcTableName"] = "admin_users";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "phone1",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto82["m_sql"] = "phone1";
$proto82["m_srcTableName"] = "admin_users";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto84["m_sql"] = "reset_date";
$proto84["m_srcTableName"] = "admin_users";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_token",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto86["m_sql"] = "reset_token";
$proto86["m_srcTableName"] = "admin_users";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_anio",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto88["m_sql"] = "sys_anio";
$proto88["m_srcTableName"] = "admin_users";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto90["m_sql"] = "sys_date";
$proto90["m_srcTableName"] = "admin_users";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_disabledate_usr",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto92["m_sql"] = "sys_disabledate_usr";
$proto92["m_srcTableName"] = "admin_users";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_expiration_usr",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto94["m_sql"] = "sys_expiration_usr";
$proto94["m_srcTableName"] = "admin_users";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_ntries_usr",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto96["m_sql"] = "sys_ntries_usr";
$proto96["m_srcTableName"] = "admin_users";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_registrationdate_usr",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto98["m_sql"] = "sys_registrationdate_usr";
$proto98["m_srcTableName"] = "admin_users";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_time",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto100["m_sql"] = "sys_time";
$proto100["m_srcTableName"] = "admin_users";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_upd_fecha",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto102["m_sql"] = "sys_upd_fecha";
$proto102["m_srcTableName"] = "admin_users";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_upd_time",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto104["m_sql"] = "sys_upd_time";
$proto104["m_srcTableName"] = "admin_users";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_upd_user",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto106["m_sql"] = "sys_upd_user";
$proto106["m_srcTableName"] = "admin_users";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_update_family_info",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto108["m_sql"] = "sys_update_family_info";
$proto108["m_srcTableName"] = "admin_users";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_update_info",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto110["m_sql"] = "sys_update_info";
$proto110["m_srcTableName"] = "admin_users";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto112["m_sql"] = "sys_user";
$proto112["m_srcTableName"] = "admin_users";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "upd_date",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto114["m_sql"] = "upd_date";
$proto114["m_srcTableName"] = "admin_users";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "user_dep",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto116["m_sql"] = "user_dep";
$proto116["m_srcTableName"] = "admin_users";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto118["m_sql"] = "Username";
$proto118["m_srcTableName"] = "admin_users";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "userpic",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto120["m_sql"] = "userpic";
$proto120["m_srcTableName"] = "admin_users";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_cargo",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto122["m_sql"] = "usr_cargo";
$proto122["m_srcTableName"] = "admin_users";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_datebirth",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto124["m_sql"] = "usr_datebirth";
$proto124["m_srcTableName"] = "admin_users";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_dep",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto126["m_sql"] = "usr_dep";
$proto126["m_srcTableName"] = "admin_users";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_dep_sup",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto128["m_sql"] = "usr_dep_sup";
$proto128["m_srcTableName"] = "admin_users";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_dependencia",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto130["m_sql"] = "usr_dependencia";
$proto130["m_srcTableName"] = "admin_users";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_directivo",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto132["m_sql"] = "usr_directivo";
$proto132["m_srcTableName"] = "admin_users";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_edl",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto134["m_sql"] = "usr_edl";
$proto134["m_srcTableName"] = "admin_users";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_email",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto136["m_sql"] = "usr_email";
$proto136["m_srcTableName"] = "admin_users";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_emergencia",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto138["m_sql"] = "usr_emergencia";
$proto138["m_srcTableName"] = "admin_users";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_entidad",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto140["m_sql"] = "usr_entidad";
$proto140["m_srcTableName"] = "admin_users";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_extension",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto142["m_sql"] = "usr_extension";
$proto142["m_srcTableName"] = "admin_users";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_firma",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto144["m_sql"] = "usr_firma";
$proto144["m_srcTableName"] = "admin_users";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_firma_b",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto146["m_sql"] = "usr_firma_b";
$proto146["m_srcTableName"] = "admin_users";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_hojaruta",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto148["m_sql"] = "usr_hojaruta";
$proto148["m_srcTableName"] = "admin_users";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_image",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto150["m_sql"] = "usr_image";
$proto150["m_srcTableName"] = "admin_users";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_inicial",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto152["m_sql"] = "usr_inicial";
$proto152["m_srcTableName"] = "admin_users";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_jefe",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto154["m_sql"] = "usr_jefe";
$proto154["m_srcTableName"] = "admin_users";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_lname",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto156["m_sql"] = "usr_lname";
$proto156["m_srcTableName"] = "admin_users";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_minequipo_grupo",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto158["m_sql"] = "usr_minequipo_grupo";
$proto158["m_srcTableName"] = "admin_users";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_minequipo_lider",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto160["m_sql"] = "usr_minequipo_lider";
$proto160["m_srcTableName"] = "admin_users";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_name",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto162["m_sql"] = "usr_name";
$proto162["m_srcTableName"] = "admin_users";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_nombresfull",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto164["m_sql"] = "usr_nombresfull";
$proto164["m_srcTableName"] = "admin_users";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_not",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto166["m_sql"] = "usr_not";
$proto166["m_srcTableName"] = "admin_users";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_not_msj",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto168["m_sql"] = "usr_not_msj";
$proto168["m_srcTableName"] = "admin_users";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_personalid",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto170["m_sql"] = "usr_personalid";
$proto170["m_srcTableName"] = "admin_users";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_piso",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto172["m_sql"] = "usr_piso";
$proto172["m_srcTableName"] = "admin_users";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_rdnkey",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto174["m_sql"] = "usr_rdnkey";
$proto174["m_srcTableName"] = "admin_users";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_regpago",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto176["m_sql"] = "usr_regpago";
$proto176["m_srcTableName"] = "admin_users";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_sessini",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto178["m_sql"] = "usr_sessini";
$proto178["m_srcTableName"] = "admin_users";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_status",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto180["m_sql"] = "usr_status";
$proto180["m_srcTableName"] = "admin_users";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_status_nomina",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto182["m_sql"] = "usr_status_nomina";
$proto182["m_srcTableName"] = "admin_users";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_status_sol",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto184["m_sql"] = "usr_status_sol";
$proto184["m_srcTableName"] = "admin_users";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_type_vinc",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto186["m_sql"] = "usr_type_vinc";
$proto186["m_srcTableName"] = "admin_users";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_type_vinculacion",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto188["m_sql"] = "usr_type_vinculacion";
$proto188["m_srcTableName"] = "admin_users";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_update_almacen",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto190["m_sql"] = "usr_update_almacen";
$proto190["m_srcTableName"] = "admin_users";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "vacuna_a_fecha",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto192["m_sql"] = "vacuna_a_fecha";
$proto192["m_srcTableName"] = "admin_users";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "vacuna_autoriza",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto194["m_sql"] = "vacuna_autoriza";
$proto194["m_srcTableName"] = "admin_users";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "vacuna_autoriza_email",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto196["m_sql"] = "vacuna_autoriza_email";
$proto196["m_srcTableName"] = "admin_users";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "vacuna_b_fecha",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto198["m_sql"] = "vacuna_b_fecha";
$proto198["m_srcTableName"] = "admin_users";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "vacuna_b_fechaprog",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto200["m_sql"] = "vacuna_b_fechaprog";
$proto200["m_srcTableName"] = "admin_users";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "vacuna_c_fecha",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto202["m_sql"] = "vacuna_c_fecha";
$proto202["m_srcTableName"] = "admin_users";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "vacuna_consentimiento_sn",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto204["m_sql"] = "vacuna_consentimiento_sn";
$proto204["m_srcTableName"] = "admin_users";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "vacuna_dosis",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto206["m_sql"] = "vacuna_dosis";
$proto206["m_srcTableName"] = "admin_users";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "vacuna_etapa",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto208["m_sql"] = "vacuna_etapa";
$proto208["m_srcTableName"] = "admin_users";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "vacuna_interes",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto210["m_sql"] = "vacuna_interes";
$proto210["m_srcTableName"] = "admin_users";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "vacuna_nombre",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto212["m_sql"] = "vacuna_nombre";
$proto212["m_srcTableName"] = "admin_users";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "vacuna_obs",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto214["m_sql"] = "vacuna_obs";
$proto214["m_srcTableName"] = "admin_users";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
						$proto216=array();
			$obj = new SQLField(array(
	"m_strName" => "vacuna_sn",
	"m_strTable" => "global_users",
	"m_srcTableName" => "admin_users"
));

$proto216["m_sql"] = "vacuna_sn";
$proto216["m_srcTableName"] = "admin_users";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "";
$obj = new SQLFieldListItem($proto216);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto218=array();
$proto218["m_link"] = "SQLL_MAIN";
			$proto219=array();
$proto219["m_strName"] = "global_users";
$proto219["m_srcTableName"] = "admin_users";
$proto219["m_columns"] = array();
$proto219["m_columns"][] = "active";
$proto219["m_columns"][] = "covid_fecha";
$proto219["m_columns"][] = "covid_sn";
$proto219["m_columns"][] = "ctrl";
$proto219["m_columns"][] = "ctrl_contacto";
$proto219["m_columns"][] = "ctrl_pedidoalmacen";
$proto219["m_columns"][] = "estado_vinculacion_mincit";
$proto219["m_columns"][] = "ext_security_id";
$proto219["m_columns"][] = "global_rol";
$proto219["m_columns"][] = "global_rol_almacen";
$proto219["m_columns"][] = "global_rol_cej";
$proto219["m_columns"][] = "global_rol_ci";
$proto219["m_columns"][] = "global_rol_ciudadano";
$proto219["m_columns"][] = "global_rol_ciudadano_dep";
$proto219["m_columns"][] = "global_rol_comacc";
$proto219["m_columns"][] = "global_rol_cont";
$proto219["m_columns"][] = "global_rol_contratos";
$proto219["m_columns"][] = "global_rol_cpanel";
$proto219["m_columns"][] = "global_rol_dashboard";
$proto219["m_columns"][] = "global_rol_gestion";
$proto219["m_columns"][] = "global_rol_gh";
$proto219["m_columns"][] = "global_rol_hojar";
$proto219["m_columns"][] = "global_rol_inmuebles";
$proto219["m_columns"][] = "global_rol_jc3";
$proto219["m_columns"][] = "global_rol_me";
$proto219["m_columns"][] = "global_rol_procjur";
$proto219["m_columns"][] = "global_rol_sid";
$proto219["m_columns"][] = "global_rol_siis";
$proto219["m_columns"][] = "global_rol_sipi";
$proto219["m_columns"][] = "global_rol_th";
$proto219["m_columns"][] = "global_rol_zf";
$proto219["m_columns"][] = "globla_rol_ct";
$proto219["m_columns"][] = "groupid";
$proto219["m_columns"][] = "habilita_almacen";
$proto219["m_columns"][] = "id_fk";
$proto219["m_columns"][] = "idusrglobal";
$proto219["m_columns"][] = "Password";
$proto219["m_columns"][] = "phone";
$proto219["m_columns"][] = "phone1";
$proto219["m_columns"][] = "reset_date";
$proto219["m_columns"][] = "reset_token";
$proto219["m_columns"][] = "sys_anio";
$proto219["m_columns"][] = "sys_date";
$proto219["m_columns"][] = "sys_disabledate_usr";
$proto219["m_columns"][] = "sys_expiration_usr";
$proto219["m_columns"][] = "sys_ntries_usr";
$proto219["m_columns"][] = "sys_registrationdate_usr";
$proto219["m_columns"][] = "sys_time";
$proto219["m_columns"][] = "sys_upd_fecha";
$proto219["m_columns"][] = "sys_upd_time";
$proto219["m_columns"][] = "sys_upd_user";
$proto219["m_columns"][] = "sys_update_family_info";
$proto219["m_columns"][] = "sys_update_info";
$proto219["m_columns"][] = "sys_user";
$proto219["m_columns"][] = "upd_date";
$proto219["m_columns"][] = "user_dep";
$proto219["m_columns"][] = "Username";
$proto219["m_columns"][] = "userpic";
$proto219["m_columns"][] = "usr_cargo";
$proto219["m_columns"][] = "usr_datebirth";
$proto219["m_columns"][] = "usr_dep";
$proto219["m_columns"][] = "usr_dep_sup";
$proto219["m_columns"][] = "usr_dependencia";
$proto219["m_columns"][] = "usr_directivo";
$proto219["m_columns"][] = "usr_edl";
$proto219["m_columns"][] = "usr_email";
$proto219["m_columns"][] = "usr_emergencia";
$proto219["m_columns"][] = "usr_entidad";
$proto219["m_columns"][] = "usr_extension";
$proto219["m_columns"][] = "usr_firma";
$proto219["m_columns"][] = "usr_firma_b";
$proto219["m_columns"][] = "usr_hojaruta";
$proto219["m_columns"][] = "usr_image";
$proto219["m_columns"][] = "usr_inicial";
$proto219["m_columns"][] = "usr_jefe";
$proto219["m_columns"][] = "usr_lname";
$proto219["m_columns"][] = "usr_minequipo_grupo";
$proto219["m_columns"][] = "usr_minequipo_lider";
$proto219["m_columns"][] = "usr_name";
$proto219["m_columns"][] = "usr_nombresfull";
$proto219["m_columns"][] = "usr_not";
$proto219["m_columns"][] = "usr_not_msj";
$proto219["m_columns"][] = "usr_personalid";
$proto219["m_columns"][] = "usr_piso";
$proto219["m_columns"][] = "usr_rdnkey";
$proto219["m_columns"][] = "usr_regpago";
$proto219["m_columns"][] = "usr_sessini";
$proto219["m_columns"][] = "usr_status";
$proto219["m_columns"][] = "usr_status_nomina";
$proto219["m_columns"][] = "usr_status_sol";
$proto219["m_columns"][] = "usr_type_vinc";
$proto219["m_columns"][] = "usr_type_vinculacion";
$proto219["m_columns"][] = "usr_update_almacen";
$proto219["m_columns"][] = "vacuna_a_fecha";
$proto219["m_columns"][] = "vacuna_autoriza";
$proto219["m_columns"][] = "vacuna_autoriza_email";
$proto219["m_columns"][] = "vacuna_b_fecha";
$proto219["m_columns"][] = "vacuna_b_fechaprog";
$proto219["m_columns"][] = "vacuna_c_fecha";
$proto219["m_columns"][] = "vacuna_consentimiento_sn";
$proto219["m_columns"][] = "vacuna_dosis";
$proto219["m_columns"][] = "vacuna_etapa";
$proto219["m_columns"][] = "vacuna_interes";
$proto219["m_columns"][] = "vacuna_nombre";
$proto219["m_columns"][] = "vacuna_obs";
$proto219["m_columns"][] = "vacuna_sn";
$obj = new SQLTable($proto219);

$proto218["m_table"] = $obj;
$proto218["m_sql"] = "global_users";
$proto218["m_alias"] = "";
$proto218["m_srcTableName"] = "admin_users";
$proto220=array();
$proto220["m_sql"] = "";
$proto220["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto220["m_column"]=$obj;
$proto220["m_contained"] = array();
$proto220["m_strCase"] = "";
$proto220["m_havingmode"] = false;
$proto220["m_inBrackets"] = false;
$proto220["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto220);

$proto218["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto218);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="admin_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_users = createSqlQuery_admin_users();


	
								;

																																																																																																																																																																																																																																																																																

$tdataadmin_users[".sqlquery"] = $queryData_admin_users;



$tdataadmin_users[".hasEvents"] = false;

?>