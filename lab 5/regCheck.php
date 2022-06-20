<?php 

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$email = $_REQUEST['confirm password'];
	$fname = $_REQUEST['formname'];

	if ($username == null || $password == null || $email == null) {
		echo "invalid username/password/email <br>";
	}else{
		$data = $username."|".$password."|".$confirm password."\r\n";
		$file = fopen('user.txt', 'a');
		fwrite($file, $data);

			if($fname == "create"){
				header('location: home.php');	
			}else{
				header('location: login.html');
			}
	}



?>