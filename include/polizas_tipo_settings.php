<?php
$tdatapolizas_tipo = array();
$tdatapolizas_tipo[".searchableFields"] = array();
$tdatapolizas_tipo[".ShortName"] = "polizas_tipo";
$tdatapolizas_tipo[".OwnerID"] = "";
$tdatapolizas_tipo[".OriginalTable"] = "polizas_tipo";


$tdatapolizas_tipo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapolizas_tipo[".originalPagesByType"] = $tdatapolizas_tipo[".pagesByType"];
$tdatapolizas_tipo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapolizas_tipo[".originalPages"] = $tdatapolizas_tipo[".pages"];
$tdatapolizas_tipo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapolizas_tipo[".originalDefaultPages"] = $tdatapolizas_tipo[".defaultPages"];

//	field labels
$fieldLabelspolizas_tipo = array();
$fieldToolTipspolizas_tipo = array();
$pageTitlespolizas_tipo = array();
$placeHolderspolizas_tipo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspolizas_tipo["Spanish"] = array();
	$fieldToolTipspolizas_tipo["Spanish"] = array();
	$placeHolderspolizas_tipo["Spanish"] = array();
	$pageTitlespolizas_tipo["Spanish"] = array();
	$fieldLabelspolizas_tipo["Spanish"]["poliza_type_id"] = "Id";
	$fieldToolTipspolizas_tipo["Spanish"]["poliza_type_id"] = "";
	$placeHolderspolizas_tipo["Spanish"]["poliza_type_id"] = "";
	$fieldLabelspolizas_tipo["Spanish"]["poliza_type_name"] = "Nombre";
	$fieldToolTipspolizas_tipo["Spanish"]["poliza_type_name"] = "";
	$placeHolderspolizas_tipo["Spanish"]["poliza_type_name"] = "";
	if (count($fieldToolTipspolizas_tipo["Spanish"]))
		$tdatapolizas_tipo[".isUseToolTips"] = true;
}


	$tdatapolizas_tipo[".NCSearch"] = true;



$tdatapolizas_tipo[".shortTableName"] = "polizas_tipo";
$tdatapolizas_tipo[".nSecOptions"] = 0;

$tdatapolizas_tipo[".mainTableOwnerID"] = "";
$tdatapolizas_tipo[".entityType"] = 0;
$tdatapolizas_tipo[".connId"] = "dbct_at_localhost";


$tdatapolizas_tipo[".strOriginalTableName"] = "polizas_tipo";

	



$tdatapolizas_tipo[".showAddInPopup"] = false;

$tdatapolizas_tipo[".showEditInPopup"] = false;

$tdatapolizas_tipo[".showViewInPopup"] = false;

$tdatapolizas_tipo[".listAjax"] = false;
//	temporary
//$tdatapolizas_tipo[".listAjax"] = false;

	$tdatapolizas_tipo[".audit"] = true;

	$tdatapolizas_tipo[".locking"] = true;


$pages = $tdatapolizas_tipo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapolizas_tipo[".edit"] = true;
	$tdatapolizas_tipo[".afterEditAction"] = 1;
	$tdatapolizas_tipo[".closePopupAfterEdit"] = 1;
	$tdatapolizas_tipo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapolizas_tipo[".add"] = true;
$tdatapolizas_tipo[".afterAddAction"] = 1;
$tdatapolizas_tipo[".closePopupAfterAdd"] = 1;
$tdatapolizas_tipo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapolizas_tipo[".list"] = true;
}



$tdatapolizas_tipo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapolizas_tipo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapolizas_tipo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapolizas_tipo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapolizas_tipo[".printFriendly"] = true;
}



$tdatapolizas_tipo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapolizas_tipo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapolizas_tipo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapolizas_tipo[".isUseAjaxSuggest"] = true;





$tdatapolizas_tipo[".ajaxCodeSnippetAdded"] = false;

$tdatapolizas_tipo[".buttonsAdded"] = false;

$tdatapolizas_tipo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapolizas_tipo[".isUseTimeForSearch"] = false;


$tdatapolizas_tipo[".badgeColor"] = "DB7093";


$tdatapolizas_tipo[".allSearchFields"] = array();
$tdatapolizas_tipo[".filterFields"] = array();
$tdatapolizas_tipo[".requiredSearchFields"] = array();

$tdatapolizas_tipo[".googleLikeFields"] = array();
$tdatapolizas_tipo[".googleLikeFields"][] = "poliza_type_id";
$tdatapolizas_tipo[".googleLikeFields"][] = "poliza_type_name";



$tdatapolizas_tipo[".tableType"] = "list";

$tdatapolizas_tipo[".printerPageOrientation"] = 0;
$tdatapolizas_tipo[".nPrinterPageScale"] = 100;

$tdatapolizas_tipo[".nPrinterSplitRecords"] = 40;

$tdatapolizas_tipo[".geocodingEnabled"] = false;










$tdatapolizas_tipo[".pageSize"] = 20;

$tdatapolizas_tipo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapolizas_tipo[".strOrderBy"] = $tstrOrderBy;

$tdatapolizas_tipo[".orderindexes"] = array();


$tdatapolizas_tipo[".sqlHead"] = "SELECT poliza_type_id,  	poliza_type_name";
$tdatapolizas_tipo[".sqlFrom"] = "FROM polizas_tipo";
$tdatapolizas_tipo[".sqlWhereExpr"] = "";
$tdatapolizas_tipo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapolizas_tipo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapolizas_tipo[".arrGroupsPerPage"] = $arrGPP;

$tdatapolizas_tipo[".highlightSearchResults"] = true;

$tableKeyspolizas_tipo = array();
$tableKeyspolizas_tipo[] = "poliza_type_id";
$tdatapolizas_tipo[".Keys"] = $tableKeyspolizas_tipo;


$tdatapolizas_tipo[".hideMobileList"] = array();




//	poliza_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "poliza_type_id";
	$fdata["GoodName"] = "poliza_type_id";
	$fdata["ownerTable"] = "polizas_tipo";
	$fdata["Label"] = GetFieldLabel("polizas_tipo","poliza_type_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "poliza_type_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "poliza_type_id";

	
	
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


	$tdatapolizas_tipo["poliza_type_id"] = $fdata;
		$tdatapolizas_tipo[".searchableFields"][] = "poliza_type_id";
//	poliza_type_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "poliza_type_name";
	$fdata["GoodName"] = "poliza_type_name";
	$fdata["ownerTable"] = "polizas_tipo";
	$fdata["Label"] = GetFieldLabel("polizas_tipo","poliza_type_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "poliza_type_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "poliza_type_name";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatapolizas_tipo["poliza_type_name"] = $fdata;
		$tdatapolizas_tipo[".searchableFields"][] = "poliza_type_name";


$tables_data["polizas_tipo"]=&$tdatapolizas_tipo;
$field_labels["polizas_tipo"] = &$fieldLabelspolizas_tipo;
$fieldToolTips["polizas_tipo"] = &$fieldToolTipspolizas_tipo;
$placeHolders["polizas_tipo"] = &$placeHolderspolizas_tipo;
$page_titles["polizas_tipo"] = &$pageTitlespolizas_tipo;


changeTextControlsToDate( "polizas_tipo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["polizas_tipo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["polizas_tipo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_polizas_tipo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "poliza_type_id,  	poliza_type_name";
$proto0["m_strFrom"] = "FROM polizas_tipo";
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
	"m_strName" => "poliza_type_id",
	"m_strTable" => "polizas_tipo",
	"m_srcTableName" => "polizas_tipo"
));

$proto6["m_sql"] = "poliza_type_id";
$proto6["m_srcTableName"] = "polizas_tipo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "poliza_type_name",
	"m_strTable" => "polizas_tipo",
	"m_srcTableName" => "polizas_tipo"
));

$proto8["m_sql"] = "poliza_type_name";
$proto8["m_srcTableName"] = "polizas_tipo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "polizas_tipo";
$proto11["m_srcTableName"] = "polizas_tipo";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "poliza_type_id";
$proto11["m_columns"][] = "poliza_type_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "polizas_tipo";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "polizas_tipo";
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
$proto0["m_srcTableName"]="polizas_tipo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_polizas_tipo = createSqlQuery_polizas_tipo();


	
								;

		

$tdatapolizas_tipo[".sqlquery"] = $queryData_polizas_tipo;



$tdatapolizas_tipo[".hasEvents"] = false;

?>