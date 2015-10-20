<?php 


class Session {
	private $signed_in = false;
	public $user_id;

//we want session to be available everytime the api is on
	//turn on sessions automatically

	function __construct() {
		session_start();
		//calling this function automatically 
		$this->check_the_login();
	}
//getter function
	public function is_signed_in() {
		return $this->signed_in;
	}

	//log in the user


	public function login($user) {

		if($user) {
			$this->user_id = $_SESSION['user_id'] = $user->id;
			$this->signed_in = true;
		}

	}

	public function logout() {
		unset($_SESSION['user_id']);
		unset($this->user_id);
		$this->signed_in = false;

	}

	private function check_the_login(){
		if (isset($_SESSION['user_id'])) {
			$this->iser_id = $_SESSION['user_id'];
			$this->signed_in = true;
		} else {
			unset($this->user_id);
			$this->signed_in = false;
		}
	}


}

$session = new Session();

?>