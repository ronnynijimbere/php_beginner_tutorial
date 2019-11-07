<?php 

//classes

class User {
	//type of property (public/private)
	//public: access these properties outside the class
	//private: only used inside the class

	private $email;
	private $name;

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

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		if(is_string($name) && strlen($name) > 1){
			$this->name = $name;
			return "name has been updated to $name";
		} else {
			return 'not a valid name';
		}
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

	//echo $userTwo->getName();
	//echo $userTwo->setName(50);
	echo $userTwo->setName('mike');
	echo $userTwo->getName();
?>