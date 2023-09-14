<?php
$tdatacontrato_estados = array();
$tdatacontrato_estados[".searchableFields"] = array();
$tdatacontrato_estados[".ShortName"] = "contrato_estados";
$tdatacontrato_estados[".OwnerID"] = "";
$tdatacontrato_estados[".OriginalTable"] = "contrato_estados";


$tdatacontrato_estados[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_estados[".originalPagesByType"] = $tdatacontrato_estados[".pagesByType"];
$tdatacontrato_estados[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_estados[".originalPages"] = $tdatacontrato_estados[".pages"];
$tdatacontrato_estados[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_estados[".originalDefaultPages"] = $tdatacontrato_estados[".defaultPages"];

//	field labels
$fieldLabelscontrato_estados = array();
$fieldToolTipscontrato_estados = array();
$pageTitlescontrato_estados = array();
$placeHolderscontrato_estados = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_estados["Spanish"] = array();
	$fieldToolTipscontrato_estados["Spanish"] = array();
	$placeHolderscontrato_estados["Spanish"] = array();
	$pageTitlescontrato_estados["Spanish"] = array();
	$fieldLabelscontrato_estados["Spanish"]["estado_id"] = "Estado Id";
	$fieldToolTipscontrato_estados["Spanish"]["estado_id"] = "";
	$placeHolderscontrato_estados["Spanish"]["estado_id"] = "";
	$fieldLabelscontrato_estados["Spanish"]["estado_nombre"] = "Estado Nombre";
	$fieldToolTipscontrato_estados["Spanish"]["estado_nombre"] = "";
	$placeHolderscontrato_estados["Spanish"]["estado_nombre"] = "";
	if (count($fieldToolTipscontrato_estados["Spanish"]))
		$tdatacontrato_estados[".isUseToolTips"] = true;
}


	$tdatacontrato_estados[".NCSearch"] = true;



$tdatacontrato_estados[".shortTableName"] = "contrato_estados";
$tdatacontrato_estados[".nSecOptions"] = 0;

$tdatacontrato_estados[".mainTableOwnerID"] = "";
$tdatacontrato_estados[".entityType"] = 0;
$tdatacontrato_estados[".connId"] = "dbct_at_localhost";


$tdatacontrato_estados[".strOriginalTableName"] = "contrato_estados";

	



$tdatacontrato_estados[".showAddInPopup"] = false;

$tdatacontrato_estados[".showEditInPopup"] = false;

$tdatacontrato_estados[".showViewInPopup"] = false;

$tdatacontrato_estados[".listAjax"] = false;
//	temporary
//$tdatacontrato_estados[".listAjax"] = false;

	$tdatacontrato_estados[".audit"] = true;

	$tdatacontrato_estados[".locking"] = true;


$pages = $tdatacontrato_estados[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_estados[".edit"] = true;
	$tdatacontrato_estados[".afterEditAction"] = 1;
	$tdatacontrato_estados[".closePopupAfterEdit"] = 1;
	$tdatacontrato_estados[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_estados[".add"] = true;
$tdatacontrato_estados[".afterAddAction"] = 1;
$tdatacontrato_estados[".closePopupAfterAdd"] = 1;
$tdatacontrato_estados[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_estados[".list"] = true;
}



$tdatacontrato_estados[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_estados[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_estados[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_estados[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_estados[".printFriendly"] = true;
}



$tdatacontrato_estados[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_estados[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_estados[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_estados[".isUseAjaxSuggest"] = true;





$tdatacontrato_estados[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_estados[".buttonsAdded"] = false;

$tdatacontrato_estados[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_estados[".isUseTimeForSearch"] = false;


$tdatacontrato_estados[".badgeColor"] = "E07878";


$tdatacontrato_estados[".allSearchFields"] = array();
$tdatacontrato_estados[".filterFields"] = array();
$tdatacontrato_estados[".requiredSearchFields"] = array();

$tdatacontrato_estados[".googleLikeFields"] = array();
$tdatacontrato_estados[".googleLikeFields"][] = "estado_id";
$tdatacontrato_estados[".googleLikeFields"][] = "estado_nombre";



$tdatacontrato_estados[".tableType"] = "list";

$tdatacontrato_estados[".printerPageOrientation"] = 0;
$tdatacontrato_estados[".nPrinterPageScale"] = 100;

$tdatacontrato_estados[".nPrinterSplitRecords"] = 40;

$tdatacontrato_estados[".geocodingEnabled"] = false;










$tdatacontrato_estados[".pageSize"] = 20;

$tdatacontrato_estados[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontrato_estados[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_estados[".orderindexes"] = array();


$tdatacontrato_estados[".sqlHead"] = "SELECT estado_id, estado_nombre";
$tdatacontrato_estados[".sqlFrom"] = "FROM contrato_estados";
$tdatacontrato_estados[".sqlWhereExpr"] = "";
$tdatacontrato_estados[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_estados[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_estados[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_estados[".highlightSearchResults"] = true;

$tableKeyscontrato_estados = array();
$tableKeyscontrato_estados[] = "estado_id";
$tdatacontrato_estados[".Keys"] = $tableKeyscontrato_estados;


$tdatacontrato_estados[".hideMobileList"] = array();




//	estado_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "estado_id";
	$fdata["GoodName"] = "estado_id";
	$fdata["ownerTable"] = "contrato_estados";
	$fdata["Label"] = GetFieldLabel("contrato_estados","estado_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatacontrato_estados["estado_id"] = $fdata;
		$tdatacontrato_estados[".searchableFields"][] = "estado_id";
//	estado_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estado_nombre";
	$fdata["GoodName"] = "estado_nombre";
	$fdata["ownerTable"] = "contrato_estados";
	$fdata["Label"] = GetFieldLabel("contrato_estados","estado_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado_nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_nombre";

	
	
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


	$tdatacontrato_estados["estado_nombre"] = $fdata;
		$tdatacontrato_estados[".searchableFields"][] = "estado_nombre";


$tables_data["contrato_estados"]=&$tdatacontrato_estados;
$field_labels["contrato_estados"] = &$fieldLabelscontrato_estados;
$fieldToolTips["contrato_estados"] = &$fieldToolTipscontrato_estados;
$placeHolders["contrato_estados"] = &$placeHolderscontrato_estados;
$page_titles["contrato_estados"] = &$pageTitlescontrato_estados;


changeTextControlsToDate( "contrato_estados" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contrato_estados"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contrato_estados"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contrato_estados()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "estado_id, estado_nombre";
$proto0["m_strFrom"] = "FROM contrato_estados";
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
	"m_strTable" => "contrato_estados",
	"m_srcTableName" => "contrato_estados"
));

$proto6["m_sql"] = "estado_id";
$proto6["m_srcTableName"] = "contrato_estados";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_nombre",
	"m_strTable" => "contrato_estados",
	"m_srcTableName" => "contrato_estados"
));

$proto8["m_sql"] = "estado_nombre";
$proto8["m_srcTableName"] = "contrato_estados";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "contrato_estados";
$proto11["m_srcTableName"] = "contrato_estados";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "estado_id";
$proto11["m_columns"][] = "estado_img";
$proto11["m_columns"][] = "estado_lnk";
$proto11["m_columns"][] = "estado_nombre";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "contrato_estados";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "contrato_estados";
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
$proto0["m_srcTableName"]="contrato_estados";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_estados = createSqlQuery_contrato_estados();


	
								;

		

$tdatacontrato_estados[".sqlquery"] = $queryData_contrato_estados;



$tdatacontrato_estados[".hasEvents"] = false;

?>