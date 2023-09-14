<?php
$tdatatparam_estcivil = array();
$tdatatparam_estcivil[".searchableFields"] = array();
$tdatatparam_estcivil[".ShortName"] = "tparam_estcivil";
$tdatatparam_estcivil[".OwnerID"] = "";
$tdatatparam_estcivil[".OriginalTable"] = "tparam_estcivil";


$tdatatparam_estcivil[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatparam_estcivil[".originalPagesByType"] = $tdatatparam_estcivil[".pagesByType"];
$tdatatparam_estcivil[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatparam_estcivil[".originalPages"] = $tdatatparam_estcivil[".pages"];
$tdatatparam_estcivil[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatparam_estcivil[".originalDefaultPages"] = $tdatatparam_estcivil[".defaultPages"];

//	field labels
$fieldLabelstparam_estcivil = array();
$fieldToolTipstparam_estcivil = array();
$pageTitlestparam_estcivil = array();
$placeHolderstparam_estcivil = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_estcivil["Spanish"] = array();
	$fieldToolTipstparam_estcivil["Spanish"] = array();
	$placeHolderstparam_estcivil["Spanish"] = array();
	$pageTitlestparam_estcivil["Spanish"] = array();
	$fieldLabelstparam_estcivil["Spanish"]["tec_cdestciv_b"] = "Código";
	$fieldToolTipstparam_estcivil["Spanish"]["tec_cdestciv_b"] = "";
	$placeHolderstparam_estcivil["Spanish"]["tec_cdestciv_b"] = "";
	$fieldLabelstparam_estcivil["Spanish"]["tec_dsestciv_b"] = "Estado Civil";
	$fieldToolTipstparam_estcivil["Spanish"]["tec_dsestciv_b"] = "";
	$placeHolderstparam_estcivil["Spanish"]["tec_dsestciv_b"] = "";
	if (count($fieldToolTipstparam_estcivil["Spanish"]))
		$tdatatparam_estcivil[".isUseToolTips"] = true;
}


	$tdatatparam_estcivil[".NCSearch"] = true;



$tdatatparam_estcivil[".shortTableName"] = "tparam_estcivil";
$tdatatparam_estcivil[".nSecOptions"] = 0;

$tdatatparam_estcivil[".mainTableOwnerID"] = "";
$tdatatparam_estcivil[".entityType"] = 0;
$tdatatparam_estcivil[".connId"] = "dbct_at_localhost";


$tdatatparam_estcivil[".strOriginalTableName"] = "tparam_estcivil";

	



$tdatatparam_estcivil[".showAddInPopup"] = false;

$tdatatparam_estcivil[".showEditInPopup"] = false;

$tdatatparam_estcivil[".showViewInPopup"] = false;

$tdatatparam_estcivil[".listAjax"] = false;
//	temporary
//$tdatatparam_estcivil[".listAjax"] = false;

	$tdatatparam_estcivil[".audit"] = false;

	$tdatatparam_estcivil[".locking"] = false;


$pages = $tdatatparam_estcivil[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_estcivil[".edit"] = true;
	$tdatatparam_estcivil[".afterEditAction"] = 1;
	$tdatatparam_estcivil[".closePopupAfterEdit"] = 1;
	$tdatatparam_estcivil[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_estcivil[".add"] = true;
$tdatatparam_estcivil[".afterAddAction"] = 1;
$tdatatparam_estcivil[".closePopupAfterAdd"] = 1;
$tdatatparam_estcivil[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_estcivil[".list"] = true;
}



$tdatatparam_estcivil[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_estcivil[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_estcivil[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_estcivil[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_estcivil[".printFriendly"] = true;
}



$tdatatparam_estcivil[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_estcivil[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_estcivil[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_estcivil[".isUseAjaxSuggest"] = true;





$tdatatparam_estcivil[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_estcivil[".buttonsAdded"] = false;

$tdatatparam_estcivil[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_estcivil[".isUseTimeForSearch"] = false;


$tdatatparam_estcivil[".badgeColor"] = "778899";


$tdatatparam_estcivil[".allSearchFields"] = array();
$tdatatparam_estcivil[".filterFields"] = array();
$tdatatparam_estcivil[".requiredSearchFields"] = array();

$tdatatparam_estcivil[".googleLikeFields"] = array();
$tdatatparam_estcivil[".googleLikeFields"][] = "tec_cdestciv_b";
$tdatatparam_estcivil[".googleLikeFields"][] = "tec_dsestciv_b";



$tdatatparam_estcivil[".tableType"] = "list";

$tdatatparam_estcivil[".printerPageOrientation"] = 0;
$tdatatparam_estcivil[".nPrinterPageScale"] = 100;

$tdatatparam_estcivil[".nPrinterSplitRecords"] = 40;

$tdatatparam_estcivil[".geocodingEnabled"] = false;










$tdatatparam_estcivil[".pageSize"] = 20;

$tdatatparam_estcivil[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_estcivil[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_estcivil[".orderindexes"] = array();


$tdatatparam_estcivil[".sqlHead"] = "SELECT tec_cdestciv_b,  	tec_dsestciv_b";
$tdatatparam_estcivil[".sqlFrom"] = "FROM tparam_estcivil";
$tdatatparam_estcivil[".sqlWhereExpr"] = "";
$tdatatparam_estcivil[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_estcivil[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_estcivil[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_estcivil[".highlightSearchResults"] = true;

$tableKeystparam_estcivil = array();
$tableKeystparam_estcivil[] = "tec_cdestciv_b";
$tdatatparam_estcivil[".Keys"] = $tableKeystparam_estcivil;


$tdatatparam_estcivil[".hideMobileList"] = array();




//	tec_cdestciv_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tec_cdestciv_b";
	$fdata["GoodName"] = "tec_cdestciv_b";
	$fdata["ownerTable"] = "tparam_estcivil";
	$fdata["Label"] = GetFieldLabel("tparam_estcivil","tec_cdestciv_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tec_cdestciv_b";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tec_cdestciv_b";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdatatparam_estcivil["tec_cdestciv_b"] = $fdata;
		$tdatatparam_estcivil[".searchableFields"][] = "tec_cdestciv_b";
//	tec_dsestciv_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tec_dsestciv_b";
	$fdata["GoodName"] = "tec_dsestciv_b";
	$fdata["ownerTable"] = "tparam_estcivil";
	$fdata["Label"] = GetFieldLabel("tparam_estcivil","tec_dsestciv_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tec_dsestciv_b";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tec_dsestciv_b";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatparam_estcivil["tec_dsestciv_b"] = $fdata;
		$tdatatparam_estcivil[".searchableFields"][] = "tec_dsestciv_b";


$tables_data["tparam_estcivil"]=&$tdatatparam_estcivil;
$field_labels["tparam_estcivil"] = &$fieldLabelstparam_estcivil;
$fieldToolTips["tparam_estcivil"] = &$fieldToolTipstparam_estcivil;
$placeHolders["tparam_estcivil"] = &$placeHolderstparam_estcivil;
$page_titles["tparam_estcivil"] = &$pageTitlestparam_estcivil;


changeTextControlsToDate( "tparam_estcivil" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_estcivil"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_estcivil"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_estcivil()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tec_cdestciv_b,  	tec_dsestciv_b";
$proto0["m_strFrom"] = "FROM tparam_estcivil";
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
	"m_strName" => "tec_cdestciv_b",
	"m_strTable" => "tparam_estcivil",
	"m_srcTableName" => "tparam_estcivil"
));

$proto6["m_sql"] = "tec_cdestciv_b";
$proto6["m_srcTableName"] = "tparam_estcivil";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tec_dsestciv_b",
	"m_strTable" => "tparam_estcivil",
	"m_srcTableName" => "tparam_estcivil"
));

$proto8["m_sql"] = "tec_dsestciv_b";
$proto8["m_srcTableName"] = "tparam_estcivil";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_estcivil";
$proto11["m_srcTableName"] = "tparam_estcivil";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "tec_cdestciv_b";
$proto11["m_columns"][] = "tec_dsestciv_b";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_estcivil";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_estcivil";
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
$proto0["m_srcTableName"]="tparam_estcivil";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_estcivil = createSqlQuery_tparam_estcivil();


	
								;

		

$tdatatparam_estcivil[".sqlquery"] = $queryData_tparam_estcivil;



$tdatatparam_estcivil[".hasEvents"] = false;

?>