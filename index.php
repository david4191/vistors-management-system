<?php

session_start();


$conn = mysqli_connect("localhost", "root", "", "mycms");

$msg="";

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	
	$sql = "SELECT * FROM user WHERE username=? AND password=?";
	
	$stmt=$conn->prepare($sql);
	$stmt->bind_param("ss", $username,$password);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();
	
	session_regenerate_id();
	$_SESSION['username'] = $row['username'];
	$_SESSION['role'] = $row['role'];
	session_write_close();
	
	if($result->num_rows==1 && $_SESSION['role']=="admin"){
		header("location:admin.php");
	}
	else if($result->num_rows==1 && $_SESSION['role']=="user"){
		header("location:user.php");
	}
	else if($result->num_rows==1 && $_SESSION['role']=="staff"){
		header("location:staffdash.php");
	}
	else{
		$msg ="Username or Password Incorrect";
	}
		
	
	
	
	
}
?>

<head>
		
		<title>DanTech</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web/css/all.css">
		
		<script src="js/bootstrap.min.js"></script>
		
		
		
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
				<p class="text-center" style="color: red">
						
				</p>
					<!--<a href="register.php" class="for">Register Here</a>  <br><br>-->
					<input type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Submit">
				
				</form>
				<h5 style="color: rgba(92,3,5,1.00); font-family: Constantia, 'Lucida Bright', 'DejaVu Serif', Georgia, 'serif'; font-size: 14px; text-align: center; font-weight: 400"><bold><?php echo $msg;  ?></bold></h5>
		
	</div>
	
	</body>
