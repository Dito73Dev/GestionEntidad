<?php
$tdatadependencia_sj = array();
$tdatadependencia_sj[".searchableFields"] = array();
$tdatadependencia_sj[".ShortName"] = "dependencia_sj";
$tdatadependencia_sj[".OwnerID"] = "id_depto_superior";
$tdatadependencia_sj[".OriginalTable"] = "dependencia";


$tdatadependencia_sj[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadependencia_sj[".originalPagesByType"] = $tdatadependencia_sj[".pagesByType"];
$tdatadependencia_sj[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadependencia_sj[".originalPages"] = $tdatadependencia_sj[".pages"];
$tdatadependencia_sj[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadependencia_sj[".originalDefaultPages"] = $tdatadependencia_sj[".defaultPages"];

//	field labels
$fieldLabelsdependencia_sj = array();
$fieldToolTipsdependencia_sj = array();
$pageTitlesdependencia_sj = array();
$placeHoldersdependencia_sj = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdependencia_sj["Spanish"] = array();
	$fieldToolTipsdependencia_sj["Spanish"] = array();
	$placeHoldersdependencia_sj["Spanish"] = array();
	$pageTitlesdependencia_sj["Spanish"] = array();
	$fieldLabelsdependencia_sj["Spanish"]["id"] = "Cod. dependencia";
	$fieldToolTipsdependencia_sj["Spanish"]["id"] = "";
	$placeHoldersdependencia_sj["Spanish"]["id"] = "";
	$fieldLabelsdependencia_sj["Spanish"]["nombre"] = "Nombre dependencia";
	$fieldToolTipsdependencia_sj["Spanish"]["nombre"] = "";
	$placeHoldersdependencia_sj["Spanish"]["nombre"] = "";
	$fieldLabelsdependencia_sj["Spanish"]["estado"] = "Estado";
	$fieldToolTipsdependencia_sj["Spanish"]["estado"] = "";
	$placeHoldersdependencia_sj["Spanish"]["estado"] = "";
	$fieldLabelsdependencia_sj["Spanish"]["id_depto_superior"] = "Dpto Superior";
	$fieldToolTipsdependencia_sj["Spanish"]["id_depto_superior"] = "";
	$placeHoldersdependencia_sj["Spanish"]["id_depto_superior"] = "";
	$fieldLabelsdependencia_sj["Spanish"]["proceso"] = "Proceso";
	$fieldToolTipsdependencia_sj["Spanish"]["proceso"] = "";
	$placeHoldersdependencia_sj["Spanish"]["proceso"] = "";
	$fieldLabelsdependencia_sj["Spanish"]["estructura"] = "Estructura";
	$fieldToolTipsdependencia_sj["Spanish"]["estructura"] = "";
	$placeHoldersdependencia_sj["Spanish"]["estructura"] = "";
	if (count($fieldToolTipsdependencia_sj["Spanish"]))
		$tdatadependencia_sj[".isUseToolTips"] = true;
}


	$tdatadependencia_sj[".NCSearch"] = true;



$tdatadependencia_sj[".shortTableName"] = "dependencia_sj";
$tdatadependencia_sj[".nSecOptions"] = 1;

$tdatadependencia_sj[".mainTableOwnerID"] = "id_depto_superior";
$tdatadependencia_sj[".entityType"] = 1;
$tdatadependencia_sj[".connId"] = "edl_at_localhost";


$tdatadependencia_sj[".strOriginalTableName"] = "dependencia";

	



$tdatadependencia_sj[".showAddInPopup"] = false;

$tdatadependencia_sj[".showEditInPopup"] = false;

$tdatadependencia_sj[".showViewInPopup"] = false;

$tdatadependencia_sj[".listAjax"] = false;
//	temporary
//$tdatadependencia_sj[".listAjax"] = false;

	$tdatadependencia_sj[".audit"] = true;

	$tdatadependencia_sj[".locking"] = true;


$pages = $tdatadependencia_sj[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadependencia_sj[".edit"] = true;
	$tdatadependencia_sj[".afterEditAction"] = 1;
	$tdatadependencia_sj[".closePopupAfterEdit"] = 1;
	$tdatadependencia_sj[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadependencia_sj[".add"] = true;
$tdatadependencia_sj[".afterAddAction"] = 1;
$tdatadependencia_sj[".closePopupAfterAdd"] = 1;
$tdatadependencia_sj[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadependencia_sj[".list"] = true;
}



$tdatadependencia_sj[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadependencia_sj[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadependencia_sj[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadependencia_sj[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadependencia_sj[".printFriendly"] = true;
}



$tdatadependencia_sj[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadependencia_sj[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadependencia_sj[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadependencia_sj[".isUseAjaxSuggest"] = true;





$tdatadependencia_sj[".ajaxCodeSnippetAdded"] = false;

$tdatadependencia_sj[".buttonsAdded"] = false;

$tdatadependencia_sj[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadependencia_sj[".isUseTimeForSearch"] = false;


$tdatadependencia_sj[".badgeColor"] = "3CB371";


$tdatadependencia_sj[".allSearchFields"] = array();
$tdatadependencia_sj[".filterFields"] = array();
$tdatadependencia_sj[".requiredSearchFields"] = array();

$tdatadependencia_sj[".googleLikeFields"] = array();
$tdatadependencia_sj[".googleLikeFields"][] = "estado";
$tdatadependencia_sj[".googleLikeFields"][] = "estructura";
$tdatadependencia_sj[".googleLikeFields"][] = "id";
$tdatadependencia_sj[".googleLikeFields"][] = "id_depto_superior";
$tdatadependencia_sj[".googleLikeFields"][] = "nombre";
$tdatadependencia_sj[".googleLikeFields"][] = "proceso";



$tdatadependencia_sj[".tableType"] = "list";

$tdatadependencia_sj[".printerPageOrientation"] = 0;
$tdatadependencia_sj[".nPrinterPageScale"] = 100;

$tdatadependencia_sj[".nPrinterSplitRecords"] = 40;

$tdatadependencia_sj[".geocodingEnabled"] = false;










$tdatadependencia_sj[".pageSize"] = 20;

$tdatadependencia_sj[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadependencia_sj[".strOrderBy"] = $tstrOrderBy;

$tdatadependencia_sj[".orderindexes"] = array();


$tdatadependencia_sj[".sqlHead"] = "SELECT estado,  	estructura,  	id,  	id_depto_superior,  	nombre,  	proceso";
$tdatadependencia_sj[".sqlFrom"] = "FROM dependencia";
$tdatadependencia_sj[".sqlWhereExpr"] = "";
$tdatadependencia_sj[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadependencia_sj[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadependencia_sj[".arrGroupsPerPage"] = $arrGPP;

$tdatadependencia_sj[".highlightSearchResults"] = true;

$tableKeysdependencia_sj = array();
$tableKeysdependencia_sj[] = "id";
$tdatadependencia_sj[".Keys"] = $tableKeysdependencia_sj;


$tdatadependencia_sj[".hideMobileList"] = array();




//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "dependencia";
	$fdata["Label"] = GetFieldLabel("dependencia_SJ","estado");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "estado";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
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
	$edata["LookupTable"] = "tparam_estados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "estado_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "estado_name";

	

	
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


	$tdatadependencia_sj["estado"] = $fdata;
		$tdatadependencia_sj[".searchableFields"][] = "estado";
//	estructura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estructura";
	$fdata["GoodName"] = "estructura";
	$fdata["ownerTable"] = "dependencia";
	$fdata["Label"] = GetFieldLabel("dependencia_SJ","estructura");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estructura";

		$fdata["sourceSingle"] = "estructura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estructura";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatadependencia_sj["estructura"] = $fdata;
		$tdatadependencia_sj[".searchableFields"][] = "estructura";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dependencia";
	$fdata["Label"] = GetFieldLabel("dependencia_SJ","id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadependencia_sj["id"] = $fdata;
		$tdatadependencia_sj[".searchableFields"][] = "id";
//	id_depto_superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_depto_superior";
	$fdata["GoodName"] = "id_depto_superior";
	$fdata["ownerTable"] = "dependencia";
	$fdata["Label"] = GetFieldLabel("dependencia_SJ","id_depto_superior");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_depto_superior";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_depto_superior";

	
	
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
	$edata["LinkFieldType"] = 3;
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 1;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadependencia_sj["id_depto_superior"] = $fdata;
		$tdatadependencia_sj[".searchableFields"][] = "id_depto_superior";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "dependencia";
	$fdata["Label"] = GetFieldLabel("dependencia_SJ","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatadependencia_sj["nombre"] = $fdata;
		$tdatadependencia_sj[".searchableFields"][] = "nombre";
//	proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "proceso";
	$fdata["GoodName"] = "proceso";
	$fdata["ownerTable"] = "dependencia";
	$fdata["Label"] = GetFieldLabel("dependencia_SJ","proceso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "proceso";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "proceso";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatadependencia_sj["proceso"] = $fdata;
		$tdatadependencia_sj[".searchableFields"][] = "proceso";


$tables_data["dependencia_SJ"]=&$tdatadependencia_sj;
$field_labels["dependencia_SJ"] = &$fieldLabelsdependencia_sj;
$fieldToolTips["dependencia_SJ"] = &$fieldToolTipsdependencia_sj;
$placeHolders["dependencia_SJ"] = &$placeHoldersdependencia_sj;
$page_titles["dependencia_SJ"] = &$pageTitlesdependencia_sj;


changeTextControlsToDate( "dependencia_SJ" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dependencia_SJ"] = array();
//	funcionario_SJ
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="funcionario_SJ";
		$detailsParam["dOriginalTable"] = "funcionario";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "funcionario_sj";
	$detailsParam["dCaptionTable"] = GetTableCaption("funcionario_SJ");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dependencia_SJ"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dependencia_SJ"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dependencia_SJ"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["dependencia_SJ"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dependencia_SJ"][$dIndex]["detailKeys"][]="idDependencia";
//	contractor_master_SJ
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="contractor_master_SJ";
		$detailsParam["dOriginalTable"] = "contractor_master";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contractor_master_sj";
	$detailsParam["dCaptionTable"] = GetTableCaption("contractor_master_SJ");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dependencia_SJ"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dependencia_SJ"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dependencia_SJ"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["dependencia_SJ"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dependencia_SJ"][$dIndex]["detailKeys"][]="contractor_dependencia";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dependencia_SJ"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dependencia_sj()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "estado,  	estructura,  	id,  	id_depto_superior,  	nombre,  	proceso";
$proto0["m_strFrom"] = "FROM dependencia";
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
	"m_strName" => "estado",
	"m_strTable" => "dependencia",
	"m_srcTableName" => "dependencia_SJ"
));

$proto6["m_sql"] = "estado";
$proto6["m_srcTableName"] = "dependencia_SJ";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estructura",
	"m_strTable" => "dependencia",
	"m_srcTableName" => "dependencia_SJ"
));

$proto8["m_sql"] = "estructura";
$proto8["m_srcTableName"] = "dependencia_SJ";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "dependencia",
	"m_srcTableName" => "dependencia_SJ"
));

$proto10["m_sql"] = "id";
$proto10["m_srcTableName"] = "dependencia_SJ";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_depto_superior",
	"m_strTable" => "dependencia",
	"m_srcTableName" => "dependencia_SJ"
));

$proto12["m_sql"] = "id_depto_superior";
$proto12["m_srcTableName"] = "dependencia_SJ";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "dependencia",
	"m_srcTableName" => "dependencia_SJ"
));

$proto14["m_sql"] = "nombre";
$proto14["m_srcTableName"] = "dependencia_SJ";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "proceso",
	"m_strTable" => "dependencia",
	"m_srcTableName" => "dependencia_SJ"
));

$proto16["m_sql"] = "proceso";
$proto16["m_srcTableName"] = "dependencia_SJ";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dependencia";
$proto19["m_srcTableName"] = "dependencia_SJ";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "estado";
$proto19["m_columns"][] = "estructura";
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "id_depto_superior";
$proto19["m_columns"][] = "nombre";
$proto19["m_columns"][] = "proceso";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "dependencia";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "dependencia_SJ";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dependencia_SJ";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dependencia_sj = createSqlQuery_dependencia_sj();


	
								;

						

$tdatadependencia_sj[".sqlquery"] = $queryData_dependencia_sj;



$tdatadependencia_sj[".hasEvents"] = false;

?>