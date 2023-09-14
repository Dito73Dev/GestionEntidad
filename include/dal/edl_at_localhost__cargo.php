<?php
$dalTablecargo = array();
$dalTablecargo["cargo"] = array("type"=>200,"varname"=>"cargo", "name" => "cargo", "autoInc" => "0");
$dalTablecargo["codcar"] = array("type"=>200,"varname"=>"codcar", "name" => "codcar", "autoInc" => "0");
$dalTablecargo["Directivo"] = array("type"=>16,"varname"=>"Directivo", "name" => "Directivo", "autoInc" => "0");
$dalTablecargo["estado"] = array("type"=>20,"varname"=>"estado", "name" => "estado", "autoInc" => "0");
$dalTablecargo["ExperienciaMeses"] = array("type"=>14,"varname"=>"ExperienciaMeses", "name" => "ExperienciaMeses", "autoInc" => "0");
$dalTablecargo["grado"] = array("type"=>200,"varname"=>"grado", "name" => "grado", "autoInc" => "0");
$dalTablecargo["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablecargo["idComportamentalFK"] = array("type"=>3,"varname"=>"idComportamentalFK", "name" => "idComportamentalFK", "autoInc" => "0");
$dalTablecargo["nombre"] = array("type"=>200,"varname"=>"nombre", "name" => "nombre", "autoInc" => "0");
$dalTablecargo["propositoPrincipal"] = array("type"=>200,"varname"=>"propositoPrincipal", "name" => "propositoPrincipal", "autoInc" => "0");
$dalTablecargo["id"]["key"]=true;

$dal_info["edl_at_localhost__cargo"] = &$dalTablecargo;
?>