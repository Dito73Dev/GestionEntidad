<?php
$tdataperfil = array();
$tdataperfil[".searchableFields"] = array();
$tdataperfil[".ShortName"] = "perfil";
$tdataperfil[".OwnerID"] = "";
$tdataperfil[".OriginalTable"] = "perfil";


$tdataperfil[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataperfil[".originalPagesByType"] = $tdataperfil[".pagesByType"];
$tdataperfil[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataperfil[".originalPages"] = $tdataperfil[".pages"];
$tdataperfil[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataperfil[".originalDefaultPages"] = $tdataperfil[".defaultPages"];

//	field labels
$fieldLabelsperfil = array();
$fieldToolTipsperfil = array();
$pageTitlesperfil = array();
$placeHoldersperfil = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsperfil["Spanish"] = array();
	$fieldToolTipsperfil["Spanish"] = array();
	$placeHoldersperfil["Spanish"] = array();
	$pageTitlesperfil["Spanish"] = array();
	$fieldLabelsperfil["Spanish"]["id"] = "Id";
	$fieldToolTipsperfil["Spanish"]["id"] = "";
	$placeHoldersperfil["Spanish"]["id"] = "";
	$fieldLabelsperfil["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsperfil["Spanish"]["nombre"] = "";
	$placeHoldersperfil["Spanish"]["nombre"] = "";
	$fieldLabelsperfil["Spanish"]["estado"] = "Estado";
	$fieldToolTipsperfil["Spanish"]["estado"] = "";
	$placeHoldersperfil["Spanish"]["estado"] = "";
	if (count($fieldToolTipsperfil["Spanish"]))
		$tdataperfil[".isUseToolTips"] = true;
}


	$tdataperfil[".NCSearch"] = true;



$tdataperfil[".shortTableName"] = "perfil";
$tdataperfil[".nSecOptions"] = 0;

$tdataperfil[".mainTableOwnerID"] = "";
$tdataperfil[".entityType"] = 0;
$tdataperfil[".connId"] = "edl_at_localhost";


$tdataperfil[".strOriginalTableName"] = "perfil";

	



$tdataperfil[".showAddInPopup"] = false;

$tdataperfil[".showEditInPopup"] = false;

$tdataperfil[".showViewInPopup"] = false;

$tdataperfil[".listAjax"] = false;
//	temporary
//$tdataperfil[".listAjax"] = false;

	$tdataperfil[".audit"] = true;

	$tdataperfil[".locking"] = true;


$pages = $tdataperfil[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataperfil[".edit"] = true;
	$tdataperfil[".afterEditAction"] = 1;
	$tdataperfil[".closePopupAfterEdit"] = 1;
	$tdataperfil[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataperfil[".add"] = true;
$tdataperfil[".afterAddAction"] = 1;
$tdataperfil[".closePopupAfterAdd"] = 1;
$tdataperfil[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataperfil[".list"] = true;
}



$tdataperfil[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataperfil[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataperfil[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataperfil[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataperfil[".printFriendly"] = true;
}



$tdataperfil[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataperfil[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataperfil[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataperfil[".isUseAjaxSuggest"] = true;





$tdataperfil[".ajaxCodeSnippetAdded"] = false;

$tdataperfil[".buttonsAdded"] = false;

$tdataperfil[".addPageEvents"] = false;

// use timepicker for search panel
$tdataperfil[".isUseTimeForSearch"] = false;


$tdataperfil[".badgeColor"] = "00C2C5";


$tdataperfil[".allSearchFields"] = array();
$tdataperfil[".filterFields"] = array();
$tdataperfil[".requiredSearchFields"] = array();

$tdataperfil[".googleLikeFields"] = array();
$tdataperfil[".googleLikeFields"][] = "estado";
$tdataperfil[".googleLikeFields"][] = "id";
$tdataperfil[".googleLikeFields"][] = "nombre";



$tdataperfil[".tableType"] = "list";

$tdataperfil[".printerPageOrientation"] = 0;
$tdataperfil[".nPrinterPageScale"] = 100;

$tdataperfil[".nPrinterSplitRecords"] = 40;

$tdataperfil[".geocodingEnabled"] = false;










$tdataperfil[".pageSize"] = 20;

$tdataperfil[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataperfil[".strOrderBy"] = $tstrOrderBy;

$tdataperfil[".orderindexes"] = array();


$tdataperfil[".sqlHead"] = "SELECT estado,  	id,  	nombre";
$tdataperfil[".sqlFrom"] = "FROM perfil";
$tdataperfil[".sqlWhereExpr"] = "";
$tdataperfil[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataperfil[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataperfil[".arrGroupsPerPage"] = $arrGPP;

$tdataperfil[".highlightSearchResults"] = true;

$tableKeysperfil = array();
$tableKeysperfil[] = "id";
$tdataperfil[".Keys"] = $tableKeysperfil;


$tdataperfil[".hideMobileList"] = array();




//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "perfil";
	$fdata["Label"] = GetFieldLabel("perfil","estado");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "estado";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataperfil["estado"] = $fdata;
		$tdataperfil[".searchableFields"][] = "estado";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "perfil";
	$fdata["Label"] = GetFieldLabel("perfil","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdataperfil["id"] = $fdata;
		$tdataperfil[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "perfil";
	$fdata["Label"] = GetFieldLabel("perfil","nombre");
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


	$tdataperfil["nombre"] = $fdata;
		$tdataperfil[".searchableFields"][] = "nombre";


$tables_data["perfil"]=&$tdataperfil;
$field_labels["perfil"] = &$fieldLabelsperfil;
$fieldToolTips["perfil"] = &$fieldToolTipsperfil;
$placeHolders["perfil"] = &$placeHoldersperfil;
$page_titles["perfil"] = &$pageTitlesperfil;


changeTextControlsToDate( "perfil" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["perfil"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["perfil"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_perfil()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "estado,  	id,  	nombre";
$proto0["m_strFrom"] = "FROM perfil";
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
	"m_strName" => "estado",
	"m_strTable" => "perfil",
	"m_srcTableName" => "perfil"
));

$proto6["m_sql"] = "estado";
$proto6["m_srcTableName"] = "perfil";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "perfil",
	"m_srcTableName" => "perfil"
));

$proto8["m_sql"] = "id";
$proto8["m_srcTableName"] = "perfil";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "perfil",
	"m_srcTableName" => "perfil"
));

$proto10["m_sql"] = "nombre";
$proto10["m_srcTableName"] = "perfil";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "perfil";
$proto13["m_srcTableName"] = "perfil";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "estado";
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "nombre";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "perfil";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "perfil";
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
$proto0["m_srcTableName"]="perfil";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_perfil = createSqlQuery_perfil();


	
								;

			

$tdataperfil[".sqlquery"] = $queryData_perfil;



$tdataperfil[".hasEvents"] = false;

?>