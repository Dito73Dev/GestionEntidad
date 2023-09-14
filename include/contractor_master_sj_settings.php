<?php
$tdatacontractor_master_sj = array();
$tdatacontractor_master_sj[".searchableFields"] = array();
$tdatacontractor_master_sj[".ShortName"] = "contractor_master_sj";
$tdatacontractor_master_sj[".OwnerID"] = "";
$tdatacontractor_master_sj[".OriginalTable"] = "contractor_master";


$tdatacontractor_master_sj[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacontractor_master_sj[".originalPagesByType"] = $tdatacontractor_master_sj[".pagesByType"];
$tdatacontractor_master_sj[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacontractor_master_sj[".originalPages"] = $tdatacontractor_master_sj[".pages"];
$tdatacontractor_master_sj[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacontractor_master_sj[".originalDefaultPages"] = $tdatacontractor_master_sj[".defaultPages"];

//	field labels
$fieldLabelscontractor_master_sj = array();
$fieldToolTipscontractor_master_sj = array();
$pageTitlescontractor_master_sj = array();
$placeHolderscontractor_master_sj = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontractor_master_sj["Spanish"] = array();
	$fieldToolTipscontractor_master_sj["Spanish"] = array();
	$placeHolderscontractor_master_sj["Spanish"] = array();
	$pageTitlescontractor_master_sj["Spanish"] = array();
	$fieldLabelscontractor_master_sj["Spanish"]["contractor_id"] = "Contractor Id";
	$fieldToolTipscontractor_master_sj["Spanish"]["contractor_id"] = "";
	$placeHolderscontractor_master_sj["Spanish"]["contractor_id"] = "";
	$fieldLabelscontractor_master_sj["Spanish"]["contractor_type"] = "Tipo documento";
	$fieldToolTipscontractor_master_sj["Spanish"]["contractor_type"] = "";
	$placeHolderscontractor_master_sj["Spanish"]["contractor_type"] = "";
	$fieldLabelscontractor_master_sj["Spanish"]["contractor_doc_id"] = "Documento";
	$fieldToolTipscontractor_master_sj["Spanish"]["contractor_doc_id"] = "";
	$placeHolderscontractor_master_sj["Spanish"]["contractor_doc_id"] = "";
	$fieldLabelscontractor_master_sj["Spanish"]["contractor_image"] = "Foto perfil";
	$fieldToolTipscontractor_master_sj["Spanish"]["contractor_image"] = "";
	$placeHolderscontractor_master_sj["Spanish"]["contractor_image"] = "";
	$fieldLabelscontractor_master_sj["Spanish"]["contractor_nombresfull"] = "Nombres completos";
	$fieldToolTipscontractor_master_sj["Spanish"]["contractor_nombresfull"] = "";
	$placeHolderscontractor_master_sj["Spanish"]["contractor_nombresfull"] = "";
	$fieldLabelscontractor_master_sj["Spanish"]["contractor_email"] = "Correo personal";
	$fieldToolTipscontractor_master_sj["Spanish"]["contractor_email"] = "";
	$placeHolderscontractor_master_sj["Spanish"]["contractor_email"] = "";
	$fieldLabelscontractor_master_sj["Spanish"]["contractor_email_mincit"] = "Correo institucional";
	$fieldToolTipscontractor_master_sj["Spanish"]["contractor_email_mincit"] = "";
	$placeHolderscontractor_master_sj["Spanish"]["contractor_email_mincit"] = "";
	$fieldLabelscontractor_master_sj["Spanish"]["contractor_address"] = "Dirección";
	$fieldToolTipscontractor_master_sj["Spanish"]["contractor_address"] = "";
	$placeHolderscontractor_master_sj["Spanish"]["contractor_address"] = "";
	$fieldLabelscontractor_master_sj["Spanish"]["contractor_phone"] = "Teléfono";
	$fieldToolTipscontractor_master_sj["Spanish"]["contractor_phone"] = "";
	$placeHolderscontractor_master_sj["Spanish"]["contractor_phone"] = "";
	$fieldLabelscontractor_master_sj["Spanish"]["contractor_mobile"] = "Celular";
	$fieldToolTipscontractor_master_sj["Spanish"]["contractor_mobile"] = "";
	$placeHolderscontractor_master_sj["Spanish"]["contractor_mobile"] = "";
	$fieldLabelscontractor_master_sj["Spanish"]["contractor_city"] = "Ciudad";
	$fieldToolTipscontractor_master_sj["Spanish"]["contractor_city"] = "";
	$placeHolderscontractor_master_sj["Spanish"]["contractor_city"] = "";
	$fieldLabelscontractor_master_sj["Spanish"]["sys_status"] = "Estado";
	$fieldToolTipscontractor_master_sj["Spanish"]["sys_status"] = "";
	$placeHolderscontractor_master_sj["Spanish"]["sys_status"] = "";
	$fieldLabelscontractor_master_sj["Spanish"]["contractor_sup_jerarquico"] = "Contractor Sup Jerarquico";
	$fieldToolTipscontractor_master_sj["Spanish"]["contractor_sup_jerarquico"] = "";
	$placeHolderscontractor_master_sj["Spanish"]["contractor_sup_jerarquico"] = "";
	$fieldLabelscontractor_master_sj["Spanish"]["contractor_dependencia"] = "Contractor Dependencia";
	$fieldToolTipscontractor_master_sj["Spanish"]["contractor_dependencia"] = "";
	$placeHolderscontractor_master_sj["Spanish"]["contractor_dependencia"] = "";
	if (count($fieldToolTipscontractor_master_sj["Spanish"]))
		$tdatacontractor_master_sj[".isUseToolTips"] = true;
}


	$tdatacontractor_master_sj[".NCSearch"] = true;



$tdatacontractor_master_sj[".shortTableName"] = "contractor_master_sj";
$tdatacontractor_master_sj[".nSecOptions"] = 0;

$tdatacontractor_master_sj[".mainTableOwnerID"] = "";
$tdatacontractor_master_sj[".entityType"] = 1;
$tdatacontractor_master_sj[".connId"] = "dbct_at_localhost";


$tdatacontractor_master_sj[".strOriginalTableName"] = "contractor_master";

	



$tdatacontractor_master_sj[".showAddInPopup"] = false;

$tdatacontractor_master_sj[".showEditInPopup"] = false;

$tdatacontractor_master_sj[".showViewInPopup"] = false;

$tdatacontractor_master_sj[".listAjax"] = false;
//	temporary
//$tdatacontractor_master_sj[".listAjax"] = false;

	$tdatacontractor_master_sj[".audit"] = false;

	$tdatacontractor_master_sj[".locking"] = false;


$pages = $tdatacontractor_master_sj[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontractor_master_sj[".edit"] = true;
	$tdatacontractor_master_sj[".afterEditAction"] = 1;
	$tdatacontractor_master_sj[".closePopupAfterEdit"] = 1;
	$tdatacontractor_master_sj[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontractor_master_sj[".add"] = true;
$tdatacontractor_master_sj[".afterAddAction"] = 1;
$tdatacontractor_master_sj[".closePopupAfterAdd"] = 1;
$tdatacontractor_master_sj[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontractor_master_sj[".list"] = true;
}



$tdatacontractor_master_sj[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontractor_master_sj[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontractor_master_sj[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontractor_master_sj[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontractor_master_sj[".printFriendly"] = true;
}



$tdatacontractor_master_sj[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontractor_master_sj[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontractor_master_sj[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontractor_master_sj[".isUseAjaxSuggest"] = true;





$tdatacontractor_master_sj[".ajaxCodeSnippetAdded"] = false;

$tdatacontractor_master_sj[".buttonsAdded"] = false;

$tdatacontractor_master_sj[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontractor_master_sj[".isUseTimeForSearch"] = false;


$tdatacontractor_master_sj[".badgeColor"] = "008b8b";


$tdatacontractor_master_sj[".allSearchFields"] = array();
$tdatacontractor_master_sj[".filterFields"] = array();
$tdatacontractor_master_sj[".requiredSearchFields"] = array();

$tdatacontractor_master_sj[".googleLikeFields"] = array();
$tdatacontractor_master_sj[".googleLikeFields"][] = "contractor_id";
$tdatacontractor_master_sj[".googleLikeFields"][] = "contractor_type";
$tdatacontractor_master_sj[".googleLikeFields"][] = "contractor_doc_id";
$tdatacontractor_master_sj[".googleLikeFields"][] = "contractor_image";
$tdatacontractor_master_sj[".googleLikeFields"][] = "contractor_nombresfull";
$tdatacontractor_master_sj[".googleLikeFields"][] = "contractor_email";
$tdatacontractor_master_sj[".googleLikeFields"][] = "contractor_email_mincit";
$tdatacontractor_master_sj[".googleLikeFields"][] = "contractor_address";
$tdatacontractor_master_sj[".googleLikeFields"][] = "contractor_phone";
$tdatacontractor_master_sj[".googleLikeFields"][] = "contractor_mobile";
$tdatacontractor_master_sj[".googleLikeFields"][] = "contractor_city";
$tdatacontractor_master_sj[".googleLikeFields"][] = "sys_status";
$tdatacontractor_master_sj[".googleLikeFields"][] = "contractor_sup_jerarquico";
$tdatacontractor_master_sj[".googleLikeFields"][] = "contractor_dependencia";



$tdatacontractor_master_sj[".tableType"] = "list";

$tdatacontractor_master_sj[".printerPageOrientation"] = 0;
$tdatacontractor_master_sj[".nPrinterPageScale"] = 100;

$tdatacontractor_master_sj[".nPrinterSplitRecords"] = 40;

$tdatacontractor_master_sj[".geocodingEnabled"] = false;










$tdatacontractor_master_sj[".pageSize"] = 20;

$tdatacontractor_master_sj[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontractor_master_sj[".strOrderBy"] = $tstrOrderBy;

$tdatacontractor_master_sj[".orderindexes"] = array();


$tdatacontractor_master_sj[".sqlHead"] = "SELECT contractor_id, contractor_type, contractor_doc_id, contractor_image, contractor_nombresfull, contractor_email, contractor_email_mincit, contractor_address, contractor_phone, contractor_mobile, contractor_city, sys_status, contractor_sup_jerarquico, contractor_dependencia";
$tdatacontractor_master_sj[".sqlFrom"] = "FROM contractor_master";
$tdatacontractor_master_sj[".sqlWhereExpr"] = "(sys_status = 1)";
$tdatacontractor_master_sj[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontractor_master_sj[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontractor_master_sj[".arrGroupsPerPage"] = $arrGPP;

$tdatacontractor_master_sj[".highlightSearchResults"] = true;

$tableKeyscontractor_master_sj = array();
$tableKeyscontractor_master_sj[] = "contractor_id";
$tableKeyscontractor_master_sj[] = "contractor_doc_id";
$tdatacontractor_master_sj[".Keys"] = $tableKeyscontractor_master_sj;


$tdatacontractor_master_sj[".hideMobileList"] = array();




//	contractor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "contractor_id";
	$fdata["GoodName"] = "contractor_id";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_SJ","contractor_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "contractor_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_id";

	
	
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


	$tdatacontractor_master_sj["contractor_id"] = $fdata;
		$tdatacontractor_master_sj[".searchableFields"][] = "contractor_id";
//	contractor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "contractor_type";
	$fdata["GoodName"] = "contractor_type";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_SJ","contractor_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_type";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_type";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatacontractor_master_sj["contractor_type"] = $fdata;
		$tdatacontractor_master_sj[".searchableFields"][] = "contractor_type";
//	contractor_doc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "contractor_doc_id";
	$fdata["GoodName"] = "contractor_doc_id";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_SJ","contractor_doc_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_doc_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_doc_id";

	
	
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


	$tdatacontractor_master_sj["contractor_doc_id"] = $fdata;
		$tdatacontractor_master_sj[".searchableFields"][] = "contractor_doc_id";
//	contractor_image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "contractor_image";
	$fdata["GoodName"] = "contractor_image";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_SJ","contractor_image");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_image";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_image";

	
	
				$fdata["UploadFolder"] = "https://sisecg.mindeporte.gov.co/athena/GestionContratistas/foto_perfil/";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 150;
	$vdata["ImageHeight"] = 120;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;


	$fdata["Absolute"] = true;


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


	$tdatacontractor_master_sj["contractor_image"] = $fdata;
		$tdatacontractor_master_sj[".searchableFields"][] = "contractor_image";
//	contractor_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "contractor_nombresfull";
	$fdata["GoodName"] = "contractor_nombresfull";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_SJ","contractor_nombresfull");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_nombresfull";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_nombresfull";

	
	
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


	$tdatacontractor_master_sj["contractor_nombresfull"] = $fdata;
		$tdatacontractor_master_sj[".searchableFields"][] = "contractor_nombresfull";
//	contractor_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "contractor_email";
	$fdata["GoodName"] = "contractor_email";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_SJ","contractor_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_email";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_email";

	
	
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


	$tdatacontractor_master_sj["contractor_email"] = $fdata;
		$tdatacontractor_master_sj[".searchableFields"][] = "contractor_email";
//	contractor_email_mincit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "contractor_email_mincit";
	$fdata["GoodName"] = "contractor_email_mincit";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_SJ","contractor_email_mincit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_email_mincit";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_email_mincit";

	
	
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


	$tdatacontractor_master_sj["contractor_email_mincit"] = $fdata;
		$tdatacontractor_master_sj[".searchableFields"][] = "contractor_email_mincit";
//	contractor_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "contractor_address";
	$fdata["GoodName"] = "contractor_address";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_SJ","contractor_address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_address";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_address";

	
	
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


	$tdatacontractor_master_sj["contractor_address"] = $fdata;
		$tdatacontractor_master_sj[".searchableFields"][] = "contractor_address";
//	contractor_phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "contractor_phone";
	$fdata["GoodName"] = "contractor_phone";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_SJ","contractor_phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_phone";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_phone";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdatacontractor_master_sj["contractor_phone"] = $fdata;
		$tdatacontractor_master_sj[".searchableFields"][] = "contractor_phone";
//	contractor_mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "contractor_mobile";
	$fdata["GoodName"] = "contractor_mobile";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_SJ","contractor_mobile");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_mobile";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_mobile";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdatacontractor_master_sj["contractor_mobile"] = $fdata;
		$tdatacontractor_master_sj[".searchableFields"][] = "contractor_mobile";
//	contractor_city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "contractor_city";
	$fdata["GoodName"] = "contractor_city";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_SJ","contractor_city");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_city";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_city";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatacontractor_master_sj["contractor_city"] = $fdata;
		$tdatacontractor_master_sj[".searchableFields"][] = "contractor_city";
//	sys_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "sys_status";
	$fdata["GoodName"] = "sys_status";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_SJ","sys_status");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sys_status";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_status";

	
	
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
	$edata["LookupTable"] = "global_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_status";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "status_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatacontractor_master_sj["sys_status"] = $fdata;
		$tdatacontractor_master_sj[".searchableFields"][] = "sys_status";
//	contractor_sup_jerarquico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "contractor_sup_jerarquico";
	$fdata["GoodName"] = "contractor_sup_jerarquico";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_SJ","contractor_sup_jerarquico");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "contractor_sup_jerarquico";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_sup_jerarquico";

	
	
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


	$tdatacontractor_master_sj["contractor_sup_jerarquico"] = $fdata;
		$tdatacontractor_master_sj[".searchableFields"][] = "contractor_sup_jerarquico";
//	contractor_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "contractor_dependencia";
	$fdata["GoodName"] = "contractor_dependencia";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_SJ","contractor_dependencia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "contractor_dependencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_dependencia";

	
	
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


	$tdatacontractor_master_sj["contractor_dependencia"] = $fdata;
		$tdatacontractor_master_sj[".searchableFields"][] = "contractor_dependencia";


$tables_data["contractor_master_SJ"]=&$tdatacontractor_master_sj;
$field_labels["contractor_master_SJ"] = &$fieldLabelscontractor_master_sj;
$fieldToolTips["contractor_master_SJ"] = &$fieldToolTipscontractor_master_sj;
$placeHolders["contractor_master_SJ"] = &$placeHolderscontractor_master_sj;
$page_titles["contractor_master_SJ"] = &$pageTitlescontractor_master_sj;


changeTextControlsToDate( "contractor_master_SJ" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contractor_master_SJ"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contractor_master_SJ"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dependencia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dependencia_SJ";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "dependencia_sj";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contractor_master_SJ"][0] = $masterParams;
				$masterTablesData["contractor_master_SJ"][0]["masterKeys"] = array();
	$masterTablesData["contractor_master_SJ"][0]["masterKeys"][]="id";
				$masterTablesData["contractor_master_SJ"][0]["detailKeys"] = array();
	$masterTablesData["contractor_master_SJ"][0]["detailKeys"][]="contractor_dependencia";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contractor_master_sj()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "contractor_id, contractor_type, contractor_doc_id, contractor_image, contractor_nombresfull, contractor_email, contractor_email_mincit, contractor_address, contractor_phone, contractor_mobile, contractor_city, sys_status, contractor_sup_jerarquico, contractor_dependencia";
$proto0["m_strFrom"] = "FROM contractor_master";
$proto0["m_strWhere"] = "(sys_status = 1)";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "sys_status = 1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sys_status",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_SJ"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 1";
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
	"m_strName" => "contractor_id",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_SJ"
));

$proto6["m_sql"] = "contractor_id";
$proto6["m_srcTableName"] = "contractor_master_SJ";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_type",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_SJ"
));

$proto8["m_sql"] = "contractor_type";
$proto8["m_srcTableName"] = "contractor_master_SJ";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_doc_id",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_SJ"
));

$proto10["m_sql"] = "contractor_doc_id";
$proto10["m_srcTableName"] = "contractor_master_SJ";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_image",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_SJ"
));

$proto12["m_sql"] = "contractor_image";
$proto12["m_srcTableName"] = "contractor_master_SJ";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_nombresfull",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_SJ"
));

$proto14["m_sql"] = "contractor_nombresfull";
$proto14["m_srcTableName"] = "contractor_master_SJ";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_SJ"
));

$proto16["m_sql"] = "contractor_email";
$proto16["m_srcTableName"] = "contractor_master_SJ";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email_mincit",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_SJ"
));

$proto18["m_sql"] = "contractor_email_mincit";
$proto18["m_srcTableName"] = "contractor_master_SJ";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_address",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_SJ"
));

$proto20["m_sql"] = "contractor_address";
$proto20["m_srcTableName"] = "contractor_master_SJ";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_phone",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_SJ"
));

$proto22["m_sql"] = "contractor_phone";
$proto22["m_srcTableName"] = "contractor_master_SJ";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_mobile",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_SJ"
));

$proto24["m_sql"] = "contractor_mobile";
$proto24["m_srcTableName"] = "contractor_master_SJ";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_city",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_SJ"
));

$proto26["m_sql"] = "contractor_city";
$proto26["m_srcTableName"] = "contractor_master_SJ";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_status",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_SJ"
));

$proto28["m_sql"] = "sys_status";
$proto28["m_srcTableName"] = "contractor_master_SJ";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_sup_jerarquico",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_SJ"
));

$proto30["m_sql"] = "contractor_sup_jerarquico";
$proto30["m_srcTableName"] = "contractor_master_SJ";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_dependencia",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_SJ"
));

$proto32["m_sql"] = "contractor_dependencia";
$proto32["m_srcTableName"] = "contractor_master_SJ";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "contractor_master";
$proto35["m_srcTableName"] = "contractor_master_SJ";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "active";
$proto35["m_columns"][] = "actividad_economica";
$proto35["m_columns"][] = "bank_cta_number";
$proto35["m_columns"][] = "bank_cta_type";
$proto35["m_columns"][] = "bank_name";
$proto35["m_columns"][] = "contractor_address";
$proto35["m_columns"][] = "contractor_arl";
$proto35["m_columns"][] = "contractor_cajacompensacion";
$proto35["m_columns"][] = "contractor_city";
$proto35["m_columns"][] = "contractor_decljur";
$proto35["m_columns"][] = "contractor_dependencia";
$proto35["m_columns"][] = "contractor_dependientes";
$proto35["m_columns"][] = "contractor_doc_dv";
$proto35["m_columns"][] = "contractor_doc_id";
$proto35["m_columns"][] = "contractor_email";
$proto35["m_columns"][] = "contractor_email_mincit";
$proto35["m_columns"][] = "contractor_eps";
$proto35["m_columns"][] = "contractor_fondopensiones";
$proto35["m_columns"][] = "contractor_id";
$proto35["m_columns"][] = "contractor_image";
$proto35["m_columns"][] = "contractor_lname";
$proto35["m_columns"][] = "contractor_medicinapre_file";
$proto35["m_columns"][] = "contractor_mobile";
$proto35["m_columns"][] = "contractor_name";
$proto35["m_columns"][] = "contractor_nombresfull";
$proto35["m_columns"][] = "contractor_phone";
$proto35["m_columns"][] = "contractor_picmonetaria_file";
$proto35["m_columns"][] = "contractor_pwd";
$proto35["m_columns"][] = "contractor_sup_jerarquico";
$proto35["m_columns"][] = "contractor_type";
$proto35["m_columns"][] = "ct_fecha_nacimiento";
$proto35["m_columns"][] = "ct_fecha_nacimiento_mun";
$proto35["m_columns"][] = "ct_nacionalidad";
$proto35["m_columns"][] = "dem_discapacidad";
$proto35["m_columns"][] = "dem_edad";
$proto35["m_columns"][] = "dem_educacion";
$proto35["m_columns"][] = "dem_genero";
$proto35["m_columns"][] = "dem_ocupacion";
$proto35["m_columns"][] = "dem_profesion";
$proto35["m_columns"][] = "emergencia";
$proto35["m_columns"][] = "enlace_sigep";
$proto35["m_columns"][] = "factura";
$proto35["m_columns"][] = "groupid";
$proto35["m_columns"][] = "iva_regimen";
$proto35["m_columns"][] = "pin";
$proto35["m_columns"][] = "reset_date";
$proto35["m_columns"][] = "reset_token";
$proto35["m_columns"][] = "responsabilidades";
$proto35["m_columns"][] = "signature";
$proto35["m_columns"][] = "sys_date";
$proto35["m_columns"][] = "sys_last_upd";
$proto35["m_columns"][] = "sys_level";
$proto35["m_columns"][] = "sys_status";
$proto35["m_columns"][] = "sys_update";
$proto35["m_columns"][] = "sys_user";
$proto35["m_columns"][] = "terms_acepta";
$proto35["m_columns"][] = "terms_msj";
$proto35["m_columns"][] = "ubica_dep";
$proto35["m_columns"][] = "ubica_extension";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "contractor_master";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "contractor_master_SJ";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contractor_master_SJ";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contractor_master_sj = createSqlQuery_contractor_master_sj();


	
								;

														

$tdatacontractor_master_sj[".sqlquery"] = $queryData_contractor_master_sj;



$tdatacontractor_master_sj[".hasEvents"] = false;

?>