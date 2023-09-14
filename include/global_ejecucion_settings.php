<?php
$tdataglobal_ejecucion = array();
$tdataglobal_ejecucion[".searchableFields"] = array();
$tdataglobal_ejecucion[".ShortName"] = "global_ejecucion";
$tdataglobal_ejecucion[".OwnerID"] = "";
$tdataglobal_ejecucion[".OriginalTable"] = "global_ejecucion";


$tdataglobal_ejecucion[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataglobal_ejecucion[".originalPagesByType"] = $tdataglobal_ejecucion[".pagesByType"];
$tdataglobal_ejecucion[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataglobal_ejecucion[".originalPages"] = $tdataglobal_ejecucion[".pages"];
$tdataglobal_ejecucion[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataglobal_ejecucion[".originalDefaultPages"] = $tdataglobal_ejecucion[".defaultPages"];

//	field labels
$fieldLabelsglobal_ejecucion = array();
$fieldToolTipsglobal_ejecucion = array();
$pageTitlesglobal_ejecucion = array();
$placeHoldersglobal_ejecucion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_ejecucion["Spanish"] = array();
	$fieldToolTipsglobal_ejecucion["Spanish"] = array();
	$placeHoldersglobal_ejecucion["Spanish"] = array();
	$pageTitlesglobal_ejecucion["Spanish"] = array();
	$fieldLabelsglobal_ejecucion["Spanish"]["id_transac"] = "Id Transac";
	$fieldToolTipsglobal_ejecucion["Spanish"]["id_transac"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["id_transac"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["VIGENCIA"] = "VIGENCIA";
	$fieldToolTipsglobal_ejecucion["Spanish"]["VIGENCIA"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["VIGENCIA"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["CODIGO_BPIN"] = "CÓDIGO BPIN";
	$fieldToolTipsglobal_ejecucion["Spanish"]["CODIGO_BPIN"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["CODIGO_BPIN"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["FICHA_BPIN"] = "FICHA BPIN";
	$fieldToolTipsglobal_ejecucion["Spanish"]["FICHA_BPIN"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["FICHA_BPIN"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["UEJ_MIN"] = "UEJ MIN";
	$fieldToolTipsglobal_ejecucion["Spanish"]["UEJ_MIN"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["UEJ_MIN"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["NOMBRE_UEJ"] = "NOMBRE UEJ";
	$fieldToolTipsglobal_ejecucion["Spanish"]["NOMBRE_UEJ"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["NOMBRE_UEJ"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["RUBRO"] = "RUBRO";
	$fieldToolTipsglobal_ejecucion["Spanish"]["RUBRO"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["RUBRO"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["USO_SN"] = "CUENTA CON USO PRESUPUESTAL?";
	$fieldToolTipsglobal_ejecucion["Spanish"]["USO_SN"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["USO_SN"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsglobal_ejecucion["Spanish"]["TIPO"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["TIPO"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsglobal_ejecucion["Spanish"]["DESCRIPCION"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["APR__VIGENTE"] = "PRESUPUESTO ASIGNADO";
	$fieldToolTipsglobal_ejecucion["Spanish"]["APR__VIGENTE"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["APR__VIGENTE"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["DEPENDENCIA_ID"] = "DEPENDENCIA";
	$fieldToolTipsglobal_ejecucion["Spanish"]["DEPENDENCIA_ID"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["DEPENDENCIA_ID"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["RESPONSABLE_ID"] = "RESPONSABLE";
	$fieldToolTipsglobal_ejecucion["Spanish"]["RESPONSABLE_ID"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["RESPONSABLE_ID"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["DEPENDENCIA_SUP_ID"] = "DEPENDENCIA SUP.";
	$fieldToolTipsglobal_ejecucion["Spanish"]["DEPENDENCIA_SUP_ID"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["DEPENDENCIA_SUP_ID"] = "";
	if (count($fieldToolTipsglobal_ejecucion["Spanish"]))
		$tdataglobal_ejecucion[".isUseToolTips"] = true;
}


	$tdataglobal_ejecucion[".NCSearch"] = true;



$tdataglobal_ejecucion[".shortTableName"] = "global_ejecucion";
$tdataglobal_ejecucion[".nSecOptions"] = 0;

$tdataglobal_ejecucion[".mainTableOwnerID"] = "";
$tdataglobal_ejecucion[".entityType"] = 0;
$tdataglobal_ejecucion[".connId"] = "sep2_at_localhost";


$tdataglobal_ejecucion[".strOriginalTableName"] = "global_ejecucion";

	



$tdataglobal_ejecucion[".showAddInPopup"] = false;

$tdataglobal_ejecucion[".showEditInPopup"] = false;

$tdataglobal_ejecucion[".showViewInPopup"] = false;

$tdataglobal_ejecucion[".listAjax"] = false;
//	temporary
//$tdataglobal_ejecucion[".listAjax"] = false;

	$tdataglobal_ejecucion[".audit"] = true;

	$tdataglobal_ejecucion[".locking"] = true;


$pages = $tdataglobal_ejecucion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_ejecucion[".edit"] = true;
	$tdataglobal_ejecucion[".afterEditAction"] = 1;
	$tdataglobal_ejecucion[".closePopupAfterEdit"] = 1;
	$tdataglobal_ejecucion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_ejecucion[".add"] = true;
$tdataglobal_ejecucion[".afterAddAction"] = 1;
$tdataglobal_ejecucion[".closePopupAfterAdd"] = 1;
$tdataglobal_ejecucion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_ejecucion[".list"] = true;
}



$tdataglobal_ejecucion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_ejecucion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_ejecucion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_ejecucion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_ejecucion[".printFriendly"] = true;
}



$tdataglobal_ejecucion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_ejecucion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_ejecucion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_ejecucion[".isUseAjaxSuggest"] = true;





$tdataglobal_ejecucion[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_ejecucion[".buttonsAdded"] = false;

$tdataglobal_ejecucion[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_ejecucion[".isUseTimeForSearch"] = false;


$tdataglobal_ejecucion[".badgeColor"] = "DC143C";


$tdataglobal_ejecucion[".allSearchFields"] = array();
$tdataglobal_ejecucion[".filterFields"] = array();
$tdataglobal_ejecucion[".requiredSearchFields"] = array();

$tdataglobal_ejecucion[".googleLikeFields"] = array();
$tdataglobal_ejecucion[".googleLikeFields"][] = "id_transac";
$tdataglobal_ejecucion[".googleLikeFields"][] = "VIGENCIA";
$tdataglobal_ejecucion[".googleLikeFields"][] = "CODIGO_BPIN";
$tdataglobal_ejecucion[".googleLikeFields"][] = "FICHA_BPIN";
$tdataglobal_ejecucion[".googleLikeFields"][] = "UEJ_MIN";
$tdataglobal_ejecucion[".googleLikeFields"][] = "NOMBRE UEJ";
$tdataglobal_ejecucion[".googleLikeFields"][] = "RUBRO";
$tdataglobal_ejecucion[".googleLikeFields"][] = "USO_SN";
$tdataglobal_ejecucion[".googleLikeFields"][] = "TIPO";
$tdataglobal_ejecucion[".googleLikeFields"][] = "DESCRIPCION";
$tdataglobal_ejecucion[".googleLikeFields"][] = "APR. VIGENTE";
$tdataglobal_ejecucion[".googleLikeFields"][] = "DEPENDENCIA_ID";
$tdataglobal_ejecucion[".googleLikeFields"][] = "RESPONSABLE_ID";
$tdataglobal_ejecucion[".googleLikeFields"][] = "DEPENDENCIA_SUP_ID";



$tdataglobal_ejecucion[".tableType"] = "list";

$tdataglobal_ejecucion[".printerPageOrientation"] = 0;
$tdataglobal_ejecucion[".nPrinterPageScale"] = 100;

$tdataglobal_ejecucion[".nPrinterSplitRecords"] = 40;

$tdataglobal_ejecucion[".geocodingEnabled"] = false;










$tdataglobal_ejecucion[".pageSize"] = 20;

$tdataglobal_ejecucion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_ejecucion[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_ejecucion[".orderindexes"] = array();


$tdataglobal_ejecucion[".sqlHead"] = "SELECT id_transac, VIGENCIA, CODIGO_BPIN, FICHA_BPIN, UEJ_MIN, `NOMBRE UEJ`, RUBRO, USO_SN, TIPO, DESCRIPCION, `APR. VIGENTE`, DEPENDENCIA_ID, RESPONSABLE_ID, DEPENDENCIA_SUP_ID";
$tdataglobal_ejecucion[".sqlFrom"] = "FROM global_ejecucion";
$tdataglobal_ejecucion[".sqlWhereExpr"] = "";
$tdataglobal_ejecucion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_ejecucion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_ejecucion[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_ejecucion[".highlightSearchResults"] = true;

$tableKeysglobal_ejecucion = array();
$tableKeysglobal_ejecucion[] = "id_transac";
$tdataglobal_ejecucion[".Keys"] = $tableKeysglobal_ejecucion;


$tdataglobal_ejecucion[".hideMobileList"] = array();




//	id_transac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_transac";
	$fdata["GoodName"] = "id_transac";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","id_transac");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_transac";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_transac";

	
	
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


	$tdataglobal_ejecucion["id_transac"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "id_transac";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","VIGENCIA");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "VIGENCIA";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VIGENCIA";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "vigencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "vigencia";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "vigencia";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataglobal_ejecucion["VIGENCIA"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "VIGENCIA";
//	CODIGO_BPIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CODIGO_BPIN";
	$fdata["GoodName"] = "CODIGO_BPIN";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","CODIGO_BPIN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CODIGO_BPIN";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CODIGO_BPIN";

	
	
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


		$edata["strEditMask"] = "9999999999999";

	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=13";

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


	$tdataglobal_ejecucion["CODIGO_BPIN"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "CODIGO_BPIN";
//	FICHA_BPIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FICHA_BPIN";
	$fdata["GoodName"] = "FICHA_BPIN";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","FICHA_BPIN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "FICHA_BPIN";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FICHA_BPIN";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "fbpin";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdataglobal_ejecucion["FICHA_BPIN"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "FICHA_BPIN";
//	UEJ_MIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "UEJ_MIN";
	$fdata["GoodName"] = "UEJ_MIN";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","UEJ_MIN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UEJ_MIN";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UEJ_MIN";

	
	
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


	$tdataglobal_ejecucion["UEJ_MIN"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "UEJ_MIN";
//	NOMBRE UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "NOMBRE UEJ";
	$fdata["GoodName"] = "NOMBRE_UEJ";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","NOMBRE_UEJ");
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


	$tdataglobal_ejecucion["NOMBRE UEJ"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "NOMBRE UEJ";
//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","RUBRO");
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


	$tdataglobal_ejecucion["RUBRO"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "RUBRO";
//	USO_SN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "USO_SN";
	$fdata["GoodName"] = "USO_SN";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","USO_SN");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "USO_SN";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USO_SN";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_sn";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "estadosn_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "estadosn_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataglobal_ejecucion["USO_SN"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "USO_SN";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","TIPO");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_tiporubro";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "uej_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "uej_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataglobal_ejecucion["TIPO"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "TIPO";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","DESCRIPCION");
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


	$tdataglobal_ejecucion["DESCRIPCION"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "DESCRIPCION";
//	APR. VIGENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "APR. VIGENTE";
	$fdata["GoodName"] = "APR__VIGENTE";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","APR__VIGENTE");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "APR. VIGENTE";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. VIGENTE`";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
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


	$tdataglobal_ejecucion["APR. VIGENTE"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "APR. VIGENTE";
//	DEPENDENCIA_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DEPENDENCIA_ID";
	$fdata["GoodName"] = "DEPENDENCIA_ID";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","DEPENDENCIA_ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DEPENDENCIA_ID";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEPENDENCIA_ID";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencia";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"DEPENDENCIA_SUP_ID", 'lookupF'=>"id_depto_superior");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "RESPONSABLE_ID";

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataglobal_ejecucion["DEPENDENCIA_ID"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "DEPENDENCIA_ID";
//	RESPONSABLE_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "RESPONSABLE_ID";
	$fdata["GoodName"] = "RESPONSABLE_ID";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","RESPONSABLE_ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "RESPONSABLE_ID";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RESPONSABLE_ID";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "global_users";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "idusrglobal";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "DEPENDENCIA_ID", "lookup" => "usr_dep" );

	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataglobal_ejecucion["RESPONSABLE_ID"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "RESPONSABLE_ID";
//	DEPENDENCIA_SUP_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DEPENDENCIA_SUP_ID";
	$fdata["GoodName"] = "DEPENDENCIA_SUP_ID";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","DEPENDENCIA_SUP_ID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "DEPENDENCIA_SUP_ID";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEPENDENCIA_SUP_ID";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencias_001";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_depto_superior";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Departamento_superior";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataglobal_ejecucion["DEPENDENCIA_SUP_ID"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "DEPENDENCIA_SUP_ID";


$tables_data["global_ejecucion"]=&$tdataglobal_ejecucion;
$field_labels["global_ejecucion"] = &$fieldLabelsglobal_ejecucion;
$fieldToolTips["global_ejecucion"] = &$fieldToolTipsglobal_ejecucion;
$placeHolders["global_ejecucion"] = &$placeHoldersglobal_ejecucion;
$page_titles["global_ejecucion"] = &$pageTitlesglobal_ejecucion;


changeTextControlsToDate( "global_ejecucion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_ejecucion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_ejecucion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_ejecucion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_transac, VIGENCIA, CODIGO_BPIN, FICHA_BPIN, UEJ_MIN, `NOMBRE UEJ`, RUBRO, USO_SN, TIPO, DESCRIPCION, `APR. VIGENTE`, DEPENDENCIA_ID, RESPONSABLE_ID, DEPENDENCIA_SUP_ID";
$proto0["m_strFrom"] = "FROM global_ejecucion";
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
	"m_strName" => "id_transac",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto6["m_sql"] = "id_transac";
$proto6["m_srcTableName"] = "global_ejecucion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto8["m_sql"] = "VIGENCIA";
$proto8["m_srcTableName"] = "global_ejecucion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CODIGO_BPIN",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto10["m_sql"] = "CODIGO_BPIN";
$proto10["m_srcTableName"] = "global_ejecucion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FICHA_BPIN",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto12["m_sql"] = "FICHA_BPIN";
$proto12["m_srcTableName"] = "global_ejecucion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ_MIN",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto14["m_sql"] = "UEJ_MIN";
$proto14["m_srcTableName"] = "global_ejecucion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE UEJ",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto16["m_sql"] = "`NOMBRE UEJ`";
$proto16["m_srcTableName"] = "global_ejecucion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto18["m_sql"] = "RUBRO";
$proto18["m_srcTableName"] = "global_ejecucion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "USO_SN",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto20["m_sql"] = "USO_SN";
$proto20["m_srcTableName"] = "global_ejecucion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto22["m_sql"] = "TIPO";
$proto22["m_srcTableName"] = "global_ejecucion";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto24["m_sql"] = "DESCRIPCION";
$proto24["m_srcTableName"] = "global_ejecucion";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. VIGENTE",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto26["m_sql"] = "`APR. VIGENTE`";
$proto26["m_srcTableName"] = "global_ejecucion";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DEPENDENCIA_ID",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto28["m_sql"] = "DEPENDENCIA_ID";
$proto28["m_srcTableName"] = "global_ejecucion";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_ID",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto30["m_sql"] = "RESPONSABLE_ID";
$proto30["m_srcTableName"] = "global_ejecucion";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DEPENDENCIA_SUP_ID",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto32["m_sql"] = "DEPENDENCIA_SUP_ID";
$proto32["m_srcTableName"] = "global_ejecucion";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "global_ejecucion";
$proto35["m_srcTableName"] = "global_ejecucion";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "APR BLOQUEADA";
$proto35["m_columns"][] = "APR. ADICIONADA";
$proto35["m_columns"][] = "APR. DISPONIBLE";
$proto35["m_columns"][] = "APR. INICIAL";
$proto35["m_columns"][] = "APR. REDUCIDA";
$proto35["m_columns"][] = "APR. VIGENTE";
$proto35["m_columns"][] = "CDP";
$proto35["m_columns"][] = "CODIGO_BPIN";
$proto35["m_columns"][] = "COMPROMISO";
$proto35["m_columns"][] = "CTA";
$proto35["m_columns"][] = "DEPENDENCIA_ID";
$proto35["m_columns"][] = "DEPENDENCIA_SUP_ID";
$proto35["m_columns"][] = "DESCRIPCION";
$proto35["m_columns"][] = "FECHA_ACTUALIZACION";
$proto35["m_columns"][] = "FECHA_CORTE";
$proto35["m_columns"][] = "FICHA_BPIN";
$proto35["m_columns"][] = "FUENTE";
$proto35["m_columns"][] = "id_transac";
$proto35["m_columns"][] = "ITEM";
$proto35["m_columns"][] = "NOMBRE UEJ";
$proto35["m_columns"][] = "OBJ";
$proto35["m_columns"][] = "OBLIGACION";
$proto35["m_columns"][] = "ORD";
$proto35["m_columns"][] = "ORDEN PAGO";
$proto35["m_columns"][] = "PAGOS";
$proto35["m_columns"][] = "REC";
$proto35["m_columns"][] = "RESPONSABLE_ID";
$proto35["m_columns"][] = "RUBRO";
$proto35["m_columns"][] = "SIT";
$proto35["m_columns"][] = "SORORD";
$proto35["m_columns"][] = "SUBCTA";
$proto35["m_columns"][] = "SUBITEM";
$proto35["m_columns"][] = "SUBITEM 2";
$proto35["m_columns"][] = "TIPO";
$proto35["m_columns"][] = "UEJ";
$proto35["m_columns"][] = "UEJ_MIN";
$proto35["m_columns"][] = "UEJ_S";
$proto35["m_columns"][] = "USO_SN";
$proto35["m_columns"][] = "VIGENCIA";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "global_ejecucion";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "global_ejecucion";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_ejecucion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_ejecucion = createSqlQuery_global_ejecucion();


	
								;

														

$tdataglobal_ejecucion[".sqlquery"] = $queryData_global_ejecucion;



$tdataglobal_ejecucion[".hasEvents"] = false;

?>