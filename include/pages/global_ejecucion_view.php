<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'fields' => array( 'gridFields' => array( 'CODIGO_BPIN',
'FICHA_BPIN',
'RUBRO',
'USO_SN',
'TIPO',
'RESPONSABLE_ID',
'DEPENDENCIA_SUP_ID',
'DESCRIPCION',
'VIGENCIA',
'NOMBRE UEJ',
'APR. VIGENTE',
'DEPENDENCIA_ID' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'CODIGO_BPIN' => array( 'integrated_edit_field1' ),
'FICHA_BPIN' => array( 'integrated_edit_field2' ),
'RUBRO' => array( 'integrated_edit_field7' ),
'USO_SN' => array( 'integrated_edit_field8' ),
'TIPO' => array( 'integrated_edit_field9' ),
'RESPONSABLE_ID' => array( 'integrated_edit_field36' ),
'DEPENDENCIA_SUP_ID' => array( 'integrated_edit_field37' ),
'DESCRIPCION' => array( 'integrated_edit_field21' ),
'VIGENCIA' => array( 'integrated_edit_field' ),
'NOMBRE UEJ' => array( 'integrated_edit_field6' ),
'APR. VIGENTE' => array( 'integrated_edit_field25' ),
'DEPENDENCIA_ID' => array( 'integrated_edit_field35' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'view_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'tabs' ),
'section' => array( 'integrated_edit_field21',
'integrated_edit_field',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field25' ),
'section1' => array( 'integrated_edit_field1',
'integrated_edit_field2' ),
'section2' => array( 'integrated_edit_field35',
'integrated_edit_field36',
'integrated_edit_field37' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_header' => 'top',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'tabs' => 'grid',
'integrated_edit_field21' => 'section',
'integrated_edit_field' => 'section',
'integrated_edit_field6' => 'section',
'integrated_edit_field7' => 'section',
'integrated_edit_field8' => 'section',
'integrated_edit_field9' => 'section',
'integrated_edit_field25' => 'section',
'integrated_edit_field1' => 'section1',
'integrated_edit_field2' => 'section1',
'integrated_edit_field35' => 'section2',
'integrated_edit_field36' => 'section2',
'integrated_edit_field37' => 'section2' ),
'itemLocations' => array( 'tabs' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field21' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field' => array( 'location' => 'section',
'cellId' => 'c2' ),
'integrated_edit_field6' => array( 'location' => 'section',
'cellId' => 'c3' ),
'integrated_edit_field7' => array( 'location' => 'section',
'cellId' => 'c4' ),
'integrated_edit_field8' => array( 'location' => 'section',
'cellId' => 'c6' ),
'integrated_edit_field9' => array( 'location' => 'section',
'cellId' => 'c7' ),
'integrated_edit_field25' => array( 'location' => 'section',
'cellId' => 'c8' ),
'integrated_edit_field1' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'integrated_edit_field2' => array( 'location' => 'section1',
'cellId' => 'c' ),
'integrated_edit_field35' => array( 'location' => 'section2',
'cellId' => 'c1' ),
'integrated_edit_field36' => array( 'location' => 'section2',
'cellId' => 'c' ),
'integrated_edit_field37' => array( 'location' => 'section2',
'cellId' => 'c2' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field36',
'integrated_edit_field37',
'integrated_edit_field21',
'integrated_edit_field',
'integrated_edit_field6',
'integrated_edit_field25',
'integrated_edit_field35' ),
'tabs' => array( 'tabs' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0,
1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'tabs' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 2 ),
'section' => array( 'cells' => array( 'c2' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0,
1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field21' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field25' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 5 ),
'section1' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 2 ),
'section2' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field35' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field36' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field37' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 2 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c4',
'colspan' => 2 ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c3',
'items' => array(  ) ),
'c4' => array( 'model' => 'c3',
'items' => array( 'tabs' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ),
array( 'cell' => 'c3' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ),
array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8' ),
array( 'cell' => 'c9' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field21' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'useFullWidth' => true ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field' ) ),
'c3' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field6' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field7' ) ),
'c5' => array( 'model' => 'c1',
'items' => array(  ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field8' ) ),
'c7' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field9' ) ),
'c8' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field25' ) ),
'c9' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section1' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field2' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section2' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ),
array( 'cell' => 'c3' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field35' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field36' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field37' ) ),
'c3' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field1' => array( 'field' => 'CODIGO_BPIN',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'FICHA_BPIN',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field7' => array( 'field' => 'RUBRO',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'USO_SN',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'TIPO',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field36' => array( 'field' => 'RESPONSABLE_ID',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field37' => array( 'field' => 'DEPENDENCIA_SUP_ID',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'tabs' => array( 'type' => 'tabs',
'titles' => array( array( 'text' => 'RUBRO',
'type' => 0 ),
array( 'text' => 'BPIN',
'type' => 0 ),
array( 'text' => 'GERENTE',
'type' => 0 ) ),
'locations' => array( 'section',
'section1',
'section2' ),
'bsStyle' => 'default',
'panelType' => 2 ),
'integrated_edit_field21' => array( 'field' => 'DESCRIPCION',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field' => array( 'field' => 'VIGENCIA',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 'NOMBRE UEJ',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field25' => array( 'field' => 'APR. VIGENTE',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field35' => array( 'field' => 'DEPENDENCIA_ID',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>