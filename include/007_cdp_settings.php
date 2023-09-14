<?php
$tdata007_cdp = array();
$tdata007_cdp[".searchableFields"] = array();
$tdata007_cdp[".ShortName"] = "007_cdp";
$tdata007_cdp[".OwnerID"] = "";
$tdata007_cdp[".OriginalTable"] = "007_cdp";


$tdata007_cdp[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdata007_cdp[".originalPagesByType"] = $tdata007_cdp[".pagesByType"];
$tdata007_cdp[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdata007_cdp[".originalPages"] = $tdata007_cdp[".pages"];
$tdata007_cdp[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdata007_cdp[".originalDefaultPages"] = $tdata007_cdp[".defaultPages"];

//	field labels
$fieldLabels007_cdp = array();
$fieldToolTips007_cdp = array();
$pageTitles007_cdp = array();
$placeHolders007_cdp = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabels007_cdp["Spanish"] = array();
	$fieldToolTips007_cdp["Spanish"] = array();
	$placeHolders007_cdp["Spanish"] = array();
	$pageTitles007_cdp["Spanish"] = array();
	$fieldLabels007_cdp["Spanish"]["Numero_Documento"] = "Numero Documento";
	$fieldToolTips007_cdp["Spanish"]["Numero_Documento"] = "";
	$placeHolders007_cdp["Spanish"]["Numero_Documento"] = "";
	$fieldLabels007_cdp["Spanish"]["Fecha_de_Registro"] = "Fecha de Registro";
	$fieldToolTips007_cdp["Spanish"]["Fecha_de_Registro"] = "";
	$placeHolders007_cdp["Spanish"]["Fecha_de_Registro"] = "";
	$fieldLabels007_cdp["Spanish"]["Fecha_de_Creacion"] = "Fecha de Creacion";
	$fieldToolTips007_cdp["Spanish"]["Fecha_de_Creacion"] = "";
	$placeHolders007_cdp["Spanish"]["Fecha_de_Creacion"] = "";
	$fieldLabels007_cdp["Spanish"]["Tipo_de_CDP"] = "Tipo de CDP";
	$fieldToolTips007_cdp["Spanish"]["Tipo_de_CDP"] = "";
	$placeHolders007_cdp["Spanish"]["Tipo_de_CDP"] = "";
	$fieldLabels007_cdp["Spanish"]["Estado"] = "Estado";
	$fieldToolTips007_cdp["Spanish"]["Estado"] = "";
	$placeHolders007_cdp["Spanish"]["Estado"] = "";
	$fieldLabels007_cdp["Spanish"]["Dependencia"] = "Dependencia";
	$fieldToolTips007_cdp["Spanish"]["Dependencia"] = "";
	$placeHolders007_cdp["Spanish"]["Dependencia"] = "";
	$fieldLabels007_cdp["Spanish"]["Dependencia_Descripcion"] = "Dependencia Descripcion";
	$fieldToolTips007_cdp["Spanish"]["Dependencia_Descripcion"] = "";
	$placeHolders007_cdp["Spanish"]["Dependencia_Descripcion"] = "";
	$fieldLabels007_cdp["Spanish"]["Rubro"] = "Rubro";
	$fieldToolTips007_cdp["Spanish"]["Rubro"] = "";
	$placeHolders007_cdp["Spanish"]["Rubro"] = "";
	$fieldLabels007_cdp["Spanish"]["Descripcion"] = "Descripcion";
	$fieldToolTips007_cdp["Spanish"]["Descripcion"] = "";
	$placeHolders007_cdp["Spanish"]["Descripcion"] = "";
	$fieldLabels007_cdp["Spanish"]["Fuente"] = "Fuente";
	$fieldToolTips007_cdp["Spanish"]["Fuente"] = "";
	$placeHolders007_cdp["Spanish"]["Fuente"] = "";
	$fieldLabels007_cdp["Spanish"]["Recurso"] = "Recurso";
	$fieldToolTips007_cdp["Spanish"]["Recurso"] = "";
	$placeHolders007_cdp["Spanish"]["Recurso"] = "";
	$fieldLabels007_cdp["Spanish"]["Sit"] = "Sit";
	$fieldToolTips007_cdp["Spanish"]["Sit"] = "";
	$placeHolders007_cdp["Spanish"]["Sit"] = "";
	$fieldLabels007_cdp["Spanish"]["Valor_Inicial"] = "Valor Inicial";
	$fieldToolTips007_cdp["Spanish"]["Valor_Inicial"] = "";
	$placeHolders007_cdp["Spanish"]["Valor_Inicial"] = "";
	$fieldLabels007_cdp["Spanish"]["Valor_Operaciones"] = "Valor Operaciones";
	$fieldToolTips007_cdp["Spanish"]["Valor_Operaciones"] = "";
	$placeHolders007_cdp["Spanish"]["Valor_Operaciones"] = "";
	$fieldLabels007_cdp["Spanish"]["Valor_Actual"] = "Valor Actual";
	$fieldToolTips007_cdp["Spanish"]["Valor_Actual"] = "";
	$placeHolders007_cdp["Spanish"]["Valor_Actual"] = "";
	$fieldLabels007_cdp["Spanish"]["Saldo_por_Comprometer"] = "Saldo por Comprometer";
	$fieldToolTips007_cdp["Spanish"]["Saldo_por_Comprometer"] = "";
	$placeHolders007_cdp["Spanish"]["Saldo_por_Comprometer"] = "";
	$fieldLabels007_cdp["Spanish"]["Objeto"] = "Objeto";
	$fieldToolTips007_cdp["Spanish"]["Objeto"] = "";
	$placeHolders007_cdp["Spanish"]["Objeto"] = "";
	$fieldLabels007_cdp["Spanish"]["Solicitud_CDP"] = "Solicitud CDP";
	$fieldToolTips007_cdp["Spanish"]["Solicitud_CDP"] = "";
	$placeHolders007_cdp["Spanish"]["Solicitud_CDP"] = "";
	$fieldLabels007_cdp["Spanish"]["Compromisos"] = "Compromisos";
	$fieldToolTips007_cdp["Spanish"]["Compromisos"] = "";
	$placeHolders007_cdp["Spanish"]["Compromisos"] = "";
	$fieldLabels007_cdp["Spanish"]["Cuentas_por_Pagar"] = "Cuentas por Pagar";
	$fieldToolTips007_cdp["Spanish"]["Cuentas_por_Pagar"] = "";
	$placeHolders007_cdp["Spanish"]["Cuentas_por_Pagar"] = "";
	$fieldLabels007_cdp["Spanish"]["Obligaciones"] = "Obligaciones";
	$fieldToolTips007_cdp["Spanish"]["Obligaciones"] = "";
	$placeHolders007_cdp["Spanish"]["Obligaciones"] = "";
	$fieldLabels007_cdp["Spanish"]["Ordenes_de_Pago"] = "Ordenes de Pago";
	$fieldToolTips007_cdp["Spanish"]["Ordenes_de_Pago"] = "";
	$placeHolders007_cdp["Spanish"]["Ordenes_de_Pago"] = "";
	$fieldLabels007_cdp["Spanish"]["Reintegros"] = "Reintegros";
	$fieldToolTips007_cdp["Spanish"]["Reintegros"] = "";
	$placeHolders007_cdp["Spanish"]["Reintegros"] = "";
	if (count($fieldToolTips007_cdp["Spanish"]))
		$tdata007_cdp[".isUseToolTips"] = true;
}


	$tdata007_cdp[".NCSearch"] = true;



$tdata007_cdp[".shortTableName"] = "007_cdp";
$tdata007_cdp[".nSecOptions"] = 0;

$tdata007_cdp[".mainTableOwnerID"] = "";
$tdata007_cdp[".entityType"] = 0;
$tdata007_cdp[".connId"] = "sep2_at_localhost";


$tdata007_cdp[".strOriginalTableName"] = "007_cdp";

	



$tdata007_cdp[".showAddInPopup"] = false;

$tdata007_cdp[".showEditInPopup"] = false;

$tdata007_cdp[".showViewInPopup"] = false;

$tdata007_cdp[".listAjax"] = false;
//	temporary
//$tdata007_cdp[".listAjax"] = false;

	$tdata007_cdp[".audit"] = false;

	$tdata007_cdp[".locking"] = false;


$pages = $tdata007_cdp[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata007_cdp[".edit"] = true;
	$tdata007_cdp[".afterEditAction"] = 1;
	$tdata007_cdp[".closePopupAfterEdit"] = 1;
	$tdata007_cdp[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata007_cdp[".add"] = true;
$tdata007_cdp[".afterAddAction"] = 1;
$tdata007_cdp[".closePopupAfterAdd"] = 1;
$tdata007_cdp[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata007_cdp[".list"] = true;
}



$tdata007_cdp[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata007_cdp[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata007_cdp[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata007_cdp[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata007_cdp[".printFriendly"] = true;
}



$tdata007_cdp[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata007_cdp[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata007_cdp[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata007_cdp[".isUseAjaxSuggest"] = true;





$tdata007_cdp[".ajaxCodeSnippetAdded"] = false;

$tdata007_cdp[".buttonsAdded"] = false;

$tdata007_cdp[".addPageEvents"] = true;

// use timepicker for search panel
$tdata007_cdp[".isUseTimeForSearch"] = false;


$tdata007_cdp[".badgeColor"] = "6B8E23";


$tdata007_cdp[".allSearchFields"] = array();
$tdata007_cdp[".filterFields"] = array();
$tdata007_cdp[".requiredSearchFields"] = array();

$tdata007_cdp[".googleLikeFields"] = array();
$tdata007_cdp[".googleLikeFields"][] = "Compromisos";
$tdata007_cdp[".googleLikeFields"][] = "Cuentas por Pagar";
$tdata007_cdp[".googleLikeFields"][] = "Dependencia";
$tdata007_cdp[".googleLikeFields"][] = "Dependencia Descripcion";
$tdata007_cdp[".googleLikeFields"][] = "Descripcion";
$tdata007_cdp[".googleLikeFields"][] = "Estado";
$tdata007_cdp[".googleLikeFields"][] = "Fecha de Creacion";
$tdata007_cdp[".googleLikeFields"][] = "Fecha de Registro";
$tdata007_cdp[".googleLikeFields"][] = "Fuente";
$tdata007_cdp[".googleLikeFields"][] = "Numero Documento";
$tdata007_cdp[".googleLikeFields"][] = "Objeto";
$tdata007_cdp[".googleLikeFields"][] = "Obligaciones";
$tdata007_cdp[".googleLikeFields"][] = "Ordenes de Pago";
$tdata007_cdp[".googleLikeFields"][] = "Recurso";
$tdata007_cdp[".googleLikeFields"][] = "Reintegros";
$tdata007_cdp[".googleLikeFields"][] = "Rubro";
$tdata007_cdp[".googleLikeFields"][] = "Saldo por Comprometer";
$tdata007_cdp[".googleLikeFields"][] = "Sit";
$tdata007_cdp[".googleLikeFields"][] = "Solicitud CDP";
$tdata007_cdp[".googleLikeFields"][] = "Tipo de CDP";
$tdata007_cdp[".googleLikeFields"][] = "Valor Actual";
$tdata007_cdp[".googleLikeFields"][] = "Valor Inicial";
$tdata007_cdp[".googleLikeFields"][] = "Valor Operaciones";



$tdata007_cdp[".tableType"] = "list";

$tdata007_cdp[".printerPageOrientation"] = 0;
$tdata007_cdp[".nPrinterPageScale"] = 100;

$tdata007_cdp[".nPrinterSplitRecords"] = 40;

$tdata007_cdp[".geocodingEnabled"] = false;










$tdata007_cdp[".pageSize"] = 20;

$tdata007_cdp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdata007_cdp[".strOrderBy"] = $tstrOrderBy;

$tdata007_cdp[".orderindexes"] = array();


$tdata007_cdp[".sqlHead"] = "SELECT Compromisos,  	`Cuentas por Pagar`,  	Dependencia,  	`Dependencia Descripcion`,  	Descripcion,  	Estado,  	`Fecha de Creacion`,  	`Fecha de Registro`,  	Fuente,  	`Numero Documento`,  	Objeto,  	Obligaciones,  	`Ordenes de Pago`,  	Recurso,  	Reintegros,  	Rubro,  	`Saldo por Comprometer`,  	Sit,  	`Solicitud CDP`,  	`Tipo de CDP`,  	`Valor Actual`,  	`Valor Inicial`,  	`Valor Operaciones`";
$tdata007_cdp[".sqlFrom"] = "FROM `007_cdp`";
$tdata007_cdp[".sqlWhereExpr"] = "";
$tdata007_cdp[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata007_cdp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata007_cdp[".arrGroupsPerPage"] = $arrGPP;

$tdata007_cdp[".highlightSearchResults"] = true;

$tableKeys007_cdp = array();
$tdata007_cdp[".Keys"] = $tableKeys007_cdp;


$tdata007_cdp[".hideMobileList"] = array();




//	Compromisos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Compromisos";
	$fdata["GoodName"] = "Compromisos";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Compromisos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Compromisos";

		$fdata["sourceSingle"] = "Compromisos";

	
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdata007_cdp["Compromisos"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Compromisos";
//	Cuentas por Pagar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cuentas por Pagar";
	$fdata["GoodName"] = "Cuentas_por_Pagar";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Cuentas_por_Pagar");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cuentas por Pagar";

		$fdata["sourceSingle"] = "Cuentas por Pagar";

	
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


	$tdata007_cdp["Cuentas por Pagar"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Cuentas por Pagar";
//	Dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Dependencia";
	$fdata["GoodName"] = "Dependencia";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Dependencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Dependencia";

		$fdata["sourceSingle"] = "Dependencia";

	
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


	$tdata007_cdp["Dependencia"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Dependencia";
//	Dependencia Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Dependencia Descripcion";
	$fdata["GoodName"] = "Dependencia_Descripcion";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Dependencia_Descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Dependencia Descripcion";

		$fdata["sourceSingle"] = "Dependencia Descripcion";

	
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


	$tdata007_cdp["Dependencia Descripcion"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Dependencia Descripcion";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Descripcion";

		$fdata["sourceSingle"] = "Descripcion";

	
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


	$tdata007_cdp["Descripcion"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Descripcion";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado";

		$fdata["sourceSingle"] = "Estado";

	
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


	$tdata007_cdp["Estado"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Estado";
//	Fecha de Creacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Fecha de Creacion";
	$fdata["GoodName"] = "Fecha_de_Creacion";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Fecha_de_Creacion");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Fecha de Creacion";

		$fdata["sourceSingle"] = "Fecha de Creacion";

	
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


	$tdata007_cdp["Fecha de Creacion"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Fecha de Creacion";
//	Fecha de Registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Fecha de Registro";
	$fdata["GoodName"] = "Fecha_de_Registro";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Fecha_de_Registro");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha de Registro";

		$fdata["sourceSingle"] = "Fecha de Registro";

	
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


	$tdata007_cdp["Fecha de Registro"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Fecha de Registro";
//	Fuente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Fuente";
	$fdata["GoodName"] = "Fuente";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Fuente");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Fuente";

		$fdata["sourceSingle"] = "Fuente";

	
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


	$tdata007_cdp["Fuente"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Fuente";
//	Numero Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Numero Documento";
	$fdata["GoodName"] = "Numero_Documento";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Numero_Documento");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Numero Documento";

		$fdata["sourceSingle"] = "Numero Documento";

	
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


	$tdata007_cdp["Numero Documento"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Numero Documento";
//	Objeto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Objeto";
	$fdata["GoodName"] = "Objeto";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Objeto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Objeto";

		$fdata["sourceSingle"] = "Objeto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Objeto";

	
	
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


	$tdata007_cdp["Objeto"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Objeto";
//	Obligaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Obligaciones";
	$fdata["GoodName"] = "Obligaciones";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Obligaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Obligaciones";

		$fdata["sourceSingle"] = "Obligaciones";

	
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


	$tdata007_cdp["Obligaciones"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Obligaciones";
//	Ordenes de Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Ordenes de Pago";
	$fdata["GoodName"] = "Ordenes_de_Pago";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Ordenes_de_Pago");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ordenes de Pago";

		$fdata["sourceSingle"] = "Ordenes de Pago";

	
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdata007_cdp["Ordenes de Pago"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Ordenes de Pago";
//	Recurso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Recurso";
	$fdata["GoodName"] = "Recurso";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Recurso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Recurso";

		$fdata["sourceSingle"] = "Recurso";

	
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


	$tdata007_cdp["Recurso"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Recurso";
//	Reintegros
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Reintegros";
	$fdata["GoodName"] = "Reintegros";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Reintegros");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Reintegros";

		$fdata["sourceSingle"] = "Reintegros";

	
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


	$tdata007_cdp["Reintegros"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Reintegros";
//	Rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Rubro";
	$fdata["GoodName"] = "Rubro";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Rubro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Rubro";

		$fdata["sourceSingle"] = "Rubro";

	
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


	$tdata007_cdp["Rubro"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Rubro";
//	Saldo por Comprometer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Saldo por Comprometer";
	$fdata["GoodName"] = "Saldo_por_Comprometer";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Saldo_por_Comprometer");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Saldo por Comprometer";

		$fdata["sourceSingle"] = "Saldo por Comprometer";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Saldo por Comprometer`";

	
	
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


	$tdata007_cdp["Saldo por Comprometer"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Saldo por Comprometer";
//	Sit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Sit";
	$fdata["GoodName"] = "Sit";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Sit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sit";

		$fdata["sourceSingle"] = "Sit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sit";

	
	
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


	$tdata007_cdp["Sit"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Sit";
//	Solicitud CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Solicitud CDP";
	$fdata["GoodName"] = "Solicitud_CDP";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Solicitud_CDP");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Solicitud CDP";

		$fdata["sourceSingle"] = "Solicitud CDP";

	
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


	$tdata007_cdp["Solicitud CDP"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Solicitud CDP";
//	Tipo de CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Tipo de CDP";
	$fdata["GoodName"] = "Tipo_de_CDP";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Tipo_de_CDP");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo de CDP";

		$fdata["sourceSingle"] = "Tipo de CDP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo de CDP`";

	
	
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


	$tdata007_cdp["Tipo de CDP"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Tipo de CDP";
//	Valor Actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Valor Actual";
	$fdata["GoodName"] = "Valor_Actual";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Valor_Actual");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Valor Actual";

		$fdata["sourceSingle"] = "Valor Actual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Actual`";

	
	
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


	$tdata007_cdp["Valor Actual"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Valor Actual";
//	Valor Inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Valor Inicial";
	$fdata["GoodName"] = "Valor_Inicial";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Valor_Inicial");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Valor Inicial";

		$fdata["sourceSingle"] = "Valor Inicial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Inicial`";

	
	
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


	$tdata007_cdp["Valor Inicial"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Valor Inicial";
//	Valor Operaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Valor Operaciones";
	$fdata["GoodName"] = "Valor_Operaciones";
	$fdata["ownerTable"] = "007_cdp";
	$fdata["Label"] = GetFieldLabel("007_cdp","Valor_Operaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Valor Operaciones";

		$fdata["sourceSingle"] = "Valor Operaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Valor Operaciones`";

	
	
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


	$tdata007_cdp["Valor Operaciones"] = $fdata;
		$tdata007_cdp[".searchableFields"][] = "Valor Operaciones";


$tables_data["007_cdp"]=&$tdata007_cdp;
$field_labels["007_cdp"] = &$fieldLabels007_cdp;
$fieldToolTips["007_cdp"] = &$fieldToolTips007_cdp;
$placeHolders["007_cdp"] = &$placeHolders007_cdp;
$page_titles["007_cdp"] = &$pageTitles007_cdp;


changeTextControlsToDate( "007_cdp" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["007_cdp"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["007_cdp"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_007_cdp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Compromisos,  	`Cuentas por Pagar`,  	Dependencia,  	`Dependencia Descripcion`,  	Descripcion,  	Estado,  	`Fecha de Creacion`,  	`Fecha de Registro`,  	Fuente,  	`Numero Documento`,  	Objeto,  	Obligaciones,  	`Ordenes de Pago`,  	Recurso,  	Reintegros,  	Rubro,  	`Saldo por Comprometer`,  	Sit,  	`Solicitud CDP`,  	`Tipo de CDP`,  	`Valor Actual`,  	`Valor Inicial`,  	`Valor Operaciones`";
$proto0["m_strFrom"] = "FROM `007_cdp`";
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
	"m_strName" => "Compromisos",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto6["m_sql"] = "Compromisos";
$proto6["m_srcTableName"] = "007_cdp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Cuentas por Pagar",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto8["m_sql"] = "`Cuentas por Pagar`";
$proto8["m_srcTableName"] = "007_cdp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto10["m_sql"] = "Dependencia";
$proto10["m_srcTableName"] = "007_cdp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia Descripcion",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto12["m_sql"] = "`Dependencia Descripcion`";
$proto12["m_srcTableName"] = "007_cdp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto14["m_sql"] = "Descripcion";
$proto14["m_srcTableName"] = "007_cdp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto16["m_sql"] = "Estado";
$proto16["m_srcTableName"] = "007_cdp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Creacion",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto18["m_sql"] = "`Fecha de Creacion`";
$proto18["m_srcTableName"] = "007_cdp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Registro",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto20["m_sql"] = "`Fecha de Registro`";
$proto20["m_srcTableName"] = "007_cdp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Fuente",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto22["m_sql"] = "Fuente";
$proto22["m_srcTableName"] = "007_cdp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero Documento",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto24["m_sql"] = "`Numero Documento`";
$proto24["m_srcTableName"] = "007_cdp";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Objeto",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto26["m_sql"] = "Objeto";
$proto26["m_srcTableName"] = "007_cdp";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Obligaciones",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto28["m_sql"] = "Obligaciones";
$proto28["m_srcTableName"] = "007_cdp";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Ordenes de Pago",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto30["m_sql"] = "`Ordenes de Pago`";
$proto30["m_srcTableName"] = "007_cdp";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Recurso",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto32["m_sql"] = "Recurso";
$proto32["m_srcTableName"] = "007_cdp";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Reintegros",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto34["m_sql"] = "Reintegros";
$proto34["m_srcTableName"] = "007_cdp";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Rubro",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto36["m_sql"] = "Rubro";
$proto36["m_srcTableName"] = "007_cdp";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Saldo por Comprometer",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto38["m_sql"] = "`Saldo por Comprometer`";
$proto38["m_srcTableName"] = "007_cdp";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Sit",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto40["m_sql"] = "Sit";
$proto40["m_srcTableName"] = "007_cdp";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Solicitud CDP",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto42["m_sql"] = "`Solicitud CDP`";
$proto42["m_srcTableName"] = "007_cdp";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo de CDP",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto44["m_sql"] = "`Tipo de CDP`";
$proto44["m_srcTableName"] = "007_cdp";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Actual",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto46["m_sql"] = "`Valor Actual`";
$proto46["m_srcTableName"] = "007_cdp";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Inicial",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto48["m_sql"] = "`Valor Inicial`";
$proto48["m_srcTableName"] = "007_cdp";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor Operaciones",
	"m_strTable" => "007_cdp",
	"m_srcTableName" => "007_cdp"
));

$proto50["m_sql"] = "`Valor Operaciones`";
$proto50["m_srcTableName"] = "007_cdp";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "007_cdp";
$proto53["m_srcTableName"] = "007_cdp";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "Compromisos";
$proto53["m_columns"][] = "Cuentas por Pagar";
$proto53["m_columns"][] = "Dependencia";
$proto53["m_columns"][] = "Dependencia Descripcion";
$proto53["m_columns"][] = "Descripcion";
$proto53["m_columns"][] = "Estado";
$proto53["m_columns"][] = "Fecha de Creacion";
$proto53["m_columns"][] = "Fecha de Registro";
$proto53["m_columns"][] = "Fuente";
$proto53["m_columns"][] = "Numero Documento";
$proto53["m_columns"][] = "Objeto";
$proto53["m_columns"][] = "Obligaciones";
$proto53["m_columns"][] = "Ordenes de Pago";
$proto53["m_columns"][] = "Recurso";
$proto53["m_columns"][] = "Reintegros";
$proto53["m_columns"][] = "Rubro";
$proto53["m_columns"][] = "Saldo por Comprometer";
$proto53["m_columns"][] = "Sit";
$proto53["m_columns"][] = "Solicitud CDP";
$proto53["m_columns"][] = "Tipo de CDP";
$proto53["m_columns"][] = "Valor Actual";
$proto53["m_columns"][] = "Valor Inicial";
$proto53["m_columns"][] = "Valor Operaciones";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "`007_cdp`";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "007_cdp";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="007_cdp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_007_cdp = createSqlQuery_007_cdp();


	
								;

																							

$tdata007_cdp[".sqlquery"] = $queryData_007_cdp;



include_once(getabspath("include/007_cdp_events.php"));
$tdata007_cdp[".hasEvents"] = true;

?>