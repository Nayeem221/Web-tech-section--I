<?php 
	session_start();

	if(isset($_SESSION['status'])){

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
		<h1>welcome to the website</h1>
		<a href="logout.php"> logout </a>
</body>
</html>

<?php } else{

    echo "Invalid Request";
} ?>