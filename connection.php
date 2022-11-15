<DOCTYPE html>
<html>

<?php

$username = 'username';
$password = 'password';
$db = 'login';
$ss = 'localhost';

?>
<head>
	<title>Login Page</title>
</head>
<body>

	<div  id = "frm">
		<form action = "connection.php" method = "post">
			<p>
				<label>Username:</label>
				<input type = "text" id = "user" name = "user" />
			</p>
			<p>
				<label>Password:</label>
				<input type = "text" id = "pass" name = "pass" />
			</p>
			<p>
				<input type = "submit" id = "btn" name = "Login" />
			
			</p>


		</form>

	</div>
</body>


</html>