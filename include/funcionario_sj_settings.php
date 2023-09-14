<?php
$tdatafuncionario_sj = array();
$tdatafuncionario_sj[".searchableFields"] = array();
$tdatafuncionario_sj[".ShortName"] = "funcionario_sj";
$tdatafuncionario_sj[".OwnerID"] = "";
$tdatafuncionario_sj[".OriginalTable"] = "funcionario";


$tdatafuncionario_sj[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatafuncionario_sj[".originalPagesByType"] = $tdatafuncionario_sj[".pagesByType"];
$tdatafuncionario_sj[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatafuncionario_sj[".originalPages"] = $tdatafuncionario_sj[".pages"];
$tdatafuncionario_sj[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatafuncionario_sj[".originalDefaultPages"] = $tdatafuncionario_sj[".defaultPages"];

//	field labels
$fieldLabelsfuncionario_sj = array();
$fieldToolTipsfuncionario_sj = array();
$pageTitlesfuncionario_sj = array();
$placeHoldersfuncionario_sj = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfuncionario_sj["Spanish"] = array();
	$fieldToolTipsfuncionario_sj["Spanish"] = array();
	$placeHoldersfuncionario_sj["Spanish"] = array();
	$pageTitlesfuncionario_sj["Spanish"] = array();
	$fieldLabelsfuncionario_sj["Spanish"]["id"] = "Id";
	$fieldToolTipsfuncionario_sj["Spanish"]["id"] = "";
	$placeHoldersfuncionario_sj["Spanish"]["id"] = "";
	$fieldLabelsfuncionario_sj["Spanish"]["idEvaluador"] = "Jefe inmediato";
	$fieldToolTipsfuncionario_sj["Spanish"]["idEvaluador"] = "";
	$placeHoldersfuncionario_sj["Spanish"]["idEvaluador"] = "";
	$fieldLabelsfuncionario_sj["Spanish"]["cedula"] = "Cédula";
	$fieldToolTipsfuncionario_sj["Spanish"]["cedula"] = "";
	$placeHoldersfuncionario_sj["Spanish"]["cedula"] = "";
	$fieldLabelsfuncionario_sj["Spanish"]["lugarExpedicion"] = "Lugar Expedición";
	$fieldToolTipsfuncionario_sj["Spanish"]["lugarExpedicion"] = "";
	$placeHoldersfuncionario_sj["Spanish"]["lugarExpedicion"] = "";
	$fieldLabelsfuncionario_sj["Spanish"]["fechaIngreso"] = "Fecha Ingreso";
	$fieldToolTipsfuncionario_sj["Spanish"]["fechaIngreso"] = "";
	$placeHoldersfuncionario_sj["Spanish"]["fechaIngreso"] = "";
	$fieldLabelsfuncionario_sj["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsfuncionario_sj["Spanish"]["nombre"] = "";
	$placeHoldersfuncionario_sj["Spanish"]["nombre"] = "";
	$fieldLabelsfuncionario_sj["Spanish"]["ubicacionFisica"] = "Ubicacion Fisica";
	$fieldToolTipsfuncionario_sj["Spanish"]["ubicacionFisica"] = "";
	$placeHoldersfuncionario_sj["Spanish"]["ubicacionFisica"] = "";
	$fieldLabelsfuncionario_sj["Spanish"]["idCargo"] = "Cargo";
	$fieldToolTipsfuncionario_sj["Spanish"]["idCargo"] = "";
	$placeHoldersfuncionario_sj["Spanish"]["idCargo"] = "";
	$fieldLabelsfuncionario_sj["Spanish"]["idDependencia"] = "Dependencia";
	$fieldToolTipsfuncionario_sj["Spanish"]["idDependencia"] = "";
	$placeHoldersfuncionario_sj["Spanish"]["idDependencia"] = "";
	$fieldLabelsfuncionario_sj["Spanish"]["idContrato"] = "Id Contrato";
	$fieldToolTipsfuncionario_sj["Spanish"]["idContrato"] = "";
	$placeHoldersfuncionario_sj["Spanish"]["idContrato"] = "";
	$fieldLabelsfuncionario_sj["Spanish"]["idNombramiento"] = "Vinculado como";
	$fieldToolTipsfuncionario_sj["Spanish"]["idNombramiento"] = "";
	$placeHoldersfuncionario_sj["Spanish"]["idNombramiento"] = "";
	$fieldLabelsfuncionario_sj["Spanish"]["estado_funcionario"] = "Estado de acceso";
	$fieldToolTipsfuncionario_sj["Spanish"]["estado_funcionario"] = "";
	$placeHoldersfuncionario_sj["Spanish"]["estado_funcionario"] = "";
	$fieldLabelsfuncionario_sj["Spanish"]["apellidos"] = "Apellidos";
	$fieldToolTipsfuncionario_sj["Spanish"]["apellidos"] = "";
	$placeHoldersfuncionario_sj["Spanish"]["apellidos"] = "";
	$fieldLabelsfuncionario_sj["Spanish"]["signpad"] = "Firma";
	$fieldToolTipsfuncionario_sj["Spanish"]["signpad"] = "";
	$placeHoldersfuncionario_sj["Spanish"]["signpad"] = "";
	$fieldLabelsfuncionario_sj["Spanish"]["sueldo"] = "Sueldo";
	$fieldToolTipsfuncionario_sj["Spanish"]["sueldo"] = "";
	$placeHoldersfuncionario_sj["Spanish"]["sueldo"] = "";
	if (count($fieldToolTipsfuncionario_sj["Spanish"]))
		$tdatafuncionario_sj[".isUseToolTips"] = true;
}


	$tdatafuncionario_sj[".NCSearch"] = true;



$tdatafuncionario_sj[".shortTableName"] = "funcionario_sj";
$tdatafuncionario_sj[".nSecOptions"] = 0;

$tdatafuncionario_sj[".mainTableOwnerID"] = "";
$tdatafuncionario_sj[".entityType"] = 1;
$tdatafuncionario_sj[".connId"] = "edl_at_localhost";


$tdatafuncionario_sj[".strOriginalTableName"] = "funcionario";

	



$tdatafuncionario_sj[".showAddInPopup"] = false;

$tdatafuncionario_sj[".showEditInPopup"] = false;

$tdatafuncionario_sj[".showViewInPopup"] = false;

$tdatafuncionario_sj[".listAjax"] = false;
//	temporary
//$tdatafuncionario_sj[".listAjax"] = false;

	$tdatafuncionario_sj[".audit"] = true;

	$tdatafuncionario_sj[".locking"] = true;


$pages = $tdatafuncionario_sj[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafuncionario_sj[".edit"] = true;
	$tdatafuncionario_sj[".afterEditAction"] = 1;
	$tdatafuncionario_sj[".closePopupAfterEdit"] = 1;
	$tdatafuncionario_sj[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafuncionario_sj[".add"] = true;
$tdatafuncionario_sj[".afterAddAction"] = 1;
$tdatafuncionario_sj[".closePopupAfterAdd"] = 1;
$tdatafuncionario_sj[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafuncionario_sj[".list"] = true;
}



$tdatafuncionario_sj[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafuncionario_sj[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafuncionario_sj[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafuncionario_sj[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafuncionario_sj[".printFriendly"] = true;
}



$tdatafuncionario_sj[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafuncionario_sj[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafuncionario_sj[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafuncionario_sj[".isUseAjaxSuggest"] = true;





$tdatafuncionario_sj[".ajaxCodeSnippetAdded"] = false;

$tdatafuncionario_sj[".buttonsAdded"] = false;

$tdatafuncionario_sj[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuncionario_sj[".isUseTimeForSearch"] = false;


$tdatafuncionario_sj[".badgeColor"] = "e67349";


$tdatafuncionario_sj[".allSearchFields"] = array();
$tdatafuncionario_sj[".filterFields"] = array();
$tdatafuncionario_sj[".requiredSearchFields"] = array();

$tdatafuncionario_sj[".googleLikeFields"] = array();
$tdatafuncionario_sj[".googleLikeFields"][] = "id";
$tdatafuncionario_sj[".googleLikeFields"][] = "cedula";
$tdatafuncionario_sj[".googleLikeFields"][] = "nombre";
$tdatafuncionario_sj[".googleLikeFields"][] = "apellidos";
$tdatafuncionario_sj[".googleLikeFields"][] = "lugarExpedicion";
$tdatafuncionario_sj[".googleLikeFields"][] = "fechaIngreso";
$tdatafuncionario_sj[".googleLikeFields"][] = "ubicacionFisica";
$tdatafuncionario_sj[".googleLikeFields"][] = "idCargo";
$tdatafuncionario_sj[".googleLikeFields"][] = "idDependencia";
$tdatafuncionario_sj[".googleLikeFields"][] = "sueldo";
$tdatafuncionario_sj[".googleLikeFields"][] = "idEvaluador";
$tdatafuncionario_sj[".googleLikeFields"][] = "idContrato";
$tdatafuncionario_sj[".googleLikeFields"][] = "idNombramiento";
$tdatafuncionario_sj[".googleLikeFields"][] = "estado_funcionario";
$tdatafuncionario_sj[".googleLikeFields"][] = "signpad";



$tdatafuncionario_sj[".tableType"] = "list";

$tdatafuncionario_sj[".printerPageOrientation"] = 0;
$tdatafuncionario_sj[".nPrinterPageScale"] = 100;

$tdatafuncionario_sj[".nPrinterSplitRecords"] = 40;

$tdatafuncionario_sj[".geocodingEnabled"] = false;




$tdatafuncionario_sj[".isDisplayLoading"] = true;






$tdatafuncionario_sj[".pageSize"] = 20;

$tdatafuncionario_sj[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafuncionario_sj[".strOrderBy"] = $tstrOrderBy;

$tdatafuncionario_sj[".orderindexes"] = array();


$tdatafuncionario_sj[".sqlHead"] = "SELECT id, cedula, nombre, apellidos, lugarExpedicion, fechaIngreso, ubicacionFisica, idCargo, idDependencia, sueldo, idEvaluador, idContrato, idNombramiento, estado_funcionario, signpad";
$tdatafuncionario_sj[".sqlFrom"] = "FROM funcionario";
$tdatafuncionario_sj[".sqlWhereExpr"] = "(estado_funcionario = 1)";
$tdatafuncionario_sj[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafuncionario_sj[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuncionario_sj[".arrGroupsPerPage"] = $arrGPP;

$tdatafuncionario_sj[".highlightSearchResults"] = true;

$tableKeysfuncionario_sj = array();
$tableKeysfuncionario_sj[] = "id";
$tdatafuncionario_sj[".Keys"] = $tableKeysfuncionario_sj;


$tdatafuncionario_sj[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_SJ","id");
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


	$tdatafuncionario_sj["id"] = $fdata;
		$tdatafuncionario_sj[".searchableFields"][] = "id";
//	cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cedula";
	$fdata["GoodName"] = "cedula";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_SJ","cedula");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cedula";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cedula";

	
	
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
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Documento %value% ya existe!", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatafuncionario_sj["cedula"] = $fdata;
		$tdatafuncionario_sj[".searchableFields"][] = "cedula";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_SJ","nombre");
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


	$tdatafuncionario_sj["nombre"] = $fdata;
		$tdatafuncionario_sj[".searchableFields"][] = "nombre";
//	apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "apellidos";
	$fdata["GoodName"] = "apellidos";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_SJ","apellidos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "apellidos";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apellidos";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatafuncionario_sj["apellidos"] = $fdata;
		$tdatafuncionario_sj[".searchableFields"][] = "apellidos";
//	lugarExpedicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "lugarExpedicion";
	$fdata["GoodName"] = "lugarExpedicion";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_SJ","lugarExpedicion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "lugarExpedicion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lugarExpedicion";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatafuncionario_sj["lugarExpedicion"] = $fdata;
		$tdatafuncionario_sj[".searchableFields"][] = "lugarExpedicion";
//	fechaIngreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fechaIngreso";
	$fdata["GoodName"] = "fechaIngreso";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_SJ","fechaIngreso");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fechaIngreso";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fechaIngreso";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 50;
	$edata["LastYearFactor"] = 0;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatafuncionario_sj["fechaIngreso"] = $fdata;
		$tdatafuncionario_sj[".searchableFields"][] = "fechaIngreso";
//	ubicacionFisica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ubicacionFisica";
	$fdata["GoodName"] = "ubicacionFisica";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_SJ","ubicacionFisica");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ubicacionFisica";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ubicacionFisica";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatafuncionario_sj["ubicacionFisica"] = $fdata;
		$tdatafuncionario_sj[".searchableFields"][] = "ubicacionFisica";
//	idCargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idCargo";
	$fdata["GoodName"] = "idCargo";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_SJ","idCargo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idCargo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idCargo";

	
	
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
	$edata["LookupTable"] = "cargo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatafuncionario_sj["idCargo"] = $fdata;
		$tdatafuncionario_sj[".searchableFields"][] = "idCargo";
//	idDependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "idDependencia";
	$fdata["GoodName"] = "idDependencia";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_SJ","idDependencia");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idDependencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idDependencia";

	
	
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
	$edata["LookupTable"] = "dependencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatafuncionario_sj["idDependencia"] = $fdata;
		$tdatafuncionario_sj[".searchableFields"][] = "idDependencia";
//	sueldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sueldo";
	$fdata["GoodName"] = "sueldo";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_SJ","sueldo");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "sueldo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sueldo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
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


	$tdatafuncionario_sj["sueldo"] = $fdata;
		$tdatafuncionario_sj[".searchableFields"][] = "sueldo";
//	idEvaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "idEvaluador";
	$fdata["GoodName"] = "idEvaluador";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_SJ","idEvaluador");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idEvaluador";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idEvaluador";

	
	
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
	$edata["LookupTable"] = "funcionario";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "CONCAT_WS(\" \",nombre, apellidos)";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "nombre";

	
	
	
	

	
	
	
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


	$tdatafuncionario_sj["idEvaluador"] = $fdata;
		$tdatafuncionario_sj[".searchableFields"][] = "idEvaluador";
//	idContrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "idContrato";
	$fdata["GoodName"] = "idContrato";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_SJ","idContrato");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "idContrato";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idContrato";

	
	
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
	$edata["LookupTable"] = "contrato";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdatafuncionario_sj["idContrato"] = $fdata;
		$tdatafuncionario_sj[".searchableFields"][] = "idContrato";
//	idNombramiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "idNombramiento";
	$fdata["GoodName"] = "idNombramiento";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_SJ","idNombramiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "idNombramiento";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idNombramiento";

	
	
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
	$edata["LookupTable"] = "nombramiento";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdatafuncionario_sj["idNombramiento"] = $fdata;
		$tdatafuncionario_sj[".searchableFields"][] = "idNombramiento";
//	estado_funcionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "estado_funcionario";
	$fdata["GoodName"] = "estado_funcionario";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_SJ","estado_funcionario");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "estado_funcionario";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_funcionario";

	
	
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


	$tdatafuncionario_sj["estado_funcionario"] = $fdata;
		$tdatafuncionario_sj[".searchableFields"][] = "estado_funcionario";
//	signpad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "signpad";
	$fdata["GoodName"] = "signpad";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario_SJ","signpad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "signpad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "signpad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 300;
	$vdata["ImageHeight"] = 100;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

		
	$vdata["imageBorder"] = 0;
	$vdata["imageFullWidth"] = 0;


	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "SignaturePad");

	
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


	$tdatafuncionario_sj["signpad"] = $fdata;
		$tdatafuncionario_sj[".searchableFields"][] = "signpad";


$tables_data["funcionario_SJ"]=&$tdatafuncionario_sj;
$field_labels["funcionario_SJ"] = &$fieldLabelsfuncionario_sj;
$fieldToolTips["funcionario_SJ"] = &$fieldToolTipsfuncionario_sj;
$placeHolders["funcionario_SJ"] = &$placeHoldersfuncionario_sj;
$page_titles["funcionario_SJ"] = &$pageTitlesfuncionario_sj;


changeTextControlsToDate( "funcionario_SJ" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["funcionario_SJ"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["funcionario_SJ"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dependencia";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dependencia_SJ";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "dependencia_sj";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["funcionario_SJ"][0] = $masterParams;
				$masterTablesData["funcionario_SJ"][0]["masterKeys"] = array();
	$masterTablesData["funcionario_SJ"][0]["masterKeys"][]="id";
				$masterTablesData["funcionario_SJ"][0]["detailKeys"] = array();
	$masterTablesData["funcionario_SJ"][0]["detailKeys"][]="idDependencia";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_funcionario_sj()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id, cedula, nombre, apellidos, lugarExpedicion, fechaIngreso, ubicacionFisica, idCargo, idDependencia, sueldo, idEvaluador, idContrato, idNombramiento, estado_funcionario, signpad";
$proto0["m_strFrom"] = "FROM funcionario";
$proto0["m_strWhere"] = "(estado_funcionario = 1)";
$proto0["m_strOrderBy"] = "";
	
								;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "estado_funcionario = 1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "estado_funcionario",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_SJ"
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
	"m_strName" => "id",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_SJ"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "funcionario_SJ";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cedula",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_SJ"
));

$proto8["m_sql"] = "cedula";
$proto8["m_srcTableName"] = "funcionario_SJ";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_SJ"
));

$proto10["m_sql"] = "nombre";
$proto10["m_srcTableName"] = "funcionario_SJ";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "apellidos",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_SJ"
));

$proto12["m_sql"] = "apellidos";
$proto12["m_srcTableName"] = "funcionario_SJ";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "lugarExpedicion",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_SJ"
));

$proto14["m_sql"] = "lugarExpedicion";
$proto14["m_srcTableName"] = "funcionario_SJ";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fechaIngreso",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_SJ"
));

$proto16["m_sql"] = "fechaIngreso";
$proto16["m_srcTableName"] = "funcionario_SJ";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ubicacionFisica",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_SJ"
));

$proto18["m_sql"] = "ubicacionFisica";
$proto18["m_srcTableName"] = "funcionario_SJ";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "idCargo",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_SJ"
));

$proto20["m_sql"] = "idCargo";
$proto20["m_srcTableName"] = "funcionario_SJ";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "idDependencia",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_SJ"
));

$proto22["m_sql"] = "idDependencia";
$proto22["m_srcTableName"] = "funcionario_SJ";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sueldo",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_SJ"
));

$proto24["m_sql"] = "sueldo";
$proto24["m_srcTableName"] = "funcionario_SJ";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluador",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_SJ"
));

$proto26["m_sql"] = "idEvaluador";
$proto26["m_srcTableName"] = "funcionario_SJ";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "idContrato",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_SJ"
));

$proto28["m_sql"] = "idContrato";
$proto28["m_srcTableName"] = "funcionario_SJ";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "idNombramiento",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_SJ"
));

$proto30["m_sql"] = "idNombramiento";
$proto30["m_srcTableName"] = "funcionario_SJ";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_funcionario",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_SJ"
));

$proto32["m_sql"] = "estado_funcionario";
$proto32["m_srcTableName"] = "funcionario_SJ";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "signpad",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario_SJ"
));

$proto34["m_sql"] = "signpad";
$proto34["m_srcTableName"] = "funcionario_SJ";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "funcionario";
$proto37["m_srcTableName"] = "funcionario_SJ";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "apellidos";
$proto37["m_columns"][] = "CargoProp";
$proto37["m_columns"][] = "cedula";
$proto37["m_columns"][] = "estado";
$proto37["m_columns"][] = "estado_funcionario";
$proto37["m_columns"][] = "fechaIngreso";
$proto37["m_columns"][] = "GradoProp";
$proto37["m_columns"][] = "id";
$proto37["m_columns"][] = "idCargo";
$proto37["m_columns"][] = "idContrato";
$proto37["m_columns"][] = "idDependencia";
$proto37["m_columns"][] = "idEvaluador";
$proto37["m_columns"][] = "IdEvaluador_c";
$proto37["m_columns"][] = "idNombramiento";
$proto37["m_columns"][] = "lugarExpedicion";
$proto37["m_columns"][] = "nombre";
$proto37["m_columns"][] = "photo";
$proto37["m_columns"][] = "refer";
$proto37["m_columns"][] = "signpad";
$proto37["m_columns"][] = "sueldo";
$proto37["m_columns"][] = "ubicacionFisica";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "funcionario";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "funcionario_SJ";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="funcionario_SJ";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_funcionario_sj = createSqlQuery_funcionario_sj();


	
								;

															

$tdatafuncionario_sj[".sqlquery"] = $queryData_funcionario_sj;



$tdatafuncionario_sj[".hasEvents"] = false;

?>