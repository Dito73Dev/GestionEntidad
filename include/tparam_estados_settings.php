<?php
$tdatatparam_estados = array();
$tdatatparam_estados[".searchableFields"] = array();
$tdatatparam_estados[".ShortName"] = "tparam_estados";
$tdatatparam_estados[".OwnerID"] = "";
$tdatatparam_estados[".OriginalTable"] = "tparam_estados";


$tdatatparam_estados[".pagesByType"] = my_json_decode( "{}" );
$tdatatparam_estados[".originalPagesByType"] = $tdatatparam_estados[".pagesByType"];
$tdatatparam_estados[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatparam_estados[".originalPages"] = $tdatatparam_estados[".pages"];
$tdatatparam_estados[".defaultPages"] = my_json_decode( "{}" );
$tdatatparam_estados[".originalDefaultPages"] = $tdatatparam_estados[".defaultPages"];

//	field labels
$fieldLabelstparam_estados = array();
$fieldToolTipstparam_estados = array();
$pageTitlestparam_estados = array();
$placeHolderstparam_estados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_estados["Spanish"] = array();
	$fieldToolTipstparam_estados["Spanish"] = array();
	$placeHolderstparam_estados["Spanish"] = array();
	$pageTitlestparam_estados["Spanish"] = array();
	$fieldLabelstparam_estados["Spanish"]["estado_id"] = "Estado Id";
	$fieldToolTipstparam_estados["Spanish"]["estado_id"] = "";
	$placeHolderstparam_estados["Spanish"]["estado_id"] = "";
	$fieldLabelstparam_estados["Spanish"]["estado_name"] = "Estado Name";
	$fieldToolTipstparam_estados["Spanish"]["estado_name"] = "";
	$placeHolderstparam_estados["Spanish"]["estado_name"] = "";
	if (count($fieldToolTipstparam_estados["Spanish"]))
		$tdatatparam_estados[".isUseToolTips"] = true;
}


	$tdatatparam_estados[".NCSearch"] = true;



$tdatatparam_estados[".shortTableName"] = "tparam_estados";
$tdatatparam_estados[".nSecOptions"] = 0;

$tdatatparam_estados[".mainTableOwnerID"] = "";
$tdatatparam_estados[".entityType"] = 0;
$tdatatparam_estados[".connId"] = "edl_at_localhost";


$tdatatparam_estados[".strOriginalTableName"] = "tparam_estados";

	



$tdatatparam_estados[".showAddInPopup"] = false;

$tdatatparam_estados[".showEditInPopup"] = false;

$tdatatparam_estados[".showViewInPopup"] = false;

$tdatatparam_estados[".listAjax"] = false;
//	temporary
//$tdatatparam_estados[".listAjax"] = false;

	$tdatatparam_estados[".audit"] = true;

	$tdatatparam_estados[".locking"] = true;


$pages = $tdatatparam_estados[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_estados[".edit"] = true;
	$tdatatparam_estados[".afterEditAction"] = 1;
	$tdatatparam_estados[".closePopupAfterEdit"] = 1;
	$tdatatparam_estados[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_estados[".add"] = true;
$tdatatparam_estados[".afterAddAction"] = 1;
$tdatatparam_estados[".closePopupAfterAdd"] = 1;
$tdatatparam_estados[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_estados[".list"] = true;
}



$tdatatparam_estados[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_estados[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_estados[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_estados[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_estados[".printFriendly"] = true;
}



$tdatatparam_estados[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_estados[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_estados[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_estados[".isUseAjaxSuggest"] = true;





$tdatatparam_estados[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_estados[".buttonsAdded"] = false;

$tdatatparam_estados[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_estados[".isUseTimeForSearch"] = false;


$tdatatparam_estados[".badgeColor"] = "4682B4";


$tdatatparam_estados[".allSearchFields"] = array();
$tdatatparam_estados[".filterFields"] = array();
$tdatatparam_estados[".requiredSearchFields"] = array();

$tdatatparam_estados[".googleLikeFields"] = array();
$tdatatparam_estados[".googleLikeFields"][] = "estado_id";
$tdatatparam_estados[".googleLikeFields"][] = "estado_name";



$tdatatparam_estados[".tableType"] = "list";

$tdatatparam_estados[".printerPageOrientation"] = 0;
$tdatatparam_estados[".nPrinterPageScale"] = 100;

$tdatatparam_estados[".nPrinterSplitRecords"] = 40;

$tdatatparam_estados[".geocodingEnabled"] = false;










$tdatatparam_estados[".pageSize"] = 20;

$tdatatparam_estados[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_estados[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_estados[".orderindexes"] = array();


$tdatatparam_estados[".sqlHead"] = "SELECT estado_id,  	estado_name";
$tdatatparam_estados[".sqlFrom"] = "FROM tparam_estados";
$tdatatparam_estados[".sqlWhereExpr"] = "";
$tdatatparam_estados[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_estados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_estados[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_estados[".highlightSearchResults"] = true;

$tableKeystparam_estados = array();
$tableKeystparam_estados[] = "estado_id";
$tdatatparam_estados[".Keys"] = $tableKeystparam_estados;


$tdatatparam_estados[".hideMobileList"] = array();




//	estado_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "estado_id";
	$fdata["GoodName"] = "estado_id";
	$fdata["ownerTable"] = "tparam_estados";
	$fdata["Label"] = GetFieldLabel("tparam_estados","estado_id");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "estado_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_id";

	
	
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


	$tdatatparam_estados["estado_id"] = $fdata;
		$tdatatparam_estados[".searchableFields"][] = "estado_id";
//	estado_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estado_name";
	$fdata["GoodName"] = "estado_name";
	$fdata["ownerTable"] = "tparam_estados";
	$fdata["Label"] = GetFieldLabel("tparam_estados","estado_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_name";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatatparam_estados["estado_name"] = $fdata;
		$tdatatparam_estados[".searchableFields"][] = "estado_name";


$tables_data["tparam_estados"]=&$tdatatparam_estados;
$field_labels["tparam_estados"] = &$fieldLabelstparam_estados;
$fieldToolTips["tparam_estados"] = &$fieldToolTipstparam_estados;
$placeHolders["tparam_estados"] = &$placeHolderstparam_estados;
$page_titles["tparam_estados"] = &$pageTitlestparam_estados;


changeTextControlsToDate( "tparam_estados" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_estados"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_estados"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_estados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "estado_id,  	estado_name";
$proto0["m_strFrom"] = "FROM tparam_estados";
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
	"m_strName" => "estado_id",
	"m_strTable" => "tparam_estados",
	"m_srcTableName" => "tparam_estados"
));

$proto6["m_sql"] = "estado_id";
$proto6["m_srcTableName"] = "tparam_estados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_name",
	"m_strTable" => "tparam_estados",
	"m_srcTableName" => "tparam_estados"
));

$proto8["m_sql"] = "estado_name";
$proto8["m_srcTableName"] = "tparam_estados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_estados";
$proto11["m_srcTableName"] = "tparam_estados";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "estado_id";
$proto11["m_columns"][] = "estado_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_estados";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_estados";
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
$proto0["m_srcTableName"]="tparam_estados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_estados = createSqlQuery_tparam_estados();


	
								;

		

$tdatatparam_estados[".sqlquery"] = $queryData_tparam_estados;



$tdatatparam_estados[".hasEvents"] = false;

?>