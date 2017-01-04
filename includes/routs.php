<?
function call($controller,$action){
	$GLOBALS['controller'] = $controller;
	$GLOBALS['action'] = $action;
	require_once('controllers/' . $controller . 'Ctrl.php');

	switch($controller){
		case 'pages':
			$controller = new pagesCtrl();
			break;
		case 'users':
			model('user');
			$controller = new usersCtrl();
	}

	$controller->{$action}();
}

$controllers = [
		'pages' => ['home','error'],
		'users' => ['index','show','create']
	];

if(array_key_exists($controller, $controllers)){
	if(in_array($action, $controllers[$controller])){
		call($controller,$action);
	}else{
		call('pages','error');
	}
}else{
	call('pages','error');
}

?>