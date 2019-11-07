<?php 

//classes

class User {
	//type of property (public/private)
	//public: access these properties outside the class
	//private: only used inside the class

	public $email;
	public $name;

	public function __construct($name, $email){
		//$this->email = 'ron@gmail.com';
		//$this->name = 'ron';
		$this->email = $email;
		$this->name = $name;
	}

	public function login(){
		//echo 'the user logged in';
		echo $this->name . ' logged in';
	}

}

	//instatiate a class
	//$userOne = new User();

	//$userOne->login();
	//echo $userOne->name;

	$userTwo = new User('simon', 'simon@gmail.com');
	//echo $userTwo->name;
	//echo $userTwo->email;
	//$userTwo->login();

	$userTwo->name = 'toby';
	echo $userTwo->name;

?>