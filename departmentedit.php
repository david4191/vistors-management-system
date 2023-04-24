<?php
include("includes/connect.php");
include("includes/navbar.php");
include("includes/header.php");


$conn = mysqli_connect("localhost", "root", "", "mycms");


?>
<style>


.category{

	
	
	
}
.category .inputbox input{
	width: 100%;
	padding: 10px 3px;
	font-size: 12px;
	color:rgba(16,2,87,1.00);
	margin-bottom: 19px;
	border: none;
	border-bottom: 1px solid rgba(29,28,28,1.00);
	outline: none;
	background: transparent;
}

</style>

<div class="span9">
	<div class="content">
		 <div class="module"> 
			 
			 	<div class="module-head">
									<div class="pull-right">
									
								    </div>
									
                                    <h3>
										Edit Profile</h3>
									
									
                                </div>
			
			 
			 <div class="module-option clearfix">
			 <div class="category">
				<form class="form form-control" action="departmentupdate.php" method="post">
					<?php
							
							$conn = mysqli_connect("localhost", "root", "", "mycms");
						
							if(isset($_POST['edit_btn']))
							{
								$deptname= $_POST['edit_name'];

								$query= "SELECT dept_name, dept_desc, created_by FROM department WHERE dept_name='$deptname'";
								$query_run= mysqli_query($conn, $query);

								foreach($query_run as $row)
								{
									?>
					
									<div class="inputbox">
									<input value="<?php echo $row['dept_name']; ?>" type="text" name="dept_name" placeholder="Department Name" required>


									</div>
									
									<div class="inputbox">
									<input value="<?php echo $row['dept_desc']; ?>" type="text" name="dept_desc" placeholder="Department Description" required>


									</div>
									
									
									
									<div class="inputbox">
										<label>Created By</label>
									<select value="<?php echo $row['created_by']; ?>" name="created_by" required>
										
										<option value="admin">Admin</option>
										
									</select>


									</div>
									
									
									
									
					<a href="staff.php" class="btn btn-danger">Cancel</a>
					<button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
					
								
									<?php
								}

							}

					?>
								</form>
			 </div>

			</div>
		</div>
			

</div>
</div>
</div>








	<?php 


		include("includes/scripts.php");
			include("includes/footer.php");
			

	?>