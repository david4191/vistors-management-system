<?php



$conn = mysqli_connect("localhost", "root", "", "mycms");
$button =''; 
if(isset($_POST['submit'])){
  $first= $_POST['full_name'];
  $address= $_POST['address'];
  $email= $_POST['email'];
  $pnumber= $_POST['phone_number'];
  $createdby= $_POST['created_by'];
  $name = $_FILES['file']['name'];
  $target_dir = "upload/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
     $query = "insert into staff(image,full_name,address,email,phone_number,created_by) values('".$name."','$first','$address','$email','$pnumber','$createdby')";
     mysqli_query($conn,$query);
  
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

  }
 
}


?>