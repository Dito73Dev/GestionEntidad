<?php
$tdatacontrato = array();
$tdatacontrato[".searchableFields"] = array();
$tdatacontrato[".ShortName"] = "contrato";
$tdatacontrato[".OwnerID"] = "";
$tdatacontrato[".OriginalTable"] = "contrato";


$tdatacontrato[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatacontrato[".originalPagesByType"] = $tdatacontrato[".pagesByType"];
$tdatacontrato[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatacontrato[".originalPages"] = $tdatacontrato[".pages"];
$tdatacontrato[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatacontrato[".originalDefaultPages"] = $tdatacontrato[".defaultPages"];

//	field labels
$fieldLabelscontrato = array();
$fieldToolTipscontrato = array();
$pageTitlescontrato = array();
$placeHolderscontrato = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato["Spanish"] = array();
	$fieldToolTipscontrato["Spanish"] = array();
	$placeHolderscontrato["Spanish"] = array();
	$pageTitlescontrato["Spanish"] = array();
	$fieldLabelscontrato["Spanish"]["id"] = "Id";
	$fieldToolTipscontrato["Spanish"]["id"] = "";
	$placeHolderscontrato["Spanish"]["id"] = "";
	$fieldLabelscontrato["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipscontrato["Spanish"]["nombre"] = "";
	$placeHolderscontrato["Spanish"]["nombre"] = "";
	if (count($fieldToolTipscontrato["Spanish"]))
		$tdatacontrato[".isUseToolTips"] = true;
}


	$tdatacontrato[".NCSearch"] = true;



$tdatacontrato[".shortTableName"] = "contrato";
$tdatacontrato[".nSecOptions"] = 0;

$tdatacontrato[".mainTableOwnerID"] = "";
$tdatacontrato[".entityType"] = 0;
$tdatacontrato[".connId"] = "edl_at_localhost";


$tdatacontrato[".strOriginalTableName"] = "contrato";

	



$tdatacontrato[".showAddInPopup"] = false;

$tdatacontrato[".showEditInPopup"] = false;

$tdatacontrato[".showViewInPopup"] = false;

$tdatacontrato[".listAjax"] = false;
//	temporary
//$tdatacontrato[".listAjax"] = false;

	$tdatacontrato[".audit"] = true;

	$tdatacontrato[".locking"] = true;


$pages = $tdatacontrato[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato[".edit"] = true;
	$tdatacontrato[".afterEditAction"] = 1;
	$tdatacontrato[".closePopupAfterEdit"] = 1;
	$tdatacontrato[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato[".add"] = true;
$tdatacontrato[".afterAddAction"] = 1;
$tdatacontrato[".closePopupAfterAdd"] = 1;
$tdatacontrato[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato[".list"] = true;
}



$tdatacontrato[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato[".printFriendly"] = true;
}



$tdatacontrato[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato[".isUseAjaxSuggest"] = true;





$tdatacontrato[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato[".buttonsAdded"] = false;

$tdatacontrato[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato[".isUseTimeForSearch"] = false;


$tdatacontrato[".badgeColor"] = "CD853F";


$tdatacontrato[".allSearchFields"] = array();
$tdatacontrato[".filterFields"] = array();
$tdatacontrato[".requiredSearchFields"] = array();

$tdatacontrato[".googleLikeFields"] = array();
$tdatacontrato[".googleLikeFields"][] = "id";
$tdatacontrato[".googleLikeFields"][] = "nombre";



$tdatacontrato[".tableType"] = "list";

$tdatacontrato[".printerPageOrientation"] = 0;
$tdatacontrato[".nPrinterPageScale"] = 100;

$tdatacontrato[".nPrinterSplitRecords"] = 40;

$tdatacontrato[".geocodingEnabled"] = false;










$tdatacontrato[".pageSize"] = 20;

$tdatacontrato[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontrato[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato[".orderindexes"] = array();


$tdatacontrato[".sqlHead"] = "SELECT id,  	nombre";
$tdatacontrato[".sqlFrom"] = "FROM contrato";
$tdatacontrato[".sqlWhereExpr"] = "";
$tdatacontrato[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato[".highlightSearchResults"] = true;

$tableKeyscontrato = array();
$tableKeyscontrato[] = "id";
$tdatacontrato[".Keys"] = $tableKeyscontrato;


$tdatacontrato[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","id");
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


	$tdatacontrato["id"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato","nombre");
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


	$tdatacontrato["nombre"] = $fdata;
		$tdatacontrato[".searchableFields"][] = "nombre";


$tables_data["contrato"]=&$tdatacontrato;
$field_labels["contrato"] = &$fieldLabelscontrato;
$fieldToolTips["contrato"] = &$fieldToolTipscontrato;
$placeHolders["contrato"] = &$placeHolderscontrato;
$page_titles["contrato"] = &$pageTitlescontrato;


changeTextControlsToDate( "contrato" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contrato"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contrato"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contrato()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nombre";
$proto0["m_strFrom"] = "FROM contrato";
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
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "contrato";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "contrato";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "contrato";
$proto11["m_srcTableName"] = "contrato";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "nombre";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "contrato";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "contrato";
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
$proto0["m_srcTableName"]="contrato";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato = createSqlQuery_contrato();


	
								;

		

$tdatacontrato[".sqlquery"] = $queryData_contrato;



$tdatacontrato[".hasEvents"] = false;

?>