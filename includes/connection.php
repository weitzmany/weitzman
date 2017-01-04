<?
class DB{
	private static $instance = null;

	private function __construct(){}

	private function __clone(){}

	public static function CON(){
		if(!isset(self::$instance)){
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			self::$instance = new PDO('mysql:host=localhost;dbname=weitzman_manage','weitzman_manage','sHv1209',$pdo_options);
		}
		return self::$instance;
	}
}
?>