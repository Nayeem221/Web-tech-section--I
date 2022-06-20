<?php 
	if(!isset($_COOKIE['status'])){
		header('location: login.html');
	}
?>

<html>
<head>
	<title>Create New</title>
</head>
<body>
		<a href="home.php">Back</a> | 
		<a href="logout.php"> logout </a>

		<form action="regCheck.php" method="post" enctype="">
			<fieldset>
				<legend>Create new</legend>
				<table>
					<tr>
						<td>Id</td>
						<td>
							<input type="hidden" name="formname" value="create">
							<input type="text" name="Id" value="">
						</td>
					</tr>
					<tr>
						<td>password</td>
						<td><input type="password" name="password" value=""></td>
					</tr>
					<tr>
						<td>email</td>
						<td><input type="password" name="confirm password" value=""></td>
					</tr>
					<tr>
						<td>name</td>
						<td><input type="text " name="name"></td>
					</tr>
					<tr>
						<td><hr></td>
					</tr>
					

					</tr>
					<tr>
						<td><hr></td>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" name="" value="Submit"></td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>