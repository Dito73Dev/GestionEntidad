<?php
$tdataglobal_status = array();
$tdataglobal_status[".searchableFields"] = array();
$tdataglobal_status[".ShortName"] = "global_status";
$tdataglobal_status[".OwnerID"] = "";
$tdataglobal_status[".OriginalTable"] = "global_status";


$tdataglobal_status[".pagesByType"] = my_json_decode( "{}" );
$tdataglobal_status[".originalPagesByType"] = $tdataglobal_status[".pagesByType"];
$tdataglobal_status[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataglobal_status[".originalPages"] = $tdataglobal_status[".pages"];
$tdataglobal_status[".defaultPages"] = my_json_decode( "{}" );
$tdataglobal_status[".originalDefaultPages"] = $tdataglobal_status[".defaultPages"];

//	field labels
$fieldLabelsglobal_status = array();
$fieldToolTipsglobal_status = array();
$pageTitlesglobal_status = array();
$placeHoldersglobal_status = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_status["Spanish"] = array();
	$fieldToolTipsglobal_status["Spanish"] = array();
	$placeHoldersglobal_status["Spanish"] = array();
	$pageTitlesglobal_status["Spanish"] = array();
	$fieldLabelsglobal_status["Spanish"]["id_status"] = "Id Status";
	$fieldToolTipsglobal_status["Spanish"]["id_status"] = "";
	$placeHoldersglobal_status["Spanish"]["id_status"] = "";
	$fieldLabelsglobal_status["Spanish"]["status_name"] = "Status Name";
	$fieldToolTipsglobal_status["Spanish"]["status_name"] = "";
	$placeHoldersglobal_status["Spanish"]["status_name"] = "";
	if (count($fieldToolTipsglobal_status["Spanish"]))
		$tdataglobal_status[".isUseToolTips"] = true;
}


	$tdataglobal_status[".NCSearch"] = true;



$tdataglobal_status[".shortTableName"] = "global_status";
$tdataglobal_status[".nSecOptions"] = 0;

$tdataglobal_status[".mainTableOwnerID"] = "";
$tdataglobal_status[".entityType"] = 0;
$tdataglobal_status[".connId"] = "dbusers_at_localhost";


$tdataglobal_status[".strOriginalTableName"] = "global_status";

	



$tdataglobal_status[".showAddInPopup"] = false;

$tdataglobal_status[".showEditInPopup"] = false;

$tdataglobal_status[".showViewInPopup"] = false;

$tdataglobal_status[".listAjax"] = false;
//	temporary
//$tdataglobal_status[".listAjax"] = false;

	$tdataglobal_status[".audit"] = false;

	$tdataglobal_status[".locking"] = false;


$pages = $tdataglobal_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_status[".edit"] = true;
	$tdataglobal_status[".afterEditAction"] = 1;
	$tdataglobal_status[".closePopupAfterEdit"] = 1;
	$tdataglobal_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_status[".add"] = true;
$tdataglobal_status[".afterAddAction"] = 1;
$tdataglobal_status[".closePopupAfterAdd"] = 1;
$tdataglobal_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_status[".list"] = true;
}



$tdataglobal_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_status[".printFriendly"] = true;
}



$tdataglobal_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_status[".isUseAjaxSuggest"] = true;





$tdataglobal_status[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_status[".buttonsAdded"] = false;

$tdataglobal_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_status[".isUseTimeForSearch"] = false;


$tdataglobal_status[".badgeColor"] = "DC143C";


$tdataglobal_status[".allSearchFields"] = array();
$tdataglobal_status[".filterFields"] = array();
$tdataglobal_status[".requiredSearchFields"] = array();

$tdataglobal_status[".googleLikeFields"] = array();
$tdataglobal_status[".googleLikeFields"][] = "id_status";
$tdataglobal_status[".googleLikeFields"][] = "status_name";



$tdataglobal_status[".tableType"] = "list";

$tdataglobal_status[".printerPageOrientation"] = 0;
$tdataglobal_status[".nPrinterPageScale"] = 100;

$tdataglobal_status[".nPrinterSplitRecords"] = 40;

$tdataglobal_status[".geocodingEnabled"] = false;










$tdataglobal_status[".pageSize"] = 20;

$tdataglobal_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_status[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_status[".orderindexes"] = array();


$tdataglobal_status[".sqlHead"] = "SELECT id_status,  	status_name";
$tdataglobal_status[".sqlFrom"] = "FROM global_status";
$tdataglobal_status[".sqlWhereExpr"] = "";
$tdataglobal_status[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_status[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_status[".highlightSearchResults"] = true;

$tableKeysglobal_status = array();
$tableKeysglobal_status[] = "id_status";
$tdataglobal_status[".Keys"] = $tableKeysglobal_status;


$tdataglobal_status[".hideMobileList"] = array();




//	id_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_status";
	$fdata["GoodName"] = "id_status";
	$fdata["ownerTable"] = "global_status";
	$fdata["Label"] = GetFieldLabel("global_status","id_status");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_status";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_status";

	
	
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


	$tdataglobal_status["id_status"] = $fdata;
		$tdataglobal_status[".searchableFields"][] = "id_status";
//	status_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status_name";
	$fdata["GoodName"] = "status_name";
	$fdata["ownerTable"] = "global_status";
	$fdata["Label"] = GetFieldLabel("global_status","status_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_name";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataglobal_status["status_name"] = $fdata;
		$tdataglobal_status[".searchableFields"][] = "status_name";


$tables_data["global_status"]=&$tdataglobal_status;
$field_labels["global_status"] = &$fieldLabelsglobal_status;
$fieldToolTips["global_status"] = &$fieldToolTipsglobal_status;
$placeHolders["global_status"] = &$placeHoldersglobal_status;
$page_titles["global_status"] = &$pageTitlesglobal_status;


changeTextControlsToDate( "global_status" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_status"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_status"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_status,  	status_name";
$proto0["m_strFrom"] = "FROM global_status";
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
	"m_strName" => "id_status",
	"m_strTable" => "global_status",
	"m_srcTableName" => "global_status"
));

$proto6["m_sql"] = "id_status";
$proto6["m_srcTableName"] = "global_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status_name",
	"m_strTable" => "global_status",
	"m_srcTableName" => "global_status"
));

$proto8["m_sql"] = "status_name";
$proto8["m_srcTableName"] = "global_status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "global_status";
$proto11["m_srcTableName"] = "global_status";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_status";
$proto11["m_columns"][] = "status_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "global_status";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "global_status";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_status = createSqlQuery_global_status();


	
								;

		

$tdataglobal_status[".sqlquery"] = $queryData_global_status;



$tdataglobal_status[".hasEvents"] = false;

?>