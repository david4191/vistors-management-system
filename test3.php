
<!-- CSS -->
<?php
//set random name for the image, used time() for uniqueness
$conn = mysqli_connect("localhost", "root", "", "mycms"); 
$filename =  time() . '.jpg';
$filepath = 'uploads/';
if(!is_dir($filepath))
mkdir($filepath);
if(isset($_FILES['webcam'])){   
move_uploaded_file($_FILES['webcam']['tmp_name'], $filepath.$filename);
$sql="Insert into staff(image) values('$filename')";
$result=mysqli_query($con,$sql);
echo $filepath.$filename;
}
?>
<!-- -->
<div id="results"></div>
<div id="webcam"></div>
<!-- First, include the Webcam.js JavaScript Library -->
<script type="text/javascript" src="webcam.js"></script>
<form>
<input type=button value="Take Snapshot" onClick="captureimage()">
</form>
 <!-- Script -->
 
<script type="text/javascript" src="scripts/webcam.js"></script>


 <!-- Code to handle taking the snapshot and displaying it locally -->
 <script language="JavaScript">
 
 // Configure a few settings and attach camera
 function configure(){
 Webcam.set({
width: 600,
height: 460,
image_format: 'jpeg',
jpeg_quality: 90
});
Webcam.attach( '#webcam' );
function captureimage() {
// take snapshot and get image data
Webcam.snap( function(data_uri) {
// display results in page
Webcam.upload( data_uri, 'saveimage.php', function(code, text) {
document.getElementById('results').innerHTML = 
'<h2>Uploaded image:</h2>' + 
'<img src="'+text+'"/>';
} );    
} );
}
</script>