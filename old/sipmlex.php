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
	<script src="jquery-tabledit-master/jquery-tabledit-master/jquery.tabledit.js"></script>
	</head>

<body onLoad="viewData()">
	
		<!-- HEADER CODES -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<img src="img/DONE-04.jpg" width="110px" height="70px" alt="dantech" class="dan" /><br>
				</div>
			</div>
		</div>
		
		
		
	<!--- BODY CODES --->
	
	<div class="page-wrapper">
		<div class="container-fluid">
			<div class="row">
				<!--<div class="col-sm-2 sidemenu"><br><h3 class="add">Admin</h3>
					<ul>
						<li><a  href="#" ><i class="fas fa-tachometer-alt">&nbsp;   Dashboard</i></a></li>
						<li><a class="active" href="#"><i class="fas fa-tags">&nbsp;   Departments</i></a></li>
						<li><a href="#"><i class="fas fa-list-alt">&nbsp;   Add New Post</i></a></li>
						<li><a href="#"><i class="fas fa-user-friends">&nbsp;   Manage Admins</i></a></li>
						<li><a href="#"><i class="fas fa-comments">&nbsp;   Comments</i></a></li>
						<li><a href="#"><i class="fas fa-user-friends">&nbsp;   Visitor</i></a></li>
						<li><a href="#"><i class="fas fa-wrench">&nbsp;   Settings</i></a></li>
						<li><a href="#"><i class="fas fa-sign-out-alt">&nbsp;   Loggout</i></a></li>
					</ul>
				</div> -->
				<!-- CREATE NEW DEPT. CODES -->
				
				<div class="col-sm-12 category"><br>
					<h4>Department</h4>
					
					<table id="tabledit" class="table table-bordered table-striped">
					
					<thead>
						<tr>
							<th>Dept_id</th>
							<th>dept_name</th>
							<th>Dept_desc</th>
							<th>Created_by</th>
							<th>date_created</th>
						
						</tr>	
					
					</thead>
					
					<tbody>
						
						
					</tbody>
					
					
					</table>
					
					
					<script>
								$('#tabledit').Tabledit({
								url: 'saction.php',
								columns: {
									identifier: [0, 'dept_id'],
									editable: [[1, 'dept_name'], [2, 'dept_desc'], [3, 'created_by']]
								},
								onDraw: function() {
									console.log('onDraw()');
								},
								onSuccess: function(data, textStatus, jqXHR) {
									console.log('onSuccess(data, textStatus, jqXHR)');
									console.log(data);
									console.log(textStatus);
									console.log(jqXHR);
								},
								onFail: function(jqXHR, textStatus, errorThrown) {
									console.log('onFail(jqXHR, textStatus, errorThrown)');
									console.log(jqXHR);
									console.log(textStatus);
									console.log(errorThrown);
								},
								onAlways: function() {
									console.log('onAlways()');
								},
								onAjax: function(action, serialize) {
									console.log('onAjax(action, serialize)');
									console.log(action);
									console.log(serialize);
								}
							});
					</script>
					
					
					
					<br><br><br><br><br><br><br><br><br>
					<p><i><b>Note:</b></i> Multiple departments can't have the same name. </p><br>
					
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
	
