<?php
$tdataep_obligaciones = array();
$tdataep_obligaciones[".searchableFields"] = array();
$tdataep_obligaciones[".ShortName"] = "ep_obligaciones";
$tdataep_obligaciones[".OwnerID"] = "";
$tdataep_obligaciones[".OriginalTable"] = "ep_obligaciones";


$tdataep_obligaciones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataep_obligaciones[".originalPagesByType"] = $tdataep_obligaciones[".pagesByType"];
$tdataep_obligaciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataep_obligaciones[".originalPages"] = $tdataep_obligaciones[".pages"];
$tdataep_obligaciones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataep_obligaciones[".originalDefaultPages"] = $tdataep_obligaciones[".defaultPages"];

//	field labels
$fieldLabelsep_obligaciones = array();
$fieldToolTipsep_obligaciones = array();
$pageTitlesep_obligaciones = array();
$placeHoldersep_obligaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsep_obligaciones["Spanish"] = array();
	$fieldToolTipsep_obligaciones["Spanish"] = array();
	$placeHoldersep_obligaciones["Spanish"] = array();
	$pageTitlesep_obligaciones["Spanish"] = array();
	$fieldLabelsep_obligaciones["Spanish"]["OID"] = "OID";
	$fieldToolTipsep_obligaciones["Spanish"]["OID"] = "";
	$placeHoldersep_obligaciones["Spanish"]["OID"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Numero_Documento"] = "Numero Documento";
	$fieldToolTipsep_obligaciones["Spanish"]["Numero_Documento"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Numero_Documento"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Fecha_de_Registro"] = "Fecha de Registro";
	$fieldToolTipsep_obligaciones["Spanish"]["Fecha_de_Registro"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Fecha_de_Registro"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Fecha_de_Creacion"] = "Fecha de Creacion";
	$fieldToolTipsep_obligaciones["Spanish"]["Fecha_de_Creacion"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Fecha_de_Creacion"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsep_obligaciones["Spanish"]["Estado"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Estado"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Valor_Actual"] = "Valor Actual";
	$fieldToolTipsep_obligaciones["Spanish"]["Valor_Actual"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Valor_Actual"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Valor_Deducciones"] = "Valor Deducciones";
	$fieldToolTipsep_obligaciones["Spanish"]["Valor_Deducciones"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Valor_Deducciones"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Valor_Oblig_no_Orden"] = "Valor Oblig no Orden";
	$fieldToolTipsep_obligaciones["Spanish"]["Valor_Oblig_no_Orden"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Valor_Oblig_no_Orden"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Tipo_Identificacion"] = "Tipo Identificacion";
	$fieldToolTipsep_obligaciones["Spanish"]["Tipo_Identificacion"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Tipo_Identificacion"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Identificacion"] = "Identificacion";
	$fieldToolTipsep_obligaciones["Spanish"]["Identificacion"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Identificacion"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Nombre_Razon_Social"] = "Nombre Razon Social";
	$fieldToolTipsep_obligaciones["Spanish"]["Nombre_Razon_Social"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Nombre_Razon_Social"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Medio_de_Pago"] = "Medio de Pago";
	$fieldToolTipsep_obligaciones["Spanish"]["Medio_de_Pago"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Medio_de_Pago"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Tipo_Cuenta"] = "Tipo Cuenta";
	$fieldToolTipsep_obligaciones["Spanish"]["Tipo_Cuenta"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Tipo_Cuenta"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Numero_Cuenta"] = "Numero Cuenta";
	$fieldToolTipsep_obligaciones["Spanish"]["Numero_Cuenta"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Numero_Cuenta"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Estado_Cuenta"] = "Estado Cuenta";
	$fieldToolTipsep_obligaciones["Spanish"]["Estado_Cuenta"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Estado_Cuenta"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Entidad_Nit"] = "Entidad Nit";
	$fieldToolTipsep_obligaciones["Spanish"]["Entidad_Nit"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Entidad_Nit"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Entidad_Descripcion"] = "Entidad Descripcion";
	$fieldToolTipsep_obligaciones["Spanish"]["Entidad_Descripcion"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Entidad_Descripcion"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Dependencia"] = "Dependencia";
	$fieldToolTipsep_obligaciones["Spanish"]["Dependencia"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Dependencia"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Dependencia_Descripcion"] = "Dependencia Descripcion";
	$fieldToolTipsep_obligaciones["Spanish"]["Dependencia_Descripcion"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Dependencia_Descripcion"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Rubro"] = "Rubro";
	$fieldToolTipsep_obligaciones["Spanish"]["Rubro"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Rubro"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTipsep_obligaciones["Spanish"]["Descripcion"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Descripcion"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Valor_Inicial"] = "Valor Inicial";
	$fieldToolTipsep_obligaciones["Spanish"]["Valor_Inicial"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Valor_Inicial"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Valor_Operaciones"] = "Valor Operaciones";
	$fieldToolTipsep_obligaciones["Spanish"]["Valor_Operaciones"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Valor_Operaciones"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Valor_Actual1"] = "Valor Actual1";
	$fieldToolTipsep_obligaciones["Spanish"]["Valor_Actual1"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Valor_Actual1"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Saldo_por_Utilizar"] = "Saldo por Utilizar";
	$fieldToolTipsep_obligaciones["Spanish"]["Saldo_por_Utilizar"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Saldo_por_Utilizar"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Fuente"] = "Fuente";
	$fieldToolTipsep_obligaciones["Spanish"]["Fuente"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Fuente"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Situacion"] = "Situacion";
	$fieldToolTipsep_obligaciones["Spanish"]["Situacion"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Situacion"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Recurso"] = "Recurso";
	$fieldToolTipsep_obligaciones["Spanish"]["Recurso"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Recurso"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Concepto"] = "Concepto";
	$fieldToolTipsep_obligaciones["Spanish"]["Concepto"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Concepto"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Solicitud_CDP"] = "Solicitud CDP";
	$fieldToolTipsep_obligaciones["Spanish"]["Solicitud_CDP"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Solicitud_CDP"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["CDP"] = "CDP";
	$fieldToolTipsep_obligaciones["Spanish"]["CDP"] = "";
	$placeHoldersep_obligaciones["Spanish"]["CDP"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Compromisos"] = "Compromisos";
	$fieldToolTipsep_obligaciones["Spanish"]["Compromisos"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Compromisos"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Cuentas_por_Pagar"] = "Cuentas por Pagar";
	$fieldToolTipsep_obligaciones["Spanish"]["Cuentas_por_Pagar"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Cuentas_por_Pagar"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Fecha_Cuentas_por_Pagar"] = "Fecha Cuentas por Pagar";
	$fieldToolTipsep_obligaciones["Spanish"]["Fecha_Cuentas_por_Pagar"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Fecha_Cuentas_por_Pagar"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Obligaciones"] = "Obligaciones";
	$fieldToolTipsep_obligaciones["Spanish"]["Obligaciones"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Obligaciones"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Ordenes_de_Pago"] = "Ordenes de Pago";
	$fieldToolTipsep_obligaciones["Spanish"]["Ordenes_de_Pago"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Ordenes_de_Pago"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Reintegros"] = "Reintegros";
	$fieldToolTipsep_obligaciones["Spanish"]["Reintegros"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Reintegros"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Fecha_Doc_Soporte_Compromiso"] = "Fecha Doc Soporte Compromiso";
	$fieldToolTipsep_obligaciones["Spanish"]["Fecha_Doc_Soporte_Compromiso"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Fecha_Doc_Soporte_Compromiso"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Tipo_Doc_Soporte_Compromiso"] = "Tipo Doc Soporte Compromiso";
	$fieldToolTipsep_obligaciones["Spanish"]["Tipo_Doc_Soporte_Compromiso"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Tipo_Doc_Soporte_Compromiso"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Num_Doc_Soporte_Compromiso"] = "Num Doc Soporte Compromiso";
	$fieldToolTipsep_obligaciones["Spanish"]["Num_Doc_Soporte_Compromiso"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Num_Doc_Soporte_Compromiso"] = "";
	$fieldLabelsep_obligaciones["Spanish"]["Objeto_del_Compromiso"] = "Objeto del Compromiso";
	$fieldToolTipsep_obligaciones["Spanish"]["Objeto_del_Compromiso"] = "";
	$placeHoldersep_obligaciones["Spanish"]["Objeto_del_Compromiso"] = "";
	if (count($fieldToolTipsep_obligaciones["Spanish"]))
		$tdataep_obligaciones[".isUseToolTips"] = true;
}


	$tdataep_obligaciones[".NCSearch"] = true;



$tdataep_obligaciones[".shortTableName"] = "ep_obligaciones";
$tdataep_obligaciones[".nSecOptions"] = 0;

$tdataep_obligaciones[".mainTableOwnerID"] = "";
$tdataep_obligaciones[".entityType"] = 0;
$tdataep_obligaciones[".connId"] = "sep2_at_localhost";


$tdataep_obligaciones[".strOriginalTableName"] = "ep_obligaciones";

	



$tdataep_obligaciones[".showAddInPopup"] = false;

$tdataep_obligaciones[".showEditInPopup"] = false;

$tdataep_obligaciones[".showViewInPopup"] = false;

$tdataep_obligaciones[".listAjax"] = false;
//	temporary
//$tdataep_obligaciones[".listAjax"] = false;

	$tdataep_obligaciones[".audit"] = false;

	$tdataep_obligaciones[".locking"] = false;


$pages = $tdataep_obligaciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataep_obligaciones[".edit"] = true;
	$tdataep_obligaciones[".afterEditAction"] = 1;
	$tdataep_obligaciones[".closePopupAfterEdit"] = 1;
	$tdataep_obligaciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataep_obligaciones[".add"] = true;
$tdataep_obligaciones[".afterAddAction"] = 1;
$tdataep_obligaciones[".closePopupAfterAdd"] = 1;
$tdataep_obligaciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataep_obligaciones[".list"] = true;
}



$tdataep_obligaciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataep_obligaciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataep_obligaciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataep_obligaciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataep_obligaciones[".printFriendly"] = true;
}



$tdataep_obligaciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataep_obligaciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataep_obligaciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataep_obligaciones[".isUseAjaxSuggest"] = true;





$tdataep_obligaciones[".ajaxCodeSnippetAdded"] = false;

$tdataep_obligaciones[".buttonsAdded"] = false;

$tdataep_obligaciones[".addPageEvents"] = true;

// use timepicker for search panel
$tdataep_obligaciones[".isUseTimeForSearch"] = false;


$tdataep_obligaciones[".badgeColor"] = "EDCA00";


$tdataep_obligaciones[".allSearchFields"] = array();
$tdataep_obligaciones[".filterFields"] = array();
$tdataep_obligaciones[".requiredSearchFields"] = array();

$tdataep_obligaciones[".googleLikeFields"] = array();
$tdataep_obligaciones[".googleLikeFields"][] = "CDP";
$tdataep_obligaciones[".googleLikeFields"][] = "Compromisos";
$tdataep_obligaciones[".googleLikeFields"][] = "Concepto";
$tdataep_obligaciones[".googleLikeFields"][] = "Cuentas por Pagar";
$tdataep_obligaciones[".googleLikeFields"][] = "Dependencia";
$tdataep_obligaciones[".googleLikeFields"][] = "Dependencia Descripcion";
$tdataep_obligaciones[".googleLikeFields"][] = "Descripcion";
$tdataep_obligaciones[".googleLikeFields"][] = "Entidad Descripcion";
$tdataep_obligaciones[".googleLikeFields"][] = "Entidad Nit";
$tdataep_obligaciones[".googleLikeFields"][] = "Estado";
$tdataep_obligaciones[".googleLikeFields"][] = "Estado Cuenta";
$tdataep_obligaciones[".googleLikeFields"][] = "Fecha Cuentas por Pagar";
$tdataep_obligaciones[".googleLikeFields"][] = "Fecha de Creacion";
$tdataep_obligaciones[".googleLikeFields"][] = "Fecha de Registro";
$tdataep_obligaciones[".googleLikeFields"][] = "Fecha Doc Soporte Compromiso";
$tdataep_obligaciones[".googleLikeFields"][] = "Fuente";
$tdataep_obligaciones[".googleLikeFields"][] = "Identificacion";
$tdataep_obligaciones[".googleLikeFields"][] = "Medio de Pago";
$tdataep_obligaciones[".googleLikeFields"][] = "Nombre Razon Social";
$tdataep_obligaciones[".googleLikeFields"][] = "Num Doc Soporte Compromiso";
$tdataep_obligaciones[".googleLikeFields"][] = "Numero Cuenta";
$tdataep_obligaciones[".googleLikeFields"][] = "Numero Documento";
$tdataep_obligaciones[".googleLikeFields"][] = "Objeto del Compromiso";
$tdataep_obligaciones[".googleLikeFields"][] = "Obligaciones";
$tdataep_obligaciones[".googleLikeFields"][] = "OID";
$tdataep_obligaciones[".googleLikeFields"][] = "Ordenes de Pago";
$tdataep_obligaciones[".googleLikeFields"][] = "Recurso";
$tdataep_obligaciones[".googleLikeFields"][] = "Reintegros";
$tdataep_obligaciones[".googleLikeFields"][] = "Rubro";
$tdataep_obligaciones[".googleLikeFields"][] = "Saldo por Utilizar";
$tdataep_obligaciones[".googleLikeFields"][] = "Situacion";
$tdataep_obligaciones[".googleLikeFields"][] = "Solicitud CDP";
$tdataep_obligaciones[".googleLikeFields"][] = "Tipo Cuenta";
$tdataep_obligaciones[".googleLikeFields"][] = "Tipo Doc Soporte Compromiso";
$tdataep_obligaciones[".googleLikeFields"][] = "Tipo Identificacion";
$tdataep_obligaciones[".googleLikeFields"][] = "Valor Actual";
$tdataep_obligaciones[".googleLikeFields"][] = "Valor Actual1";
$tdataep_obligaciones[".googleLikeFields"][] = "Valor Deducciones";
$tdataep_obligaciones[".googleLikeFields"][] = "Valor Inicial";
$tdataep_obligaciones[".googleLikeFields"][] = "Valor Oblig no Orden";
$tdataep_obligaciones[".googleLikeFields"][] = "Valor Operaciones";



$tdataep_obligaciones[".tableType"] = "list";

$tdataep_obligaciones[".printerPageOrientation"] = 0;
$tdataep_obligaciones[".nPrinterPageScale"] = 100;

$tdataep_obligaciones[".nPrinterSplitRecords"] = 40;

$tdataep_obligaciones[".geocodingEnabled"] = false;










$tdataep_obligaciones[".pageSize"] = 20;

$tdataep_obligaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataep_obligaciones[".strOrderBy"] = $tstrOrderBy;

$tdataep_obligaciones[".orderindexes"] = array();


$tdataep_obligaciones[".sqlHead"] = "SELECT CDP,  	Compromisos,  	Concepto,  	`Cuentas por Pagar`,  	Dependencia,  	`Dependencia Descripcion`,  	Descripcion,  	`Entidad Descripcion`,  	`Entidad Nit`,  	Estado,  	`Estado Cuenta`,  	`Fecha Cuentas por Pagar`,  	`Fecha de Creacion`,  	`Fecha de Registro`,  	`Fecha Doc Soporte Compromiso`,  	Fuente,  	Identificacion,  	`Medio de Pago`,  	`Nombre Razon Social`,  	`Num Doc Soporte Compromiso`,  	`Numero Cuenta`,  	`Numero Documento`,  	`Objeto del Compromiso`,  	Obligaciones,  	OID,  	`Ordenes de Pago`,  	Recurso,  	Reintegros,  	Rubro,  	`Saldo por Utilizar`,  	Situacion,  	`Solicitud CDP`,  	`Tipo Cuenta`,  	`Tipo Doc Soporte Compromiso`,  	`Tipo Identificacion`,  	`Valor Actual`,  	`Valor Actual1`,  	`Valor Deducciones`,  	`Valor Inicial`,  	`Valor Oblig no Orden`,  	`Valor Operaciones`";
$tdataep_obligaciones[".sqlFrom"] = "FROM ep_obligaciones";
$tdataep_obligaciones[".sqlWhereExpr"] = "";
$tdataep_obligaciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataep_obligaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataep_obligaciones[".arrGroupsPerPage"] = $arrGPP;

$tdataep_obligaciones[".highlightSearchResults"] = true;

$tableKeysep_obligaciones = array();
$tableKeysep_obligaciones[] = "OID";
$tdataep_obligaciones[".Keys"] = $tableKeysep_obligaciones;


$tdataep_obligaciones[".hideMobileList"] = array();




//	CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CDP";
	$fdata["GoodName"] = "CDP";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","CDP");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CDP";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CDP";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["CDP"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "CDP";
//	Compromisos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Compromisos";
	$fdata["GoodName"] = "Compromisos";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Compromisos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Compromisos";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Compromisos";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Compromisos"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Compromisos";
//	Concepto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Concepto";
	$fdata["GoodName"] = "Concepto";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Concepto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Concepto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Concepto";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Concepto"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Concepto";
//	Cuentas por Pagar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cuentas por Pagar";
	$fdata["GoodName"] = "Cuentas_por_Pagar";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Cuentas_por_Pagar");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cuentas por Pagar";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Cuentas por Pagar`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Cuentas por Pagar"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Cuentas por Pagar";
//	Dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Dependencia";
	$fdata["GoodName"] = "Dependencia";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Dependencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Dependencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dependencia";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Dependencia"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Dependencia";
//	Dependencia Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Dependencia Descripcion";
	$fdata["GoodName"] = "Dependencia_Descripcion";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Dependencia_Descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Dependencia Descripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Dependencia Descripcion`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Dependencia Descripcion"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Dependencia Descripcion";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Descripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Descripcion";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Descripcion"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Descripcion";
//	Entidad Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Entidad Descripcion";
	$fdata["GoodName"] = "Entidad_Descripcion";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Entidad_Descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Entidad Descripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Entidad Descripcion`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Entidad Descripcion"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Entidad Descripcion";
//	Entidad Nit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Entidad Nit";
	$fdata["GoodName"] = "Entidad_Nit";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Entidad_Nit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Entidad Nit";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Entidad Nit`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Entidad Nit"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Entidad Nit";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Estado";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Estado"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Estado";
//	Estado Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Estado Cuenta";
	$fdata["GoodName"] = "Estado_Cuenta";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Estado_Cuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado Cuenta";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Estado Cuenta`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Estado Cuenta"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Estado Cuenta";
//	Fecha Cuentas por Pagar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Fecha Cuentas por Pagar";
	$fdata["GoodName"] = "Fecha_Cuentas_por_Pagar";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Fecha_Cuentas_por_Pagar");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha Cuentas por Pagar";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha Cuentas por Pagar`";

	
	
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


	$tdataep_obligaciones["Fecha Cuentas por Pagar"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Fecha Cuentas por Pagar";
//	Fecha de Creacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Fecha de Creacion";
	$fdata["GoodName"] = "Fecha_de_Creacion";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Fecha_de_Creacion");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Fecha de Creacion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha de Creacion`";

	
	
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


	$tdataep_obligaciones["Fecha de Creacion"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Fecha de Creacion";
//	Fecha de Registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Fecha de Registro";
	$fdata["GoodName"] = "Fecha_de_Registro";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Fecha_de_Registro");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha de Registro";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha de Registro`";

	
	
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


	$tdataep_obligaciones["Fecha de Registro"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Fecha de Registro";
//	Fecha Doc Soporte Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Fecha Doc Soporte Compromiso";
	$fdata["GoodName"] = "Fecha_Doc_Soporte_Compromiso";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Fecha_Doc_Soporte_Compromiso");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha Doc Soporte Compromiso";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha Doc Soporte Compromiso`";

	
	
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


	$tdataep_obligaciones["Fecha Doc Soporte Compromiso"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Fecha Doc Soporte Compromiso";
//	Fuente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Fuente";
	$fdata["GoodName"] = "Fuente";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Fuente");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Fuente";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fuente";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Fuente"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Fuente";
//	Identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Identificacion";
	$fdata["GoodName"] = "Identificacion";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Identificacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Identificacion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Identificacion";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdataep_obligaciones["Identificacion"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Identificacion";
//	Medio de Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Medio de Pago";
	$fdata["GoodName"] = "Medio_de_Pago";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Medio_de_Pago");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Medio de Pago";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Medio de Pago`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Medio de Pago"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Medio de Pago";
//	Nombre Razon Social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Nombre Razon Social";
	$fdata["GoodName"] = "Nombre_Razon_Social";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Nombre_Razon_Social");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre Razon Social";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Nombre Razon Social`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Nombre Razon Social"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Nombre Razon Social";
//	Num Doc Soporte Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Num Doc Soporte Compromiso";
	$fdata["GoodName"] = "Num_Doc_Soporte_Compromiso";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Num_Doc_Soporte_Compromiso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Num Doc Soporte Compromiso";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Num Doc Soporte Compromiso`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Num Doc Soporte Compromiso"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Num Doc Soporte Compromiso";
//	Numero Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Numero Cuenta";
	$fdata["GoodName"] = "Numero_Cuenta";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Numero_Cuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero Cuenta";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Numero Cuenta`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Numero Cuenta"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Numero Cuenta";
//	Numero Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Numero Documento";
	$fdata["GoodName"] = "Numero_Documento";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Numero_Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero Documento";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Numero Documento`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Numero Documento"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Numero Documento";
//	Objeto del Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Objeto del Compromiso";
	$fdata["GoodName"] = "Objeto_del_Compromiso";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Objeto_del_Compromiso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Objeto del Compromiso";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Objeto del Compromiso`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Objeto del Compromiso"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Objeto del Compromiso";
//	Obligaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Obligaciones";
	$fdata["GoodName"] = "Obligaciones";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Obligaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Obligaciones";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Obligaciones";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Obligaciones"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Obligaciones";
//	OID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "OID";
	$fdata["GoodName"] = "OID";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","OID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "OID";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OID";

	
	
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


	$tdataep_obligaciones["OID"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "OID";
//	Ordenes de Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Ordenes de Pago";
	$fdata["GoodName"] = "Ordenes_de_Pago";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Ordenes_de_Pago");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ordenes de Pago";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Ordenes de Pago`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Ordenes de Pago"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Ordenes de Pago";
//	Recurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Recurso";
	$fdata["GoodName"] = "Recurso";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Recurso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Recurso";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Recurso";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Recurso"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Recurso";
//	Reintegros
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Reintegros";
	$fdata["GoodName"] = "Reintegros";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Reintegros");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Reintegros";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Reintegros";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Reintegros"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Reintegros";
//	Rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Rubro";
	$fdata["GoodName"] = "Rubro";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Rubro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Rubro";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rubro";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Rubro"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Rubro";
//	Saldo por Utilizar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Saldo por Utilizar";
	$fdata["GoodName"] = "Saldo_por_Utilizar";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Saldo_por_Utilizar");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Saldo por Utilizar";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Saldo por Utilizar`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdataep_obligaciones["Saldo por Utilizar"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Saldo por Utilizar";
//	Situacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Situacion";
	$fdata["GoodName"] = "Situacion";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Situacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Situacion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Situacion";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Situacion"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Situacion";
//	Solicitud CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Solicitud CDP";
	$fdata["GoodName"] = "Solicitud_CDP";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Solicitud_CDP");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Solicitud CDP";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Solicitud CDP`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Solicitud CDP"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Solicitud CDP";
//	Tipo Cuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Tipo Cuenta";
	$fdata["GoodName"] = "Tipo_Cuenta";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Tipo_Cuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo Cuenta";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo Cuenta`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Tipo Cuenta"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Tipo Cuenta";
//	Tipo Doc Soporte Compromiso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Tipo Doc Soporte Compromiso";
	$fdata["GoodName"] = "Tipo_Doc_Soporte_Compromiso";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Tipo_Doc_Soporte_Compromiso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo Doc Soporte Compromiso";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo Doc Soporte Compromiso`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Tipo Doc Soporte Compromiso"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Tipo Doc Soporte Compromiso";
//	Tipo Identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Tipo Identificacion";
	$fdata["GoodName"] = "Tipo_Identificacion";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Tipo_Identificacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo Identificacion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo Identificacion`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataep_obligaciones["Tipo Identificacion"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Tipo Identificacion";
//	Valor Actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Valor Actual";
	$fdata["GoodName"] = "Valor_Actual";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Valor_Actual");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Valor Actual";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Actual`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdataep_obligaciones["Valor Actual"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Valor Actual";
//	Valor Actual1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Valor Actual1";
	$fdata["GoodName"] = "Valor_Actual1";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Valor_Actual1");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Valor Actual1";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Actual1`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdataep_obligaciones["Valor Actual1"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Valor Actual1";
//	Valor Deducciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Valor Deducciones";
	$fdata["GoodName"] = "Valor_Deducciones";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Valor_Deducciones");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Valor Deducciones";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Deducciones`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdataep_obligaciones["Valor Deducciones"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Valor Deducciones";
//	Valor Inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Valor Inicial";
	$fdata["GoodName"] = "Valor_Inicial";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Valor_Inicial");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Valor Inicial";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Inicial`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdataep_obligaciones["Valor Inicial"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Valor Inicial";
//	Valor Oblig no Orden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Valor Oblig no Orden";
	$fdata["GoodName"] = "Valor_Oblig_no_Orden";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Valor_Oblig_no_Orden");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Valor Oblig no Orden";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Oblig no Orden`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdataep_obligaciones["Valor Oblig no Orden"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Valor Oblig no Orden";
//	Valor Operaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Valor Operaciones";
	$fdata["GoodName"] = "Valor_Operaciones";
	$fdata["ownerTable"] = "ep_obligaciones";
	$fdata["Label"] = GetFieldLabel("ep_obligaciones","Valor_Operaciones");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "Valor Operaciones";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Operaciones`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdataep_obligaciones["Valor Operaciones"] = $fdata;
		$tdataep_obligaciones[".searchableFields"][] = "Valor Operaciones";


$tables_data["ep_obligaciones"]=&$tdataep_obligaciones;
$field_labels["ep_obligaciones"] = &$fieldLabelsep_obligaciones;
$fieldToolTips["ep_obligaciones"] = &$fieldToolTipsep_obligaciones;
$placeHolders["ep_obligaciones"] = &$placeHoldersep_obligaciones;
$page_titles["ep_obligaciones"] = &$pageTitlesep_obligaciones;


changeTextControlsToDate( "ep_obligaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ep_obligaciones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ep_obligaciones"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ep_obligaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CDP,  	Compromisos,  	Concepto,  	`Cuentas por Pagar`,  	Dependencia,  	`Dependencia Descripcion`,  	Descripcion,  	`Entidad Descripcion`,  	`Entidad Nit`,  	Estado,  	`Estado Cuenta`,  	`Fecha Cuentas por Pagar`,  	`Fecha de Creacion`,  	`Fecha de Registro`,  	`Fecha Doc Soporte Compromiso`,  	Fuente,  	Identificacion,  	`Medio de Pago`,  	`Nombre Razon Social`,  	`Num Doc Soporte Compromiso`,  	`Numero Cuenta`,  	`Numero Documento`,  	`Objeto del Compromiso`,  	Obligaciones,  	OID,  	`Ordenes de Pago`,  	Recurso,  	Reintegros,  	Rubro,  	`Saldo por Utilizar`,  	Situacion,  	`Solicitud CDP`,  	`Tipo Cuenta`,  	`Tipo Doc Soporte Compromiso`,  	`Tipo Identificacion`,  	`Valor Actual`,  	`Valor Actual1`,  	`Valor Deducciones`,  	`Valor Inicial`,  	`Valor Oblig no Orden`,  	`Valor Operaciones`";
$proto0["m_strFrom"] = "FROM ep_obligaciones";
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
	"m_strName" => "CDP",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto6["m_sql"] = "CDP";
$proto6["m_srcTableName"] = "ep_obligaciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Compromisos",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto8["m_sql"] = "Compromisos";
$proto8["m_srcTableName"] = "ep_obligaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Concepto",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto10["m_sql"] = "Concepto";
$proto10["m_srcTableName"] = "ep_obligaciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Cuentas por Pagar",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto12["m_sql"] = "`Cuentas por Pagar`";
$proto12["m_srcTableName"] = "ep_obligaciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto14["m_sql"] = "Dependencia";
$proto14["m_srcTableName"] = "ep_obligaciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia Descripcion",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto16["m_sql"] = "`Dependencia Descripcion`";
$proto16["m_srcTableName"] = "ep_obligaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto18["m_sql"] = "Descripcion";
$proto18["m_srcTableName"] = "ep_obligaciones";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Entidad Descripcion",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto20["m_sql"] = "`Entidad Descripcion`";
$proto20["m_srcTableName"] = "ep_obligaciones";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Entidad Nit",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto22["m_sql"] = "`Entidad Nit`";
$proto22["m_srcTableName"] = "ep_obligaciones";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto24["m_sql"] = "Estado";
$proto24["m_srcTableName"] = "ep_obligaciones";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado Cuenta",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto26["m_sql"] = "`Estado Cuenta`";
$proto26["m_srcTableName"] = "ep_obligaciones";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha Cuentas por Pagar",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto28["m_sql"] = "`Fecha Cuentas por Pagar`";
$proto28["m_srcTableName"] = "ep_obligaciones";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Creacion",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto30["m_sql"] = "`Fecha de Creacion`";
$proto30["m_srcTableName"] = "ep_obligaciones";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Registro",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto32["m_sql"] = "`Fecha de Registro`";
$proto32["m_srcTableName"] = "ep_obligaciones";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha Doc Soporte Compromiso",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto34["m_sql"] = "`Fecha Doc Soporte Compromiso`";
$proto34["m_srcTableName"] = "ep_obligaciones";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Fuente",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto36["m_sql"] = "Fuente";
$proto36["m_srcTableName"] = "ep_obligaciones";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Identificacion",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto38["m_sql"] = "Identificacion";
$proto38["m_srcTableName"] = "ep_obligaciones";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Medio de Pago",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto40["m_sql"] = "`Medio de Pago`";
$proto40["m_srcTableName"] = "ep_obligaciones";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre Razon Social",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto42["m_sql"] = "`Nombre Razon Social`";
$proto42["m_srcTableName"] = "ep_obligaciones";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Num Doc Soporte Compromiso",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto44["m_sql"] = "`Num Doc Soporte Compromiso`";
$proto44["m_srcTableName"] = "ep_obligaciones";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero Cuenta",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto46["m_sql"] = "`Numero Cuenta`";
$proto46["m_srcTableName"] = "ep_obligaciones";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero Documento",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto48["m_sql"] = "`Numero Documento`";
$proto48["m_srcTableName"] = "ep_obligaciones";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Objeto del Compromiso",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto50["m_sql"] = "`Objeto del Compromiso`";
$proto50["m_srcTableName"] = "ep_obligaciones";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligaciones",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto52["m_sql"] = "Obligaciones";
$proto52["m_srcTableName"] = "ep_obligaciones";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "OID",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto54["m_sql"] = "OID";
$proto54["m_srcTableName"] = "ep_obligaciones";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Ordenes de Pago",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto56["m_sql"] = "`Ordenes de Pago`";
$proto56["m_srcTableName"] = "ep_obligaciones";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Recurso",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto58["m_sql"] = "Recurso";
$proto58["m_srcTableName"] = "ep_obligaciones";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Reintegros",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto60["m_sql"] = "Reintegros";
$proto60["m_srcTableName"] = "ep_obligaciones";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Rubro",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto62["m_sql"] = "Rubro";
$proto62["m_srcTableName"] = "ep_obligaciones";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Saldo por Utilizar",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto64["m_sql"] = "`Saldo por Utilizar`";
$proto64["m_srcTableName"] = "ep_obligaciones";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Situacion",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto66["m_sql"] = "Situacion";
$proto66["m_srcTableName"] = "ep_obligaciones";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Solicitud CDP",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto68["m_sql"] = "`Solicitud CDP`";
$proto68["m_srcTableName"] = "ep_obligaciones";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Cuenta",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto70["m_sql"] = "`Tipo Cuenta`";
$proto70["m_srcTableName"] = "ep_obligaciones";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Doc Soporte Compromiso",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto72["m_sql"] = "`Tipo Doc Soporte Compromiso`";
$proto72["m_srcTableName"] = "ep_obligaciones";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo Identificacion",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto74["m_sql"] = "`Tipo Identificacion`";
$proto74["m_srcTableName"] = "ep_obligaciones";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Actual",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto76["m_sql"] = "`Valor Actual`";
$proto76["m_srcTableName"] = "ep_obligaciones";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Actual1",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto78["m_sql"] = "`Valor Actual1`";
$proto78["m_srcTableName"] = "ep_obligaciones";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Deducciones",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto80["m_sql"] = "`Valor Deducciones`";
$proto80["m_srcTableName"] = "ep_obligaciones";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Inicial",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto82["m_sql"] = "`Valor Inicial`";
$proto82["m_srcTableName"] = "ep_obligaciones";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Oblig no Orden",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto84["m_sql"] = "`Valor Oblig no Orden`";
$proto84["m_srcTableName"] = "ep_obligaciones";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Operaciones",
	"m_strTable" => "ep_obligaciones",
	"m_srcTableName" => "ep_obligaciones"
));

$proto86["m_sql"] = "`Valor Operaciones`";
$proto86["m_srcTableName"] = "ep_obligaciones";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto88=array();
$proto88["m_link"] = "SQLL_MAIN";
			$proto89=array();
$proto89["m_strName"] = "ep_obligaciones";
$proto89["m_srcTableName"] = "ep_obligaciones";
$proto89["m_columns"] = array();
$proto89["m_columns"][] = "CDP";
$proto89["m_columns"][] = "Compromisos";
$proto89["m_columns"][] = "Concepto";
$proto89["m_columns"][] = "Cuentas por Pagar";
$proto89["m_columns"][] = "Dependencia";
$proto89["m_columns"][] = "Dependencia Descripcion";
$proto89["m_columns"][] = "Descripcion";
$proto89["m_columns"][] = "Entidad Descripcion";
$proto89["m_columns"][] = "Entidad Nit";
$proto89["m_columns"][] = "Estado";
$proto89["m_columns"][] = "Estado Cuenta";
$proto89["m_columns"][] = "Fecha Cuentas por Pagar";
$proto89["m_columns"][] = "Fecha de Creacion";
$proto89["m_columns"][] = "Fecha de Registro";
$proto89["m_columns"][] = "Fecha Doc Soporte Compromiso";
$proto89["m_columns"][] = "Fuente";
$proto89["m_columns"][] = "Identificacion";
$proto89["m_columns"][] = "Medio de Pago";
$proto89["m_columns"][] = "Nombre Razon Social";
$proto89["m_columns"][] = "Num Doc Soporte Compromiso";
$proto89["m_columns"][] = "Numero Cuenta";
$proto89["m_columns"][] = "Numero Documento";
$proto89["m_columns"][] = "Objeto del Compromiso";
$proto89["m_columns"][] = "Obligaciones";
$proto89["m_columns"][] = "OID";
$proto89["m_columns"][] = "Ordenes de Pago";
$proto89["m_columns"][] = "Recurso";
$proto89["m_columns"][] = "Reintegros";
$proto89["m_columns"][] = "Rubro";
$proto89["m_columns"][] = "Saldo por Utilizar";
$proto89["m_columns"][] = "Situacion";
$proto89["m_columns"][] = "Solicitud CDP";
$proto89["m_columns"][] = "Tipo Cuenta";
$proto89["m_columns"][] = "Tipo Doc Soporte Compromiso";
$proto89["m_columns"][] = "Tipo Identificacion";
$proto89["m_columns"][] = "Valor Actual";
$proto89["m_columns"][] = "Valor Actual1";
$proto89["m_columns"][] = "Valor Deducciones";
$proto89["m_columns"][] = "Valor Inicial";
$proto89["m_columns"][] = "Valor Oblig no Orden";
$proto89["m_columns"][] = "Valor Operaciones";
$obj = new SQLTable($proto89);

$proto88["m_table"] = $obj;
$proto88["m_sql"] = "ep_obligaciones";
$proto88["m_alias"] = "";
$proto88["m_srcTableName"] = "ep_obligaciones";
$proto90=array();
$proto90["m_sql"] = "";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
$proto90["m_strCase"] = "";
$proto90["m_havingmode"] = false;
$proto90["m_inBrackets"] = false;
$proto90["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto90);

$proto88["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto88);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ep_obligaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ep_obligaciones = createSqlQuery_ep_obligaciones();


	
								;

																																									

$tdataep_obligaciones[".sqlquery"] = $queryData_ep_obligaciones;



include_once(getabspath("include/ep_obligaciones_events.php"));
$tdataep_obligaciones[".hasEvents"] = true;

?>