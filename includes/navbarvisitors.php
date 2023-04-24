<?php
include('counts.php');
include('countsUsers.php');
include('countsvisits.php');
include('countstaff.php');
include('countdept.php');

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
				
				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav nav-icons">
						
						<!---<li><a href="#">
							<i class="icon-eye-open"></i>
						</a></li>
						<li><a href="#">
							<i class="icon-bar-chart"></i>
						</a></li> --->
					</ul>
					<!--
					<form class="navbar-search pull-left input-append" action="#">
						<input type="text" class="span3">
						  <button class="btn" type="button">
							<i class="icon-search"></i>
						</button> -->
					</form>
				
				<!--	<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Menu <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Our Mission</a></li>
								
								<li><a href="#">Our Vission</a></li>
								<li class="divider"></li>
								<li class="nav-header">More About Dantech</li>
								<li><a href="#">Dantech Media Handles</a></li>
															</ul>
						</li>
						
						<li><a href="#">
							Support
						</a></li>
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="images/user.png" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Your Profile</a></li>
								<li><a href="#">Edit Profile</a></li>
								<li><a href="#">Account Settings</a></li>
								<li class="divider"></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>
					</ul> -->
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="admin.php">
									<i class="menu-icon icon-dashboard"></i>
									Dashboard
								</a>
							</li>
							
							
							
							<li>
								<a href="photosnap.php">
									<i class="menu-icon icon-group"></i>
									visitors
									<b class="label orange pull-right"><?php echo $total_visitors; ?></b>
								</a>
							</li>
						</ul>
						<!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
                                <li><a href="users.php"><i class="menu-icon icon-user"></i> Users<b class="label orange pull-right"><?php echo $total_users; ?></b> </a></li>
                                <li><a href="visitsadmin.php"><i class="menu-icon icon-book"></i>Visits<b class="label orange pull-right"><?php echo $total_visits; ?></b> </a></li>
								<li><a href="staff.php"><i class="menu-icon icon-group"></i> Staffs  <b class="label orange pull-right">
                                    <?php echo $total_staff; ?></b></a></li>
                                <li><a href="Department.php"><i class="menu-icon icon-book"></i>Departments<b class="label orange pull-right"><?php echo $total_dept; ?></b> </a></li>
                               
                                
                                <li><a href="adminchat.php"><i class="menu-icon icon-bar-chart"></i>Chat <b class="label orange pull-right"><?php echo $total_chat; ?></b></a></li>
							<li><a href="notificationadmin.php"><i class="menu-icon icon-bar-chart"></i>Quick Messaging<b class="label orange pull-right"></b>  </a></li>
                            </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							
							
							<li>
								<a href="index.php">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

						
					
						
					
					</div><!--/.sidebar-->
				</div>
				
				
			<!--NOTIFICATION SCRIPT--->
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
