
<?php


session_start();

include("includes/navbaruser.php");
include("includes/header.php");
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

<div class="span9">
	<div class="content">
      <div class="module message">
			<div class="module-head">
				<div class="pull-right">
								
										
								    </div>	
									
		
                                    <h3>
										Visitor's Image Capturing</h3>
								
                           
				
			<!---- DIV THAT DISPLAYS IMAGE -->	
			<br><center><div id="camera" style="height:auto;width:auto; text-align:left;"></div><br>
    <input  class="btn btn-sm btn-primary" type="button" value="Take a Snap" id="btPic" 
		   onclick="captureimage()" /> </center> <div id="results"> </div>
			
			&nbsp;	<center><a  href="visitorsuser.php" class="btn btn-md btn-success">Back to Visitor's registration</a></center>	
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
	
	
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	
	<?php
			
	include('includes/footer.php');
?>