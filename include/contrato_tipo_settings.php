<?php
$tdatacontrato_tipo = array();
$tdatacontrato_tipo[".searchableFields"] = array();
$tdatacontrato_tipo[".ShortName"] = "contrato_tipo";
$tdatacontrato_tipo[".OwnerID"] = "";
$tdatacontrato_tipo[".OriginalTable"] = "contrato_tipo";


$tdatacontrato_tipo[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacontrato_tipo[".originalPagesByType"] = $tdatacontrato_tipo[".pagesByType"];
$tdatacontrato_tipo[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacontrato_tipo[".originalPages"] = $tdatacontrato_tipo[".pages"];
$tdatacontrato_tipo[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacontrato_tipo[".originalDefaultPages"] = $tdatacontrato_tipo[".defaultPages"];

//	field labels
$fieldLabelscontrato_tipo = array();
$fieldToolTipscontrato_tipo = array();
$pageTitlescontrato_tipo = array();
$placeHolderscontrato_tipo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_tipo["Spanish"] = array();
	$fieldToolTipscontrato_tipo["Spanish"] = array();
	$placeHolderscontrato_tipo["Spanish"] = array();
	$pageTitlescontrato_tipo["Spanish"] = array();
	$fieldLabelscontrato_tipo["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipscontrato_tipo["Spanish"]["codigo"] = "";
	$placeHolderscontrato_tipo["Spanish"]["codigo"] = "";
	$fieldLabelscontrato_tipo["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipscontrato_tipo["Spanish"]["nombre"] = "";
	$placeHolderscontrato_tipo["Spanish"]["nombre"] = "";
	if (count($fieldToolTipscontrato_tipo["Spanish"]))
		$tdatacontrato_tipo[".isUseToolTips"] = true;
}


	$tdatacontrato_tipo[".NCSearch"] = true;



$tdatacontrato_tipo[".shortTableName"] = "contrato_tipo";
$tdatacontrato_tipo[".nSecOptions"] = 0;

$tdatacontrato_tipo[".mainTableOwnerID"] = "";
$tdatacontrato_tipo[".entityType"] = 0;
$tdatacontrato_tipo[".connId"] = "dbct_at_localhost";


$tdatacontrato_tipo[".strOriginalTableName"] = "contrato_tipo";

	



$tdatacontrato_tipo[".showAddInPopup"] = false;

$tdatacontrato_tipo[".showEditInPopup"] = false;

$tdatacontrato_tipo[".showViewInPopup"] = false;

$tdatacontrato_tipo[".listAjax"] = false;
//	temporary
//$tdatacontrato_tipo[".listAjax"] = false;

	$tdatacontrato_tipo[".audit"] = true;

	$tdatacontrato_tipo[".locking"] = true;


$pages = $tdatacontrato_tipo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_tipo[".edit"] = true;
	$tdatacontrato_tipo[".afterEditAction"] = 1;
	$tdatacontrato_tipo[".closePopupAfterEdit"] = 1;
	$tdatacontrato_tipo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_tipo[".add"] = true;
$tdatacontrato_tipo[".afterAddAction"] = 1;
$tdatacontrato_tipo[".closePopupAfterAdd"] = 1;
$tdatacontrato_tipo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_tipo[".list"] = true;
}



$tdatacontrato_tipo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_tipo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_tipo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_tipo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_tipo[".printFriendly"] = true;
}



$tdatacontrato_tipo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_tipo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_tipo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_tipo[".isUseAjaxSuggest"] = true;





$tdatacontrato_tipo[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_tipo[".buttonsAdded"] = false;

$tdatacontrato_tipo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_tipo[".isUseTimeForSearch"] = false;


$tdatacontrato_tipo[".badgeColor"] = "BC8F8F";


$tdatacontrato_tipo[".allSearchFields"] = array();
$tdatacontrato_tipo[".filterFields"] = array();
$tdatacontrato_tipo[".requiredSearchFields"] = array();

$tdatacontrato_tipo[".googleLikeFields"] = array();
$tdatacontrato_tipo[".googleLikeFields"][] = "codigo";
$tdatacontrato_tipo[".googleLikeFields"][] = "nombre";



$tdatacontrato_tipo[".tableType"] = "list";

$tdatacontrato_tipo[".printerPageOrientation"] = 0;
$tdatacontrato_tipo[".nPrinterPageScale"] = 100;

$tdatacontrato_tipo[".nPrinterSplitRecords"] = 40;

$tdatacontrato_tipo[".geocodingEnabled"] = false;










$tdatacontrato_tipo[".pageSize"] = 20;

$tdatacontrato_tipo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontrato_tipo[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_tipo[".orderindexes"] = array();


$tdatacontrato_tipo[".sqlHead"] = "SELECT codigo,  	nombre";
$tdatacontrato_tipo[".sqlFrom"] = "FROM contrato_tipo";
$tdatacontrato_tipo[".sqlWhereExpr"] = "";
$tdatacontrato_tipo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_tipo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_tipo[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_tipo[".highlightSearchResults"] = true;

$tableKeyscontrato_tipo = array();
$tableKeyscontrato_tipo[] = "codigo";
$tdatacontrato_tipo[".Keys"] = $tableKeyscontrato_tipo;


$tdatacontrato_tipo[".hideMobileList"] = array();




//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "contrato_tipo";
	$fdata["Label"] = GetFieldLabel("contrato_tipo","codigo");
	$fdata["FieldType"] = 16;


	
	
			

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
			$edata["EditParams"].= " maxlength=1";

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


	$tdatacontrato_tipo["codigo"] = $fdata;
		$tdatacontrato_tipo[".searchableFields"][] = "codigo";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "contrato_tipo";
	$fdata["Label"] = GetFieldLabel("contrato_tipo","nombre");
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatacontrato_tipo["nombre"] = $fdata;
		$tdatacontrato_tipo[".searchableFields"][] = "nombre";


$tables_data["contrato_tipo"]=&$tdatacontrato_tipo;
$field_labels["contrato_tipo"] = &$fieldLabelscontrato_tipo;
$fieldToolTips["contrato_tipo"] = &$fieldToolTipscontrato_tipo;
$placeHolders["contrato_tipo"] = &$placeHolderscontrato_tipo;
$page_titles["contrato_tipo"] = &$pageTitlescontrato_tipo;


changeTextControlsToDate( "contrato_tipo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contrato_tipo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contrato_tipo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contrato_tipo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "codigo,  	nombre";
$proto0["m_strFrom"] = "FROM contrato_tipo";
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
	"m_strTable" => "contrato_tipo",
	"m_srcTableName" => "contrato_tipo"
));

$proto6["m_sql"] = "codigo";
$proto6["m_srcTableName"] = "contrato_tipo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "contrato_tipo",
	"m_srcTableName" => "contrato_tipo"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "contrato_tipo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "contrato_tipo";
$proto11["m_srcTableName"] = "contrato_tipo";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "codigo";
$proto11["m_columns"][] = "nombre";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "contrato_tipo";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "contrato_tipo";
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
$proto0["m_srcTableName"]="contrato_tipo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_tipo = createSqlQuery_contrato_tipo();


	
								;

		

$tdatacontrato_tipo[".sqlquery"] = $queryData_contrato_tipo;



$tdatacontrato_tipo[".hasEvents"] = false;

?>