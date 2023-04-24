<?php

session_start();

require_once("includes/connect.php");

$message= "";
$role="";


if(isset($_POST["submit"]))
{
	$username= $_POST["username"];
	$password= $_POST["password"];


	$query= "SELECT * FROM user WHERE username='$username' AND password='$password'";
	
	$result= mysqli_query($conn,$query);
	
	
	if(mysqli_num_rows($result) >0)
	{
		while($row= mysqli_fetch_assoc($result))
		{
			if($row["role"] == "admin")
			{
				$_SESSION['adminuser'] = $row["username"];
				$_SESSION['role'] = $row["role"];
				header('location: admin.php');
				
			}else{
				$_SESSION['user'] = $row["username"];
				$_SESSION['role'] = $row["role"];
				header('location: user.php');
				
			}
		}
	}
	else{
		
		header('location: index.php');
		
	}
	
}



?>