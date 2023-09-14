<?php
$tdatapolizas_aseguradoras = array();
$tdatapolizas_aseguradoras[".searchableFields"] = array();
$tdatapolizas_aseguradoras[".ShortName"] = "polizas_aseguradoras";
$tdatapolizas_aseguradoras[".OwnerID"] = "";
$tdatapolizas_aseguradoras[".OriginalTable"] = "polizas_aseguradoras";


$tdatapolizas_aseguradoras[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapolizas_aseguradoras[".originalPagesByType"] = $tdatapolizas_aseguradoras[".pagesByType"];
$tdatapolizas_aseguradoras[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapolizas_aseguradoras[".originalPages"] = $tdatapolizas_aseguradoras[".pages"];
$tdatapolizas_aseguradoras[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapolizas_aseguradoras[".originalDefaultPages"] = $tdatapolizas_aseguradoras[".defaultPages"];

//	field labels
$fieldLabelspolizas_aseguradoras = array();
$fieldToolTipspolizas_aseguradoras = array();
$pageTitlespolizas_aseguradoras = array();
$placeHolderspolizas_aseguradoras = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspolizas_aseguradoras["Spanish"] = array();
	$fieldToolTipspolizas_aseguradoras["Spanish"] = array();
	$placeHolderspolizas_aseguradoras["Spanish"] = array();
	$pageTitlespolizas_aseguradoras["Spanish"] = array();
	$fieldLabelspolizas_aseguradoras["Spanish"]["aseguradora_id"] = "Código";
	$fieldToolTipspolizas_aseguradoras["Spanish"]["aseguradora_id"] = "";
	$placeHolderspolizas_aseguradoras["Spanish"]["aseguradora_id"] = "";
	$fieldLabelspolizas_aseguradoras["Spanish"]["codigo"] = "Codigo";
	$fieldToolTipspolizas_aseguradoras["Spanish"]["codigo"] = "";
	$placeHolderspolizas_aseguradoras["Spanish"]["codigo"] = "";
	$fieldLabelspolizas_aseguradoras["Spanish"]["nom_aseguradora"] = "Aseguradora";
	$fieldToolTipspolizas_aseguradoras["Spanish"]["nom_aseguradora"] = "";
	$placeHolderspolizas_aseguradoras["Spanish"]["nom_aseguradora"] = "";
	if (count($fieldToolTipspolizas_aseguradoras["Spanish"]))
		$tdatapolizas_aseguradoras[".isUseToolTips"] = true;
}


	$tdatapolizas_aseguradoras[".NCSearch"] = true;



$tdatapolizas_aseguradoras[".shortTableName"] = "polizas_aseguradoras";
$tdatapolizas_aseguradoras[".nSecOptions"] = 0;

$tdatapolizas_aseguradoras[".mainTableOwnerID"] = "";
$tdatapolizas_aseguradoras[".entityType"] = 0;
$tdatapolizas_aseguradoras[".connId"] = "dbct_at_localhost";


$tdatapolizas_aseguradoras[".strOriginalTableName"] = "polizas_aseguradoras";

	



$tdatapolizas_aseguradoras[".showAddInPopup"] = false;

$tdatapolizas_aseguradoras[".showEditInPopup"] = false;

$tdatapolizas_aseguradoras[".showViewInPopup"] = false;

$tdatapolizas_aseguradoras[".listAjax"] = false;
//	temporary
//$tdatapolizas_aseguradoras[".listAjax"] = false;

	$tdatapolizas_aseguradoras[".audit"] = true;

	$tdatapolizas_aseguradoras[".locking"] = true;


$pages = $tdatapolizas_aseguradoras[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapolizas_aseguradoras[".edit"] = true;
	$tdatapolizas_aseguradoras[".afterEditAction"] = 1;
	$tdatapolizas_aseguradoras[".closePopupAfterEdit"] = 1;
	$tdatapolizas_aseguradoras[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapolizas_aseguradoras[".add"] = true;
$tdatapolizas_aseguradoras[".afterAddAction"] = 1;
$tdatapolizas_aseguradoras[".closePopupAfterAdd"] = 1;
$tdatapolizas_aseguradoras[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapolizas_aseguradoras[".list"] = true;
}



$tdatapolizas_aseguradoras[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapolizas_aseguradoras[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapolizas_aseguradoras[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapolizas_aseguradoras[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapolizas_aseguradoras[".printFriendly"] = true;
}



$tdatapolizas_aseguradoras[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapolizas_aseguradoras[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapolizas_aseguradoras[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapolizas_aseguradoras[".isUseAjaxSuggest"] = true;





$tdatapolizas_aseguradoras[".ajaxCodeSnippetAdded"] = false;

$tdatapolizas_aseguradoras[".buttonsAdded"] = false;

$tdatapolizas_aseguradoras[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapolizas_aseguradoras[".isUseTimeForSearch"] = false;


$tdatapolizas_aseguradoras[".badgeColor"] = "008B8B";


$tdatapolizas_aseguradoras[".allSearchFields"] = array();
$tdatapolizas_aseguradoras[".filterFields"] = array();
$tdatapolizas_aseguradoras[".requiredSearchFields"] = array();

$tdatapolizas_aseguradoras[".googleLikeFields"] = array();
$tdatapolizas_aseguradoras[".googleLikeFields"][] = "aseguradora_id";
$tdatapolizas_aseguradoras[".googleLikeFields"][] = "codigo";
$tdatapolizas_aseguradoras[".googleLikeFields"][] = "nom_aseguradora";



$tdatapolizas_aseguradoras[".tableType"] = "list";

$tdatapolizas_aseguradoras[".printerPageOrientation"] = 0;
$tdatapolizas_aseguradoras[".nPrinterPageScale"] = 100;

$tdatapolizas_aseguradoras[".nPrinterSplitRecords"] = 40;

$tdatapolizas_aseguradoras[".geocodingEnabled"] = false;










$tdatapolizas_aseguradoras[".pageSize"] = 20;

$tdatapolizas_aseguradoras[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapolizas_aseguradoras[".strOrderBy"] = $tstrOrderBy;

$tdatapolizas_aseguradoras[".orderindexes"] = array();


$tdatapolizas_aseguradoras[".sqlHead"] = "SELECT aseguradora_id,  	codigo,  	nom_aseguradora";
$tdatapolizas_aseguradoras[".sqlFrom"] = "FROM polizas_aseguradoras";
$tdatapolizas_aseguradoras[".sqlWhereExpr"] = "";
$tdatapolizas_aseguradoras[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapolizas_aseguradoras[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapolizas_aseguradoras[".arrGroupsPerPage"] = $arrGPP;

$tdatapolizas_aseguradoras[".highlightSearchResults"] = true;

$tableKeyspolizas_aseguradoras = array();
$tableKeyspolizas_aseguradoras[] = "aseguradora_id";
$tdatapolizas_aseguradoras[".Keys"] = $tableKeyspolizas_aseguradoras;


$tdatapolizas_aseguradoras[".hideMobileList"] = array();




//	aseguradora_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aseguradora_id";
	$fdata["GoodName"] = "aseguradora_id";
	$fdata["ownerTable"] = "polizas_aseguradoras";
	$fdata["Label"] = GetFieldLabel("polizas_aseguradoras","aseguradora_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "aseguradora_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aseguradora_id";

	
	
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


	$tdatapolizas_aseguradoras["aseguradora_id"] = $fdata;
		$tdatapolizas_aseguradoras[".searchableFields"][] = "aseguradora_id";
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "polizas_aseguradoras";
	$fdata["Label"] = GetFieldLabel("polizas_aseguradoras","codigo");
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdatapolizas_aseguradoras["codigo"] = $fdata;
		$tdatapolizas_aseguradoras[".searchableFields"][] = "codigo";
//	nom_aseguradora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nom_aseguradora";
	$fdata["GoodName"] = "nom_aseguradora";
	$fdata["ownerTable"] = "polizas_aseguradoras";
	$fdata["Label"] = GetFieldLabel("polizas_aseguradoras","nom_aseguradora");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom_aseguradora";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_aseguradora";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdatapolizas_aseguradoras["nom_aseguradora"] = $fdata;
		$tdatapolizas_aseguradoras[".searchableFields"][] = "nom_aseguradora";


$tables_data["polizas_aseguradoras"]=&$tdatapolizas_aseguradoras;
$field_labels["polizas_aseguradoras"] = &$fieldLabelspolizas_aseguradoras;
$fieldToolTips["polizas_aseguradoras"] = &$fieldToolTipspolizas_aseguradoras;
$placeHolders["polizas_aseguradoras"] = &$placeHolderspolizas_aseguradoras;
$page_titles["polizas_aseguradoras"] = &$pageTitlespolizas_aseguradoras;


changeTextControlsToDate( "polizas_aseguradoras" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["polizas_aseguradoras"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["polizas_aseguradoras"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_polizas_aseguradoras()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "aseguradora_id,  	codigo,  	nom_aseguradora";
$proto0["m_strFrom"] = "FROM polizas_aseguradoras";
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
	"m_strName" => "aseguradora_id",
	"m_strTable" => "polizas_aseguradoras",
	"m_srcTableName" => "polizas_aseguradoras"
));

$proto6["m_sql"] = "aseguradora_id";
$proto6["m_srcTableName"] = "polizas_aseguradoras";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "polizas_aseguradoras",
	"m_srcTableName" => "polizas_aseguradoras"
));

$proto8["m_sql"] = "codigo";
$proto8["m_srcTableName"] = "polizas_aseguradoras";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_aseguradora",
	"m_strTable" => "polizas_aseguradoras",
	"m_srcTableName" => "polizas_aseguradoras"
));

$proto10["m_sql"] = "nom_aseguradora";
$proto10["m_srcTableName"] = "polizas_aseguradoras";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "polizas_aseguradoras";
$proto13["m_srcTableName"] = "polizas_aseguradoras";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "aseguradora_id";
$proto13["m_columns"][] = "codigo";
$proto13["m_columns"][] = "nom_aseguradora";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "polizas_aseguradoras";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "polizas_aseguradoras";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="polizas_aseguradoras";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_polizas_aseguradoras = createSqlQuery_polizas_aseguradoras();


	
								;

			

$tdatapolizas_aseguradoras[".sqlquery"] = $queryData_polizas_aseguradoras;



$tdatapolizas_aseguradoras[".hasEvents"] = false;

?>