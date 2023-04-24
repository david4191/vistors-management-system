<?php
session_start();

include('includes/header.php');
include('includes/navbar.php');

?>
<!-- HEADER SETTINGS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="bootstrap/css/theme.css" type="text/css">
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/jquery-3.4.1.min.js"></script>
<!---MAIN CODES--->

<div class="span9">
	<div class="content">
      <div class="module message">
			<div class="module-head">
				<div class="pull-right">
					
				 </div>
				
				
				<center>
  <form method="post" id="comment_form">
   <div class="form-group">
    <label style="color: darkred;">Subject</label>
    <input type="text" name="subject" id="subject" class="form-control">
   </div>
   <div class="form-group">
    <label style="color: darkred;">Message</label>
    <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
   </div>
   <div class="form-group">
    <input type="submit" name="post" id="post" class="btn btn-info" value="Post" />
   </div>
  </form>
		     </center>
          </div>
		</div><!--/.content-->
	</div>
</div> <!--/.span9-->


			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->


	
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

include("includes/scripts.php");

include('includes/footer.php');
?>