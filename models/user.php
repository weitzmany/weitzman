<?
class User{

	public $id;
	public $name;

	public function __construct($id,$name){
		$this->id = $id;
		$this->name = $name;
	}

	public static function all(){
		$list = [];
		$req = DB::CON()->query('SELECT * FROM users');

		foreach($req->fetchAll() as $user){
			$list[] = new User($user['id'],$user['name']);
		}
		return $list;
	}

	public static function find($id){
		$id = intval($id);
		$req = DB::CON()->prepare('SELECT * FROM users WHERE id = :id');
		$req->execute(['id' => $id]);
		$user = $req->fetch();

		return new User($user['id'],$user['name']);
	}

	public static function create($name){
		$req = DB::CON()->exec("INSERT INTO users (name) VALUES ('$name')");
	}
}
?>