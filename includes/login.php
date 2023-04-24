<?php

session_start();

require_once("connect.php");

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
				$_SESSION['LoginUser'] = $row["username"];
				header('location: admin/index.php');
			}else{
				$_SESSION['LoginUser'] = $row["username"];
				header('location: index.php');
			}
		}
	}
	else{
		header('location: login.php');
	}
	
}



?>