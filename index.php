<?
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('includes/connection.php');

if(isset($_GET['controller']) && isset($_GET['action'])){
	$controller = $_GET['controller'];
	$action = $_GET['action'];
}else{
	$controller = 'pages';
	$action = 'home';
}

require_once('includes/functions.php');


require_once('views/layout.php');
?>