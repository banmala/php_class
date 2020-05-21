<!DOCTYPE html>
<html>
<head>
	<title>FORM HANDLING</title>
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4>Log In Form</h4>
			</div>
		</div>
		<?php 
			session_start();
			if(isset($_SESSION['error'])){
				echo "<h4 style ='color:red'>".$_SESSION['error']."</h4>";
			}
			session_unset();
		 ?>
		<div class="row">
			<div class="col-md-12">
				<form action="welcome.php" method="post" enctype="multipart/">
					<div class="form-group">
					    <label for="">User Name</label>
					    <input type="userName" class="form-control" name="userName" id="userName" placeholder="User Name" aria-describedby="emailHelp">
					</div>
					<div class="form-group">
					    <label>Email</label>
					    <input type="email" class="form-control" name="email" placeholder="Email Id" id="email">
					</div>
					<div class="form-group">
					    <label">Password</label>
					    <input type="password" class="form-control" placeholder="Password" name="password" id="password">
					</div>
					<div class="form-group">
						<input type="radio" id="male" name="gender" value="male">
						<label for="male">Male</label>
						<input type="radio" id="female" name="gender" value="female">
						<label for="female">Female</label>
					</div>
					<div class="form-group">
					    <label>Contact</label>
					    <input type="text" class="form-control" placeholder="Contact Number" name="contact" id="inputContact">
					</div>
					<!-- <div class="form-group">
					    <label for="">Image</label>
					    <input type="file" class="form-control-file" name="image" accept="image/*" multiple="multiple">
					  </div>
					 -->
					<button type="submit" class="btn btn-success">Submit</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>