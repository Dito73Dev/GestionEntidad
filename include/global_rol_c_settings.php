<?php
$tdataglobal_rol_c = array();
$tdataglobal_rol_c[".searchableFields"] = array();
$tdataglobal_rol_c[".ShortName"] = "global_rol_c";
$tdataglobal_rol_c[".OwnerID"] = "";
$tdataglobal_rol_c[".OriginalTable"] = "global_rol_c";


$tdataglobal_rol_c[".pagesByType"] = my_json_decode( "{}" );
$tdataglobal_rol_c[".originalPagesByType"] = $tdataglobal_rol_c[".pagesByType"];
$tdataglobal_rol_c[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataglobal_rol_c[".originalPages"] = $tdataglobal_rol_c[".pages"];
$tdataglobal_rol_c[".defaultPages"] = my_json_decode( "{}" );
$tdataglobal_rol_c[".originalDefaultPages"] = $tdataglobal_rol_c[".defaultPages"];

//	field labels
$fieldLabelsglobal_rol_c = array();
$fieldToolTipsglobal_rol_c = array();
$pageTitlesglobal_rol_c = array();
$placeHoldersglobal_rol_c = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_rol_c["Spanish"] = array();
	$fieldToolTipsglobal_rol_c["Spanish"] = array();
	$placeHoldersglobal_rol_c["Spanish"] = array();
	$pageTitlesglobal_rol_c["Spanish"] = array();
	$fieldLabelsglobal_rol_c["Spanish"]["id"] = "Id";
	$fieldToolTipsglobal_rol_c["Spanish"]["id"] = "";
	$placeHoldersglobal_rol_c["Spanish"]["id"] = "";
	$fieldLabelsglobal_rol_c["Spanish"]["id_rol"] = "Id Rol";
	$fieldToolTipsglobal_rol_c["Spanish"]["id_rol"] = "";
	$placeHoldersglobal_rol_c["Spanish"]["id_rol"] = "";
	$fieldLabelsglobal_rol_c["Spanish"]["id_site_fk"] = "Id Site Fk";
	$fieldToolTipsglobal_rol_c["Spanish"]["id_site_fk"] = "";
	$placeHoldersglobal_rol_c["Spanish"]["id_site_fk"] = "";
	$fieldLabelsglobal_rol_c["Spanish"]["rol_name"] = "Rol Name";
	$fieldToolTipsglobal_rol_c["Spanish"]["rol_name"] = "";
	$placeHoldersglobal_rol_c["Spanish"]["rol_name"] = "";
	$fieldLabelsglobal_rol_c["Spanish"]["rol_status"] = "Rol Status";
	$fieldToolTipsglobal_rol_c["Spanish"]["rol_status"] = "";
	$placeHoldersglobal_rol_c["Spanish"]["rol_status"] = "";
	if (count($fieldToolTipsglobal_rol_c["Spanish"]))
		$tdataglobal_rol_c[".isUseToolTips"] = true;
}


	$tdataglobal_rol_c[".NCSearch"] = true;



$tdataglobal_rol_c[".shortTableName"] = "global_rol_c";
$tdataglobal_rol_c[".nSecOptions"] = 0;

$tdataglobal_rol_c[".mainTableOwnerID"] = "";
$tdataglobal_rol_c[".entityType"] = 0;
$tdataglobal_rol_c[".connId"] = "dbusers_at_localhost";


$tdataglobal_rol_c[".strOriginalTableName"] = "global_rol_c";

	



$tdataglobal_rol_c[".showAddInPopup"] = false;

$tdataglobal_rol_c[".showEditInPopup"] = false;

$tdataglobal_rol_c[".showViewInPopup"] = false;

$tdataglobal_rol_c[".listAjax"] = false;
//	temporary
//$tdataglobal_rol_c[".listAjax"] = false;

	$tdataglobal_rol_c[".audit"] = true;

	$tdataglobal_rol_c[".locking"] = true;


$pages = $tdataglobal_rol_c[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_rol_c[".edit"] = true;
	$tdataglobal_rol_c[".afterEditAction"] = 1;
	$tdataglobal_rol_c[".closePopupAfterEdit"] = 1;
	$tdataglobal_rol_c[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_rol_c[".add"] = true;
$tdataglobal_rol_c[".afterAddAction"] = 1;
$tdataglobal_rol_c[".closePopupAfterAdd"] = 1;
$tdataglobal_rol_c[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_rol_c[".list"] = true;
}



$tdataglobal_rol_c[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_rol_c[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_rol_c[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_rol_c[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_rol_c[".printFriendly"] = true;
}



$tdataglobal_rol_c[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_rol_c[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_rol_c[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_rol_c[".isUseAjaxSuggest"] = true;





$tdataglobal_rol_c[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_rol_c[".buttonsAdded"] = false;

$tdataglobal_rol_c[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_rol_c[".isUseTimeForSearch"] = false;


$tdataglobal_rol_c[".badgeColor"] = "5F9EA0";


$tdataglobal_rol_c[".allSearchFields"] = array();
$tdataglobal_rol_c[".filterFields"] = array();
$tdataglobal_rol_c[".requiredSearchFields"] = array();

$tdataglobal_rol_c[".googleLikeFields"] = array();
$tdataglobal_rol_c[".googleLikeFields"][] = "id";
$tdataglobal_rol_c[".googleLikeFields"][] = "id_rol";
$tdataglobal_rol_c[".googleLikeFields"][] = "id_site_fk";
$tdataglobal_rol_c[".googleLikeFields"][] = "rol_name";
$tdataglobal_rol_c[".googleLikeFields"][] = "rol_status";



$tdataglobal_rol_c[".tableType"] = "list";

$tdataglobal_rol_c[".printerPageOrientation"] = 0;
$tdataglobal_rol_c[".nPrinterPageScale"] = 100;

$tdataglobal_rol_c[".nPrinterSplitRecords"] = 40;

$tdataglobal_rol_c[".geocodingEnabled"] = false;










$tdataglobal_rol_c[".pageSize"] = 20;

$tdataglobal_rol_c[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_rol_c[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_rol_c[".orderindexes"] = array();


$tdataglobal_rol_c[".sqlHead"] = "SELECT id,  	id_rol,  	id_site_fk,  	rol_name,  	rol_status";
$tdataglobal_rol_c[".sqlFrom"] = "FROM global_rol_c";
$tdataglobal_rol_c[".sqlWhereExpr"] = "";
$tdataglobal_rol_c[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_rol_c[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_rol_c[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_rol_c[".highlightSearchResults"] = true;

$tableKeysglobal_rol_c = array();
$tableKeysglobal_rol_c[] = "id";
$tdataglobal_rol_c[".Keys"] = $tableKeysglobal_rol_c;


$tdataglobal_rol_c[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "global_rol_c";
	$fdata["Label"] = GetFieldLabel("global_rol_c","id");
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


	$tdataglobal_rol_c["id"] = $fdata;
		$tdataglobal_rol_c[".searchableFields"][] = "id";
//	id_rol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_rol";
	$fdata["GoodName"] = "id_rol";
	$fdata["ownerTable"] = "global_rol_c";
	$fdata["Label"] = GetFieldLabel("global_rol_c","id_rol");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_rol";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_rol";

	
	
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


	$tdataglobal_rol_c["id_rol"] = $fdata;
		$tdataglobal_rol_c[".searchableFields"][] = "id_rol";
//	id_site_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_site_fk";
	$fdata["GoodName"] = "id_site_fk";
	$fdata["ownerTable"] = "global_rol_c";
	$fdata["Label"] = GetFieldLabel("global_rol_c","id_site_fk");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "id_site_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_site_fk";

	
	
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


	$tdataglobal_rol_c["id_site_fk"] = $fdata;
		$tdataglobal_rol_c[".searchableFields"][] = "id_site_fk";
//	rol_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "rol_name";
	$fdata["GoodName"] = "rol_name";
	$fdata["ownerTable"] = "global_rol_c";
	$fdata["Label"] = GetFieldLabel("global_rol_c","rol_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rol_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rol_name";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdataglobal_rol_c["rol_name"] = $fdata;
		$tdataglobal_rol_c[".searchableFields"][] = "rol_name";
//	rol_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rol_status";
	$fdata["GoodName"] = "rol_status";
	$fdata["ownerTable"] = "global_rol_c";
	$fdata["Label"] = GetFieldLabel("global_rol_c","rol_status");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "rol_status";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rol_status";

	
	
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


	$tdataglobal_rol_c["rol_status"] = $fdata;
		$tdataglobal_rol_c[".searchableFields"][] = "rol_status";


$tables_data["global_rol_c"]=&$tdataglobal_rol_c;
$field_labels["global_rol_c"] = &$fieldLabelsglobal_rol_c;
$fieldToolTips["global_rol_c"] = &$fieldToolTipsglobal_rol_c;
$placeHolders["global_rol_c"] = &$placeHoldersglobal_rol_c;
$page_titles["global_rol_c"] = &$pageTitlesglobal_rol_c;


changeTextControlsToDate( "global_rol_c" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_rol_c"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_rol_c"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_rol_c()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	id_rol,  	id_site_fk,  	rol_name,  	rol_status";
$proto0["m_strFrom"] = "FROM global_rol_c";
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
	"m_strTable" => "global_rol_c",
	"m_srcTableName" => "global_rol_c"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "global_rol_c";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_rol",
	"m_strTable" => "global_rol_c",
	"m_srcTableName" => "global_rol_c"
));

$proto8["m_sql"] = "id_rol";
$proto8["m_srcTableName"] = "global_rol_c";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_site_fk",
	"m_strTable" => "global_rol_c",
	"m_srcTableName" => "global_rol_c"
));

$proto10["m_sql"] = "id_site_fk";
$proto10["m_srcTableName"] = "global_rol_c";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "rol_name",
	"m_strTable" => "global_rol_c",
	"m_srcTableName" => "global_rol_c"
));

$proto12["m_sql"] = "rol_name";
$proto12["m_srcTableName"] = "global_rol_c";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rol_status",
	"m_strTable" => "global_rol_c",
	"m_srcTableName" => "global_rol_c"
));

$proto14["m_sql"] = "rol_status";
$proto14["m_srcTableName"] = "global_rol_c";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "global_rol_c";
$proto17["m_srcTableName"] = "global_rol_c";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "id_rol";
$proto17["m_columns"][] = "id_site_fk";
$proto17["m_columns"][] = "rol_name";
$proto17["m_columns"][] = "rol_status";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "global_rol_c";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "global_rol_c";
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
$proto0["m_srcTableName"]="global_rol_c";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_rol_c = createSqlQuery_global_rol_c();


	
								;

					

$tdataglobal_rol_c[".sqlquery"] = $queryData_global_rol_c;



$tdataglobal_rol_c[".hasEvents"] = false;

?>