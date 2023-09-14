<?php
$tdataep_reservas = array();
$tdataep_reservas[".searchableFields"] = array();
$tdataep_reservas[".ShortName"] = "ep_reservas";
$tdataep_reservas[".OwnerID"] = "";
$tdataep_reservas[".OriginalTable"] = "ep_reservas";


$tdataep_reservas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataep_reservas[".originalPagesByType"] = $tdataep_reservas[".pagesByType"];
$tdataep_reservas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataep_reservas[".originalPages"] = $tdataep_reservas[".pages"];
$tdataep_reservas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataep_reservas[".originalDefaultPages"] = $tdataep_reservas[".defaultPages"];

//	field labels
$fieldLabelsep_reservas = array();
$fieldToolTipsep_reservas = array();
$pageTitlesep_reservas = array();
$placeHoldersep_reservas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsep_reservas["Spanish"] = array();
	$fieldToolTipsep_reservas["Spanish"] = array();
	$placeHoldersep_reservas["Spanish"] = array();
	$pageTitlesep_reservas["Spanish"] = array();
	$fieldLabelsep_reservas["Spanish"]["RID"] = "RID";
	$fieldToolTipsep_reservas["Spanish"]["RID"] = "";
	$placeHoldersep_reservas["Spanish"]["RID"] = "";
	$fieldLabelsep_reservas["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipsep_reservas["Spanish"]["UEJ"] = "";
	$placeHoldersep_reservas["Spanish"]["UEJ"] = "";
	$fieldLabelsep_reservas["Spanish"]["NOMBRE_UEJ"] = "NOMBRE UEJ";
	$fieldToolTipsep_reservas["Spanish"]["NOMBRE_UEJ"] = "";
	$placeHoldersep_reservas["Spanish"]["NOMBRE_UEJ"] = "";
	$fieldLabelsep_reservas["Spanish"]["RUBRO"] = "RUBRO";
	$fieldToolTipsep_reservas["Spanish"]["RUBRO"] = "";
	$placeHoldersep_reservas["Spanish"]["RUBRO"] = "";
	$fieldLabelsep_reservas["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsep_reservas["Spanish"]["TIPO"] = "";
	$placeHoldersep_reservas["Spanish"]["TIPO"] = "";
	$fieldLabelsep_reservas["Spanish"]["CTA"] = "CTA";
	$fieldToolTipsep_reservas["Spanish"]["CTA"] = "";
	$placeHoldersep_reservas["Spanish"]["CTA"] = "";
	$fieldLabelsep_reservas["Spanish"]["SUBCTA"] = "SUBCTA";
	$fieldToolTipsep_reservas["Spanish"]["SUBCTA"] = "";
	$placeHoldersep_reservas["Spanish"]["SUBCTA"] = "";
	$fieldLabelsep_reservas["Spanish"]["OBJ"] = "OBJ";
	$fieldToolTipsep_reservas["Spanish"]["OBJ"] = "";
	$placeHoldersep_reservas["Spanish"]["OBJ"] = "";
	$fieldLabelsep_reservas["Spanish"]["ORD"] = "ORD";
	$fieldToolTipsep_reservas["Spanish"]["ORD"] = "";
	$placeHoldersep_reservas["Spanish"]["ORD"] = "";
	$fieldLabelsep_reservas["Spanish"]["SORORD"] = "SORORD";
	$fieldToolTipsep_reservas["Spanish"]["SORORD"] = "";
	$placeHoldersep_reservas["Spanish"]["SORORD"] = "";
	$fieldLabelsep_reservas["Spanish"]["ITEM"] = "ITEM";
	$fieldToolTipsep_reservas["Spanish"]["ITEM"] = "";
	$placeHoldersep_reservas["Spanish"]["ITEM"] = "";
	$fieldLabelsep_reservas["Spanish"]["SUBITEM"] = "SUBITEM";
	$fieldToolTipsep_reservas["Spanish"]["SUBITEM"] = "";
	$placeHoldersep_reservas["Spanish"]["SUBITEM"] = "";
	$fieldLabelsep_reservas["Spanish"]["SUBITEM_2"] = "SUBITEM 2";
	$fieldToolTipsep_reservas["Spanish"]["SUBITEM_2"] = "";
	$placeHoldersep_reservas["Spanish"]["SUBITEM_2"] = "";
	$fieldLabelsep_reservas["Spanish"]["FUENTE"] = "FUENTE";
	$fieldToolTipsep_reservas["Spanish"]["FUENTE"] = "";
	$placeHoldersep_reservas["Spanish"]["FUENTE"] = "";
	$fieldLabelsep_reservas["Spanish"]["REC"] = "REC";
	$fieldToolTipsep_reservas["Spanish"]["REC"] = "";
	$placeHoldersep_reservas["Spanish"]["REC"] = "";
	$fieldLabelsep_reservas["Spanish"]["SIT"] = "SIT";
	$fieldToolTipsep_reservas["Spanish"]["SIT"] = "";
	$placeHoldersep_reservas["Spanish"]["SIT"] = "";
	$fieldLabelsep_reservas["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsep_reservas["Spanish"]["DESCRIPCION"] = "";
	$placeHoldersep_reservas["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelsep_reservas["Spanish"]["VALOR_MAXIMO_A_CONSTITUIR"] = "VALOR MAXIMO A CONSTITUIR";
	$fieldToolTipsep_reservas["Spanish"]["VALOR_MAXIMO_A_CONSTITUIR"] = "";
	$placeHoldersep_reservas["Spanish"]["VALOR_MAXIMO_A_CONSTITUIR"] = "";
	$fieldLabelsep_reservas["Spanish"]["VALOR_CONSTITUIDO"] = "VALOR CONSTITUIDO";
	$fieldToolTipsep_reservas["Spanish"]["VALOR_CONSTITUIDO"] = "";
	$placeHoldersep_reservas["Spanish"]["VALOR_CONSTITUIDO"] = "";
	$fieldLabelsep_reservas["Spanish"]["COMPROMISO"] = "COMPROMISO";
	$fieldToolTipsep_reservas["Spanish"]["COMPROMISO"] = "";
	$placeHoldersep_reservas["Spanish"]["COMPROMISO"] = "";
	$fieldLabelsep_reservas["Spanish"]["OBLIGACION"] = "OBLIGACION";
	$fieldToolTipsep_reservas["Spanish"]["OBLIGACION"] = "";
	$placeHoldersep_reservas["Spanish"]["OBLIGACION"] = "";
	$fieldLabelsep_reservas["Spanish"]["ORDEN_PAGO"] = "ORDEN PAGO";
	$fieldToolTipsep_reservas["Spanish"]["ORDEN_PAGO"] = "";
	$placeHoldersep_reservas["Spanish"]["ORDEN_PAGO"] = "";
	$fieldLabelsep_reservas["Spanish"]["PAGOS"] = "PAGOS";
	$fieldToolTipsep_reservas["Spanish"]["PAGOS"] = "";
	$placeHoldersep_reservas["Spanish"]["PAGOS"] = "";
	if (count($fieldToolTipsep_reservas["Spanish"]))
		$tdataep_reservas[".isUseToolTips"] = true;
}


	$tdataep_reservas[".NCSearch"] = true;



$tdataep_reservas[".shortTableName"] = "ep_reservas";
$tdataep_reservas[".nSecOptions"] = 0;

$tdataep_reservas[".mainTableOwnerID"] = "";
$tdataep_reservas[".entityType"] = 0;
$tdataep_reservas[".connId"] = "sep2_at_localhost";


$tdataep_reservas[".strOriginalTableName"] = "ep_reservas";

	



$tdataep_reservas[".showAddInPopup"] = false;

$tdataep_reservas[".showEditInPopup"] = false;

$tdataep_reservas[".showViewInPopup"] = false;

$tdataep_reservas[".listAjax"] = false;
//	temporary
//$tdataep_reservas[".listAjax"] = false;

	$tdataep_reservas[".audit"] = false;

	$tdataep_reservas[".locking"] = false;


$pages = $tdataep_reservas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataep_reservas[".edit"] = true;
	$tdataep_reservas[".afterEditAction"] = 1;
	$tdataep_reservas[".closePopupAfterEdit"] = 1;
	$tdataep_reservas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataep_reservas[".add"] = true;
$tdataep_reservas[".afterAddAction"] = 1;
$tdataep_reservas[".closePopupAfterAdd"] = 1;
$tdataep_reservas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataep_reservas[".list"] = true;
}



$tdataep_reservas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataep_reservas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataep_reservas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataep_reservas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataep_reservas[".printFriendly"] = true;
}



$tdataep_reservas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataep_reservas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataep_reservas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataep_reservas[".isUseAjaxSuggest"] = true;





$tdataep_reservas[".ajaxCodeSnippetAdded"] = false;

$tdataep_reservas[".buttonsAdded"] = false;

$tdataep_reservas[".addPageEvents"] = true;

// use timepicker for search panel
$tdataep_reservas[".isUseTimeForSearch"] = false;


$tdataep_reservas[".badgeColor"] = "E67349";


$tdataep_reservas[".allSearchFields"] = array();
$tdataep_reservas[".filterFields"] = array();
$tdataep_reservas[".requiredSearchFields"] = array();

$tdataep_reservas[".googleLikeFields"] = array();
$tdataep_reservas[".googleLikeFields"][] = "COMPROMISO";
$tdataep_reservas[".googleLikeFields"][] = "CTA";
$tdataep_reservas[".googleLikeFields"][] = "DESCRIPCION";
$tdataep_reservas[".googleLikeFields"][] = "FUENTE";
$tdataep_reservas[".googleLikeFields"][] = "ITEM";
$tdataep_reservas[".googleLikeFields"][] = "NOMBRE UEJ";
$tdataep_reservas[".googleLikeFields"][] = "OBJ";
$tdataep_reservas[".googleLikeFields"][] = "OBLIGACION";
$tdataep_reservas[".googleLikeFields"][] = "ORD";
$tdataep_reservas[".googleLikeFields"][] = "ORDEN PAGO";
$tdataep_reservas[".googleLikeFields"][] = "PAGOS";
$tdataep_reservas[".googleLikeFields"][] = "REC";
$tdataep_reservas[".googleLikeFields"][] = "RID";
$tdataep_reservas[".googleLikeFields"][] = "RUBRO";
$tdataep_reservas[".googleLikeFields"][] = "SIT";
$tdataep_reservas[".googleLikeFields"][] = "SORORD";
$tdataep_reservas[".googleLikeFields"][] = "SUBCTA";
$tdataep_reservas[".googleLikeFields"][] = "SUBITEM";
$tdataep_reservas[".googleLikeFields"][] = "SUBITEM 2";
$tdataep_reservas[".googleLikeFields"][] = "TIPO";
$tdataep_reservas[".googleLikeFields"][] = "UEJ";
$tdataep_reservas[".googleLikeFields"][] = "VALOR CONSTITUIDO";
$tdataep_reservas[".googleLikeFields"][] = "VALOR MAXIMO A CONSTITUIR";



$tdataep_reservas[".tableType"] = "list";

$tdataep_reservas[".printerPageOrientation"] = 0;
$tdataep_reservas[".nPrinterPageScale"] = 100;

$tdataep_reservas[".nPrinterSplitRecords"] = 40;

$tdataep_reservas[".geocodingEnabled"] = false;










$tdataep_reservas[".pageSize"] = 20;

$tdataep_reservas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataep_reservas[".strOrderBy"] = $tstrOrderBy;

$tdataep_reservas[".orderindexes"] = array();


$tdataep_reservas[".sqlHead"] = "SELECT COMPROMISO,  	CTA,  	DESCRIPCION,  	FUENTE,  	ITEM,  	`NOMBRE UEJ`,  	OBJ,  	OBLIGACION,  	ORD,  	`ORDEN PAGO`,  	PAGOS,  	REC,  	RID,  	RUBRO,  	SIT,  	SORORD,  	SUBCTA,  	SUBITEM,  	`SUBITEM 2`,  	TIPO,  	UEJ,  	`VALOR CONSTITUIDO`,  	`VALOR MAXIMO A CONSTITUIR`";
$tdataep_reservas[".sqlFrom"] = "FROM ep_reservas";
$tdataep_reservas[".sqlWhereExpr"] = "";
$tdataep_reservas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataep_reservas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataep_reservas[".arrGroupsPerPage"] = $arrGPP;

$tdataep_reservas[".highlightSearchResults"] = true;

$tableKeysep_reservas = array();
$tableKeysep_reservas[] = "RID";
$tdataep_reservas[".Keys"] = $tableKeysep_reservas;


$tdataep_reservas[".hideMobileList"] = array();




//	COMPROMISO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "COMPROMISO";
	$fdata["GoodName"] = "COMPROMISO";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","COMPROMISO");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "COMPROMISO";

		$fdata["sourceSingle"] = "COMPROMISO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPROMISO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataep_reservas["COMPROMISO"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "COMPROMISO";
//	CTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CTA";
	$fdata["GoodName"] = "CTA";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","CTA");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CTA";

		$fdata["sourceSingle"] = "CTA";

	
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


	$tdataep_reservas["CTA"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "CTA";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","DESCRIPCION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DESCRIPCION";

		$fdata["sourceSingle"] = "DESCRIPCION";

	
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


	$tdataep_reservas["DESCRIPCION"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "DESCRIPCION";
//	FUENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FUENTE";
	$fdata["GoodName"] = "FUENTE";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","FUENTE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "FUENTE";

		$fdata["sourceSingle"] = "FUENTE";

	
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


	$tdataep_reservas["FUENTE"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "FUENTE";
//	ITEM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ITEM";
	$fdata["GoodName"] = "ITEM";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","ITEM");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ITEM";

		$fdata["sourceSingle"] = "ITEM";

	
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


	$tdataep_reservas["ITEM"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "ITEM";
//	NOMBRE UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "NOMBRE UEJ";
	$fdata["GoodName"] = "NOMBRE_UEJ";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","NOMBRE_UEJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NOMBRE UEJ";

		$fdata["sourceSingle"] = "NOMBRE UEJ";

	
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


	$tdataep_reservas["NOMBRE UEJ"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "NOMBRE UEJ";
//	OBJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "OBJ";
	$fdata["GoodName"] = "OBJ";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","OBJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OBJ";

		$fdata["sourceSingle"] = "OBJ";

	
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


	$tdataep_reservas["OBJ"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "OBJ";
//	OBLIGACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "OBLIGACION";
	$fdata["GoodName"] = "OBLIGACION";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","OBLIGACION");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "OBLIGACION";

		$fdata["sourceSingle"] = "OBLIGACION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBLIGACION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataep_reservas["OBLIGACION"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "OBLIGACION";
//	ORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ORD";
	$fdata["GoodName"] = "ORD";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","ORD");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ORD";

		$fdata["sourceSingle"] = "ORD";

	
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


	$tdataep_reservas["ORD"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "ORD";
//	ORDEN PAGO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ORDEN PAGO";
	$fdata["GoodName"] = "ORDEN_PAGO";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","ORDEN_PAGO");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "ORDEN PAGO";

		$fdata["sourceSingle"] = "ORDEN PAGO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ORDEN PAGO`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataep_reservas["ORDEN PAGO"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "ORDEN PAGO";
//	PAGOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PAGOS";
	$fdata["GoodName"] = "PAGOS";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","PAGOS");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "PAGOS";

		$fdata["sourceSingle"] = "PAGOS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAGOS";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataep_reservas["PAGOS"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "PAGOS";
//	REC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "REC";
	$fdata["GoodName"] = "REC";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","REC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "REC";

		$fdata["sourceSingle"] = "REC";

	
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


	$tdataep_reservas["REC"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "REC";
//	RID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "RID";
	$fdata["GoodName"] = "RID";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","RID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "RID";

		$fdata["sourceSingle"] = "RID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RID";

	
	
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


	$tdataep_reservas["RID"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "RID";
//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","RUBRO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RUBRO";

		$fdata["sourceSingle"] = "RUBRO";

	
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


	$tdataep_reservas["RUBRO"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "RUBRO";
//	SIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "SIT";
	$fdata["GoodName"] = "SIT";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","SIT");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SIT";

		$fdata["sourceSingle"] = "SIT";

	
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


	$tdataep_reservas["SIT"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "SIT";
//	SORORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "SORORD";
	$fdata["GoodName"] = "SORORD";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","SORORD");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SORORD";

		$fdata["sourceSingle"] = "SORORD";

	
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


	$tdataep_reservas["SORORD"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "SORORD";
//	SUBCTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SUBCTA";
	$fdata["GoodName"] = "SUBCTA";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","SUBCTA");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SUBCTA";

		$fdata["sourceSingle"] = "SUBCTA";

	
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


	$tdataep_reservas["SUBCTA"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "SUBCTA";
//	SUBITEM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "SUBITEM";
	$fdata["GoodName"] = "SUBITEM";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","SUBITEM");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SUBITEM";

		$fdata["sourceSingle"] = "SUBITEM";

	
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


	$tdataep_reservas["SUBITEM"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "SUBITEM";
//	SUBITEM 2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "SUBITEM 2";
	$fdata["GoodName"] = "SUBITEM_2";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","SUBITEM_2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SUBITEM 2";

		$fdata["sourceSingle"] = "SUBITEM 2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`SUBITEM 2`";

	
	
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


	$tdataep_reservas["SUBITEM 2"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "SUBITEM 2";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","TIPO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TIPO";

		$fdata["sourceSingle"] = "TIPO";

	
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


	$tdataep_reservas["TIPO"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "TIPO";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","UEJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UEJ";

		$fdata["sourceSingle"] = "UEJ";

	
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


	$tdataep_reservas["UEJ"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "UEJ";
//	VALOR CONSTITUIDO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "VALOR CONSTITUIDO";
	$fdata["GoodName"] = "VALOR_CONSTITUIDO";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","VALOR_CONSTITUIDO");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VALOR CONSTITUIDO";

		$fdata["sourceSingle"] = "VALOR CONSTITUIDO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`VALOR CONSTITUIDO`";

	
	
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


	$tdataep_reservas["VALOR CONSTITUIDO"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "VALOR CONSTITUIDO";
//	VALOR MAXIMO A CONSTITUIR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "VALOR MAXIMO A CONSTITUIR";
	$fdata["GoodName"] = "VALOR_MAXIMO_A_CONSTITUIR";
	$fdata["ownerTable"] = "ep_reservas";
	$fdata["Label"] = GetFieldLabel("ep_reservas","VALOR_MAXIMO_A_CONSTITUIR");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VALOR MAXIMO A CONSTITUIR";

		$fdata["sourceSingle"] = "VALOR MAXIMO A CONSTITUIR";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`VALOR MAXIMO A CONSTITUIR`";

	
	
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


	$tdataep_reservas["VALOR MAXIMO A CONSTITUIR"] = $fdata;
		$tdataep_reservas[".searchableFields"][] = "VALOR MAXIMO A CONSTITUIR";


$tables_data["ep_reservas"]=&$tdataep_reservas;
$field_labels["ep_reservas"] = &$fieldLabelsep_reservas;
$fieldToolTips["ep_reservas"] = &$fieldToolTipsep_reservas;
$placeHolders["ep_reservas"] = &$placeHoldersep_reservas;
$page_titles["ep_reservas"] = &$pageTitlesep_reservas;


changeTextControlsToDate( "ep_reservas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ep_reservas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ep_reservas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ep_reservas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COMPROMISO,  	CTA,  	DESCRIPCION,  	FUENTE,  	ITEM,  	`NOMBRE UEJ`,  	OBJ,  	OBLIGACION,  	ORD,  	`ORDEN PAGO`,  	PAGOS,  	REC,  	RID,  	RUBRO,  	SIT,  	SORORD,  	SUBCTA,  	SUBITEM,  	`SUBITEM 2`,  	TIPO,  	UEJ,  	`VALOR CONSTITUIDO`,  	`VALOR MAXIMO A CONSTITUIR`";
$proto0["m_strFrom"] = "FROM ep_reservas";
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
	"m_strName" => "COMPROMISO",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto6["m_sql"] = "COMPROMISO";
$proto6["m_srcTableName"] = "ep_reservas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CTA",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto8["m_sql"] = "CTA";
$proto8["m_srcTableName"] = "ep_reservas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto10["m_sql"] = "DESCRIPCION";
$proto10["m_srcTableName"] = "ep_reservas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTE",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto12["m_sql"] = "FUENTE";
$proto12["m_srcTableName"] = "ep_reservas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ITEM",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto14["m_sql"] = "ITEM";
$proto14["m_srcTableName"] = "ep_reservas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE UEJ",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto16["m_sql"] = "`NOMBRE UEJ`";
$proto16["m_srcTableName"] = "ep_reservas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "OBJ",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto18["m_sql"] = "OBJ";
$proto18["m_srcTableName"] = "ep_reservas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "OBLIGACION",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto20["m_sql"] = "OBLIGACION";
$proto20["m_srcTableName"] = "ep_reservas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ORD",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto22["m_sql"] = "ORD";
$proto22["m_srcTableName"] = "ep_reservas";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ORDEN PAGO",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto24["m_sql"] = "`ORDEN PAGO`";
$proto24["m_srcTableName"] = "ep_reservas";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "PAGOS",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto26["m_sql"] = "PAGOS";
$proto26["m_srcTableName"] = "ep_reservas";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "REC",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto28["m_sql"] = "REC";
$proto28["m_srcTableName"] = "ep_reservas";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "RID",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto30["m_sql"] = "RID";
$proto30["m_srcTableName"] = "ep_reservas";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto32["m_sql"] = "RUBRO";
$proto32["m_srcTableName"] = "ep_reservas";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "SIT",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto34["m_sql"] = "SIT";
$proto34["m_srcTableName"] = "ep_reservas";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "SORORD",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto36["m_sql"] = "SORORD";
$proto36["m_srcTableName"] = "ep_reservas";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "SUBCTA",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto38["m_sql"] = "SUBCTA";
$proto38["m_srcTableName"] = "ep_reservas";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "SUBITEM",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto40["m_sql"] = "SUBITEM";
$proto40["m_srcTableName"] = "ep_reservas";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "SUBITEM 2",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto42["m_sql"] = "`SUBITEM 2`";
$proto42["m_srcTableName"] = "ep_reservas";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto44["m_sql"] = "TIPO";
$proto44["m_srcTableName"] = "ep_reservas";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto46["m_sql"] = "UEJ";
$proto46["m_srcTableName"] = "ep_reservas";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR CONSTITUIDO",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto48["m_sql"] = "`VALOR CONSTITUIDO`";
$proto48["m_srcTableName"] = "ep_reservas";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR MAXIMO A CONSTITUIR",
	"m_strTable" => "ep_reservas",
	"m_srcTableName" => "ep_reservas"
));

$proto50["m_sql"] = "`VALOR MAXIMO A CONSTITUIR`";
$proto50["m_srcTableName"] = "ep_reservas";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "ep_reservas";
$proto53["m_srcTableName"] = "ep_reservas";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "COMPROMISO";
$proto53["m_columns"][] = "CTA";
$proto53["m_columns"][] = "DESCRIPCION";
$proto53["m_columns"][] = "FUENTE";
$proto53["m_columns"][] = "ITEM";
$proto53["m_columns"][] = "NOMBRE UEJ";
$proto53["m_columns"][] = "OBJ";
$proto53["m_columns"][] = "OBLIGACION";
$proto53["m_columns"][] = "ORD";
$proto53["m_columns"][] = "ORDEN PAGO";
$proto53["m_columns"][] = "PAGOS";
$proto53["m_columns"][] = "REC";
$proto53["m_columns"][] = "RID";
$proto53["m_columns"][] = "RUBRO";
$proto53["m_columns"][] = "SIT";
$proto53["m_columns"][] = "SORORD";
$proto53["m_columns"][] = "SUBCTA";
$proto53["m_columns"][] = "SUBITEM";
$proto53["m_columns"][] = "SUBITEM 2";
$proto53["m_columns"][] = "TIPO";
$proto53["m_columns"][] = "UEJ";
$proto53["m_columns"][] = "VALOR CONSTITUIDO";
$proto53["m_columns"][] = "VALOR MAXIMO A CONSTITUIR";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "ep_reservas";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "ep_reservas";
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
$proto0["m_srcTableName"]="ep_reservas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ep_reservas = createSqlQuery_ep_reservas();


	
								;

																							

$tdataep_reservas[".sqlquery"] = $queryData_ep_reservas;



include_once(getabspath("include/ep_reservas_events.php"));
$tdataep_reservas[".hasEvents"] = true;

?>