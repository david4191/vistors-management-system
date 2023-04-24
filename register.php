<?php


		if(isset($_POST['submit']))
		{
			$hostname= "localhost";
			$username= "root";
			$password= "";
			$database= "mycms";
			
			
			$firstname= $_POST['first_name'];
			$lastname= $_POST['last_name'];
			$email= 	$_POST['user_email'];
			$username1= $_POST['username'];
			$password1= $_POST['password'];
		
			
			$connect= mysqli_connect($hostname, $username, $password, $database);
			$query= "INSERT INTO user ('first_name', 'last_name','user_email', 'username', 'password')
			VALUES ($firstname, $lastname, $email, $username1, $password1)";
			
			$result= mysqli_query($connect, $query);
			
			if($result){
				echo 'inserted successfully';
			}else{
				echo 'Data not Inserted';
			}
			
			
			
			mysqli_close($connect);
			
		}
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
			<form action="register.php" method="post">
				
				
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
