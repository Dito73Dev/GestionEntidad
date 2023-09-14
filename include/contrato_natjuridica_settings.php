<?php
$tdatacontrato_natjuridica = array();
$tdatacontrato_natjuridica[".searchableFields"] = array();
$tdatacontrato_natjuridica[".ShortName"] = "contrato_natjuridica";
$tdatacontrato_natjuridica[".OwnerID"] = "";
$tdatacontrato_natjuridica[".OriginalTable"] = "contrato_natjuridica";


$tdatacontrato_natjuridica[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacontrato_natjuridica[".originalPagesByType"] = $tdatacontrato_natjuridica[".pagesByType"];
$tdatacontrato_natjuridica[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacontrato_natjuridica[".originalPages"] = $tdatacontrato_natjuridica[".pages"];
$tdatacontrato_natjuridica[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacontrato_natjuridica[".originalDefaultPages"] = $tdatacontrato_natjuridica[".defaultPages"];

//	field labels
$fieldLabelscontrato_natjuridica = array();
$fieldToolTipscontrato_natjuridica = array();
$pageTitlescontrato_natjuridica = array();
$placeHolderscontrato_natjuridica = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_natjuridica["Spanish"] = array();
	$fieldToolTipscontrato_natjuridica["Spanish"] = array();
	$placeHolderscontrato_natjuridica["Spanish"] = array();
	$pageTitlescontrato_natjuridica["Spanish"] = array();
	$fieldLabelscontrato_natjuridica["Spanish"]["nat_numero"] = "Código";
	$fieldToolTipscontrato_natjuridica["Spanish"]["nat_numero"] = "";
	$placeHolderscontrato_natjuridica["Spanish"]["nat_numero"] = "";
	$fieldLabelscontrato_natjuridica["Spanish"]["des_naturaleza"] = "Naturaleza";
	$fieldToolTipscontrato_natjuridica["Spanish"]["des_naturaleza"] = "";
	$placeHolderscontrato_natjuridica["Spanish"]["des_naturaleza"] = "";
	if (count($fieldToolTipscontrato_natjuridica["Spanish"]))
		$tdatacontrato_natjuridica[".isUseToolTips"] = true;
}


	$tdatacontrato_natjuridica[".NCSearch"] = true;



$tdatacontrato_natjuridica[".shortTableName"] = "contrato_natjuridica";
$tdatacontrato_natjuridica[".nSecOptions"] = 0;

$tdatacontrato_natjuridica[".mainTableOwnerID"] = "";
$tdatacontrato_natjuridica[".entityType"] = 0;
$tdatacontrato_natjuridica[".connId"] = "dbct_at_localhost";


$tdatacontrato_natjuridica[".strOriginalTableName"] = "contrato_natjuridica";

	



$tdatacontrato_natjuridica[".showAddInPopup"] = false;

$tdatacontrato_natjuridica[".showEditInPopup"] = false;

$tdatacontrato_natjuridica[".showViewInPopup"] = false;

$tdatacontrato_natjuridica[".listAjax"] = false;
//	temporary
//$tdatacontrato_natjuridica[".listAjax"] = false;

	$tdatacontrato_natjuridica[".audit"] = true;

	$tdatacontrato_natjuridica[".locking"] = true;


$pages = $tdatacontrato_natjuridica[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_natjuridica[".edit"] = true;
	$tdatacontrato_natjuridica[".afterEditAction"] = 1;
	$tdatacontrato_natjuridica[".closePopupAfterEdit"] = 1;
	$tdatacontrato_natjuridica[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_natjuridica[".add"] = true;
$tdatacontrato_natjuridica[".afterAddAction"] = 1;
$tdatacontrato_natjuridica[".closePopupAfterAdd"] = 1;
$tdatacontrato_natjuridica[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_natjuridica[".list"] = true;
}



$tdatacontrato_natjuridica[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_natjuridica[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_natjuridica[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_natjuridica[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_natjuridica[".printFriendly"] = true;
}



$tdatacontrato_natjuridica[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_natjuridica[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_natjuridica[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_natjuridica[".isUseAjaxSuggest"] = true;





$tdatacontrato_natjuridica[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_natjuridica[".buttonsAdded"] = false;

$tdatacontrato_natjuridica[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_natjuridica[".isUseTimeForSearch"] = false;


$tdatacontrato_natjuridica[".badgeColor"] = "008B8B";


$tdatacontrato_natjuridica[".allSearchFields"] = array();
$tdatacontrato_natjuridica[".filterFields"] = array();
$tdatacontrato_natjuridica[".requiredSearchFields"] = array();

$tdatacontrato_natjuridica[".googleLikeFields"] = array();
$tdatacontrato_natjuridica[".googleLikeFields"][] = "des_naturaleza";
$tdatacontrato_natjuridica[".googleLikeFields"][] = "nat_numero";



$tdatacontrato_natjuridica[".tableType"] = "list";

$tdatacontrato_natjuridica[".printerPageOrientation"] = 0;
$tdatacontrato_natjuridica[".nPrinterPageScale"] = 100;

$tdatacontrato_natjuridica[".nPrinterSplitRecords"] = 40;

$tdatacontrato_natjuridica[".geocodingEnabled"] = false;










$tdatacontrato_natjuridica[".pageSize"] = 20;

$tdatacontrato_natjuridica[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontrato_natjuridica[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_natjuridica[".orderindexes"] = array();


$tdatacontrato_natjuridica[".sqlHead"] = "SELECT des_naturaleza,  	nat_numero";
$tdatacontrato_natjuridica[".sqlFrom"] = "FROM contrato_natjuridica";
$tdatacontrato_natjuridica[".sqlWhereExpr"] = "";
$tdatacontrato_natjuridica[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_natjuridica[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_natjuridica[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_natjuridica[".highlightSearchResults"] = true;

$tableKeyscontrato_natjuridica = array();
$tableKeyscontrato_natjuridica[] = "nat_numero";
$tdatacontrato_natjuridica[".Keys"] = $tableKeyscontrato_natjuridica;


$tdatacontrato_natjuridica[".hideMobileList"] = array();




//	des_naturaleza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "des_naturaleza";
	$fdata["GoodName"] = "des_naturaleza";
	$fdata["ownerTable"] = "contrato_natjuridica";
	$fdata["Label"] = GetFieldLabel("contrato_natjuridica","des_naturaleza");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "des_naturaleza";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "des_naturaleza";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdatacontrato_natjuridica["des_naturaleza"] = $fdata;
		$tdatacontrato_natjuridica[".searchableFields"][] = "des_naturaleza";
//	nat_numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nat_numero";
	$fdata["GoodName"] = "nat_numero";
	$fdata["ownerTable"] = "contrato_natjuridica";
	$fdata["Label"] = GetFieldLabel("contrato_natjuridica","nat_numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nat_numero";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nat_numero";

	
	
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


	$tdatacontrato_natjuridica["nat_numero"] = $fdata;
		$tdatacontrato_natjuridica[".searchableFields"][] = "nat_numero";


$tables_data["contrato_natjuridica"]=&$tdatacontrato_natjuridica;
$field_labels["contrato_natjuridica"] = &$fieldLabelscontrato_natjuridica;
$fieldToolTips["contrato_natjuridica"] = &$fieldToolTipscontrato_natjuridica;
$placeHolders["contrato_natjuridica"] = &$placeHolderscontrato_natjuridica;
$page_titles["contrato_natjuridica"] = &$pageTitlescontrato_natjuridica;


changeTextControlsToDate( "contrato_natjuridica" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contrato_natjuridica"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contrato_natjuridica"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contrato_natjuridica()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "des_naturaleza,  	nat_numero";
$proto0["m_strFrom"] = "FROM contrato_natjuridica";
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
	"m_strName" => "des_naturaleza",
	"m_strTable" => "contrato_natjuridica",
	"m_srcTableName" => "contrato_natjuridica"
));

$proto6["m_sql"] = "des_naturaleza";
$proto6["m_srcTableName"] = "contrato_natjuridica";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nat_numero",
	"m_strTable" => "contrato_natjuridica",
	"m_srcTableName" => "contrato_natjuridica"
));

$proto8["m_sql"] = "nat_numero";
$proto8["m_srcTableName"] = "contrato_natjuridica";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "contrato_natjuridica";
$proto11["m_srcTableName"] = "contrato_natjuridica";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "des_naturaleza";
$proto11["m_columns"][] = "nat_numero";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "contrato_natjuridica";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "contrato_natjuridica";
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
$proto0["m_srcTableName"]="contrato_natjuridica";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_natjuridica = createSqlQuery_contrato_natjuridica();


	
								;

		

$tdatacontrato_natjuridica[".sqlquery"] = $queryData_contrato_natjuridica;



$tdatacontrato_natjuridica[".hasEvents"] = false;

?>