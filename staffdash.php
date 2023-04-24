<?php 
include('includes/header.php');
include('includes/counttext.php');
include('includes/navbarstaff.php');

session_start();
if(!isset($_SESSION['username']) || $_SESSION['role']!="staff"){
	header("location:index.php");
}
?>

<!-- HEADER SETTINGS -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/jquery-3.4.1.min.js"></script>
<!---MAIN CODES--->






<div class="span9">
	<div class="content">
		 <div class="module">
                                 <div class="module-head">
                                    <h3 style="color: rgba(13,12,142,1.00);">
                                       Welcome <?= $_SESSION['username'] ?></h3>
                                </div>
			 						
                                <div class="module-body table">
                                   <div class="btn-box-row row-fluid"><center>
                                    
									</center>
									   
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
                                </div>
                                </div>
					
		</div> 
		
		
      
				</div>
</div> <!--/.span9-->
	
	
			</div>
		</div><!--/.container-->
	</div>
<!--/.wrapper-->
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


<?php
	include('includes/scripts.php');
	include('includes/footer.php');
?>