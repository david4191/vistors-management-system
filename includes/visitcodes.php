<?php

$button =''; 
if(isset($_POST['visit_type'])){
$fullname= $_POST['vfull_name'];
$mobile= $_POST['vmobile'];
$vtype = $_POST['visit_type'];
$vpurpose = $_POST['visit_purpose'];

$createdby= $_POST['created_by'];	
$staffid = $_POST['staff_id'];
$vstatus = $_POST['visit_status'];

}


//database connection

$conn= new mysqli('localhost','root','','mycms');
if($conn->connect_error){
	die('unable to connect:' .$conn->connect_error);
}
else{
	$stmt=$conn->prepare("insert into expected(vfull_name, vmobile, visit_type,visit_purpose, created_by, staff_id,visit_status)
	values(?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssss",$fullname, $mobile, $vtype, $vpurpose, $createdby, $staffid, $vstatus);
	$stmt->execute();
	
	
	$stmt->close();
	$conn->close();
}

?>