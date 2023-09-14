<?php
$tdatacargo = array();
$tdatacargo[".searchableFields"] = array();
$tdatacargo[".ShortName"] = "cargo";
$tdatacargo[".OwnerID"] = "";
$tdatacargo[".OriginalTable"] = "cargo";


$tdatacargo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacargo[".originalPagesByType"] = $tdatacargo[".pagesByType"];
$tdatacargo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacargo[".originalPages"] = $tdatacargo[".pages"];
$tdatacargo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacargo[".originalDefaultPages"] = $tdatacargo[".defaultPages"];

//	field labels
$fieldLabelscargo = array();
$fieldToolTipscargo = array();
$pageTitlescargo = array();
$placeHolderscargo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscargo["Spanish"] = array();
	$fieldToolTipscargo["Spanish"] = array();
	$placeHolderscargo["Spanish"] = array();
	$pageTitlescargo["Spanish"] = array();
	$fieldLabelscargo["Spanish"]["id"] = "Id";
	$fieldToolTipscargo["Spanish"]["id"] = "";
	$placeHolderscargo["Spanish"]["id"] = "";
	$fieldLabelscargo["Spanish"]["nombre"] = "Nombre del cargo";
	$fieldToolTipscargo["Spanish"]["nombre"] = "";
	$placeHolderscargo["Spanish"]["nombre"] = "";
	$fieldLabelscargo["Spanish"]["cargo"] = "Cargo";
	$fieldToolTipscargo["Spanish"]["cargo"] = "";
	$placeHolderscargo["Spanish"]["cargo"] = "";
	$fieldLabelscargo["Spanish"]["grado"] = "Grado";
	$fieldToolTipscargo["Spanish"]["grado"] = "";
	$placeHolderscargo["Spanish"]["grado"] = "";
	$fieldLabelscargo["Spanish"]["estado"] = "Estado";
	$fieldToolTipscargo["Spanish"]["estado"] = "";
	$placeHolderscargo["Spanish"]["estado"] = "";
	$pageTitlescargo["Spanish"]["add"] = "Cargos en la entidad";
	if (count($fieldToolTipscargo["Spanish"]))
		$tdatacargo[".isUseToolTips"] = true;
}


	$tdatacargo[".NCSearch"] = true;



$tdatacargo[".shortTableName"] = "cargo";
$tdatacargo[".nSecOptions"] = 0;

$tdatacargo[".mainTableOwnerID"] = "";
$tdatacargo[".entityType"] = 0;
$tdatacargo[".connId"] = "edl_at_localhost";


$tdatacargo[".strOriginalTableName"] = "cargo";

	



$tdatacargo[".showAddInPopup"] = false;

$tdatacargo[".showEditInPopup"] = false;

$tdatacargo[".showViewInPopup"] = false;

$tdatacargo[".listAjax"] = false;
//	temporary
//$tdatacargo[".listAjax"] = false;

	$tdatacargo[".audit"] = false;

	$tdatacargo[".locking"] = false;


$pages = $tdatacargo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacargo[".edit"] = true;
	$tdatacargo[".afterEditAction"] = 1;
	$tdatacargo[".closePopupAfterEdit"] = 1;
	$tdatacargo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacargo[".add"] = true;
$tdatacargo[".afterAddAction"] = 1;
$tdatacargo[".closePopupAfterAdd"] = 1;
$tdatacargo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacargo[".list"] = true;
}



$tdatacargo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacargo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacargo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacargo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacargo[".printFriendly"] = true;
}



$tdatacargo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacargo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacargo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacargo[".isUseAjaxSuggest"] = true;





$tdatacargo[".ajaxCodeSnippetAdded"] = false;

$tdatacargo[".buttonsAdded"] = false;

$tdatacargo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacargo[".isUseTimeForSearch"] = false;


$tdatacargo[".badgeColor"] = "D2691E";


$tdatacargo[".allSearchFields"] = array();
$tdatacargo[".filterFields"] = array();
$tdatacargo[".requiredSearchFields"] = array();

$tdatacargo[".googleLikeFields"] = array();
$tdatacargo[".googleLikeFields"][] = "id";
$tdatacargo[".googleLikeFields"][] = "nombre";
$tdatacargo[".googleLikeFields"][] = "cargo";
$tdatacargo[".googleLikeFields"][] = "grado";
$tdatacargo[".googleLikeFields"][] = "estado";



$tdatacargo[".tableType"] = "list";

$tdatacargo[".printerPageOrientation"] = 0;
$tdatacargo[".nPrinterPageScale"] = 100;

$tdatacargo[".nPrinterSplitRecords"] = 40;

$tdatacargo[".geocodingEnabled"] = false;




$tdatacargo[".isDisplayLoading"] = true;






$tdatacargo[".pageSize"] = 20;

$tdatacargo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacargo[".strOrderBy"] = $tstrOrderBy;

$tdatacargo[".orderindexes"] = array();


$tdatacargo[".sqlHead"] = "SELECT id, nombre, cargo, grado, estado";
$tdatacargo[".sqlFrom"] = "FROM cargo";
$tdatacargo[".sqlWhereExpr"] = "";
$tdatacargo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacargo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacargo[".arrGroupsPerPage"] = $arrGPP;

$tdatacargo[".highlightSearchResults"] = true;

$tableKeyscargo = array();
$tableKeyscargo[] = "id";
$tdatacargo[".Keys"] = $tableKeyscargo;


$tdatacargo[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo","id");
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


	$tdatacargo["id"] = $fdata;
		$tdatacargo[".searchableFields"][] = "id";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo","nombre");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatacargo["nombre"] = $fdata;
		$tdatacargo[".searchableFields"][] = "nombre";
//	cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cargo";
	$fdata["GoodName"] = "cargo";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo","cargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cargo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cargo";

	
	
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
			$edata["EditParams"].= " maxlength=6";

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


	$tdatacargo["cargo"] = $fdata;
		$tdatacargo[".searchableFields"][] = "cargo";
//	grado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "grado";
	$fdata["GoodName"] = "grado";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo","grado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "grado";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grado";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatacargo["grado"] = $fdata;
		$tdatacargo[".searchableFields"][] = "grado";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "cargo";
	$fdata["Label"] = GetFieldLabel("cargo","estado");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_estados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "estado_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "estado_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacargo["estado"] = $fdata;
		$tdatacargo[".searchableFields"][] = "estado";


$tables_data["cargo"]=&$tdatacargo;
$field_labels["cargo"] = &$fieldLabelscargo;
$fieldToolTips["cargo"] = &$fieldToolTipscargo;
$placeHolders["cargo"] = &$placeHolderscargo;
$page_titles["cargo"] = &$pageTitlescargo;


changeTextControlsToDate( "cargo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cargo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cargo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cargo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id, nombre, cargo, grado, estado";
$proto0["m_strFrom"] = "FROM cargo";
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
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "cargo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "cargo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo"
));

$proto10["m_sql"] = "cargo";
$proto10["m_srcTableName"] = "cargo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "grado",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo"
));

$proto12["m_sql"] = "grado";
$proto12["m_srcTableName"] = "cargo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "cargo",
	"m_srcTableName" => "cargo"
));

$proto14["m_sql"] = "estado";
$proto14["m_srcTableName"] = "cargo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "cargo";
$proto17["m_srcTableName"] = "cargo";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "cargo";
$proto17["m_columns"][] = "codcar";
$proto17["m_columns"][] = "Directivo";
$proto17["m_columns"][] = "estado";
$proto17["m_columns"][] = "ExperienciaMeses";
$proto17["m_columns"][] = "grado";
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "idComportamentalFK";
$proto17["m_columns"][] = "nombre";
$proto17["m_columns"][] = "propositoPrincipal";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "cargo";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "cargo";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cargo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cargo = createSqlQuery_cargo();


	
								;

					

$tdatacargo[".sqlquery"] = $queryData_cargo;



$tdatacargo[".hasEvents"] = false;

?>