<?php
$tdatanombramiento = array();
$tdatanombramiento[".searchableFields"] = array();
$tdatanombramiento[".ShortName"] = "nombramiento";
$tdatanombramiento[".OwnerID"] = "";
$tdatanombramiento[".OriginalTable"] = "nombramiento";


$tdatanombramiento[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatanombramiento[".originalPagesByType"] = $tdatanombramiento[".pagesByType"];
$tdatanombramiento[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatanombramiento[".originalPages"] = $tdatanombramiento[".pages"];
$tdatanombramiento[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatanombramiento[".originalDefaultPages"] = $tdatanombramiento[".defaultPages"];

//	field labels
$fieldLabelsnombramiento = array();
$fieldToolTipsnombramiento = array();
$pageTitlesnombramiento = array();
$placeHoldersnombramiento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsnombramiento["Spanish"] = array();
	$fieldToolTipsnombramiento["Spanish"] = array();
	$placeHoldersnombramiento["Spanish"] = array();
	$pageTitlesnombramiento["Spanish"] = array();
	$fieldLabelsnombramiento["Spanish"]["id"] = "Id";
	$fieldToolTipsnombramiento["Spanish"]["id"] = "";
	$placeHoldersnombramiento["Spanish"]["id"] = "";
	$fieldLabelsnombramiento["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsnombramiento["Spanish"]["nombre"] = "";
	$placeHoldersnombramiento["Spanish"]["nombre"] = "";
	if (count($fieldToolTipsnombramiento["Spanish"]))
		$tdatanombramiento[".isUseToolTips"] = true;
}


	$tdatanombramiento[".NCSearch"] = true;



$tdatanombramiento[".shortTableName"] = "nombramiento";
$tdatanombramiento[".nSecOptions"] = 0;

$tdatanombramiento[".mainTableOwnerID"] = "";
$tdatanombramiento[".entityType"] = 0;
$tdatanombramiento[".connId"] = "edl_at_localhost";


$tdatanombramiento[".strOriginalTableName"] = "nombramiento";

	



$tdatanombramiento[".showAddInPopup"] = false;

$tdatanombramiento[".showEditInPopup"] = false;

$tdatanombramiento[".showViewInPopup"] = false;

$tdatanombramiento[".listAjax"] = false;
//	temporary
//$tdatanombramiento[".listAjax"] = false;

	$tdatanombramiento[".audit"] = true;

	$tdatanombramiento[".locking"] = true;


$pages = $tdatanombramiento[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanombramiento[".edit"] = true;
	$tdatanombramiento[".afterEditAction"] = 1;
	$tdatanombramiento[".closePopupAfterEdit"] = 1;
	$tdatanombramiento[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanombramiento[".add"] = true;
$tdatanombramiento[".afterAddAction"] = 1;
$tdatanombramiento[".closePopupAfterAdd"] = 1;
$tdatanombramiento[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanombramiento[".list"] = true;
}



$tdatanombramiento[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanombramiento[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanombramiento[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanombramiento[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanombramiento[".printFriendly"] = true;
}



$tdatanombramiento[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanombramiento[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanombramiento[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanombramiento[".isUseAjaxSuggest"] = true;





$tdatanombramiento[".ajaxCodeSnippetAdded"] = false;

$tdatanombramiento[".buttonsAdded"] = false;

$tdatanombramiento[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanombramiento[".isUseTimeForSearch"] = false;


$tdatanombramiento[".badgeColor"] = "E67349";


$tdatanombramiento[".allSearchFields"] = array();
$tdatanombramiento[".filterFields"] = array();
$tdatanombramiento[".requiredSearchFields"] = array();

$tdatanombramiento[".googleLikeFields"] = array();
$tdatanombramiento[".googleLikeFields"][] = "id";
$tdatanombramiento[".googleLikeFields"][] = "nombre";



$tdatanombramiento[".tableType"] = "list";

$tdatanombramiento[".printerPageOrientation"] = 0;
$tdatanombramiento[".nPrinterPageScale"] = 100;

$tdatanombramiento[".nPrinterSplitRecords"] = 40;

$tdatanombramiento[".geocodingEnabled"] = false;










$tdatanombramiento[".pageSize"] = 20;

$tdatanombramiento[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatanombramiento[".strOrderBy"] = $tstrOrderBy;

$tdatanombramiento[".orderindexes"] = array();


$tdatanombramiento[".sqlHead"] = "SELECT id,  	nombre";
$tdatanombramiento[".sqlFrom"] = "FROM nombramiento";
$tdatanombramiento[".sqlWhereExpr"] = "";
$tdatanombramiento[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanombramiento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanombramiento[".arrGroupsPerPage"] = $arrGPP;

$tdatanombramiento[".highlightSearchResults"] = true;

$tableKeysnombramiento = array();
$tableKeysnombramiento[] = "id";
$tdatanombramiento[".Keys"] = $tableKeysnombramiento;


$tdatanombramiento[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "nombramiento";
	$fdata["Label"] = GetFieldLabel("nombramiento","id");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatanombramiento["id"] = $fdata;
		$tdatanombramiento[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "nombramiento";
	$fdata["Label"] = GetFieldLabel("nombramiento","nombre");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

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


	$tdatanombramiento["nombre"] = $fdata;
		$tdatanombramiento[".searchableFields"][] = "nombre";


$tables_data["nombramiento"]=&$tdatanombramiento;
$field_labels["nombramiento"] = &$fieldLabelsnombramiento;
$fieldToolTips["nombramiento"] = &$fieldToolTipsnombramiento;
$placeHolders["nombramiento"] = &$placeHoldersnombramiento;
$page_titles["nombramiento"] = &$pageTitlesnombramiento;


changeTextControlsToDate( "nombramiento" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["nombramiento"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["nombramiento"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_nombramiento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre";
$proto0["m_strFrom"] = "FROM nombramiento";
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
	"m_strTable" => "nombramiento",
	"m_srcTableName" => "nombramiento"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "nombramiento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "nombramiento",
	"m_srcTableName" => "nombramiento"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "nombramiento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "nombramiento";
$proto11["m_srcTableName"] = "nombramiento";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "nombre";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "nombramiento";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "nombramiento";
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
$proto0["m_srcTableName"]="nombramiento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_nombramiento = createSqlQuery_nombramiento();


	
								;

		

$tdatanombramiento[".sqlquery"] = $queryData_nombramiento;



$tdatanombramiento[".hasEvents"] = false;

?>