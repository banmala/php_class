<?php 
	$catch[]=$_POST;
	session_start();
	ob_start();
	if(isset($catch[0]['userName']) && !empty($catch[0]['userName'])){
		if(isset($catch[0]['email']) && !empty($catch[0]['email'])){
			if(isset($catch[0]['password']) && !empty($catch[0]['password'])){
				if(isset($catch[0]['gender']) && !empty($catch[0]['gender'])){
					if(isset($catch[0]['contact']) && !empty($catch[0]['contact'])){
						$catch[0]['userName']=filter_var($catch[0]['userName'], FILTER_SANITIZE_STRING);
						$catch[0]['email']=filter_var($catch[0]['email'], FILTER_SANITIZE_STRING);
						$catch[0]['password']=filter_var($catch[0]['password'], FILTER_SANITIZE_STRING);
						$catch[0]['contact']=filter_var($catch[0]['contact'], FILTER_SANITIZE_STRING);

						if(filter_var($catch[0]['email'],FILTER_VALIDATE_EMAIL)){
							if(is_numeric($catch[0]['contact'])){
								echo " Welcome To Our Website!";
							}else{
								$_SESSION['error']="Please Enter Valid Contact.";			
								@header('location: form.php');
							}
						}else{		
							$_SESSION['error']="Please Enter Valid Email.";
							@header('location: form.php');
						}

					}/*contact*/else{
						$_SESSION['error']="Please Enter Contact Id.";
						@header('location: form.php');
					}
				}/*gender*/else{
					$_SESSION['error']="Please Select Gender.";
					@header('location: form.php');
				}
			}/*password*/else{
				$_SESSION['error']="Please enter Password";
				@header('location: form.php');
			}
		}/*email*/else{
			$_SESSION['error']="Please enter Email Id.";
			@header('location: form.php');
		}
	}/*userName*/else{
		$_SESSION['error']="Please enter User Name.";
		@header('location: form.php');
	}
?>