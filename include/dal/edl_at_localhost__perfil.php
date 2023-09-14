<?php
$dalTableperfil = array();
$dalTableperfil["estado"] = array("type"=>20,"varname"=>"estado", "name" => "estado", "autoInc" => "0");
$dalTableperfil["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableperfil["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre", "autoInc" => "0");
$dalTableperfil["id"]["key"]=true;

$dal_info["edl_at_localhost__perfil"] = &$dalTableperfil;
?>