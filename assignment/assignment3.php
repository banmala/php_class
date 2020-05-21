<?php 
 	function token($len){
 	 	$str="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
 	 	$str_len=strlen($str);
 	 	$token="";
 	 	for($i=0;$i<$len;$i++){
  			$token.=$str[rand(0,$str_len-1)];
 		}
 		return($token);
 	}
 	//Task 1
 	// session_start();
 	// $_SESSION['login_token'] = token(20);
 	// // session_unset();
 	// // debugger($_SESSION,true);
 	// ob_start();
 	// @header('location: test.php');
 	
 	//task 2
 	setcookie("AUTH_USER",token(20),time()+(7*24*60*60),'/');
	// debugger($_COOKIE);




  ?>