<?php 
	/*function Name(){
		echo "STRING";
	}

	Name();*/
	//php aRRAY
	// $ar = array(1,2,3,4,5);
/*
	$ar = ['a','b','c'];
	if(is_array($ar)){
		echo "This is array";
	}else{
		echo "Not an array";
	}*/

	//types of array
		//1.indexed array
		//2.Assotiative array
		//3. Multidimensional array

	/*$car = array('volvo','BMW','Toyoto');
	echo"<pre>";
	print_r($car);
	echo"</pre>";

	echo $car[2];
	$car[3] = 'Car';
	echo"<pre>";
	print_r($car);
	echo"</pre>";

	for($i=0;$i<4;$i++){
		echo $i.'=>'.$car[$i]."<br>";
	}*/

	/*$img = ['jpg','png','tif'];
	$ext = 'jpg';

	if(in_array($ext, $img)){
		echo "Sipported";
	}else{
		echo "Unsupported";
	}*/


	//Associative Array

		// $arr=array(
		// 	'key'=>'value',
		// 	'key1'=>'value1'
		// );
		// print_r($arr);
		// echo "<br>";

		// foreach ($arr as $key => $value) {
		// 	echo $key." has ".$value."<br>";
		// }

	//Multidimensional Array:
	/*$mul_dim= array(
		array(
			'name'=>'Niranjan',
			'address'=>'Liwali',
		),
		array(
			'name'=>'Niranjan',
			'address'=>'Liwali',
		),
		array(
			'name'=>'Niranjan',
			'address'=>'Liwali',
		),
	);

	echo ($mul_dim[0]['name']);*/

	//Sorting array
	/*
	ob_start();

	@header('location: index.php');*/

	//$email = "sunilbanmala@g@mail.com";
	//echo (filter_var($email,FILTER_VALIDATE_EMAIL));
	//FILTER_SANITIZE_STRING
	//FILTER_VALIDATE_URL
	//FILTE>R_SANITIZE_EMAIL

	//SUPER Global Variables(Pre defined Variables)
	// $Global
	// $_REQUEST
	// $_SERVER
	// $_POST
	// $_GET
	// $_FILES
	// $_COOKIE
	// $_SESSION

	// echo "<pre>";
	// print_r($_SERVER);

	//Date(format,timestamp)
	//date_default_timezone_set('Asia/Kathmandu');
	//mktime(hour,min,sec,month,day,year);
	echo (mktime(3,34,12,5,4,2010));
	echo"<br>";
	echo Date("Y/m/d h:i:s", mktime(3,34,12,5,4,2010));
	//1970 jan 1 oo:00:00
	echo "<br>";
	echo strtotime("10:30 pm April 15 2014");
	echo "<br>";
	echo Date("Y/m/d h:i:s", strtotime("after five days"));
	echo 
	