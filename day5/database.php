<?php

	// php 7 mysqli -=> improved
	// 	1. precedural
	// 	2. Object Oriented

	// PDO PHP DATA Object
	// 	1. object Oriented

	// data type 
	// 	 int varchar
	// 	 text


//database connection and table creation
	// try{
	// 	$servername ='localhost';
	// 	$dbname = 'khwopa';
	// 	$username = 'root';
	// 	$password = '';

	// 	$sql ="
	// 		CREATE TABLE fruits(
	// 			id int not null PRIMARY KEY AUTO_INCREMENT,
	// 			fruitname varchar(20),
	// 			created_date datetime default current_timestamp,
	// 			updated_date datetime default current_timestamp,
	// 		)
	// 	";

	// 	$conn = new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password);
	// 	$conn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//PDO::ERRMODE_SILENT PDO::ERRMODE_WARNING  PDO::ERRMODE_EXCEPTION 

	// 	$conn->exec('SET NAMES UTF8');
	// 	echo "Database Connected Successfully";

	// 	$conn->exec($sql);
	// 	echo "Table Created Successfully";

	// }catch(PDOException $e){
	// 	echo '<br>Failed to connect database';
	// }




// //Insert into table in database need to connect to database first

// 	try{
// 		$servername ='localhost';
// 		$dbname = 'khwopa';
// 		$username = 'root';
// 		$password = '';

// 		$sql ="
// 			INSERT INTO fruits SET
// 				fruitname = 'orange'
// 		";

// 		$conn = new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password);
// 		$conn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//PDO::ERRMODE_SILENT PDO::ERRMODE_WARNING  PDO::ERRMODE_EXCEPTION 

// 		$conn->exec('SET NAMES UTF8');
// 		echo "Database Connected Successfully";

// 		$conn->exec($sql);

// 		echo "Data Insert Successfully";

// 	}catch(PDOException $e){
// 		echo '<br>Failed to connect database';
// 	}


//Prepare Statement and bind parameter
// 1. reduce parsing time
// 2. useful; against sql injection 
// 3. minimize bandwidth
	// try{
	// 	$servername ='localhost';
	// 	$dbname = 'khwopa';
	// 	$username = 'root';
	// 	$password = '';

	// 	$sql ="
	// 		INSERT INTO fruits SET
	// 			fruitname = :fruitname
	// 	";

	// 	$conn = new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password);
	// 	$conn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//PDO::ERRMODE_SILENT PDO::ERRMODE_WARNING  PDO::ERRMODE_EXCEPTION 

	// 	$conn->exec('SET NAMES UTF8');
	// 	echo "Database Connected Successfully";

	// 	//$conn->exec($sql); => sql prepare and sql execure
	// 	$stmt=$conn->prepare($sql);


	// 	$stmt->bindValue(':fruitname', 'guava', PDO::PARAM_STR); //BOOL;STR;INT
	// 	$stmt -> execute();


	// 	$stmt->bindValue(':fruitname', 'grape', PDO::PARAM_STR); //BOOL;STR;INT
	// 	$stmt -> execute();

	// 	echo"<br>";
	// 	echo $conn->lastInsertId();

	// 	echo "Data added Successfully";

	// }catch(PDOException $e){
	// 	echo '<br>Failed to connect database';
	// }


// //Select Data C R UD => R
// try{
// 		$servername ='localhost';
// 		$dbname = 'khwopa';
// 		$username = 'root';
// 		$password = '';

// 		$sql = "
// 			SELECT * FROM fruits
// 				where fruitname Like '%a%' order by fruitname ASC 
// 					LIMIT 4 OFFSET 2
// 		";
// 		//LIMIT offset, no.of data

// 		$conn = new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password);
// 		$conn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//PDO::ERRMODE_SILENT PDO::ERRMODE_WARNING  PDO::ERRMODE_EXCEPTION 

// 		$conn->exec('SET NAMES UTF8');
// 		echo "Database Connected Successfully";

// 		$stmt=$conn->prepare($sql);
// 		$stmt->execute();

// 		$data = $stmt->fetchALL(PDO::FETCH_OBJ);
// 		echo "<pre>";
// 		print_r($data);
// 		echo "<pre>";

// 	}catch(PDOException $e){
// 		echo '<br>Failed to connect database';
// 	}


// //Select Data C R UD => D
// try{
// 		$servername ='localhost';
// 		$dbname = 'khwopa';
// 		$username = 'root';
// 		$password = '';

// 		$sql = "
// 			DELETE FROM fruits
// 				where fruitname = ''
// 		";
// 		//LIMIT offset, no.of data

// 		$conn = new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password);
// 		$conn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//PDO::ERRMODE_SILENT PDO::ERRMODE_WARNING  PDO::ERRMODE_EXCEPTION 

// 		$conn->exec('SET NAMES UTF8');
// 		echo "Database Connected Successfully";

// 		$stmt=$conn->prepare($sql);
// 		$stmt->execute();


// 	}catch(PDOException $e){
// 		echo '<br>Failed to connect database';
// 	}

//Select Data C R UD => U
try{
		$servername ='localhost';
		$dbname = 'khwopa';
		$username = 'root';
		$password = '';

		$sql = "
			UPDATE fruits SET
				fruitname='orange'
				
			where fruitname = 'guava'
		";
		//LIMIT offset, no.of data

		$conn = new PDO('mysql:host='.$servername.';dbname='.$dbname,$username,$password);
		$conn-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//PDO::ERRMODE_SILENT PDO::ERRMODE_WARNING  PDO::ERRMODE_EXCEPTION 

		$conn->exec('SET NAMES UTF8');
		echo "Database Connected Successfully";

		$stmt=$conn->prepare($sql);
		$stmt->execute();


	}catch(PDOException $e){
		echo '<br>Failed to connect database';
	}