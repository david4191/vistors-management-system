<?php



//database config
$hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name  = "mycms";

// connecting to database
$conn =mysqli_connect($hostname, $db_username, $db_password, $db_name);
if(mysqli_connect_errno()){
	die("Error Connecting to Database");
}



//adding new visitor


// retriving exisiting visits
$query ="SELECT * FROM chat ";
$result =mysqli_query($conn, $query);

//checking query error
if (!$result){
	
	die("retriving query error <br>".$query);
}


$total_chat=mysqli_num_rows($result);

?>

