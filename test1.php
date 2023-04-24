<?php

define('DBINFO','mysqli host=localhost,dbname=mycms');
define('DBUSER','root');
define('DBPASS','');

function fetchAll($query){
	$conn= new PDO(DBINFO,DBUSER,DBPASS);
	$stmt= $conn->query($query);
	return $stmt->fetchAll();
}
function performQuery($query){
	$conn= new PDO(DBINFO,DBUSER,DBPASS);
	$stmt= $conn->prepare($query);
	if($stmt->execute()){
		return true;
		
	}else{
		return false;
	}
} 
?>