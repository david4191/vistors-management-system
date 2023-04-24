<?php
	require_once("include/categories.php")
?>

<!doctype html>
<html>
<head>
			
		<title>Department</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/adminstyleCategory.css">
		<link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web/css/all.css">
		<script src="js/bootstrap.min.js"></script>
	</head>

<body>
	
		<!-- HEADER CODES -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<img src="img/DONE-04.jpg" width="110px" height="70px" alt="dantech" class="dan" /><br>
				</div>
			</div>
		</div>
		
		<header>
			
			<nav>
				<ul>
					<li><a href="#"><i class="fas fa-tachometer-alt">&nbsp;   Dashboard</i></a></li>
					<li><a href="#"><i class="fas fa-user-circle">&nbsp;   My Profile</i></a></li>
					<li><a href="#"><i class="fas fa-chart-bar">&nbsp;   Reports</i></a></li>
					<li><a href="login.php?logout='1'"><i class="fas fa-sign-out-alt">&nbsp;   Log Out </i></a></li>
				</ul>
			</nav>
		</header>
		
	<!--- BODY CODES --->
	
	<div class="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-2 sidemenu"><br><h3 class="add">Admin</h3>
					<ul>
						<li><a  href="#" ><i class="fas fa-tachometer-alt">&nbsp;   Dashboard</i></a></li>
						<li><a class="active" href="Departments.php"><i class="fas fa-tags">&nbsp;   Departments</i></a></li>
						<li><a href="#"><i class="fas fa-list-alt">&nbsp;   Add New Post</i></a></li>
						<li><a href="#"><i class="fas fa-user-friends">&nbsp;   Manage Admins</i></a></li>
						<li><a href="#"><i class="menu-icon icon-user">&nbsp;   Comments</i></a></li>
						<li><a href="#"><i class="fas fa-user-friends">&nbsp;   Visitor</i></a></li>
						<li><a href="#"><i class="fas fa-wrench">&nbsp;   Settings</i></a></li>
						<li><a href="#"><i class="fas fa-sign-out-alt">&nbsp;   Loggout</i></a></li>
					</ul>
				</div>
				<!-- CREATE NEW DEPT. CODES -->
				
				<div class="col-sm-10 category"><br>
					<h6>Add New Dept</h6>
					<form class="form-control-lg" action="#" method="post">
						<div class="inputbox">
						<input type="text" name="dept_name" placeholder="Dept Name" required>
							
							
						</div>
						<div class="inputbox">
						<input type="text" name="dept_desc" placeholder="Dept Descritpion" required>
							
							
						</div>
						<div class="inputbox">
						<input type="text" name="created_by" placeholder="Created By" required>
							
							
						</div>
					
						<input type="submit" class="btn btn-success btn-lg btn-block" name="submit" value="Create New Dept"><br><br>
					</form>
					
					<br><br><br><br><br><br><br><br><br>
					<p><i><b>Note:</b></i> Multiple departments can't have the same name. </p><br>
					<div class="table-responsive-lg">
						<table class="table table-striped table-hover">
							<tr>
								
                                <th class="cell-check">
                                  <input type="checkbox" class="inbox-checkbox">
                                 </th>                
								<th>DeptID&nbsp;<i class="fas fa-arrow-up"></i></th>
								<th>Dept Name</th>
								<th>Dept Description</th>
								
								<th>Created By</th>
								<th>Date Created</th>
							</tr>
							
							
							
							<?php
								$conn = mysqli_connect("localhost","root","","mycms");
								if($conn-> connect_error){
									die("connection failed:". $conn-> connect_error);
									
								}

								$sql ="SELECT dept_id, dept_name, dept_desc, created_by, date_created FROM department";
								$result =$conn-> query($sql);
								
								if($result->num_rows >0){
									while ($row = $result-> fetch_assoc()){
										echo "<tr><td>". $row["dept_id"] ."</td><td>". $row["dept_name"] ."</td><td>". $row["dept_desc"] ."</td><td>". $row["created_by"] ."</td><td>". $row["date_created"] ."</td></tr>";
									}
									echo "</table>";
								}
								else{
									echo "0 result";
								}
									$conn-> close();
							?>
							
							
							
							
							
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- FOOTER CODES -->
	
	<footer>
		<div class="wrapper">
			
			<div class="footer-buttom">
				&copy;Dantech.com | Designed by Dan Thompson
			</div>	
	</footer>
	
	
</body>
</html>