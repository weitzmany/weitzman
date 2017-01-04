<?
class usersCtrl{
	public function index(){
		$users = User::all();
		render(['users'=>$users]);
	}

	public function show(){

		if(!isset($_GET['id'])){
			return call('pages','error');
		}

		$user = User::find($_GET['id']);
		render(['user'=>$user]);
	}

	public function create(){
		if ($_SERVER['REQUEST_METHOD'] === 'POST'){
			User::create($_POST['name']);
			redirect('users','index');
		}else{
			render();
		}
	}
}
?>