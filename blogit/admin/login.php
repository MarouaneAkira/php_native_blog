<?php 
	session_start();
	if(!empty($_SESSION)){
		header('location:dashboard.php');
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 </head>
 <body>
 	<form action="login-back.php" method="post">
 		<label>Username: </label><input type="text" name="user"><br><br>
 		<label>Password: </label><input type="password" name="password"><br><br>
 		<input type="submit" value="Submit">
 	</form>
 </body>
 </html>