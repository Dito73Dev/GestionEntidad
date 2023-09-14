<?php
$tdatatparam_tiporubro = array();
$tdatatparam_tiporubro[".searchableFields"] = array();
$tdatatparam_tiporubro[".ShortName"] = "tparam_tiporubro";
$tdatatparam_tiporubro[".OwnerID"] = "";
$tdatatparam_tiporubro[".OriginalTable"] = "tparam_tiporubro";


$tdatatparam_tiporubro[".pagesByType"] = my_json_decode( "{}" );
$tdatatparam_tiporubro[".originalPagesByType"] = $tdatatparam_tiporubro[".pagesByType"];
$tdatatparam_tiporubro[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatparam_tiporubro[".originalPages"] = $tdatatparam_tiporubro[".pages"];
$tdatatparam_tiporubro[".defaultPages"] = my_json_decode( "{}" );
$tdatatparam_tiporubro[".originalDefaultPages"] = $tdatatparam_tiporubro[".defaultPages"];

//	field labels
$fieldLabelstparam_tiporubro = array();
$fieldToolTipstparam_tiporubro = array();
$pageTitlestparam_tiporubro = array();
$placeHolderstparam_tiporubro = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_tiporubro["Spanish"] = array();
	$fieldToolTipstparam_tiporubro["Spanish"] = array();
	$placeHolderstparam_tiporubro["Spanish"] = array();
	$pageTitlestparam_tiporubro["Spanish"] = array();
	$fieldLabelstparam_tiporubro["Spanish"]["uej_id"] = "Uej Id";
	$fieldToolTipstparam_tiporubro["Spanish"]["uej_id"] = "";
	$placeHolderstparam_tiporubro["Spanish"]["uej_id"] = "";
	$fieldLabelstparam_tiporubro["Spanish"]["uej_name"] = "Uej Name";
	$fieldToolTipstparam_tiporubro["Spanish"]["uej_name"] = "";
	$placeHolderstparam_tiporubro["Spanish"]["uej_name"] = "";
	$fieldLabelstparam_tiporubro["Spanish"]["uej_namea"] = "Uej Namea";
	$fieldToolTipstparam_tiporubro["Spanish"]["uej_namea"] = "";
	$placeHolderstparam_tiporubro["Spanish"]["uej_namea"] = "";
	if (count($fieldToolTipstparam_tiporubro["Spanish"]))
		$tdatatparam_tiporubro[".isUseToolTips"] = true;
}


	$tdatatparam_tiporubro[".NCSearch"] = true;



$tdatatparam_tiporubro[".shortTableName"] = "tparam_tiporubro";
$tdatatparam_tiporubro[".nSecOptions"] = 0;

$tdatatparam_tiporubro[".mainTableOwnerID"] = "";
$tdatatparam_tiporubro[".entityType"] = 0;
$tdatatparam_tiporubro[".connId"] = "sep2_at_localhost";


$tdatatparam_tiporubro[".strOriginalTableName"] = "tparam_tiporubro";

	



$tdatatparam_tiporubro[".showAddInPopup"] = false;

$tdatatparam_tiporubro[".showEditInPopup"] = false;

$tdatatparam_tiporubro[".showViewInPopup"] = false;

$tdatatparam_tiporubro[".listAjax"] = false;
//	temporary
//$tdatatparam_tiporubro[".listAjax"] = false;

	$tdatatparam_tiporubro[".audit"] = false;

	$tdatatparam_tiporubro[".locking"] = false;


$pages = $tdatatparam_tiporubro[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_tiporubro[".edit"] = true;
	$tdatatparam_tiporubro[".afterEditAction"] = 1;
	$tdatatparam_tiporubro[".closePopupAfterEdit"] = 1;
	$tdatatparam_tiporubro[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_tiporubro[".add"] = true;
$tdatatparam_tiporubro[".afterAddAction"] = 1;
$tdatatparam_tiporubro[".closePopupAfterAdd"] = 1;
$tdatatparam_tiporubro[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_tiporubro[".list"] = true;
}



$tdatatparam_tiporubro[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_tiporubro[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_tiporubro[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_tiporubro[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_tiporubro[".printFriendly"] = true;
}



$tdatatparam_tiporubro[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_tiporubro[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_tiporubro[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_tiporubro[".isUseAjaxSuggest"] = true;





$tdatatparam_tiporubro[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_tiporubro[".buttonsAdded"] = false;

$tdatatparam_tiporubro[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_tiporubro[".isUseTimeForSearch"] = false;


$tdatatparam_tiporubro[".badgeColor"] = "E07878";


$tdatatparam_tiporubro[".allSearchFields"] = array();
$tdatatparam_tiporubro[".filterFields"] = array();
$tdatatparam_tiporubro[".requiredSearchFields"] = array();

$tdatatparam_tiporubro[".googleLikeFields"] = array();
$tdatatparam_tiporubro[".googleLikeFields"][] = "uej_id";
$tdatatparam_tiporubro[".googleLikeFields"][] = "uej_name";
$tdatatparam_tiporubro[".googleLikeFields"][] = "uej_namea";



$tdatatparam_tiporubro[".tableType"] = "list";

$tdatatparam_tiporubro[".printerPageOrientation"] = 0;
$tdatatparam_tiporubro[".nPrinterPageScale"] = 100;

$tdatatparam_tiporubro[".nPrinterSplitRecords"] = 40;

$tdatatparam_tiporubro[".geocodingEnabled"] = false;










$tdatatparam_tiporubro[".pageSize"] = 20;

$tdatatparam_tiporubro[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_tiporubro[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_tiporubro[".orderindexes"] = array();


$tdatatparam_tiporubro[".sqlHead"] = "SELECT uej_id,  	uej_name,  	uej_namea";
$tdatatparam_tiporubro[".sqlFrom"] = "FROM tparam_tiporubro";
$tdatatparam_tiporubro[".sqlWhereExpr"] = "";
$tdatatparam_tiporubro[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_tiporubro[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_tiporubro[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_tiporubro[".highlightSearchResults"] = true;

$tableKeystparam_tiporubro = array();
$tableKeystparam_tiporubro[] = "uej_id";
$tdatatparam_tiporubro[".Keys"] = $tableKeystparam_tiporubro;


$tdatatparam_tiporubro[".hideMobileList"] = array();




//	uej_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "uej_id";
	$fdata["GoodName"] = "uej_id";
	$fdata["ownerTable"] = "tparam_tiporubro";
	$fdata["Label"] = GetFieldLabel("tparam_tiporubro","uej_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "uej_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uej_id";

	
	
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


	$tdatatparam_tiporubro["uej_id"] = $fdata;
		$tdatatparam_tiporubro[".searchableFields"][] = "uej_id";
//	uej_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "uej_name";
	$fdata["GoodName"] = "uej_name";
	$fdata["ownerTable"] = "tparam_tiporubro";
	$fdata["Label"] = GetFieldLabel("tparam_tiporubro","uej_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "uej_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uej_name";

	
	
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


	$tdatatparam_tiporubro["uej_name"] = $fdata;
		$tdatatparam_tiporubro[".searchableFields"][] = "uej_name";
//	uej_namea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "uej_namea";
	$fdata["GoodName"] = "uej_namea";
	$fdata["ownerTable"] = "tparam_tiporubro";
	$fdata["Label"] = GetFieldLabel("tparam_tiporubro","uej_namea");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "uej_namea";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uej_namea";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatatparam_tiporubro["uej_namea"] = $fdata;
		$tdatatparam_tiporubro[".searchableFields"][] = "uej_namea";


$tables_data["tparam_tiporubro"]=&$tdatatparam_tiporubro;
$field_labels["tparam_tiporubro"] = &$fieldLabelstparam_tiporubro;
$fieldToolTips["tparam_tiporubro"] = &$fieldToolTipstparam_tiporubro;
$placeHolders["tparam_tiporubro"] = &$placeHolderstparam_tiporubro;
$page_titles["tparam_tiporubro"] = &$pageTitlestparam_tiporubro;


changeTextControlsToDate( "tparam_tiporubro" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_tiporubro"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_tiporubro"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_tiporubro()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "uej_id,  	uej_name,  	uej_namea";
$proto0["m_strFrom"] = "FROM tparam_tiporubro";
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
	"m_strName" => "uej_id",
	"m_strTable" => "tparam_tiporubro",
	"m_srcTableName" => "tparam_tiporubro"
));

$proto6["m_sql"] = "uej_id";
$proto6["m_srcTableName"] = "tparam_tiporubro";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "uej_name",
	"m_strTable" => "tparam_tiporubro",
	"m_srcTableName" => "tparam_tiporubro"
));

$proto8["m_sql"] = "uej_name";
$proto8["m_srcTableName"] = "tparam_tiporubro";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "uej_namea",
	"m_strTable" => "tparam_tiporubro",
	"m_srcTableName" => "tparam_tiporubro"
));

$proto10["m_sql"] = "uej_namea";
$proto10["m_srcTableName"] = "tparam_tiporubro";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tparam_tiporubro";
$proto13["m_srcTableName"] = "tparam_tiporubro";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "uej_id";
$proto13["m_columns"][] = "uej_name";
$proto13["m_columns"][] = "uej_namea";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tparam_tiporubro";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tparam_tiporubro";
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
$proto0["m_srcTableName"]="tparam_tiporubro";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_tiporubro = createSqlQuery_tparam_tiporubro();


	
								;

			

$tdatatparam_tiporubro[".sqlquery"] = $queryData_tparam_tiporubro;



$tdatatparam_tiporubro[".hasEvents"] = false;

?>