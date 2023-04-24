<?php //require_once('dbconnect/dbconnect.php'); 

if(!isset($_SESSION)){
	session_start();
}
?>

<?php
 
//set random name for the image, used time() for uniqueness

// require_once('db.php'); 

$conn = mysqli_connect("localhost", "root", "", "mycms");
$filename =  time() . '.jpg';
$filepath = 'upload/';

if(!is_dir($filepath))
	mkdir($filepath);
if(isset($_FILES['webcam'])){	
	
	  // Upload file
     move_uploaded_file($_FILES['webcam']['tmp_name'],$filepath.$filename);
	$newfilepath=$filepath.$filename;
	/**
	//insert into database a record of uploaded document here
	$imgSQL = sprintf("INSERT INTO webcam(webcamPath) VALUES (%s)",
	GetSQLValueString($vpass,$newfilepath, "text"));

	mysqli_select_db($vpass, $database_vpass);
	$result= mysqli_query($vpass, $imgSQL);
	*/
	 // Insert record
     $query = "insert into pics(image) values('".$newfilepath."')";
     mysqli_query($conn,$query);
  
   $_SESSION['picture'] = $filepath.$filename;
	
	echo $filepath.$filename;

}


?>
