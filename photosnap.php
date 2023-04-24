
<?php


session_start();

include("includes/navbarvisitors.php");
include("includes/header.php");
include("includes/staffupload.php");

include("saveimage.php");
include("includes/scriptsvisitors.php")

?>


<!-- CSS -->

<style>
#my_camera{
 width: 320px;
 height: 240px;
 border: 1px solid black;
}
</style>


<!-- HEADER SETTINGS -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/jquery-3.4.1.min.js"></script>
<!---MAIN CODES--->


<div class="span9">
	<div class="content">
      <div class="module message">
			<div class="module-head">
				<div class="pull-right">
									
									
								   </div>	
									
		
                                    <h3>
										Visitor's Image Capturing</h3>
								
                            <!-- NOTIFICATION FORM-->
									<center>
										  <form method="post" id="comment_form">
										   <div class="form-group">
											</div>
										   <div class="form-group">
											</div>
										   <div class="form-group">
											</div>
										  </form>
									</center>
				
			<!---- DIV THAT DISPLAYS IMAGE -->	
			<br><center><div id="camera" style="height:auto;width:auto; text-align:left;"></div><br>
    <input  class="btn btn-sm btn-primary" type="button" value="Take a Snap" id="btPic" 
		   onclick="captureimage()" /> </center> <div id="results"> </div>
			
			&nbsp;	<center><a  href="visitors.php" class="btn btn-md btn-success">Register Visitor</a></center>	
		  			  </div>
					</div><!--/.content-->
				</div>
</div> <!--/.span9-->
								
<!-- Webcam.min.js -->
<script type="text/javascript" src="scripts/webcam.min.js"></script>

<!-- Configure a few settings and attach camera -->
<script>
    // CAMERA SETTINGS.
    Webcam.set({
        width: 390,
        height: 290,
        image_format: 'jpeg',
        jpeg_quality: 100
    });
    Webcam.attach('#camera');

  /**  // TAKE A SNAPSHOT.
    takeSnapShot = function () {
        Webcam.snap(function (data_uri) {
           downloadImage('image', data_uri);
        });
    }

    
	*/
	// Webcam.attach( '#webcam' );
       function captureimage() {
           // take snapshot and get image data
           Webcam.snap( function(data_uri) {
               // display results in page
                
                    
               Webcam.upload( data_uri, 'saveimage.php', function(code, text) {
                   document.getElementById('results').innerHTML = 
                   '<h2 style="text-align:center;font-size:13px; color:green;">Preview Image:</h2>' + 
                   '<center><img src="'+text+'" width="200px" height="150px"/></center>';
               } );    
           } );
       }

</script>
	
	
<!---SCRIPT FOR NOTIFIACTION-->
	
<script>
$(document).ready(function(){
// updating the view with notifications using ajax
function load_unseen_notification(view = '')
{
 $.ajax({
  url:"fetch.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
  {
   $('.dropdown-menu').html(data.notification);
   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }
  }
 });
}
load_unseen_notification();
// submit form and get new records
$('#comment_form').on('submit', function(event){
 event.preventDefault();
 if($('#subject').val() != '' && $('#comment').val() != '')
 {
  var form_data = $(this).serialize();
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#comment_form')[0].reset();
    load_unseen_notification();
   }
  });
 }
 else
 {
  alert("Both Fields are Required");
 }
});
// load new notifications
$(document).on('click', '.dropdown-toggle', function(){
 $('.count').html('');
 load_unseen_notification('yes');
});
setInterval(function(){
 load_unseen_notification();;
}, 5000);
});

	
</script>

			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	
	<?php
			
	include('includes/footer.php');
?>