<?php 
	function debugger($data,$is_die=false){
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		if($is_die){
			exit();
		}
	}
	
	// //Session
	// //Superglobal Variables
	// //used to store user information across multiple pages
	// session_start();

	// $_SESSION['AdminName']="Admin";
	// $_SESSION['token'] = "safasdfasdfasfd";

	// debugger($_SESSION,true);
	// // session_unset();
	// // debugger($_SESSION,true);

	// ob_start();
	// @header('location: test.php');

	// 

	//OOP(Object Oriented Programming)
// class ClassName{
// 	function __construct($name){
// 		echo "I am ".$name;
// 	}

// 	function __destruct(){
// 		echo ("I am destructor");

// 	}
// }
// $obj = new ClassName("Sunil Banmala");


// class ClassName{
// 	function __construct($name){
// 		echo "I am ".$name;
// 	}

// 	function __destruct(){
// 		echo ("I am destructor");

// 	}
// 	function testFunction(){
// 		echo "I am a test function";
// 	}
// }
// $obj = new ClassName("Sunil Banmala");
// $obj->testFunction();


// class Car{
// 	private function test(){
// 		echo "i am test function";
// 	}
// 	function __construct(){
// 		$this->test();
// 	}
// }
// $obj = new Car();
// $obj->test();

// class Student{
// 	public $name='Sunil';
// 	protected $college = 'Khwopa';
// 	private $address = 'Liwali';
// 	//getter and setter functions

// 	function getCollege(){
// 		return $this->college;
// 	}
// 	function setCollege($college){
// 		$this->college=$college;
// 	}
// }
// $obj = new Student();
// echo $obj->name;
// //echo $obj->college;
// //echo $obj->address;
// debugger($obj);

// echo($obj->getCollege());
// $obj->setCollege("Khwopa College of Engineering");

// debugger($obj);


// class Student{
// 	function __construct($name="Niranjan",$college="Khwopa"){
// 		$this->name=$name;
// 		$this->college=$college;
// 	}	
// }
// $obj = new Student();
// debugger($obj);



// class Student{
// 	public $name="Rita";
// 	public $college="Khwopa";

// 	function test($name){
// 		$this->name=$name;
// 	}
// }
// $obj = new Student();
// debugger($obj);

// $obj1 = new Student();
// $obj1->test('Gits');
// debugger($obj1);


class Car{
	const WHEEL = 4;

	function getWheel(){
		return self::WHEEL;
		//or simply  return self::WHEEL
		//self is used by function using static values only 
	}
}
$obj = new Car();
debugger($obj);

echo Car::WHEEL;
echo Car::getWheel();

//$this->   is used in place of object inside class
//self::   is used in place of class name inside class 