<?php
$tdataglobal_rol_almacen = array();
$tdataglobal_rol_almacen[".searchableFields"] = array();
$tdataglobal_rol_almacen[".ShortName"] = "global_rol_almacen";
$tdataglobal_rol_almacen[".OwnerID"] = "";
$tdataglobal_rol_almacen[".OriginalTable"] = "global_rol_almacen";


$tdataglobal_rol_almacen[".pagesByType"] = my_json_decode( "{}" );
$tdataglobal_rol_almacen[".originalPagesByType"] = $tdataglobal_rol_almacen[".pagesByType"];
$tdataglobal_rol_almacen[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataglobal_rol_almacen[".originalPages"] = $tdataglobal_rol_almacen[".pages"];
$tdataglobal_rol_almacen[".defaultPages"] = my_json_decode( "{}" );
$tdataglobal_rol_almacen[".originalDefaultPages"] = $tdataglobal_rol_almacen[".defaultPages"];

//	field labels
$fieldLabelsglobal_rol_almacen = array();
$fieldToolTipsglobal_rol_almacen = array();
$pageTitlesglobal_rol_almacen = array();
$placeHoldersglobal_rol_almacen = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_rol_almacen["Spanish"] = array();
	$fieldToolTipsglobal_rol_almacen["Spanish"] = array();
	$placeHoldersglobal_rol_almacen["Spanish"] = array();
	$pageTitlesglobal_rol_almacen["Spanish"] = array();
	$fieldLabelsglobal_rol_almacen["Spanish"]["id"] = "Id";
	$fieldToolTipsglobal_rol_almacen["Spanish"]["id"] = "";
	$placeHoldersglobal_rol_almacen["Spanish"]["id"] = "";
	$fieldLabelsglobal_rol_almacen["Spanish"]["id_rol"] = "Id Rol";
	$fieldToolTipsglobal_rol_almacen["Spanish"]["id_rol"] = "";
	$placeHoldersglobal_rol_almacen["Spanish"]["id_rol"] = "";
	$fieldLabelsglobal_rol_almacen["Spanish"]["id_site_fk"] = "Id Site Fk";
	$fieldToolTipsglobal_rol_almacen["Spanish"]["id_site_fk"] = "";
	$placeHoldersglobal_rol_almacen["Spanish"]["id_site_fk"] = "";
	$fieldLabelsglobal_rol_almacen["Spanish"]["rol_name"] = "Rol Name";
	$fieldToolTipsglobal_rol_almacen["Spanish"]["rol_name"] = "";
	$placeHoldersglobal_rol_almacen["Spanish"]["rol_name"] = "";
	$fieldLabelsglobal_rol_almacen["Spanish"]["rol_status"] = "Rol Status";
	$fieldToolTipsglobal_rol_almacen["Spanish"]["rol_status"] = "";
	$placeHoldersglobal_rol_almacen["Spanish"]["rol_status"] = "";
	if (count($fieldToolTipsglobal_rol_almacen["Spanish"]))
		$tdataglobal_rol_almacen[".isUseToolTips"] = true;
}


	$tdataglobal_rol_almacen[".NCSearch"] = true;



$tdataglobal_rol_almacen[".shortTableName"] = "global_rol_almacen";
$tdataglobal_rol_almacen[".nSecOptions"] = 0;

$tdataglobal_rol_almacen[".mainTableOwnerID"] = "";
$tdataglobal_rol_almacen[".entityType"] = 0;
$tdataglobal_rol_almacen[".connId"] = "dbusers_at_localhost";


$tdataglobal_rol_almacen[".strOriginalTableName"] = "global_rol_almacen";

	



$tdataglobal_rol_almacen[".showAddInPopup"] = false;

$tdataglobal_rol_almacen[".showEditInPopup"] = false;

$tdataglobal_rol_almacen[".showViewInPopup"] = false;

$tdataglobal_rol_almacen[".listAjax"] = false;
//	temporary
//$tdataglobal_rol_almacen[".listAjax"] = false;

	$tdataglobal_rol_almacen[".audit"] = true;

	$tdataglobal_rol_almacen[".locking"] = true;


$pages = $tdataglobal_rol_almacen[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_rol_almacen[".edit"] = true;
	$tdataglobal_rol_almacen[".afterEditAction"] = 1;
	$tdataglobal_rol_almacen[".closePopupAfterEdit"] = 1;
	$tdataglobal_rol_almacen[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_rol_almacen[".add"] = true;
$tdataglobal_rol_almacen[".afterAddAction"] = 1;
$tdataglobal_rol_almacen[".closePopupAfterAdd"] = 1;
$tdataglobal_rol_almacen[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_rol_almacen[".list"] = true;
}



$tdataglobal_rol_almacen[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_rol_almacen[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_rol_almacen[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_rol_almacen[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_rol_almacen[".printFriendly"] = true;
}



$tdataglobal_rol_almacen[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_rol_almacen[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_rol_almacen[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_rol_almacen[".isUseAjaxSuggest"] = true;





$tdataglobal_rol_almacen[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_rol_almacen[".buttonsAdded"] = false;

$tdataglobal_rol_almacen[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_rol_almacen[".isUseTimeForSearch"] = false;


$tdataglobal_rol_almacen[".badgeColor"] = "7B68EE";


$tdataglobal_rol_almacen[".allSearchFields"] = array();
$tdataglobal_rol_almacen[".filterFields"] = array();
$tdataglobal_rol_almacen[".requiredSearchFields"] = array();

$tdataglobal_rol_almacen[".googleLikeFields"] = array();
$tdataglobal_rol_almacen[".googleLikeFields"][] = "id";
$tdataglobal_rol_almacen[".googleLikeFields"][] = "id_rol";
$tdataglobal_rol_almacen[".googleLikeFields"][] = "id_site_fk";
$tdataglobal_rol_almacen[".googleLikeFields"][] = "rol_name";
$tdataglobal_rol_almacen[".googleLikeFields"][] = "rol_status";



$tdataglobal_rol_almacen[".tableType"] = "list";

$tdataglobal_rol_almacen[".printerPageOrientation"] = 0;
$tdataglobal_rol_almacen[".nPrinterPageScale"] = 100;

$tdataglobal_rol_almacen[".nPrinterSplitRecords"] = 40;

$tdataglobal_rol_almacen[".geocodingEnabled"] = false;










$tdataglobal_rol_almacen[".pageSize"] = 20;

$tdataglobal_rol_almacen[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_rol_almacen[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_rol_almacen[".orderindexes"] = array();


$tdataglobal_rol_almacen[".sqlHead"] = "SELECT id,  	id_rol,  	id_site_fk,  	rol_name,  	rol_status";
$tdataglobal_rol_almacen[".sqlFrom"] = "FROM global_rol_almacen";
$tdataglobal_rol_almacen[".sqlWhereExpr"] = "";
$tdataglobal_rol_almacen[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_rol_almacen[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_rol_almacen[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_rol_almacen[".highlightSearchResults"] = true;

$tableKeysglobal_rol_almacen = array();
$tableKeysglobal_rol_almacen[] = "id";
$tdataglobal_rol_almacen[".Keys"] = $tableKeysglobal_rol_almacen;


$tdataglobal_rol_almacen[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "global_rol_almacen";
	$fdata["Label"] = GetFieldLabel("global_rol_almacen","id");
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


	$tdataglobal_rol_almacen["id"] = $fdata;
		$tdataglobal_rol_almacen[".searchableFields"][] = "id";
//	id_rol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_rol";
	$fdata["GoodName"] = "id_rol";
	$fdata["ownerTable"] = "global_rol_almacen";
	$fdata["Label"] = GetFieldLabel("global_rol_almacen","id_rol");
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


	$tdataglobal_rol_almacen["id_rol"] = $fdata;
		$tdataglobal_rol_almacen[".searchableFields"][] = "id_rol";
//	id_site_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_site_fk";
	$fdata["GoodName"] = "id_site_fk";
	$fdata["ownerTable"] = "global_rol_almacen";
	$fdata["Label"] = GetFieldLabel("global_rol_almacen","id_site_fk");
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


	$tdataglobal_rol_almacen["id_site_fk"] = $fdata;
		$tdataglobal_rol_almacen[".searchableFields"][] = "id_site_fk";
//	rol_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "rol_name";
	$fdata["GoodName"] = "rol_name";
	$fdata["ownerTable"] = "global_rol_almacen";
	$fdata["Label"] = GetFieldLabel("global_rol_almacen","rol_name");
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


	$tdataglobal_rol_almacen["rol_name"] = $fdata;
		$tdataglobal_rol_almacen[".searchableFields"][] = "rol_name";
//	rol_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rol_status";
	$fdata["GoodName"] = "rol_status";
	$fdata["ownerTable"] = "global_rol_almacen";
	$fdata["Label"] = GetFieldLabel("global_rol_almacen","rol_status");
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


	$tdataglobal_rol_almacen["rol_status"] = $fdata;
		$tdataglobal_rol_almacen[".searchableFields"][] = "rol_status";


$tables_data["global_rol_almacen"]=&$tdataglobal_rol_almacen;
$field_labels["global_rol_almacen"] = &$fieldLabelsglobal_rol_almacen;
$fieldToolTips["global_rol_almacen"] = &$fieldToolTipsglobal_rol_almacen;
$placeHolders["global_rol_almacen"] = &$placeHoldersglobal_rol_almacen;
$page_titles["global_rol_almacen"] = &$pageTitlesglobal_rol_almacen;


changeTextControlsToDate( "global_rol_almacen" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_rol_almacen"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_rol_almacen"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_rol_almacen()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	id_rol,  	id_site_fk,  	rol_name,  	rol_status";
$proto0["m_strFrom"] = "FROM global_rol_almacen";
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
	"m_strTable" => "global_rol_almacen",
	"m_srcTableName" => "global_rol_almacen"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "global_rol_almacen";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_rol",
	"m_strTable" => "global_rol_almacen",
	"m_srcTableName" => "global_rol_almacen"
));

$proto8["m_sql"] = "id_rol";
$proto8["m_srcTableName"] = "global_rol_almacen";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_site_fk",
	"m_strTable" => "global_rol_almacen",
	"m_srcTableName" => "global_rol_almacen"
));

$proto10["m_sql"] = "id_site_fk";
$proto10["m_srcTableName"] = "global_rol_almacen";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "rol_name",
	"m_strTable" => "global_rol_almacen",
	"m_srcTableName" => "global_rol_almacen"
));

$proto12["m_sql"] = "rol_name";
$proto12["m_srcTableName"] = "global_rol_almacen";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rol_status",
	"m_strTable" => "global_rol_almacen",
	"m_srcTableName" => "global_rol_almacen"
));

$proto14["m_sql"] = "rol_status";
$proto14["m_srcTableName"] = "global_rol_almacen";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "global_rol_almacen";
$proto17["m_srcTableName"] = "global_rol_almacen";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "id_rol";
$proto17["m_columns"][] = "id_site_fk";
$proto17["m_columns"][] = "rol_name";
$proto17["m_columns"][] = "rol_status";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "global_rol_almacen";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "global_rol_almacen";
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
$proto0["m_srcTableName"]="global_rol_almacen";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_rol_almacen = createSqlQuery_global_rol_almacen();


	
								;

					

$tdataglobal_rol_almacen[".sqlquery"] = $queryData_global_rol_almacen;



$tdataglobal_rol_almacen[".hasEvents"] = false;

?>