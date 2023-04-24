<?php


		require_once("include/connect.php")
?>

<!DOCTYPE html>
<html>
	<head>
			
		<title>Register</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
		
		<script src="js/bootstrap.min.js"></script>
	</head>
	
	<body>
	
	
		
	<div class="box">
		<img class="logo" src="img/DONE-04.jpg" width="240" height="150"><br>
			<form action="login.php" method="post">
				
				
				<div class="inputBox">
				
				<input type="text" name="first_name"  required>
					<label>First name</label>
				</div>
				<div class="inputBox">
				
				<input type="text" name="last_name"  required>
					<label>Last name</label>
				</div>
				<div class="inputBox">
				
				<input type="email" name="user_email"  required>
					<label>Email</label>
				</div>
				<div class="inputBox">
				
				<input type="text" name="username"  required>
					<label>Username</label>
				</div>
				<div class="inputBox">
				
				<input type="password" name="password"  required>
					<label>Password</label>
				</div>
					
					<input type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Submit">
				
				</form>
			
			<a href="login.php" class="for">Already Registered</a>
		
	</div>
	
	</body>

</html>
