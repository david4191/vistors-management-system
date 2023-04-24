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
				<form class="form form-control" action="adminuseruserupdate.php" method="post">
					<?php
							
							$conn = mysqli_connect("localhost", "root", "", "mycms");
						
							if(isset($_POST['edit_btn']))
							{
								$firstname= $_POST['edit_name'];

								$query= "SELECT first_name, last_name, user_email, user_status, role,username, password FROM user WHERE first_name='$firstname'";
								$query_run= mysqli_query($conn, $query);

								foreach($query_run as $row)
								{
									?>
					
									<div class="inputbox">
									<input value="<?php echo $row['first_name']; ?>" type="text" name="first_name" placeholder="First Name" required>
									</div>
									<div class="inputbox">
									<input value="<?php echo $row['last_name']; ?>" type="text" name="last_name" placeholder="Last Name" required>
									</div>

									
									<div class="inputbox">
									<input value="<?php echo $row['user_email']; ?>" type="text" name="user_email" placeholder="Email" required>


									</div>
									<div class="inputbox">
									<input value="<?php echo $row['username']; ?>" type="text" name="username" placeholder="Username " required>


									</div>
									<div class="inputbox">
										<label>User Status</label>
									<select value="<?php echo $row['user_status']; ?>" name="user_status" required>
										<option value="enabled">Enabled</option>
										<option value="disabled">Disabled</option>
										<option value="suspended">Suspended</option>
									</select>


									</div>
									<div class="inputbox">
										<label>Role</label>
									<select value="<?php echo $row['role']; ?>" name="role" required>
										
										<option value="admin">Admin</option>
										<option value="user">User</option>
									</select>


									</div>
									
									<div class="inputbox">
									<input value="<?php echo $row['password']; ?>" type="text" name="password" placeholder="Password" required>


									</div>

									
									
					<a href="users.php" class="btn btn-danger">Cancel</a>
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