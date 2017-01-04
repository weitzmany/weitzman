<?

function render($options = []){
	$defaults = ['controller' => $GLOBALS['controller'], 'action' => $GLOBALS['action']];
	$options = array_merge($defaults,$options);
	extract($options);
	require_once('views/'.$controller.'/'.$action.'.php');
}

function model($model){
	require_once('models/'.$model.'.php');
}

function redirect($controller,$action){
	$location = "http://".$_SERVER['HTTP_HOST']."/$controller".($action == 'index' ? "" : "/$action");
	header("Location: $location"); 
}

?>