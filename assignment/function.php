 <!DOCTYPE html>
 <html>
 <head>
 	<title>Assignment2</title>
 </head>
 <body>
 	<h5>Task-1: Sanitization</h5>
 	 <?php
 	 	function sanitize($str){
 	 		return(filter_var($str, FILTER_SANITIZE_STRING));
 	 	}
 		$str = "<h3>Hello World</h3>";
 		$newstr = sanitize($str);
 		echo "Before sanitization:<br>".$str;
 		echo "After sanitization:<br>".$newstr;
 	?> 
	<br>
	<h5>Task-2: Display Array</h5>
	<?php 
		function debugger($arr){
			echo ("<pre>");
			print_r($arr);
			echo ("</pre>");

		}
		$arr=['a','b','c','d','e'];
		debugger($arr);

	 ?>
	<br>
	<h5>Task-3: Generating Random Numbers</h5>
	<?php 
		function tokenizer($len){
			$mini = 1;
			$maxi =9;
			for($i=0;$i<$len-1;$i++){
				$mini*=10;
				$maxi=$maxi*10+9;
			}
			return(random_int($mini,$maxi));
		}
		$ran = tokenizer(5);
		echo($ran);
	 ?>
	 <br>
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
	 	echo(token(9));
	 ?>
	 <br>
	<h5>Task-4: Display Array in Table</h5>
	<?php 
		$usr_arr= array(
			array('S.N'=>1,'username'=>'banmala','email'=>'banmala@khwopa.com'),
			array('S.N'=>2,'username'=>'bekoju','email'=>'bekoju@khwopa.com'),
			array('S.N'=>3,'username'=>'apple','email'=>'apple@khwopa.com'),
			array('S.N'=>4,'username'=>'newton','email'=>'newton@khwopa.com'),
			array('S.N'=>5,'username'=>'potato','email'=>'potato@khwopa.com')
		);
		
		echo("
		<table>
			<tr>
				<th>S.N</th>
				<th>User Name</th>
				<th>Email</th>
			</tr>");
			for($i=0;$i<sizeof($usr_arr);$i++){
			  	echo("<tr>");
			  	foreach ($usr_arr[$i] as $key => $value) {
			  		if($key=='email'){
			  			echo("<td>".filter_var($value,FILTER_VALIDATE_EMAIL)."</td>");
			  		}else{
			   		echo("<td>".$value."</td>");
			   		}
			   	}
			   	echo("</tr>");
			}
		echo("</table>"); 


		$muti_dim = array(
		                    array('SN'=>1,'UserName' => 'U1',"EMAIL" => "U1@rocket.com"),
		                     array('SN'=>2,'UserName' => 'U2',"EMAIL" => "U2@rocket.com"),
		                     array('SN'=>3,'UserName' => 'U3',"EMAIL" => "U3@rocket.com"),
		                     array('SN'=>4,'UserName' => 'U4',"EMAIL" => "U4@rocket.com"),
		                     array('SN'=>5,'UserName' => 'U5',"EMAIL" => "U5@rocket.com"),
		                     array('SN'=>6,'UserName' => 'U6',"EMAIL" => "U6@rocket.com"),
		                     array('SN'=>7,'UserName' => 'U7',"EMAIL" => "U7@rocket.com"),
		                     array('SN'=>8,'UserName' => 'U8',"EMAIL" => "U8@rocket.com"),
		                     array('SN'=>9,'UserName' => 'U9',"EMAIL" => "U9@rocket.com"),
		                     array('SN'=>10,'UserName' => 'U10',"EMAIL" => "U10@rocket.com"),
		                    );
		  for ($i=0; $i <10 ; $i++) {
		   
		    print_r($multi_dim[$i]);
		  }
	
		
	 ?>
 </body>
 </html>
 
 <!-- a. Create a function that sanitizes a string by removing HTML tags, backslash with the signature sanitize (String): String
 
 b. Create a function that is used to display the content of the array with the signature debugger(array): None
 
 c. Create a function that is used to generate a random text. signature: tokenizer(length of string) : String
 
 d. Create a table with field name ‘S.N.’, ‘username’, ’email’, also create a multidimensional array such that associative array is inside the indexed array and store the username and email of 10 random people. Then display the of the array in the table.
 
 Note: Place all the function in a PHP file with name function.php -->
