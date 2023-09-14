<?php
$tdatacontrato_pre = array();
$tdatacontrato_pre[".searchableFields"] = array();
$tdatacontrato_pre[".ShortName"] = "contrato_pre";
$tdatacontrato_pre[".OwnerID"] = "";
$tdatacontrato_pre[".OriginalTable"] = "contrato_pre";


$tdatacontrato_pre[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_pre[".originalPagesByType"] = $tdatacontrato_pre[".pagesByType"];
$tdatacontrato_pre[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_pre[".originalPages"] = $tdatacontrato_pre[".pages"];
$tdatacontrato_pre[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_pre[".originalDefaultPages"] = $tdatacontrato_pre[".defaultPages"];

//	field labels
$fieldLabelscontrato_pre = array();
$fieldToolTipscontrato_pre = array();
$pageTitlescontrato_pre = array();
$placeHolderscontrato_pre = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_pre["Spanish"] = array();
	$fieldToolTipscontrato_pre["Spanish"] = array();
	$placeHolderscontrato_pre["Spanish"] = array();
	$pageTitlescontrato_pre["Spanish"] = array();
	$fieldLabelscontrato_pre["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipscontrato_pre["Spanish"]["codigo"] = "";
	$placeHolderscontrato_pre["Spanish"]["codigo"] = "";
	if (count($fieldToolTipscontrato_pre["Spanish"]))
		$tdatacontrato_pre[".isUseToolTips"] = true;
}


	$tdatacontrato_pre[".NCSearch"] = true;



$tdatacontrato_pre[".shortTableName"] = "contrato_pre";
$tdatacontrato_pre[".nSecOptions"] = 0;

$tdatacontrato_pre[".mainTableOwnerID"] = "";
$tdatacontrato_pre[".entityType"] = 0;
$tdatacontrato_pre[".connId"] = "dbct_at_localhost";


$tdatacontrato_pre[".strOriginalTableName"] = "contrato_pre";

	



$tdatacontrato_pre[".showAddInPopup"] = false;

$tdatacontrato_pre[".showEditInPopup"] = false;

$tdatacontrato_pre[".showViewInPopup"] = false;

$tdatacontrato_pre[".listAjax"] = false;
//	temporary
//$tdatacontrato_pre[".listAjax"] = false;

	$tdatacontrato_pre[".audit"] = true;

	$tdatacontrato_pre[".locking"] = true;


$pages = $tdatacontrato_pre[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_pre[".edit"] = true;
	$tdatacontrato_pre[".afterEditAction"] = 1;
	$tdatacontrato_pre[".closePopupAfterEdit"] = 1;
	$tdatacontrato_pre[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_pre[".add"] = true;
$tdatacontrato_pre[".afterAddAction"] = 1;
$tdatacontrato_pre[".closePopupAfterAdd"] = 1;
$tdatacontrato_pre[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_pre[".list"] = true;
}



$tdatacontrato_pre[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_pre[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_pre[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_pre[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_pre[".printFriendly"] = true;
}



$tdatacontrato_pre[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_pre[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_pre[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_pre[".isUseAjaxSuggest"] = true;





$tdatacontrato_pre[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_pre[".buttonsAdded"] = false;

$tdatacontrato_pre[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_pre[".isUseTimeForSearch"] = false;


$tdatacontrato_pre[".badgeColor"] = "6493EA";


$tdatacontrato_pre[".allSearchFields"] = array();
$tdatacontrato_pre[".filterFields"] = array();
$tdatacontrato_pre[".requiredSearchFields"] = array();

$tdatacontrato_pre[".googleLikeFields"] = array();
$tdatacontrato_pre[".googleLikeFields"][] = "codigo";



$tdatacontrato_pre[".tableType"] = "list";

$tdatacontrato_pre[".printerPageOrientation"] = 0;
$tdatacontrato_pre[".nPrinterPageScale"] = 100;

$tdatacontrato_pre[".nPrinterSplitRecords"] = 40;

$tdatacontrato_pre[".geocodingEnabled"] = false;










$tdatacontrato_pre[".pageSize"] = 20;

$tdatacontrato_pre[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontrato_pre[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_pre[".orderindexes"] = array();


$tdatacontrato_pre[".sqlHead"] = "SELECT codigo";
$tdatacontrato_pre[".sqlFrom"] = "FROM contrato_pre";
$tdatacontrato_pre[".sqlWhereExpr"] = "";
$tdatacontrato_pre[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_pre[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_pre[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_pre[".highlightSearchResults"] = true;

$tableKeyscontrato_pre = array();
$tableKeyscontrato_pre[] = "codigo";
$tdatacontrato_pre[".Keys"] = $tableKeyscontrato_pre;


$tdatacontrato_pre[".hideMobileList"] = array();




//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "contrato_pre";
	$fdata["Label"] = GetFieldLabel("contrato_pre","codigo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "codigo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo";

	
	
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
			$edata["EditParams"].= " maxlength=7";

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


	$tdatacontrato_pre["codigo"] = $fdata;
		$tdatacontrato_pre[".searchableFields"][] = "codigo";


$tables_data["contrato_pre"]=&$tdatacontrato_pre;
$field_labels["contrato_pre"] = &$fieldLabelscontrato_pre;
$fieldToolTips["contrato_pre"] = &$fieldToolTipscontrato_pre;
$placeHolders["contrato_pre"] = &$placeHolderscontrato_pre;
$page_titles["contrato_pre"] = &$pageTitlescontrato_pre;


changeTextControlsToDate( "contrato_pre" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contrato_pre"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contrato_pre"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contrato_pre()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "codigo";
$proto0["m_strFrom"] = "FROM contrato_pre";
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
	"m_strName" => "codigo",
	"m_strTable" => "contrato_pre",
	"m_srcTableName" => "contrato_pre"
));

$proto6["m_sql"] = "codigo";
$proto6["m_srcTableName"] = "contrato_pre";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "contrato_pre";
$proto9["m_srcTableName"] = "contrato_pre";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "codigo";
$proto9["m_columns"][] = "nombre";
$proto9["m_columns"][] = "rol";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "contrato_pre";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "contrato_pre";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato_pre";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_pre = createSqlQuery_contrato_pre();


	
								;

	

$tdatacontrato_pre[".sqlquery"] = $queryData_contrato_pre;



$tdatacontrato_pre[".hasEvents"] = false;

?>