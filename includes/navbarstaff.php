<?php

include('counttext.php');


?>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="logout.php">
			  		DanTech
			  	</a>
					
			<ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Notifications&nbsp;<span class="badge"><i id="noti_number"></i></span>
                               
								</a>
                                <ul class="dropdown-menu">
                                    
								</ul>
			</ul>
				
	
			</div>
				
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="staffdash.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                               
                              
                            </ul>
							
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                                   	

                                <li><a href="notification.php"><i class="menu-icon icon-bar-chart"></i>Quick Messaging<b class="label green pull-right"></b>  </a></li>
                            </ul>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">   
                                <li><a href="index.php" ><i class="menu-icon icon-signout"></i>Logout </a>
								</li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
					
					
<script type="text/javascript">
 function loadDoc() {
  

  setInterval(function(){

   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("noti_number").innerHTML = this.responseText;
    }
   };
   xhttp.open("GET", "data.php", true);
   xhttp.send();

  },1000);


 }
 loadDoc();
</script>