<html>
<head>
	<title>Registration</title>
</head>
<body>
		<form action="regCheck.php" method="post" enctype="">
			<fieldset>
				<legend>Registration</legend>
				<table>
					<tr>
						<td>Id</td>
						<td><input type="text" name="Id" value=""></td>
					</tr>
					<tr>
						<td>password</td>
						<td><input type="password" name="password" value=""></td>
					</tr>
					<tr>
						<td>confirm password</td>
						<td><input type="password" name="confirm password" value=""></td>
					</tr>
					<tr>
						<td>name</td>
						<td><input type="text " name="name"></td>
					</tr>
					<tr>
						<td><hr></td>
					</tr>
					<tr>
						<td>
						<input type="radio" name="gender">User
						<input type="radio" name="gender">Admin



					</td>


					</tr>
					<tr>
						<td><hr></td>
					</tr>

					<tr>
						<td></td>
						<td><input type="Submit" name="" value="Signup"></td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>