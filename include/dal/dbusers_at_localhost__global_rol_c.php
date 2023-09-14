<?php
$dalTableglobal_rol_c = array();
$dalTableglobal_rol_c["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableglobal_rol_c["id_rol"] = array("type"=>3,"varname"=>"id_rol", "name" => "id_rol", "autoInc" => "0");
$dalTableglobal_rol_c["id_site_fk"] = array("type"=>2,"varname"=>"id_site_fk", "name" => "id_site_fk", "autoInc" => "0");
$dalTableglobal_rol_c["rol_name"] = array("type"=>200,"varname"=>"rol_name", "name" => "rol_name", "autoInc" => "0");
$dalTableglobal_rol_c["rol_status"] = array("type"=>16,"varname"=>"rol_status", "name" => "rol_status", "autoInc" => "0");
$dalTableglobal_rol_c["id"]["key"]=true;

$dal_info["dbusers_at_localhost__global_rol_c"] = &$dalTableglobal_rol_c;
?>