<?php
include_once("../config/database.php");
include_once("../config/function.php");

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	
	case 'print':
		$content 	= 'print.php';
		$template	= '../include/template_login.php';
		break;
		
	default :
		$content 	= 'list.php';
		$template	= '../include/template.php';
}

require_once $template;

?>





