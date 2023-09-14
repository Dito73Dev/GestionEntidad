<?php
$dalTableglobal_status = array();
$dalTableglobal_status["id_status"] = array("type"=>16,"varname"=>"id_status", "name" => "id_status", "autoInc" => "1");
$dalTableglobal_status["status_name"] = array("type"=>200,"varname"=>"status_name", "name" => "status_name", "autoInc" => "0");
$dalTableglobal_status["id_status"]["key"]=true;

$dal_info["dbusers_at_localhost__global_status"] = &$dalTableglobal_status;
?>