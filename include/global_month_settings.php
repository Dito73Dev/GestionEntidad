<?php
$tdataglobal_month = array();
$tdataglobal_month[".searchableFields"] = array();
$tdataglobal_month[".ShortName"] = "global_month";
$tdataglobal_month[".OwnerID"] = "";
$tdataglobal_month[".OriginalTable"] = "global_month";


$tdataglobal_month[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataglobal_month[".originalPagesByType"] = $tdataglobal_month[".pagesByType"];
$tdataglobal_month[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataglobal_month[".originalPages"] = $tdataglobal_month[".pages"];
$tdataglobal_month[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataglobal_month[".originalDefaultPages"] = $tdataglobal_month[".defaultPages"];

//	field labels
$fieldLabelsglobal_month = array();
$fieldToolTipsglobal_month = array();
$pageTitlesglobal_month = array();
$placeHoldersglobal_month = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_month["Spanish"] = array();
	$fieldToolTipsglobal_month["Spanish"] = array();
	$placeHoldersglobal_month["Spanish"] = array();
	$pageTitlesglobal_month["Spanish"] = array();
	$fieldLabelsglobal_month["Spanish"]["id"] = "Id";
	$fieldToolTipsglobal_month["Spanish"]["id"] = "";
	$placeHoldersglobal_month["Spanish"]["id"] = "";
	$fieldLabelsglobal_month["Spanish"]["month_code"] = "Month Code";
	$fieldToolTipsglobal_month["Spanish"]["month_code"] = "";
	$placeHoldersglobal_month["Spanish"]["month_code"] = "";
	$fieldLabelsglobal_month["Spanish"]["month_name"] = "Month Name";
	$fieldToolTipsglobal_month["Spanish"]["month_name"] = "";
	$placeHoldersglobal_month["Spanish"]["month_name"] = "";
	if (count($fieldToolTipsglobal_month["Spanish"]))
		$tdataglobal_month[".isUseToolTips"] = true;
}


	$tdataglobal_month[".NCSearch"] = true;



$tdataglobal_month[".shortTableName"] = "global_month";
$tdataglobal_month[".nSecOptions"] = 0;

$tdataglobal_month[".mainTableOwnerID"] = "";
$tdataglobal_month[".entityType"] = 0;
$tdataglobal_month[".connId"] = "dbct_at_localhost";


$tdataglobal_month[".strOriginalTableName"] = "global_month";

	



$tdataglobal_month[".showAddInPopup"] = false;

$tdataglobal_month[".showEditInPopup"] = false;

$tdataglobal_month[".showViewInPopup"] = false;

$tdataglobal_month[".listAjax"] = false;
//	temporary
//$tdataglobal_month[".listAjax"] = false;

	$tdataglobal_month[".audit"] = true;

	$tdataglobal_month[".locking"] = true;


$pages = $tdataglobal_month[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_month[".edit"] = true;
	$tdataglobal_month[".afterEditAction"] = 1;
	$tdataglobal_month[".closePopupAfterEdit"] = 1;
	$tdataglobal_month[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_month[".add"] = true;
$tdataglobal_month[".afterAddAction"] = 1;
$tdataglobal_month[".closePopupAfterAdd"] = 1;
$tdataglobal_month[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_month[".list"] = true;
}



$tdataglobal_month[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_month[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_month[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_month[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_month[".printFriendly"] = true;
}



$tdataglobal_month[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_month[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_month[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_month[".isUseAjaxSuggest"] = true;





$tdataglobal_month[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_month[".buttonsAdded"] = false;

$tdataglobal_month[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_month[".isUseTimeForSearch"] = false;


$tdataglobal_month[".badgeColor"] = "6B8E23";


$tdataglobal_month[".allSearchFields"] = array();
$tdataglobal_month[".filterFields"] = array();
$tdataglobal_month[".requiredSearchFields"] = array();

$tdataglobal_month[".googleLikeFields"] = array();
$tdataglobal_month[".googleLikeFields"][] = "id";
$tdataglobal_month[".googleLikeFields"][] = "month_code";
$tdataglobal_month[".googleLikeFields"][] = "month_name";



$tdataglobal_month[".tableType"] = "list";

$tdataglobal_month[".printerPageOrientation"] = 0;
$tdataglobal_month[".nPrinterPageScale"] = 100;

$tdataglobal_month[".nPrinterSplitRecords"] = 40;

$tdataglobal_month[".geocodingEnabled"] = false;










$tdataglobal_month[".pageSize"] = 20;

$tdataglobal_month[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_month[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_month[".orderindexes"] = array();


$tdataglobal_month[".sqlHead"] = "SELECT id,  	month_code,  	month_name";
$tdataglobal_month[".sqlFrom"] = "FROM global_month";
$tdataglobal_month[".sqlWhereExpr"] = "";
$tdataglobal_month[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_month[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_month[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_month[".highlightSearchResults"] = true;

$tableKeysglobal_month = array();
$tableKeysglobal_month[] = "id";
$tdataglobal_month[".Keys"] = $tableKeysglobal_month;


$tdataglobal_month[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "global_month";
	$fdata["Label"] = GetFieldLabel("global_month","id");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_month["id"] = $fdata;
		$tdataglobal_month[".searchableFields"][] = "id";
//	month_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "month_code";
	$fdata["GoodName"] = "month_code";
	$fdata["ownerTable"] = "global_month";
	$fdata["Label"] = GetFieldLabel("global_month","month_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "month_code";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "month_code";

	
	
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


	$tdataglobal_month["month_code"] = $fdata;
		$tdataglobal_month[".searchableFields"][] = "month_code";
//	month_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "month_name";
	$fdata["GoodName"] = "month_name";
	$fdata["ownerTable"] = "global_month";
	$fdata["Label"] = GetFieldLabel("global_month","month_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "month_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "month_name";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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


	$tdataglobal_month["month_name"] = $fdata;
		$tdataglobal_month[".searchableFields"][] = "month_name";


$tables_data["global_month"]=&$tdataglobal_month;
$field_labels["global_month"] = &$fieldLabelsglobal_month;
$fieldToolTips["global_month"] = &$fieldToolTipsglobal_month;
$placeHolders["global_month"] = &$placeHoldersglobal_month;
$page_titles["global_month"] = &$pageTitlesglobal_month;


changeTextControlsToDate( "global_month" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_month"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_month"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_month()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	month_code,  	month_name";
$proto0["m_strFrom"] = "FROM global_month";
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
	"m_strName" => "id",
	"m_strTable" => "global_month",
	"m_srcTableName" => "global_month"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "global_month";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "month_code",
	"m_strTable" => "global_month",
	"m_srcTableName" => "global_month"
));

$proto8["m_sql"] = "month_code";
$proto8["m_srcTableName"] = "global_month";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "month_name",
	"m_strTable" => "global_month",
	"m_srcTableName" => "global_month"
));

$proto10["m_sql"] = "month_name";
$proto10["m_srcTableName"] = "global_month";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "global_month";
$proto13["m_srcTableName"] = "global_month";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "month_code";
$proto13["m_columns"][] = "month_name";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "global_month";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "global_month";
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
$proto0["m_srcTableName"]="global_month";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_month = createSqlQuery_global_month();


	
								;

			

$tdataglobal_month[".sqlquery"] = $queryData_global_month;



$tdataglobal_month[".hasEvents"] = false;

?>