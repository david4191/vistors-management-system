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
				<form class="form form-control" action="visitadminupdate.php" method="post">
					<?php
							
							$conn = mysqli_connect("localhost", "root", "", "mycms");
						
							if(isset($_POST['edit_btn']))
							{
								$fullname= $_POST['edit_name'];

								$query= "SELECT vfull_name,visit_type,  timedate, staff_id, visit_status, created_by FROM expected WHERE vfull_name='$fullname'";
								$query_run= mysqli_query($conn, $query);

								foreach($query_run as $row)
								{
									?>
					
									<div class="inputbox">
									<input value="<?php echo $row['vfull_name']; ?>" type="text" name="vfull_name" placeholder="Full Name" required>


									</div>
									<div class="inputbox">
							
									<label>Visit Type</label>
										<select value="<?php echo $row['visit_type']; ?>" name="visit_type" required>
												<option value="personal">Personal</option>
												<option value="business">Business</option>
												<option value="official">Official</option>
										</select>

									</div>
									<div class="inputbox">
									<input value="<?php echo $row['timedate']; ?>" type="text" name="timedate" placeholder="Date & Time " required>


									</div>
									
									<div class="inputbox">
									<input value="<?php echo $row['staff_id']; ?>" type="text" name="staff_id" placeholder="Staff Name" required>


									</div>
									<div class="inputbox">
									
									<label>Visit Status</label>		
										<select value="<?php echo $row['visit_status']; ?>" name="visit_status" required>
												<option value="arrived">Arrived</option>
												<option value="cancelled">Cancelled</option>
												<option value="rescheduled">Rescheduled</option>
											</select>

									</div>
									
									<div class="inputbox">
										<label>Created By</label>
									<select value="<?php echo $row['created_by']; ?>" name="created_by" required>
										
										<option value="admin">Admin</option>
										
									</select>


									</div>
									
									
									
									
					<a href="visitsadmin.php" class="btn btn-danger">Cancel</a>
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