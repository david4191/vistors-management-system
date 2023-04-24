<?php

include("includes/connect.php");

if(isset($_GET['user_id'])){
	$userid = $_GET['user_id']
		$stat = $conn->prepare("select * from user where user_id=?");
	$stat->bindParam(1, $userid);
	$stat->execute();
	$data = $stat->fetch();
	
	$file = 'notes/'.$data['filename'];
	
	if(file_exists($file)){
		header('Content-Description: '.$data['description']);
		header('Content-Type: '.$data['type']);
		header('Content-Disposition: '.$data['disposition'].'; filename="'.basename($file).'"');
		header('Expires'.$data['role']);
		header('Pragma'.$data['pragma'])
	}
}

?>