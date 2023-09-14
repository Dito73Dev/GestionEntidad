<?php
$dalTablepolizas_aseguradoras = array();
$dalTablepolizas_aseguradoras["aseguradora_id"] = array("type"=>3,"varname"=>"aseguradora_id", "name" => "aseguradora_id", "autoInc" => "1");
$dalTablepolizas_aseguradoras["codigo"] = array("type"=>200,"varname"=>"codigo", "name" => "codigo", "autoInc" => "0");
$dalTablepolizas_aseguradoras["nom_aseguradora"] = array("type"=>200,"varname"=>"nom_aseguradora", "name" => "nom_aseguradora", "autoInc" => "0");
$dalTablepolizas_aseguradoras["aseguradora_id"]["key"]=true;

$dal_info["dbct_at_localhost__polizas_aseguradoras"] = &$dalTablepolizas_aseguradoras;
?>