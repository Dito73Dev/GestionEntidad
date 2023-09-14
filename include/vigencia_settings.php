<?php
$tdatavigencia = array();
$tdatavigencia[".searchableFields"] = array();
$tdatavigencia[".ShortName"] = "vigencia";
$tdatavigencia[".OwnerID"] = "";
$tdatavigencia[".OriginalTable"] = "vigencia";


$tdatavigencia[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavigencia[".originalPagesByType"] = $tdatavigencia[".pagesByType"];
$tdatavigencia[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavigencia[".originalPages"] = $tdatavigencia[".pages"];
$tdatavigencia[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavigencia[".originalDefaultPages"] = $tdatavigencia[".defaultPages"];

//	field labels
$fieldLabelsvigencia = array();
$fieldToolTipsvigencia = array();
$pageTitlesvigencia = array();
$placeHoldersvigencia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvigencia["Spanish"] = array();
	$fieldToolTipsvigencia["Spanish"] = array();
	$placeHoldersvigencia["Spanish"] = array();
	$pageTitlesvigencia["Spanish"] = array();
	$fieldLabelsvigencia["Spanish"]["vigencia_id"] = "Vigencia Id";
	$fieldToolTipsvigencia["Spanish"]["vigencia_id"] = "";
	$placeHoldersvigencia["Spanish"]["vigencia_id"] = "";
	$fieldLabelsvigencia["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipsvigencia["Spanish"]["vigencia"] = "";
	$placeHoldersvigencia["Spanish"]["vigencia"] = "";
	if (count($fieldToolTipsvigencia["Spanish"]))
		$tdatavigencia[".isUseToolTips"] = true;
}


	$tdatavigencia[".NCSearch"] = true;



$tdatavigencia[".shortTableName"] = "vigencia";
$tdatavigencia[".nSecOptions"] = 0;

$tdatavigencia[".mainTableOwnerID"] = "";
$tdatavigencia[".entityType"] = 0;
$tdatavigencia[".connId"] = "dbct_at_localhost";


$tdatavigencia[".strOriginalTableName"] = "vigencia";

	



$tdatavigencia[".showAddInPopup"] = false;

$tdatavigencia[".showEditInPopup"] = false;

$tdatavigencia[".showViewInPopup"] = false;

$tdatavigencia[".listAjax"] = false;
//	temporary
//$tdatavigencia[".listAjax"] = false;

	$tdatavigencia[".audit"] = true;

	$tdatavigencia[".locking"] = true;


$pages = $tdatavigencia[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavigencia[".edit"] = true;
	$tdatavigencia[".afterEditAction"] = 1;
	$tdatavigencia[".closePopupAfterEdit"] = 1;
	$tdatavigencia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavigencia[".add"] = true;
$tdatavigencia[".afterAddAction"] = 1;
$tdatavigencia[".closePopupAfterAdd"] = 1;
$tdatavigencia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavigencia[".list"] = true;
}



$tdatavigencia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavigencia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavigencia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavigencia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavigencia[".printFriendly"] = true;
}



$tdatavigencia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavigencia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavigencia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavigencia[".isUseAjaxSuggest"] = true;





$tdatavigencia[".ajaxCodeSnippetAdded"] = false;

$tdatavigencia[".buttonsAdded"] = false;

$tdatavigencia[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavigencia[".isUseTimeForSearch"] = false;


$tdatavigencia[".badgeColor"] = "E67349";


$tdatavigencia[".allSearchFields"] = array();
$tdatavigencia[".filterFields"] = array();
$tdatavigencia[".requiredSearchFields"] = array();

$tdatavigencia[".googleLikeFields"] = array();
$tdatavigencia[".googleLikeFields"][] = "vigencia";
$tdatavigencia[".googleLikeFields"][] = "vigencia_id";



$tdatavigencia[".tableType"] = "list";

$tdatavigencia[".printerPageOrientation"] = 0;
$tdatavigencia[".nPrinterPageScale"] = 100;

$tdatavigencia[".nPrinterSplitRecords"] = 40;

$tdatavigencia[".geocodingEnabled"] = false;










$tdatavigencia[".pageSize"] = 20;

$tdatavigencia[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavigencia[".strOrderBy"] = $tstrOrderBy;

$tdatavigencia[".orderindexes"] = array();


$tdatavigencia[".sqlHead"] = "SELECT vigencia,  	vigencia_id";
$tdatavigencia[".sqlFrom"] = "FROM vigencia";
$tdatavigencia[".sqlWhereExpr"] = "";
$tdatavigencia[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavigencia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavigencia[".arrGroupsPerPage"] = $arrGPP;

$tdatavigencia[".highlightSearchResults"] = true;

$tableKeysvigencia = array();
$tableKeysvigencia[] = "vigencia_id";
$tdatavigencia[".Keys"] = $tableKeysvigencia;


$tdatavigencia[".hideMobileList"] = array();




//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "vigencia";
	$fdata["Label"] = GetFieldLabel("vigencia","vigencia");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "vigencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia";

	
	
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


	$tdatavigencia["vigencia"] = $fdata;
		$tdatavigencia[".searchableFields"][] = "vigencia";
//	vigencia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "vigencia_id";
	$fdata["GoodName"] = "vigencia_id";
	$fdata["ownerTable"] = "vigencia";
	$fdata["Label"] = GetFieldLabel("vigencia","vigencia_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "vigencia_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_id";

	
	
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


	$tdatavigencia["vigencia_id"] = $fdata;
		$tdatavigencia[".searchableFields"][] = "vigencia_id";


$tables_data["vigencia"]=&$tdatavigencia;
$field_labels["vigencia"] = &$fieldLabelsvigencia;
$fieldToolTips["vigencia"] = &$fieldToolTipsvigencia;
$placeHolders["vigencia"] = &$placeHoldersvigencia;
$page_titles["vigencia"] = &$pageTitlesvigencia;


changeTextControlsToDate( "vigencia" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vigencia"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vigencia"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vigencia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vigencia,  	vigencia_id";
$proto0["m_strFrom"] = "FROM vigencia";
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
	"m_strName" => "vigencia",
	"m_strTable" => "vigencia",
	"m_srcTableName" => "vigencia"
));

$proto6["m_sql"] = "vigencia";
$proto6["m_srcTableName"] = "vigencia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_id",
	"m_strTable" => "vigencia",
	"m_srcTableName" => "vigencia"
));

$proto8["m_sql"] = "vigencia_id";
$proto8["m_srcTableName"] = "vigencia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "vigencia";
$proto11["m_srcTableName"] = "vigencia";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "vigencia";
$proto11["m_columns"][] = "vigencia_id";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "vigencia";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "vigencia";
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
$proto0["m_srcTableName"]="vigencia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vigencia = createSqlQuery_vigencia();


	
								;

		

$tdatavigencia[".sqlquery"] = $queryData_vigencia;



$tdatavigencia[".hasEvents"] = false;

?>