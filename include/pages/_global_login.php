<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'login_message',
'text' ),
'top' => array( 'text1' ),
'grid' => array( 'username_label',
'username',
'password_label',
'password',
'remember_password',
'guest_login' ),
'footer' => array( 'login_button',
'login_remind' ),
'superbottom' => array(  ) ),
'formXtTags' => array( 'superbottom' => array(  ) ),
'itemForms' => array( 'login_message' => 'above-grid',
'text' => 'above-grid',
'text1' => 'top',
'username_label' => 'grid',
'username' => 'grid',
'password_label' => 'grid',
'password' => 'grid',
'remember_password' => 'grid',
'guest_login' => 'grid',
'login_button' => 'footer',
'login_remind' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'login_message' => array( 'login_message' ),
'username_label' => array( 'username_label' ),
'username' => array( 'username' ),
'password_label' => array( 'password_label' ),
'password' => array( 'password' ),
'login_button' => array( 'login_button' ),
'guest_login' => array( 'guest_login' ),
'remember_password' => array( 'remember_password' ),
'text' => array( 'text',
'text1' ),
'login_remind' => array( 'login_remind' ) ),
'cellMaps' => array(  ) ),
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
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'login',
'type' => 'login',
'layoutId' => 'pretty1',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'login-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'login_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'text' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'plogin-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'text1' ) ),
'c2' => array( 'model' => 'c2',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'plogin-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2',
'colspan' => 2 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c6' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'username_label',
'username' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'password_label',
'password' ) ),
'c4' => array( 'model' => 'c4',
'items' => array( 'remember_password' ) ),
'c6' => array( 'model' => 'c6',
'items' => array( 'guest_login' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'plogin-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 1 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'login_button' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'login_remind' ),
'align' => 'right' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'superbottom' => array( 'modelId' => 'plogin-superbottom',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'login_message' => array( 'type' => 'login_message' ),
'username_label' => array( 'type' => 'username_label' ),
'username' => array( 'type' => 'username' ),
'password_label' => array( 'type' => 'password_label' ),
'password' => array( 'type' => 'password' ),
'login_button' => array( 'type' => 'login_button',
'icon' => array( 'glyph' => 'log-in' ),
'label' => array( 'type' => 0,
'text' => 'Ingresar' ),
'buttonStyle' => 'success',
'buttonSize' => 'large' ),
'guest_login' => array( 'type' => 'guest_login' ),
'remember_password' => array( 'type' => 'remember_password' ),
'text' => array( 'type' => 'text',
'label' => array( 'text' => '<p><em>Ingrese su nombre de usuario y contraseña asignados</em></p>',
'type' => 0 ),
'editedByRte' => true ),
'login_remind' => array( 'type' => 'login_remind',
'buttonStyle' => 'link-button',
'buttonSize' => 'large',
'icon' => array( 'fa' => 'key' ),
'label' => array( 'label' => 'FORGOT',
'type' => 1 ) ),
'text1' => array( 'type' => 'text',
'label' => array( 'text' => '<DIV style="position: relative; top: 1px; white-space: nowrap;">
<IMG height="100%" id="navbarlogo" alt="Logo Entidad" src="../_img/logos/logo35.png" />
</DIV>',
'type' => 0 ),
'editedByRte' => false ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image',
'shadow' => false,
'fullSize' => true,
'image' => array( 'source' => 1,
'image' => 'matheus-negrao-2oQAi9M6cVY-unsplash.jpg' ) ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => '#f7f7f7',
'imagePosition' => 'left',
'listTotals' => 1 );
		?>