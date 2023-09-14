<?php
$tdatacontrato_forma_pago = array();
$tdatacontrato_forma_pago[".searchableFields"] = array();
$tdatacontrato_forma_pago[".ShortName"] = "contrato_forma_pago";
$tdatacontrato_forma_pago[".OwnerID"] = "";
$tdatacontrato_forma_pago[".OriginalTable"] = "contrato_forma_pago";


$tdatacontrato_forma_pago[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacontrato_forma_pago[".originalPagesByType"] = $tdatacontrato_forma_pago[".pagesByType"];
$tdatacontrato_forma_pago[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacontrato_forma_pago[".originalPages"] = $tdatacontrato_forma_pago[".pages"];
$tdatacontrato_forma_pago[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacontrato_forma_pago[".originalDefaultPages"] = $tdatacontrato_forma_pago[".defaultPages"];

//	field labels
$fieldLabelscontrato_forma_pago = array();
$fieldToolTipscontrato_forma_pago = array();
$pageTitlescontrato_forma_pago = array();
$placeHolderscontrato_forma_pago = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_forma_pago["Spanish"] = array();
	$fieldToolTipscontrato_forma_pago["Spanish"] = array();
	$placeHolderscontrato_forma_pago["Spanish"] = array();
	$pageTitlescontrato_forma_pago["Spanish"] = array();
	$fieldLabelscontrato_forma_pago["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipscontrato_forma_pago["Spanish"]["codigo"] = "";
	$placeHolderscontrato_forma_pago["Spanish"]["codigo"] = "";
	$fieldLabelscontrato_forma_pago["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipscontrato_forma_pago["Spanish"]["nombre"] = "";
	$placeHolderscontrato_forma_pago["Spanish"]["nombre"] = "";
	if (count($fieldToolTipscontrato_forma_pago["Spanish"]))
		$tdatacontrato_forma_pago[".isUseToolTips"] = true;
}


	$tdatacontrato_forma_pago[".NCSearch"] = true;



$tdatacontrato_forma_pago[".shortTableName"] = "contrato_forma_pago";
$tdatacontrato_forma_pago[".nSecOptions"] = 0;

$tdatacontrato_forma_pago[".mainTableOwnerID"] = "";
$tdatacontrato_forma_pago[".entityType"] = 0;
$tdatacontrato_forma_pago[".connId"] = "dbct_at_localhost";


$tdatacontrato_forma_pago[".strOriginalTableName"] = "contrato_forma_pago";

	



$tdatacontrato_forma_pago[".showAddInPopup"] = false;

$tdatacontrato_forma_pago[".showEditInPopup"] = false;

$tdatacontrato_forma_pago[".showViewInPopup"] = false;

$tdatacontrato_forma_pago[".listAjax"] = false;
//	temporary
//$tdatacontrato_forma_pago[".listAjax"] = false;

	$tdatacontrato_forma_pago[".audit"] = true;

	$tdatacontrato_forma_pago[".locking"] = true;


$pages = $tdatacontrato_forma_pago[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_forma_pago[".edit"] = true;
	$tdatacontrato_forma_pago[".afterEditAction"] = 1;
	$tdatacontrato_forma_pago[".closePopupAfterEdit"] = 1;
	$tdatacontrato_forma_pago[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_forma_pago[".add"] = true;
$tdatacontrato_forma_pago[".afterAddAction"] = 1;
$tdatacontrato_forma_pago[".closePopupAfterAdd"] = 1;
$tdatacontrato_forma_pago[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_forma_pago[".list"] = true;
}



$tdatacontrato_forma_pago[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_forma_pago[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_forma_pago[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_forma_pago[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_forma_pago[".printFriendly"] = true;
}



$tdatacontrato_forma_pago[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_forma_pago[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_forma_pago[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_forma_pago[".isUseAjaxSuggest"] = true;





$tdatacontrato_forma_pago[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_forma_pago[".buttonsAdded"] = false;

$tdatacontrato_forma_pago[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_forma_pago[".isUseTimeForSearch"] = false;


$tdatacontrato_forma_pago[".badgeColor"] = "5F9EA0";


$tdatacontrato_forma_pago[".allSearchFields"] = array();
$tdatacontrato_forma_pago[".filterFields"] = array();
$tdatacontrato_forma_pago[".requiredSearchFields"] = array();

$tdatacontrato_forma_pago[".googleLikeFields"] = array();
$tdatacontrato_forma_pago[".googleLikeFields"][] = "codigo";
$tdatacontrato_forma_pago[".googleLikeFields"][] = "nombre";



$tdatacontrato_forma_pago[".tableType"] = "list";

$tdatacontrato_forma_pago[".printerPageOrientation"] = 0;
$tdatacontrato_forma_pago[".nPrinterPageScale"] = 100;

$tdatacontrato_forma_pago[".nPrinterSplitRecords"] = 40;

$tdatacontrato_forma_pago[".geocodingEnabled"] = false;










$tdatacontrato_forma_pago[".pageSize"] = 20;

$tdatacontrato_forma_pago[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontrato_forma_pago[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_forma_pago[".orderindexes"] = array();


$tdatacontrato_forma_pago[".sqlHead"] = "SELECT codigo,  	nombre";
$tdatacontrato_forma_pago[".sqlFrom"] = "FROM contrato_forma_pago";
$tdatacontrato_forma_pago[".sqlWhereExpr"] = "";
$tdatacontrato_forma_pago[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_forma_pago[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_forma_pago[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_forma_pago[".highlightSearchResults"] = true;

$tableKeyscontrato_forma_pago = array();
$tableKeyscontrato_forma_pago[] = "codigo";
$tdatacontrato_forma_pago[".Keys"] = $tableKeyscontrato_forma_pago;


$tdatacontrato_forma_pago[".hideMobileList"] = array();




//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "contrato_forma_pago";
	$fdata["Label"] = GetFieldLabel("contrato_forma_pago","codigo");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatacontrato_forma_pago["codigo"] = $fdata;
		$tdatacontrato_forma_pago[".searchableFields"][] = "codigo";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "contrato_forma_pago";
	$fdata["Label"] = GetFieldLabel("contrato_forma_pago","nombre");
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatacontrato_forma_pago["nombre"] = $fdata;
		$tdatacontrato_forma_pago[".searchableFields"][] = "nombre";


$tables_data["contrato_forma_pago"]=&$tdatacontrato_forma_pago;
$field_labels["contrato_forma_pago"] = &$fieldLabelscontrato_forma_pago;
$fieldToolTips["contrato_forma_pago"] = &$fieldToolTipscontrato_forma_pago;
$placeHolders["contrato_forma_pago"] = &$placeHolderscontrato_forma_pago;
$page_titles["contrato_forma_pago"] = &$pageTitlescontrato_forma_pago;


changeTextControlsToDate( "contrato_forma_pago" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contrato_forma_pago"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contrato_forma_pago"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contrato_forma_pago()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "codigo,  	nombre";
$proto0["m_strFrom"] = "FROM contrato_forma_pago";
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
	"m_strTable" => "contrato_forma_pago",
	"m_srcTableName" => "contrato_forma_pago"
));

$proto6["m_sql"] = "codigo";
$proto6["m_srcTableName"] = "contrato_forma_pago";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "contrato_forma_pago",
	"m_srcTableName" => "contrato_forma_pago"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "contrato_forma_pago";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "contrato_forma_pago";
$proto11["m_srcTableName"] = "contrato_forma_pago";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "codigo";
$proto11["m_columns"][] = "nombre";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "contrato_forma_pago";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "contrato_forma_pago";
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
$proto0["m_srcTableName"]="contrato_forma_pago";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_forma_pago = createSqlQuery_contrato_forma_pago();


	
								;

		

$tdatacontrato_forma_pago[".sqlquery"] = $queryData_contrato_forma_pago;



$tdatacontrato_forma_pago[".hasEvents"] = false;

?>