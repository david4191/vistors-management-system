<?php

session_start();


$_SESSION['user'] = 'Security';

include('includes/header.php');
include('includes/navbaruser.php');

?><head>
<link type="text/css" rel="stylesheet" href="styling.css">
<!--<script src="bootstrap/bootstrap.min.js"></script> -->
</head>

<!-- BODY CODES -->



<div class="span9">
	<div class="content">
      <div class="module message">
			<div class="module-head">

					<div class="centralised">
					<div class="chathistory"></div>

					<div class="chatbox">
					<form action="" method="post">

					<textarea class="txtarea" id="message" name="message">

					</textarea>

					</form>

					</div>
					</div>
				
	      </div>
		</div><!--/.content-->
	</div>
</div> <!--/.span9-->

<script>

	
	$(document).ready(function(){
		loadChat();
	});
	

	
$('#message').keyup(function(e){

	var message = $(this).val();
	if( e.which== 13 ){
		
		$.post('handlers/ajax.php?action=SendMessage&message='+message, function(response){
			
			loadChat();
			$('#message').val('');
			
		});
	}
	
	
	
});
	

	function loadChat()
	{
		$.post('handlers/ajax.php?action=getChat', function(response){
			
			$('.chathistory').html(response);
			
		});
	}

	
	setInterval(function(){
		
		loadChat();
		
	}, 2000);
	
	
</script>
				
<?php
		
	include('includes/footer.php');
	include("includes/scriptsvisitors.php")

?>	