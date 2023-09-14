<?php
$tdataep_agregada = array();
$tdataep_agregada[".searchableFields"] = array();
$tdataep_agregada[".ShortName"] = "ep_agregada";
$tdataep_agregada[".OwnerID"] = "";
$tdataep_agregada[".OriginalTable"] = "ep_agregada";


$tdataep_agregada[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataep_agregada[".originalPagesByType"] = $tdataep_agregada[".pagesByType"];
$tdataep_agregada[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataep_agregada[".originalPages"] = $tdataep_agregada[".pages"];
$tdataep_agregada[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataep_agregada[".originalDefaultPages"] = $tdataep_agregada[".defaultPages"];

//	field labels
$fieldLabelsep_agregada = array();
$fieldToolTipsep_agregada = array();
$pageTitlesep_agregada = array();
$placeHoldersep_agregada = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsep_agregada["Spanish"] = array();
	$fieldToolTipsep_agregada["Spanish"] = array();
	$placeHoldersep_agregada["Spanish"] = array();
	$pageTitlesep_agregada["Spanish"] = array();
	$fieldLabelsep_agregada["Spanish"]["ID"] = "ID";
	$fieldToolTipsep_agregada["Spanish"]["ID"] = "";
	$placeHoldersep_agregada["Spanish"]["ID"] = "";
	$fieldLabelsep_agregada["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipsep_agregada["Spanish"]["UEJ"] = "";
	$placeHoldersep_agregada["Spanish"]["UEJ"] = "";
	$fieldLabelsep_agregada["Spanish"]["NOMBRE_UEJ"] = "NOMBRE UEJ";
	$fieldToolTipsep_agregada["Spanish"]["NOMBRE_UEJ"] = "";
	$placeHoldersep_agregada["Spanish"]["NOMBRE_UEJ"] = "";
	$fieldLabelsep_agregada["Spanish"]["RUBRO"] = "RUBRO";
	$fieldToolTipsep_agregada["Spanish"]["RUBRO"] = "";
	$placeHoldersep_agregada["Spanish"]["RUBRO"] = "";
	$fieldLabelsep_agregada["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsep_agregada["Spanish"]["TIPO"] = "";
	$placeHoldersep_agregada["Spanish"]["TIPO"] = "";
	$fieldLabelsep_agregada["Spanish"]["CTA"] = "CTA";
	$fieldToolTipsep_agregada["Spanish"]["CTA"] = "";
	$placeHoldersep_agregada["Spanish"]["CTA"] = "";
	$fieldLabelsep_agregada["Spanish"]["SUBCTA"] = "SUBCTA";
	$fieldToolTipsep_agregada["Spanish"]["SUBCTA"] = "";
	$placeHoldersep_agregada["Spanish"]["SUBCTA"] = "";
	$fieldLabelsep_agregada["Spanish"]["OBJ"] = "OBJ";
	$fieldToolTipsep_agregada["Spanish"]["OBJ"] = "";
	$placeHoldersep_agregada["Spanish"]["OBJ"] = "";
	$fieldLabelsep_agregada["Spanish"]["ORD"] = "ORD";
	$fieldToolTipsep_agregada["Spanish"]["ORD"] = "";
	$placeHoldersep_agregada["Spanish"]["ORD"] = "";
	$fieldLabelsep_agregada["Spanish"]["SORORD"] = "SORORD";
	$fieldToolTipsep_agregada["Spanish"]["SORORD"] = "";
	$placeHoldersep_agregada["Spanish"]["SORORD"] = "";
	$fieldLabelsep_agregada["Spanish"]["ITEM"] = "ITEM";
	$fieldToolTipsep_agregada["Spanish"]["ITEM"] = "";
	$placeHoldersep_agregada["Spanish"]["ITEM"] = "";
	$fieldLabelsep_agregada["Spanish"]["SUBITEM"] = "SUBITEM";
	$fieldToolTipsep_agregada["Spanish"]["SUBITEM"] = "";
	$placeHoldersep_agregada["Spanish"]["SUBITEM"] = "";
	$fieldLabelsep_agregada["Spanish"]["SUBITEM2"] = "SUBITEM2";
	$fieldToolTipsep_agregada["Spanish"]["SUBITEM2"] = "";
	$placeHoldersep_agregada["Spanish"]["SUBITEM2"] = "";
	$fieldLabelsep_agregada["Spanish"]["FUENTE"] = "FUENTE";
	$fieldToolTipsep_agregada["Spanish"]["FUENTE"] = "";
	$placeHoldersep_agregada["Spanish"]["FUENTE"] = "";
	$fieldLabelsep_agregada["Spanish"]["REC"] = "REC";
	$fieldToolTipsep_agregada["Spanish"]["REC"] = "";
	$placeHoldersep_agregada["Spanish"]["REC"] = "";
	$fieldLabelsep_agregada["Spanish"]["SIT"] = "SIT";
	$fieldToolTipsep_agregada["Spanish"]["SIT"] = "";
	$placeHoldersep_agregada["Spanish"]["SIT"] = "";
	$fieldLabelsep_agregada["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsep_agregada["Spanish"]["DESCRIPCION"] = "";
	$placeHoldersep_agregada["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelsep_agregada["Spanish"]["APR__INICIAL"] = "APR. INICIAL";
	$fieldToolTipsep_agregada["Spanish"]["APR__INICIAL"] = "";
	$placeHoldersep_agregada["Spanish"]["APR__INICIAL"] = "";
	$fieldLabelsep_agregada["Spanish"]["APR__ADICIONADA"] = "APR. ADICIONADA";
	$fieldToolTipsep_agregada["Spanish"]["APR__ADICIONADA"] = "";
	$placeHoldersep_agregada["Spanish"]["APR__ADICIONADA"] = "";
	$fieldLabelsep_agregada["Spanish"]["APR__REDUCIDA"] = "APR. REDUCIDA";
	$fieldToolTipsep_agregada["Spanish"]["APR__REDUCIDA"] = "";
	$placeHoldersep_agregada["Spanish"]["APR__REDUCIDA"] = "";
	$fieldLabelsep_agregada["Spanish"]["APR__VIGENTE"] = "APR. VIGENTE";
	$fieldToolTipsep_agregada["Spanish"]["APR__VIGENTE"] = "";
	$placeHoldersep_agregada["Spanish"]["APR__VIGENTE"] = "";
	$fieldLabelsep_agregada["Spanish"]["APR_BLOQUEADA"] = "APR BLOQUEADA";
	$fieldToolTipsep_agregada["Spanish"]["APR_BLOQUEADA"] = "";
	$placeHoldersep_agregada["Spanish"]["APR_BLOQUEADA"] = "";
	$fieldLabelsep_agregada["Spanish"]["CDP"] = "CDP";
	$fieldToolTipsep_agregada["Spanish"]["CDP"] = "";
	$placeHoldersep_agregada["Spanish"]["CDP"] = "";
	$fieldLabelsep_agregada["Spanish"]["APR__DISPONIBLE"] = "APR. DISPONIBLE";
	$fieldToolTipsep_agregada["Spanish"]["APR__DISPONIBLE"] = "";
	$placeHoldersep_agregada["Spanish"]["APR__DISPONIBLE"] = "";
	$fieldLabelsep_agregada["Spanish"]["COMPROMISO"] = "COMPROMISO";
	$fieldToolTipsep_agregada["Spanish"]["COMPROMISO"] = "";
	$placeHoldersep_agregada["Spanish"]["COMPROMISO"] = "";
	$fieldLabelsep_agregada["Spanish"]["OBLIGACION"] = "OBLIGACION";
	$fieldToolTipsep_agregada["Spanish"]["OBLIGACION"] = "";
	$placeHoldersep_agregada["Spanish"]["OBLIGACION"] = "";
	$fieldLabelsep_agregada["Spanish"]["ORDEN_PAGO"] = "ORDEN PAGO";
	$fieldToolTipsep_agregada["Spanish"]["ORDEN_PAGO"] = "";
	$placeHoldersep_agregada["Spanish"]["ORDEN_PAGO"] = "";
	$fieldLabelsep_agregada["Spanish"]["PAGOS"] = "PAGOS";
	$fieldToolTipsep_agregada["Spanish"]["PAGOS"] = "";
	$placeHoldersep_agregada["Spanish"]["PAGOS"] = "";
	$fieldLabelsep_agregada["Spanish"]["FECHA_ACTUALIZACION"] = "FECHA ACTUALIZACION";
	$fieldToolTipsep_agregada["Spanish"]["FECHA_ACTUALIZACION"] = "";
	$placeHoldersep_agregada["Spanish"]["FECHA_ACTUALIZACION"] = "";
	if (count($fieldToolTipsep_agregada["Spanish"]))
		$tdataep_agregada[".isUseToolTips"] = true;
}


	$tdataep_agregada[".NCSearch"] = true;



$tdataep_agregada[".shortTableName"] = "ep_agregada";
$tdataep_agregada[".nSecOptions"] = 0;

$tdataep_agregada[".mainTableOwnerID"] = "";
$tdataep_agregada[".entityType"] = 0;
$tdataep_agregada[".connId"] = "sep2_at_localhost";


$tdataep_agregada[".strOriginalTableName"] = "ep_agregada";

	



$tdataep_agregada[".showAddInPopup"] = false;

$tdataep_agregada[".showEditInPopup"] = false;

$tdataep_agregada[".showViewInPopup"] = false;

$tdataep_agregada[".listAjax"] = false;
//	temporary
//$tdataep_agregada[".listAjax"] = false;

	$tdataep_agregada[".audit"] = false;

	$tdataep_agregada[".locking"] = false;


$pages = $tdataep_agregada[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataep_agregada[".edit"] = true;
	$tdataep_agregada[".afterEditAction"] = 1;
	$tdataep_agregada[".closePopupAfterEdit"] = 1;
	$tdataep_agregada[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataep_agregada[".add"] = true;
$tdataep_agregada[".afterAddAction"] = 1;
$tdataep_agregada[".closePopupAfterAdd"] = 1;
$tdataep_agregada[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataep_agregada[".list"] = true;
}



$tdataep_agregada[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataep_agregada[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataep_agregada[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataep_agregada[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataep_agregada[".printFriendly"] = true;
}



$tdataep_agregada[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataep_agregada[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataep_agregada[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataep_agregada[".isUseAjaxSuggest"] = true;





$tdataep_agregada[".ajaxCodeSnippetAdded"] = false;

$tdataep_agregada[".buttonsAdded"] = false;

$tdataep_agregada[".addPageEvents"] = true;

// use timepicker for search panel
$tdataep_agregada[".isUseTimeForSearch"] = false;


$tdataep_agregada[".badgeColor"] = "E8926F";


$tdataep_agregada[".allSearchFields"] = array();
$tdataep_agregada[".filterFields"] = array();
$tdataep_agregada[".requiredSearchFields"] = array();

$tdataep_agregada[".googleLikeFields"] = array();
$tdataep_agregada[".googleLikeFields"][] = "APR BLOQUEADA";
$tdataep_agregada[".googleLikeFields"][] = "APR. ADICIONADA";
$tdataep_agregada[".googleLikeFields"][] = "APR. DISPONIBLE";
$tdataep_agregada[".googleLikeFields"][] = "APR. INICIAL";
$tdataep_agregada[".googleLikeFields"][] = "APR. REDUCIDA";
$tdataep_agregada[".googleLikeFields"][] = "APR. VIGENTE";
$tdataep_agregada[".googleLikeFields"][] = "CDP";
$tdataep_agregada[".googleLikeFields"][] = "COMPROMISO";
$tdataep_agregada[".googleLikeFields"][] = "CTA";
$tdataep_agregada[".googleLikeFields"][] = "DESCRIPCION";
$tdataep_agregada[".googleLikeFields"][] = "FECHA_ACTUALIZACION";
$tdataep_agregada[".googleLikeFields"][] = "FUENTE";
$tdataep_agregada[".googleLikeFields"][] = "ID";
$tdataep_agregada[".googleLikeFields"][] = "ITEM";
$tdataep_agregada[".googleLikeFields"][] = "NOMBRE UEJ";
$tdataep_agregada[".googleLikeFields"][] = "OBJ";
$tdataep_agregada[".googleLikeFields"][] = "OBLIGACION";
$tdataep_agregada[".googleLikeFields"][] = "ORD";
$tdataep_agregada[".googleLikeFields"][] = "ORDEN PAGO";
$tdataep_agregada[".googleLikeFields"][] = "PAGOS";
$tdataep_agregada[".googleLikeFields"][] = "REC";
$tdataep_agregada[".googleLikeFields"][] = "RUBRO";
$tdataep_agregada[".googleLikeFields"][] = "SIT";
$tdataep_agregada[".googleLikeFields"][] = "SORORD";
$tdataep_agregada[".googleLikeFields"][] = "SUBCTA";
$tdataep_agregada[".googleLikeFields"][] = "SUBITEM";
$tdataep_agregada[".googleLikeFields"][] = "SUBITEM2";
$tdataep_agregada[".googleLikeFields"][] = "TIPO";
$tdataep_agregada[".googleLikeFields"][] = "UEJ";



$tdataep_agregada[".tableType"] = "list";

$tdataep_agregada[".printerPageOrientation"] = 0;
$tdataep_agregada[".nPrinterPageScale"] = 100;

$tdataep_agregada[".nPrinterSplitRecords"] = 40;

$tdataep_agregada[".geocodingEnabled"] = false;










$tdataep_agregada[".pageSize"] = 20;

$tdataep_agregada[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataep_agregada[".strOrderBy"] = $tstrOrderBy;

$tdataep_agregada[".orderindexes"] = array();


$tdataep_agregada[".sqlHead"] = "SELECT `APR BLOQUEADA`,  	`APR. ADICIONADA`,  	`APR. DISPONIBLE`,  	`APR. INICIAL`,  	`APR. REDUCIDA`,  	`APR. VIGENTE`,  	CDP,  	COMPROMISO,  	CTA,  	DESCRIPCION,  	FECHA_ACTUALIZACION,  	FUENTE,  	ID,  	ITEM,  	`NOMBRE UEJ`,  	OBJ,  	OBLIGACION,  	ORD,  	`ORDEN PAGO`,  	PAGOS,  	REC,  	RUBRO,  	SIT,  	SORORD,  	SUBCTA,  	SUBITEM,  	SUBITEM2,  	TIPO,  	UEJ";
$tdataep_agregada[".sqlFrom"] = "FROM ep_agregada";
$tdataep_agregada[".sqlWhereExpr"] = "";
$tdataep_agregada[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataep_agregada[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataep_agregada[".arrGroupsPerPage"] = $arrGPP;

$tdataep_agregada[".highlightSearchResults"] = true;

$tableKeysep_agregada = array();
$tableKeysep_agregada[] = "ID";
$tdataep_agregada[".Keys"] = $tableKeysep_agregada;


$tdataep_agregada[".hideMobileList"] = array();




//	APR BLOQUEADA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APR BLOQUEADA";
	$fdata["GoodName"] = "APR_BLOQUEADA";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","APR_BLOQUEADA");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "APR BLOQUEADA";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR BLOQUEADA`";

	
	
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


	$tdataep_agregada["APR BLOQUEADA"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "APR BLOQUEADA";
//	APR. ADICIONADA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APR. ADICIONADA";
	$fdata["GoodName"] = "APR__ADICIONADA";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","APR__ADICIONADA");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "APR. ADICIONADA";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. ADICIONADA`";

	
	
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


	$tdataep_agregada["APR. ADICIONADA"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "APR. ADICIONADA";
//	APR. DISPONIBLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APR. DISPONIBLE";
	$fdata["GoodName"] = "APR__DISPONIBLE";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","APR__DISPONIBLE");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "APR. DISPONIBLE";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. DISPONIBLE`";

	
	
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


	$tdataep_agregada["APR. DISPONIBLE"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "APR. DISPONIBLE";
//	APR. INICIAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "APR. INICIAL";
	$fdata["GoodName"] = "APR__INICIAL";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","APR__INICIAL");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "APR. INICIAL";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. INICIAL`";

	
	
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


	$tdataep_agregada["APR. INICIAL"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "APR. INICIAL";
//	APR. REDUCIDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "APR. REDUCIDA";
	$fdata["GoodName"] = "APR__REDUCIDA";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","APR__REDUCIDA");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "APR. REDUCIDA";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. REDUCIDA`";

	
	
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


	$tdataep_agregada["APR. REDUCIDA"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "APR. REDUCIDA";
//	APR. VIGENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "APR. VIGENTE";
	$fdata["GoodName"] = "APR__VIGENTE";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","APR__VIGENTE");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "APR. VIGENTE";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. VIGENTE`";

	
	
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


	$tdataep_agregada["APR. VIGENTE"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "APR. VIGENTE";
//	CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CDP";
	$fdata["GoodName"] = "CDP";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","CDP");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "CDP";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CDP";

	
	
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


	$tdataep_agregada["CDP"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "CDP";
//	COMPROMISO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "COMPROMISO";
	$fdata["GoodName"] = "COMPROMISO";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","COMPROMISO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "COMPROMISO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPROMISO";

	
	
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


	$tdataep_agregada["COMPROMISO"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "COMPROMISO";
//	CTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CTA";
	$fdata["GoodName"] = "CTA";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","CTA");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CTA";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CTA";

	
	
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


	$tdataep_agregada["CTA"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "CTA";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","DESCRIPCION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DESCRIPCION";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION";

	
	
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


	$tdataep_agregada["DESCRIPCION"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "DESCRIPCION";
//	FECHA_ACTUALIZACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "FECHA_ACTUALIZACION";
	$fdata["GoodName"] = "FECHA_ACTUALIZACION";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","FECHA_ACTUALIZACION");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "FECHA_ACTUALIZACION";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_ACTUALIZACION";

	
	
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


	$tdataep_agregada["FECHA_ACTUALIZACION"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "FECHA_ACTUALIZACION";
//	FUENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FUENTE";
	$fdata["GoodName"] = "FUENTE";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","FUENTE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "FUENTE";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FUENTE";

	
	
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


	$tdataep_agregada["FUENTE"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "FUENTE";
//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdataep_agregada["ID"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "ID";
//	ITEM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ITEM";
	$fdata["GoodName"] = "ITEM";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","ITEM");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ITEM";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ITEM";

	
	
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


	$tdataep_agregada["ITEM"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "ITEM";
//	NOMBRE UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "NOMBRE UEJ";
	$fdata["GoodName"] = "NOMBRE_UEJ";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","NOMBRE_UEJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NOMBRE UEJ";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`NOMBRE UEJ`";

	
	
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


	$tdataep_agregada["NOMBRE UEJ"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "NOMBRE UEJ";
//	OBJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "OBJ";
	$fdata["GoodName"] = "OBJ";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","OBJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OBJ";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBJ";

	
	
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


	$tdataep_agregada["OBJ"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "OBJ";
//	OBLIGACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "OBLIGACION";
	$fdata["GoodName"] = "OBLIGACION";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","OBLIGACION");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "OBLIGACION";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBLIGACION";

	
	
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


	$tdataep_agregada["OBLIGACION"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "OBLIGACION";
//	ORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "ORD";
	$fdata["GoodName"] = "ORD";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","ORD");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ORD";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ORD";

	
	
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


	$tdataep_agregada["ORD"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "ORD";
//	ORDEN PAGO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ORDEN PAGO";
	$fdata["GoodName"] = "ORDEN_PAGO";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","ORDEN_PAGO");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ORDEN PAGO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ORDEN PAGO`";

	
	
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


	$tdataep_agregada["ORDEN PAGO"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "ORDEN PAGO";
//	PAGOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "PAGOS";
	$fdata["GoodName"] = "PAGOS";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","PAGOS");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PAGOS";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAGOS";

	
	
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


	$tdataep_agregada["PAGOS"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "PAGOS";
//	REC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "REC";
	$fdata["GoodName"] = "REC";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","REC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "REC";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REC";

	
	
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


	$tdataep_agregada["REC"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "REC";
//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","RUBRO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RUBRO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RUBRO";

	
	
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


	$tdataep_agregada["RUBRO"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "RUBRO";
//	SIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "SIT";
	$fdata["GoodName"] = "SIT";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","SIT");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SIT";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SIT";

	
	
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


	$tdataep_agregada["SIT"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "SIT";
//	SORORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "SORORD";
	$fdata["GoodName"] = "SORORD";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","SORORD");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SORORD";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SORORD";

	
	
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


	$tdataep_agregada["SORORD"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "SORORD";
//	SUBCTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "SUBCTA";
	$fdata["GoodName"] = "SUBCTA";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","SUBCTA");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SUBCTA";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUBCTA";

	
	
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


	$tdataep_agregada["SUBCTA"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "SUBCTA";
//	SUBITEM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "SUBITEM";
	$fdata["GoodName"] = "SUBITEM";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","SUBITEM");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SUBITEM";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUBITEM";

	
	
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


	$tdataep_agregada["SUBITEM"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "SUBITEM";
//	SUBITEM2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "SUBITEM2";
	$fdata["GoodName"] = "SUBITEM2";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","SUBITEM2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SUBITEM2";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUBITEM2";

	
	
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


	$tdataep_agregada["SUBITEM2"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "SUBITEM2";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","TIPO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TIPO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPO";

	
	
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


	$tdataep_agregada["TIPO"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "TIPO";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "ep_agregada";
	$fdata["Label"] = GetFieldLabel("ep_agregada","UEJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UEJ";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UEJ";

	
	
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


	$tdataep_agregada["UEJ"] = $fdata;
		$tdataep_agregada[".searchableFields"][] = "UEJ";


$tables_data["ep_agregada"]=&$tdataep_agregada;
$field_labels["ep_agregada"] = &$fieldLabelsep_agregada;
$fieldToolTips["ep_agregada"] = &$fieldToolTipsep_agregada;
$placeHolders["ep_agregada"] = &$placeHoldersep_agregada;
$page_titles["ep_agregada"] = &$pageTitlesep_agregada;


changeTextControlsToDate( "ep_agregada" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ep_agregada"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ep_agregada"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ep_agregada()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`APR BLOQUEADA`,  	`APR. ADICIONADA`,  	`APR. DISPONIBLE`,  	`APR. INICIAL`,  	`APR. REDUCIDA`,  	`APR. VIGENTE`,  	CDP,  	COMPROMISO,  	CTA,  	DESCRIPCION,  	FECHA_ACTUALIZACION,  	FUENTE,  	ID,  	ITEM,  	`NOMBRE UEJ`,  	OBJ,  	OBLIGACION,  	ORD,  	`ORDEN PAGO`,  	PAGOS,  	REC,  	RUBRO,  	SIT,  	SORORD,  	SUBCTA,  	SUBITEM,  	SUBITEM2,  	TIPO,  	UEJ";
$proto0["m_strFrom"] = "FROM ep_agregada";
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
	"m_strName" => "APR BLOQUEADA",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto6["m_sql"] = "`APR BLOQUEADA`";
$proto6["m_srcTableName"] = "ep_agregada";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. ADICIONADA",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto8["m_sql"] = "`APR. ADICIONADA`";
$proto8["m_srcTableName"] = "ep_agregada";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. DISPONIBLE",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto10["m_sql"] = "`APR. DISPONIBLE`";
$proto10["m_srcTableName"] = "ep_agregada";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. INICIAL",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto12["m_sql"] = "`APR. INICIAL`";
$proto12["m_srcTableName"] = "ep_agregada";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. REDUCIDA",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto14["m_sql"] = "`APR. REDUCIDA`";
$proto14["m_srcTableName"] = "ep_agregada";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. VIGENTE",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto16["m_sql"] = "`APR. VIGENTE`";
$proto16["m_srcTableName"] = "ep_agregada";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CDP",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto18["m_sql"] = "CDP";
$proto18["m_srcTableName"] = "ep_agregada";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPROMISO",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto20["m_sql"] = "COMPROMISO";
$proto20["m_srcTableName"] = "ep_agregada";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CTA",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto22["m_sql"] = "CTA";
$proto22["m_srcTableName"] = "ep_agregada";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto24["m_sql"] = "DESCRIPCION";
$proto24["m_srcTableName"] = "ep_agregada";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_ACTUALIZACION",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto26["m_sql"] = "FECHA_ACTUALIZACION";
$proto26["m_srcTableName"] = "ep_agregada";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTE",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto28["m_sql"] = "FUENTE";
$proto28["m_srcTableName"] = "ep_agregada";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto30["m_sql"] = "ID";
$proto30["m_srcTableName"] = "ep_agregada";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ITEM",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto32["m_sql"] = "ITEM";
$proto32["m_srcTableName"] = "ep_agregada";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE UEJ",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto34["m_sql"] = "`NOMBRE UEJ`";
$proto34["m_srcTableName"] = "ep_agregada";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "OBJ",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto36["m_sql"] = "OBJ";
$proto36["m_srcTableName"] = "ep_agregada";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "OBLIGACION",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto38["m_sql"] = "OBLIGACION";
$proto38["m_srcTableName"] = "ep_agregada";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "ORD",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto40["m_sql"] = "ORD";
$proto40["m_srcTableName"] = "ep_agregada";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "ORDEN PAGO",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto42["m_sql"] = "`ORDEN PAGO`";
$proto42["m_srcTableName"] = "ep_agregada";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "PAGOS",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto44["m_sql"] = "PAGOS";
$proto44["m_srcTableName"] = "ep_agregada";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "REC",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto46["m_sql"] = "REC";
$proto46["m_srcTableName"] = "ep_agregada";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto48["m_sql"] = "RUBRO";
$proto48["m_srcTableName"] = "ep_agregada";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "SIT",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto50["m_sql"] = "SIT";
$proto50["m_srcTableName"] = "ep_agregada";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "SORORD",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto52["m_sql"] = "SORORD";
$proto52["m_srcTableName"] = "ep_agregada";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "SUBCTA",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto54["m_sql"] = "SUBCTA";
$proto54["m_srcTableName"] = "ep_agregada";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "SUBITEM",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto56["m_sql"] = "SUBITEM";
$proto56["m_srcTableName"] = "ep_agregada";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "SUBITEM2",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto58["m_sql"] = "SUBITEM2";
$proto58["m_srcTableName"] = "ep_agregada";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto60["m_sql"] = "TIPO";
$proto60["m_srcTableName"] = "ep_agregada";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "ep_agregada",
	"m_srcTableName" => "ep_agregada"
));

$proto62["m_sql"] = "UEJ";
$proto62["m_srcTableName"] = "ep_agregada";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto64=array();
$proto64["m_link"] = "SQLL_MAIN";
			$proto65=array();
$proto65["m_strName"] = "ep_agregada";
$proto65["m_srcTableName"] = "ep_agregada";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "APR BLOQUEADA";
$proto65["m_columns"][] = "APR. ADICIONADA";
$proto65["m_columns"][] = "APR. DISPONIBLE";
$proto65["m_columns"][] = "APR. INICIAL";
$proto65["m_columns"][] = "APR. REDUCIDA";
$proto65["m_columns"][] = "APR. VIGENTE";
$proto65["m_columns"][] = "CDP";
$proto65["m_columns"][] = "COMPROMISO";
$proto65["m_columns"][] = "CTA";
$proto65["m_columns"][] = "DESCRIPCION";
$proto65["m_columns"][] = "FECHA_ACTUALIZACION";
$proto65["m_columns"][] = "FUENTE";
$proto65["m_columns"][] = "ID";
$proto65["m_columns"][] = "ITEM";
$proto65["m_columns"][] = "NOMBRE UEJ";
$proto65["m_columns"][] = "OBJ";
$proto65["m_columns"][] = "OBLIGACION";
$proto65["m_columns"][] = "ORD";
$proto65["m_columns"][] = "ORDEN PAGO";
$proto65["m_columns"][] = "PAGOS";
$proto65["m_columns"][] = "REC";
$proto65["m_columns"][] = "RUBRO";
$proto65["m_columns"][] = "SIT";
$proto65["m_columns"][] = "SORORD";
$proto65["m_columns"][] = "SUBCTA";
$proto65["m_columns"][] = "SUBITEM";
$proto65["m_columns"][] = "SUBITEM2";
$proto65["m_columns"][] = "TIPO";
$proto65["m_columns"][] = "UEJ";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "ep_agregada";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "ep_agregada";
$proto66=array();
$proto66["m_sql"] = "";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ep_agregada";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ep_agregada = createSqlQuery_ep_agregada();


	
								;

																													

$tdataep_agregada[".sqlquery"] = $queryData_ep_agregada;



include_once(getabspath("include/ep_agregada_events.php"));
$tdataep_agregada[".hasEvents"] = true;

?>