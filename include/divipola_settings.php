<?php
$tdatadivipola = array();
$tdatadivipola[".searchableFields"] = array();
$tdatadivipola[".ShortName"] = "divipola";
$tdatadivipola[".OwnerID"] = "";
$tdatadivipola[".OriginalTable"] = "divipola";


$tdatadivipola[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadivipola[".originalPagesByType"] = $tdatadivipola[".pagesByType"];
$tdatadivipola[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadivipola[".originalPages"] = $tdatadivipola[".pages"];
$tdatadivipola[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadivipola[".originalDefaultPages"] = $tdatadivipola[".defaultPages"];

//	field labels
$fieldLabelsdivipola = array();
$fieldToolTipsdivipola = array();
$pageTitlesdivipola = array();
$placeHoldersdivipola = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdivipola["Spanish"] = array();
	$fieldToolTipsdivipola["Spanish"] = array();
	$placeHoldersdivipola["Spanish"] = array();
	$pageTitlesdivipola["Spanish"] = array();
	$fieldLabelsdivipola["Spanish"]["CODDPTO"] = "CODDPTO";
	$fieldToolTipsdivipola["Spanish"]["CODDPTO"] = "";
	$placeHoldersdivipola["Spanish"]["CODDPTO"] = "";
	$fieldLabelsdivipola["Spanish"]["CODMUN"] = "CODMUN";
	$fieldToolTipsdivipola["Spanish"]["CODMUN"] = "";
	$placeHoldersdivipola["Spanish"]["CODMUN"] = "";
	$fieldLabelsdivipola["Spanish"]["CODCENTPOBLADO"] = "CODCENTPOBLADO";
	$fieldToolTipsdivipola["Spanish"]["CODCENTPOBLADO"] = "";
	$placeHoldersdivipola["Spanish"]["CODCENTPOBLADO"] = "";
	$fieldLabelsdivipola["Spanish"]["NOMDPTO"] = "NOMDPTO";
	$fieldToolTipsdivipola["Spanish"]["NOMDPTO"] = "";
	$placeHoldersdivipola["Spanish"]["NOMDPTO"] = "";
	$fieldLabelsdivipola["Spanish"]["NOMMUNICIPIO"] = "NOMMUNICIPIO";
	$fieldToolTipsdivipola["Spanish"]["NOMMUNICIPIO"] = "";
	$placeHoldersdivipola["Spanish"]["NOMMUNICIPIO"] = "";
	$fieldLabelsdivipola["Spanish"]["NOMCENTPOBLADO"] = "NOMCENTPOBLADO";
	$fieldToolTipsdivipola["Spanish"]["NOMCENTPOBLADO"] = "";
	$placeHoldersdivipola["Spanish"]["NOMCENTPOBLADO"] = "";
	$fieldLabelsdivipola["Spanish"]["TIPOCENTPOBLADO"] = "TIPOCENTPOBLADO";
	$fieldToolTipsdivipola["Spanish"]["TIPOCENTPOBLADO"] = "";
	$placeHoldersdivipola["Spanish"]["TIPOCENTPOBLADO"] = "";
	$fieldLabelsdivipola["Spanish"]["LON"] = "LON";
	$fieldToolTipsdivipola["Spanish"]["LON"] = "";
	$placeHoldersdivipola["Spanish"]["LON"] = "";
	$fieldLabelsdivipola["Spanish"]["F9"] = "F9";
	$fieldToolTipsdivipola["Spanish"]["F9"] = "";
	$placeHoldersdivipola["Spanish"]["F9"] = "";
	$fieldLabelsdivipola["Spanish"]["LAT"] = "LAT";
	$fieldToolTipsdivipola["Spanish"]["LAT"] = "";
	$placeHoldersdivipola["Spanish"]["LAT"] = "";
	$fieldLabelsdivipola["Spanish"]["DISTRITO"] = "DISTRITO";
	$fieldToolTipsdivipola["Spanish"]["DISTRITO"] = "";
	$placeHoldersdivipola["Spanish"]["DISTRITO"] = "";
	$fieldLabelsdivipola["Spanish"]["TIPOMUN"] = "TIPOMUN";
	$fieldToolTipsdivipola["Spanish"]["TIPOMUN"] = "";
	$placeHoldersdivipola["Spanish"]["TIPOMUN"] = "";
	$fieldLabelsdivipola["Spanish"]["AREAMETRO"] = "AREAMETRO";
	$fieldToolTipsdivipola["Spanish"]["AREAMETRO"] = "";
	$placeHoldersdivipola["Spanish"]["AREAMETRO"] = "";
	$fieldLabelsdivipola["Spanish"]["CENSO"] = "CENSO";
	$fieldToolTipsdivipola["Spanish"]["CENSO"] = "";
	$placeHoldersdivipola["Spanish"]["CENSO"] = "";
	if (count($fieldToolTipsdivipola["Spanish"]))
		$tdatadivipola[".isUseToolTips"] = true;
}


	$tdatadivipola[".NCSearch"] = true;



$tdatadivipola[".shortTableName"] = "divipola";
$tdatadivipola[".nSecOptions"] = 0;

$tdatadivipola[".mainTableOwnerID"] = "";
$tdatadivipola[".entityType"] = 0;
$tdatadivipola[".connId"] = "dbusers_at_localhost";


$tdatadivipola[".strOriginalTableName"] = "divipola";

	



$tdatadivipola[".showAddInPopup"] = false;

$tdatadivipola[".showEditInPopup"] = false;

$tdatadivipola[".showViewInPopup"] = false;

$tdatadivipola[".listAjax"] = false;
//	temporary
//$tdatadivipola[".listAjax"] = false;

	$tdatadivipola[".audit"] = true;

	$tdatadivipola[".locking"] = true;


$pages = $tdatadivipola[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadivipola[".edit"] = true;
	$tdatadivipola[".afterEditAction"] = 1;
	$tdatadivipola[".closePopupAfterEdit"] = 1;
	$tdatadivipola[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadivipola[".add"] = true;
$tdatadivipola[".afterAddAction"] = 1;
$tdatadivipola[".closePopupAfterAdd"] = 1;
$tdatadivipola[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadivipola[".list"] = true;
}



$tdatadivipola[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadivipola[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadivipola[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadivipola[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadivipola[".printFriendly"] = true;
}



$tdatadivipola[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadivipola[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadivipola[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadivipola[".isUseAjaxSuggest"] = true;





$tdatadivipola[".ajaxCodeSnippetAdded"] = false;

$tdatadivipola[".buttonsAdded"] = false;

$tdatadivipola[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadivipola[".isUseTimeForSearch"] = false;


$tdatadivipola[".badgeColor"] = "2F4F4F";


$tdatadivipola[".allSearchFields"] = array();
$tdatadivipola[".filterFields"] = array();
$tdatadivipola[".requiredSearchFields"] = array();

$tdatadivipola[".googleLikeFields"] = array();
$tdatadivipola[".googleLikeFields"][] = "AREAMETRO";
$tdatadivipola[".googleLikeFields"][] = "CENSO";
$tdatadivipola[".googleLikeFields"][] = "CODCENTPOBLADO";
$tdatadivipola[".googleLikeFields"][] = "CODDPTO";
$tdatadivipola[".googleLikeFields"][] = "CODMUN";
$tdatadivipola[".googleLikeFields"][] = "DISTRITO";
$tdatadivipola[".googleLikeFields"][] = "F9";
$tdatadivipola[".googleLikeFields"][] = "LAT";
$tdatadivipola[".googleLikeFields"][] = "LON";
$tdatadivipola[".googleLikeFields"][] = "NOMCENTPOBLADO";
$tdatadivipola[".googleLikeFields"][] = "NOMDPTO";
$tdatadivipola[".googleLikeFields"][] = "NOMMUNICIPIO";
$tdatadivipola[".googleLikeFields"][] = "TIPOCENTPOBLADO";
$tdatadivipola[".googleLikeFields"][] = "TIPOMUN";



$tdatadivipola[".tableType"] = "list";

$tdatadivipola[".printerPageOrientation"] = 0;
$tdatadivipola[".nPrinterPageScale"] = 100;

$tdatadivipola[".nPrinterSplitRecords"] = 40;

$tdatadivipola[".geocodingEnabled"] = false;










$tdatadivipola[".pageSize"] = 20;

$tdatadivipola[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadivipola[".strOrderBy"] = $tstrOrderBy;

$tdatadivipola[".orderindexes"] = array();


$tdatadivipola[".sqlHead"] = "SELECT AREAMETRO,  	CENSO,  	CODCENTPOBLADO,  	CODDPTO,  	CODMUN,  	DISTRITO,  	F9,  	LAT,  	LON,  	NOMCENTPOBLADO,  	NOMDPTO,  	NOMMUNICIPIO,  	TIPOCENTPOBLADO,  	TIPOMUN";
$tdatadivipola[".sqlFrom"] = "FROM divipola";
$tdatadivipola[".sqlWhereExpr"] = "";
$tdatadivipola[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadivipola[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadivipola[".arrGroupsPerPage"] = $arrGPP;

$tdatadivipola[".highlightSearchResults"] = true;

$tableKeysdivipola = array();
$tdatadivipola[".Keys"] = $tableKeysdivipola;


$tdatadivipola[".hideMobileList"] = array();




//	AREAMETRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AREAMETRO";
	$fdata["GoodName"] = "AREAMETRO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","AREAMETRO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AREAMETRO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AREAMETRO";

	
	
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


	$tdatadivipola["AREAMETRO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "AREAMETRO";
//	CENSO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CENSO";
	$fdata["GoodName"] = "CENSO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","CENSO");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "CENSO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CENSO";

	
	
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


	$tdatadivipola["CENSO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "CENSO";
//	CODCENTPOBLADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CODCENTPOBLADO";
	$fdata["GoodName"] = "CODCENTPOBLADO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","CODCENTPOBLADO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CODCENTPOBLADO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CODCENTPOBLADO";

	
	
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
			$edata["EditParams"].= " maxlength=8";

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


	$tdatadivipola["CODCENTPOBLADO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "CODCENTPOBLADO";
//	CODDPTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CODDPTO";
	$fdata["GoodName"] = "CODDPTO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","CODDPTO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CODDPTO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CODDPTO";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatadivipola["CODDPTO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "CODDPTO";
//	CODMUN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CODMUN";
	$fdata["GoodName"] = "CODMUN";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","CODMUN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CODMUN";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CODMUN";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatadivipola["CODMUN"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "CODMUN";
//	DISTRITO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DISTRITO";
	$fdata["GoodName"] = "DISTRITO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","DISTRITO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DISTRITO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DISTRITO";

	
	
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


	$tdatadivipola["DISTRITO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "DISTRITO";
//	F9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "F9";
	$fdata["GoodName"] = "F9";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","F9");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "F9";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "F9";

	
	
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


	$tdatadivipola["F9"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "F9";
//	LAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "LAT";
	$fdata["GoodName"] = "LAT";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","LAT");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "LAT";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LAT";

	
	
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


	$tdatadivipola["LAT"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "LAT";
//	LON
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LON";
	$fdata["GoodName"] = "LON";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","LON");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "LON";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LON";

	
	
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


	$tdatadivipola["LON"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "LON";
//	NOMCENTPOBLADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "NOMCENTPOBLADO";
	$fdata["GoodName"] = "NOMCENTPOBLADO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","NOMCENTPOBLADO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NOMCENTPOBLADO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMCENTPOBLADO";

	
	
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


	$tdatadivipola["NOMCENTPOBLADO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "NOMCENTPOBLADO";
//	NOMDPTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "NOMDPTO";
	$fdata["GoodName"] = "NOMDPTO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","NOMDPTO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NOMDPTO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMDPTO";

	
	
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


	$tdatadivipola["NOMDPTO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "NOMDPTO";
//	NOMMUNICIPIO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "NOMMUNICIPIO";
	$fdata["GoodName"] = "NOMMUNICIPIO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","NOMMUNICIPIO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NOMMUNICIPIO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMMUNICIPIO";

	
	
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


	$tdatadivipola["NOMMUNICIPIO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "NOMMUNICIPIO";
//	TIPOCENTPOBLADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "TIPOCENTPOBLADO";
	$fdata["GoodName"] = "TIPOCENTPOBLADO";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","TIPOCENTPOBLADO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TIPOCENTPOBLADO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPOCENTPOBLADO";

	
	
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


	$tdatadivipola["TIPOCENTPOBLADO"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "TIPOCENTPOBLADO";
//	TIPOMUN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "TIPOMUN";
	$fdata["GoodName"] = "TIPOMUN";
	$fdata["ownerTable"] = "divipola";
	$fdata["Label"] = GetFieldLabel("divipola","TIPOMUN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TIPOMUN";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPOMUN";

	
	
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


	$tdatadivipola["TIPOMUN"] = $fdata;
		$tdatadivipola[".searchableFields"][] = "TIPOMUN";


$tables_data["divipola"]=&$tdatadivipola;
$field_labels["divipola"] = &$fieldLabelsdivipola;
$fieldToolTips["divipola"] = &$fieldToolTipsdivipola;
$placeHolders["divipola"] = &$placeHoldersdivipola;
$page_titles["divipola"] = &$pageTitlesdivipola;


changeTextControlsToDate( "divipola" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["divipola"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["divipola"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_divipola()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AREAMETRO,  	CENSO,  	CODCENTPOBLADO,  	CODDPTO,  	CODMUN,  	DISTRITO,  	F9,  	LAT,  	LON,  	NOMCENTPOBLADO,  	NOMDPTO,  	NOMMUNICIPIO,  	TIPOCENTPOBLADO,  	TIPOMUN";
$proto0["m_strFrom"] = "FROM divipola";
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
	"m_strName" => "AREAMETRO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto6["m_sql"] = "AREAMETRO";
$proto6["m_srcTableName"] = "divipola";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CENSO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto8["m_sql"] = "CENSO";
$proto8["m_srcTableName"] = "divipola";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CODCENTPOBLADO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto10["m_sql"] = "CODCENTPOBLADO";
$proto10["m_srcTableName"] = "divipola";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CODDPTO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto12["m_sql"] = "CODDPTO";
$proto12["m_srcTableName"] = "divipola";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CODMUN",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto14["m_sql"] = "CODMUN";
$proto14["m_srcTableName"] = "divipola";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DISTRITO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto16["m_sql"] = "DISTRITO";
$proto16["m_srcTableName"] = "divipola";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "F9",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto18["m_sql"] = "F9";
$proto18["m_srcTableName"] = "divipola";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "LAT",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto20["m_sql"] = "LAT";
$proto20["m_srcTableName"] = "divipola";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "LON",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto22["m_sql"] = "LON";
$proto22["m_srcTableName"] = "divipola";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMCENTPOBLADO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto24["m_sql"] = "NOMCENTPOBLADO";
$proto24["m_srcTableName"] = "divipola";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMDPTO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto26["m_sql"] = "NOMDPTO";
$proto26["m_srcTableName"] = "divipola";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMMUNICIPIO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto28["m_sql"] = "NOMMUNICIPIO";
$proto28["m_srcTableName"] = "divipola";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPOCENTPOBLADO",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto30["m_sql"] = "TIPOCENTPOBLADO";
$proto30["m_srcTableName"] = "divipola";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPOMUN",
	"m_strTable" => "divipola",
	"m_srcTableName" => "divipola"
));

$proto32["m_sql"] = "TIPOMUN";
$proto32["m_srcTableName"] = "divipola";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "divipola";
$proto35["m_srcTableName"] = "divipola";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "AREAMETRO";
$proto35["m_columns"][] = "CENSO";
$proto35["m_columns"][] = "CODCENTPOBLADO";
$proto35["m_columns"][] = "CODDPTO";
$proto35["m_columns"][] = "CODMUN";
$proto35["m_columns"][] = "DISTRITO";
$proto35["m_columns"][] = "F9";
$proto35["m_columns"][] = "LAT";
$proto35["m_columns"][] = "LON";
$proto35["m_columns"][] = "NOMCENTPOBLADO";
$proto35["m_columns"][] = "NOMDPTO";
$proto35["m_columns"][] = "NOMMUNICIPIO";
$proto35["m_columns"][] = "TIPOCENTPOBLADO";
$proto35["m_columns"][] = "TIPOMUN";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "divipola";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "divipola";
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
$proto0["m_srcTableName"]="divipola";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_divipola = createSqlQuery_divipola();


	
								;

														

$tdatadivipola[".sqlquery"] = $queryData_divipola;



$tdatadivipola[".hasEvents"] = false;

?>