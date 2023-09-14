<?php
$tdatatparam_tipo_ct_001 = array();
$tdatatparam_tipo_ct_001[".searchableFields"] = array();
$tdatatparam_tipo_ct_001[".ShortName"] = "tparam_tipo_ct_001";
$tdatatparam_tipo_ct_001[".OwnerID"] = "";
$tdatatparam_tipo_ct_001[".OriginalTable"] = "tparam_tipo_ct_001";


$tdatatparam_tipo_ct_001[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatparam_tipo_ct_001[".originalPagesByType"] = $tdatatparam_tipo_ct_001[".pagesByType"];
$tdatatparam_tipo_ct_001[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatparam_tipo_ct_001[".originalPages"] = $tdatatparam_tipo_ct_001[".pages"];
$tdatatparam_tipo_ct_001[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatparam_tipo_ct_001[".originalDefaultPages"] = $tdatatparam_tipo_ct_001[".defaultPages"];

//	field labels
$fieldLabelstparam_tipo_ct_001 = array();
$fieldToolTipstparam_tipo_ct_001 = array();
$pageTitlestparam_tipo_ct_001 = array();
$placeHolderstparam_tipo_ct_001 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_tipo_ct_001["Spanish"] = array();
	$fieldToolTipstparam_tipo_ct_001["Spanish"] = array();
	$placeHolderstparam_tipo_ct_001["Spanish"] = array();
	$pageTitlestparam_tipo_ct_001["Spanish"] = array();
	$fieldLabelstparam_tipo_ct_001["Spanish"]["cta_tipo_id"] = "Cta Tipo Id";
	$fieldToolTipstparam_tipo_ct_001["Spanish"]["cta_tipo_id"] = "";
	$placeHolderstparam_tipo_ct_001["Spanish"]["cta_tipo_id"] = "";
	$fieldLabelstparam_tipo_ct_001["Spanish"]["ct_tipo_id_fk"] = "Ct Tipo Id Fk";
	$fieldToolTipstparam_tipo_ct_001["Spanish"]["ct_tipo_id_fk"] = "";
	$placeHolderstparam_tipo_ct_001["Spanish"]["ct_tipo_id_fk"] = "";
	$fieldLabelstparam_tipo_ct_001["Spanish"]["cta_tipo_nombre"] = "Modalidad";
	$fieldToolTipstparam_tipo_ct_001["Spanish"]["cta_tipo_nombre"] = "";
	$placeHolderstparam_tipo_ct_001["Spanish"]["cta_tipo_nombre"] = "";
	if (count($fieldToolTipstparam_tipo_ct_001["Spanish"]))
		$tdatatparam_tipo_ct_001[".isUseToolTips"] = true;
}


	$tdatatparam_tipo_ct_001[".NCSearch"] = true;



$tdatatparam_tipo_ct_001[".shortTableName"] = "tparam_tipo_ct_001";
$tdatatparam_tipo_ct_001[".nSecOptions"] = 0;

$tdatatparam_tipo_ct_001[".mainTableOwnerID"] = "";
$tdatatparam_tipo_ct_001[".entityType"] = 0;
$tdatatparam_tipo_ct_001[".connId"] = "dbct_at_localhost";


$tdatatparam_tipo_ct_001[".strOriginalTableName"] = "tparam_tipo_ct_001";

	



$tdatatparam_tipo_ct_001[".showAddInPopup"] = false;

$tdatatparam_tipo_ct_001[".showEditInPopup"] = false;

$tdatatparam_tipo_ct_001[".showViewInPopup"] = false;

$tdatatparam_tipo_ct_001[".listAjax"] = false;
//	temporary
//$tdatatparam_tipo_ct_001[".listAjax"] = false;

	$tdatatparam_tipo_ct_001[".audit"] = true;

	$tdatatparam_tipo_ct_001[".locking"] = true;


$pages = $tdatatparam_tipo_ct_001[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_tipo_ct_001[".edit"] = true;
	$tdatatparam_tipo_ct_001[".afterEditAction"] = 1;
	$tdatatparam_tipo_ct_001[".closePopupAfterEdit"] = 1;
	$tdatatparam_tipo_ct_001[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_tipo_ct_001[".add"] = true;
$tdatatparam_tipo_ct_001[".afterAddAction"] = 1;
$tdatatparam_tipo_ct_001[".closePopupAfterAdd"] = 1;
$tdatatparam_tipo_ct_001[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_tipo_ct_001[".list"] = true;
}



$tdatatparam_tipo_ct_001[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_tipo_ct_001[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_tipo_ct_001[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_tipo_ct_001[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_tipo_ct_001[".printFriendly"] = true;
}



$tdatatparam_tipo_ct_001[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_tipo_ct_001[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_tipo_ct_001[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_tipo_ct_001[".isUseAjaxSuggest"] = true;





$tdatatparam_tipo_ct_001[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_tipo_ct_001[".buttonsAdded"] = false;

$tdatatparam_tipo_ct_001[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_tipo_ct_001[".isUseTimeForSearch"] = false;


$tdatatparam_tipo_ct_001[".badgeColor"] = "D2AF80";


$tdatatparam_tipo_ct_001[".allSearchFields"] = array();
$tdatatparam_tipo_ct_001[".filterFields"] = array();
$tdatatparam_tipo_ct_001[".requiredSearchFields"] = array();

$tdatatparam_tipo_ct_001[".googleLikeFields"] = array();
$tdatatparam_tipo_ct_001[".googleLikeFields"][] = "ct_tipo_id_fk";
$tdatatparam_tipo_ct_001[".googleLikeFields"][] = "cta_tipo_id";
$tdatatparam_tipo_ct_001[".googleLikeFields"][] = "cta_tipo_nombre";



$tdatatparam_tipo_ct_001[".tableType"] = "list";

$tdatatparam_tipo_ct_001[".printerPageOrientation"] = 0;
$tdatatparam_tipo_ct_001[".nPrinterPageScale"] = 100;

$tdatatparam_tipo_ct_001[".nPrinterSplitRecords"] = 40;

$tdatatparam_tipo_ct_001[".geocodingEnabled"] = false;










$tdatatparam_tipo_ct_001[".pageSize"] = 20;

$tdatatparam_tipo_ct_001[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_tipo_ct_001[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_tipo_ct_001[".orderindexes"] = array();


$tdatatparam_tipo_ct_001[".sqlHead"] = "SELECT ct_tipo_id_fk,  	cta_tipo_id,  	cta_tipo_nombre";
$tdatatparam_tipo_ct_001[".sqlFrom"] = "FROM tparam_tipo_ct_001";
$tdatatparam_tipo_ct_001[".sqlWhereExpr"] = "";
$tdatatparam_tipo_ct_001[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_tipo_ct_001[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_tipo_ct_001[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_tipo_ct_001[".highlightSearchResults"] = true;

$tableKeystparam_tipo_ct_001 = array();
$tableKeystparam_tipo_ct_001[] = "cta_tipo_id";
$tdatatparam_tipo_ct_001[".Keys"] = $tableKeystparam_tipo_ct_001;


$tdatatparam_tipo_ct_001[".hideMobileList"] = array();




//	ct_tipo_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ct_tipo_id_fk";
	$fdata["GoodName"] = "ct_tipo_id_fk";
	$fdata["ownerTable"] = "tparam_tipo_ct_001";
	$fdata["Label"] = GetFieldLabel("tparam_tipo_ct_001","ct_tipo_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ct_tipo_id_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ct_tipo_id_fk";

	
	
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
	$edata["LookupTable"] = "tparam_tipo_ct_000";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ct_tipo_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ct_tipo_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatatparam_tipo_ct_001["ct_tipo_id_fk"] = $fdata;
		$tdatatparam_tipo_ct_001[".searchableFields"][] = "ct_tipo_id_fk";
//	cta_tipo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cta_tipo_id";
	$fdata["GoodName"] = "cta_tipo_id";
	$fdata["ownerTable"] = "tparam_tipo_ct_001";
	$fdata["Label"] = GetFieldLabel("tparam_tipo_ct_001","cta_tipo_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "cta_tipo_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cta_tipo_id";

	
	
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


	$tdatatparam_tipo_ct_001["cta_tipo_id"] = $fdata;
		$tdatatparam_tipo_ct_001[".searchableFields"][] = "cta_tipo_id";
//	cta_tipo_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cta_tipo_nombre";
	$fdata["GoodName"] = "cta_tipo_nombre";
	$fdata["ownerTable"] = "tparam_tipo_ct_001";
	$fdata["Label"] = GetFieldLabel("tparam_tipo_ct_001","cta_tipo_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cta_tipo_nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cta_tipo_nombre";

	
	
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


	$tdatatparam_tipo_ct_001["cta_tipo_nombre"] = $fdata;
		$tdatatparam_tipo_ct_001[".searchableFields"][] = "cta_tipo_nombre";


$tables_data["tparam_tipo_ct_001"]=&$tdatatparam_tipo_ct_001;
$field_labels["tparam_tipo_ct_001"] = &$fieldLabelstparam_tipo_ct_001;
$fieldToolTips["tparam_tipo_ct_001"] = &$fieldToolTipstparam_tipo_ct_001;
$placeHolders["tparam_tipo_ct_001"] = &$placeHolderstparam_tipo_ct_001;
$page_titles["tparam_tipo_ct_001"] = &$pageTitlestparam_tipo_ct_001;


changeTextControlsToDate( "tparam_tipo_ct_001" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_tipo_ct_001"] = array();
//	tparam_tipo_ct_002
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tparam_tipo_ct_002";
		$detailsParam["dOriginalTable"] = "tparam_tipo_ct_002";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tparam_tipo_ct_002";
	$detailsParam["dCaptionTable"] = GetTableCaption("tparam_tipo_ct_002");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tparam_tipo_ct_001"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tparam_tipo_ct_001"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tparam_tipo_ct_001"][$dIndex]["masterKeys"][]="cta_tipo_id";

				$detailsTablesData["tparam_tipo_ct_001"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tparam_tipo_ct_001"][$dIndex]["detailKeys"][]="cta_tipo_id_fk";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_tipo_ct_001"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tparam_tipo_ct_000";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tparam_tipo_ct_000";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tparam_tipo_ct_000";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tparam_tipo_ct_001"][0] = $masterParams;
				$masterTablesData["tparam_tipo_ct_001"][0]["masterKeys"] = array();
	$masterTablesData["tparam_tipo_ct_001"][0]["masterKeys"][]="ct_tipo_id";
				$masterTablesData["tparam_tipo_ct_001"][0]["detailKeys"] = array();
	$masterTablesData["tparam_tipo_ct_001"][0]["detailKeys"][]="ct_tipo_id_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_tipo_ct_001()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ct_tipo_id_fk,  	cta_tipo_id,  	cta_tipo_nombre";
$proto0["m_strFrom"] = "FROM tparam_tipo_ct_001";
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
	"m_strName" => "ct_tipo_id_fk",
	"m_strTable" => "tparam_tipo_ct_001",
	"m_srcTableName" => "tparam_tipo_ct_001"
));

$proto6["m_sql"] = "ct_tipo_id_fk";
$proto6["m_srcTableName"] = "tparam_tipo_ct_001";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cta_tipo_id",
	"m_strTable" => "tparam_tipo_ct_001",
	"m_srcTableName" => "tparam_tipo_ct_001"
));

$proto8["m_sql"] = "cta_tipo_id";
$proto8["m_srcTableName"] = "tparam_tipo_ct_001";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cta_tipo_nombre",
	"m_strTable" => "tparam_tipo_ct_001",
	"m_srcTableName" => "tparam_tipo_ct_001"
));

$proto10["m_sql"] = "cta_tipo_nombre";
$proto10["m_srcTableName"] = "tparam_tipo_ct_001";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tparam_tipo_ct_001";
$proto13["m_srcTableName"] = "tparam_tipo_ct_001";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ct_tipo_id_fk";
$proto13["m_columns"][] = "cta_tipo_id";
$proto13["m_columns"][] = "cta_tipo_nombre";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tparam_tipo_ct_001";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tparam_tipo_ct_001";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_tipo_ct_001";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_tipo_ct_001 = createSqlQuery_tparam_tipo_ct_001();


	
								;

			

$tdatatparam_tipo_ct_001[".sqlquery"] = $queryData_tparam_tipo_ct_001;



$tdatatparam_tipo_ct_001[".hasEvents"] = false;

?>