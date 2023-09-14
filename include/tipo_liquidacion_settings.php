<?php
$tdatatipo_liquidacion = array();
$tdatatipo_liquidacion[".searchableFields"] = array();
$tdatatipo_liquidacion[".ShortName"] = "tipo_liquidacion";
$tdatatipo_liquidacion[".OwnerID"] = "";
$tdatatipo_liquidacion[".OriginalTable"] = "tipo_liquidacion";


$tdatatipo_liquidacion[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatipo_liquidacion[".originalPagesByType"] = $tdatatipo_liquidacion[".pagesByType"];
$tdatatipo_liquidacion[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatipo_liquidacion[".originalPages"] = $tdatatipo_liquidacion[".pages"];
$tdatatipo_liquidacion[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatatipo_liquidacion[".originalDefaultPages"] = $tdatatipo_liquidacion[".defaultPages"];

//	field labels
$fieldLabelstipo_liquidacion = array();
$fieldToolTipstipo_liquidacion = array();
$pageTitlestipo_liquidacion = array();
$placeHolderstipo_liquidacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_liquidacion["Spanish"] = array();
	$fieldToolTipstipo_liquidacion["Spanish"] = array();
	$placeHolderstipo_liquidacion["Spanish"] = array();
	$pageTitlestipo_liquidacion["Spanish"] = array();
	$fieldLabelstipo_liquidacion["Spanish"]["liq_codi"] = "Liq Codi";
	$fieldToolTipstipo_liquidacion["Spanish"]["liq_codi"] = "";
	$placeHolderstipo_liquidacion["Spanish"]["liq_codi"] = "";
	$fieldLabelstipo_liquidacion["Spanish"]["liq_nombre"] = "Liq Nombre";
	$fieldToolTipstipo_liquidacion["Spanish"]["liq_nombre"] = "";
	$placeHolderstipo_liquidacion["Spanish"]["liq_nombre"] = "";
	if (count($fieldToolTipstipo_liquidacion["Spanish"]))
		$tdatatipo_liquidacion[".isUseToolTips"] = true;
}


	$tdatatipo_liquidacion[".NCSearch"] = true;



$tdatatipo_liquidacion[".shortTableName"] = "tipo_liquidacion";
$tdatatipo_liquidacion[".nSecOptions"] = 0;

$tdatatipo_liquidacion[".mainTableOwnerID"] = "";
$tdatatipo_liquidacion[".entityType"] = 0;
$tdatatipo_liquidacion[".connId"] = "dbct_at_localhost";


$tdatatipo_liquidacion[".strOriginalTableName"] = "tipo_liquidacion";

	



$tdatatipo_liquidacion[".showAddInPopup"] = false;

$tdatatipo_liquidacion[".showEditInPopup"] = false;

$tdatatipo_liquidacion[".showViewInPopup"] = false;

$tdatatipo_liquidacion[".listAjax"] = false;
//	temporary
//$tdatatipo_liquidacion[".listAjax"] = false;

	$tdatatipo_liquidacion[".audit"] = true;

	$tdatatipo_liquidacion[".locking"] = true;


$pages = $tdatatipo_liquidacion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipo_liquidacion[".edit"] = true;
	$tdatatipo_liquidacion[".afterEditAction"] = 1;
	$tdatatipo_liquidacion[".closePopupAfterEdit"] = 1;
	$tdatatipo_liquidacion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipo_liquidacion[".add"] = true;
$tdatatipo_liquidacion[".afterAddAction"] = 1;
$tdatatipo_liquidacion[".closePopupAfterAdd"] = 1;
$tdatatipo_liquidacion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipo_liquidacion[".list"] = true;
}



$tdatatipo_liquidacion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipo_liquidacion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipo_liquidacion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipo_liquidacion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipo_liquidacion[".printFriendly"] = true;
}



$tdatatipo_liquidacion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipo_liquidacion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipo_liquidacion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipo_liquidacion[".isUseAjaxSuggest"] = true;





$tdatatipo_liquidacion[".ajaxCodeSnippetAdded"] = false;

$tdatatipo_liquidacion[".buttonsAdded"] = false;

$tdatatipo_liquidacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_liquidacion[".isUseTimeForSearch"] = false;


$tdatatipo_liquidacion[".badgeColor"] = "D2AF80";


$tdatatipo_liquidacion[".allSearchFields"] = array();
$tdatatipo_liquidacion[".filterFields"] = array();
$tdatatipo_liquidacion[".requiredSearchFields"] = array();

$tdatatipo_liquidacion[".googleLikeFields"] = array();
$tdatatipo_liquidacion[".googleLikeFields"][] = "liq_codi";
$tdatatipo_liquidacion[".googleLikeFields"][] = "liq_nombre";



$tdatatipo_liquidacion[".tableType"] = "list";

$tdatatipo_liquidacion[".printerPageOrientation"] = 0;
$tdatatipo_liquidacion[".nPrinterPageScale"] = 100;

$tdatatipo_liquidacion[".nPrinterSplitRecords"] = 40;

$tdatatipo_liquidacion[".geocodingEnabled"] = false;










$tdatatipo_liquidacion[".pageSize"] = 20;

$tdatatipo_liquidacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatipo_liquidacion[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_liquidacion[".orderindexes"] = array();


$tdatatipo_liquidacion[".sqlHead"] = "SELECT liq_codi,  	liq_nombre";
$tdatatipo_liquidacion[".sqlFrom"] = "FROM tipo_liquidacion";
$tdatatipo_liquidacion[".sqlWhereExpr"] = "";
$tdatatipo_liquidacion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_liquidacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_liquidacion[".arrGroupsPerPage"] = $arrGPP;

$tdatatipo_liquidacion[".highlightSearchResults"] = true;

$tableKeystipo_liquidacion = array();
$tableKeystipo_liquidacion[] = "liq_codi";
$tdatatipo_liquidacion[".Keys"] = $tableKeystipo_liquidacion;


$tdatatipo_liquidacion[".hideMobileList"] = array();




//	liq_codi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "liq_codi";
	$fdata["GoodName"] = "liq_codi";
	$fdata["ownerTable"] = "tipo_liquidacion";
	$fdata["Label"] = GetFieldLabel("tipo_liquidacion","liq_codi");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "liq_codi";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "liq_codi";

	
	
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


	$tdatatipo_liquidacion["liq_codi"] = $fdata;
		$tdatatipo_liquidacion[".searchableFields"][] = "liq_codi";
//	liq_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "liq_nombre";
	$fdata["GoodName"] = "liq_nombre";
	$fdata["ownerTable"] = "tipo_liquidacion";
	$fdata["Label"] = GetFieldLabel("tipo_liquidacion","liq_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "liq_nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "liq_nombre";

	
	
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


	$tdatatipo_liquidacion["liq_nombre"] = $fdata;
		$tdatatipo_liquidacion[".searchableFields"][] = "liq_nombre";


$tables_data["tipo_liquidacion"]=&$tdatatipo_liquidacion;
$field_labels["tipo_liquidacion"] = &$fieldLabelstipo_liquidacion;
$fieldToolTips["tipo_liquidacion"] = &$fieldToolTipstipo_liquidacion;
$placeHolders["tipo_liquidacion"] = &$placeHolderstipo_liquidacion;
$page_titles["tipo_liquidacion"] = &$pageTitlestipo_liquidacion;


changeTextControlsToDate( "tipo_liquidacion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tipo_liquidacion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tipo_liquidacion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tipo_liquidacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "liq_codi,  	liq_nombre";
$proto0["m_strFrom"] = "FROM tipo_liquidacion";
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
	"m_strName" => "liq_codi",
	"m_strTable" => "tipo_liquidacion",
	"m_srcTableName" => "tipo_liquidacion"
));

$proto6["m_sql"] = "liq_codi";
$proto6["m_srcTableName"] = "tipo_liquidacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "liq_nombre",
	"m_strTable" => "tipo_liquidacion",
	"m_srcTableName" => "tipo_liquidacion"
));

$proto8["m_sql"] = "liq_nombre";
$proto8["m_srcTableName"] = "tipo_liquidacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tipo_liquidacion";
$proto11["m_srcTableName"] = "tipo_liquidacion";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "liq_codi";
$proto11["m_columns"][] = "liq_nombre";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tipo_liquidacion";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tipo_liquidacion";
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
$proto0["m_srcTableName"]="tipo_liquidacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_liquidacion = createSqlQuery_tipo_liquidacion();


	
								;

		

$tdatatipo_liquidacion[".sqlquery"] = $queryData_tipo_liquidacion;



$tdatatipo_liquidacion[".hasEvents"] = false;

?>