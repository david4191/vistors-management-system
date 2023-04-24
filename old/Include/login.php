<!DOCTYPE html>
<html>
	<head>
		
		<title>Login</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web/css/all.css">
		
		<script src="js/bootstrap.min.js"></script>
		
		<?php
		
		$conn = mysqli_connect("localhost","root","","mycms");
		if(isset($_POST['submit'])){
			
			$username = mysqli_real_escape_string($conn,$_POST['username']);
			$password = mysqli_real_escape_string($conn,$_POST['password']);
			
			if($username!= "" && $password!=""){
				$sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				
				$count = mysqli_num_rows($result);
				if($count==1){
					header("location:dashboard.php");
				}
			}
		}
		
		?>
		
	</head>
	
	<body>
	
	<div class="box">
		<img class="logo" src="img/DONE-04.jpg" width="240" height="150"><br>
			<form action="#" method="post">
				<div class="inputBox">
				
				<input type="text" name="username"  required>
					<label>Username</label>
				</div>
				<div class="inputBox">
				
				<input type="password" name="password"  required>
					<label>Password</label>
				</div>
					<a href="register.php" class="for">Register Here</a><br><br>
					<input type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Submit">
				
				</form>
			
			
		
	</div>
	
	</body>

</html>
