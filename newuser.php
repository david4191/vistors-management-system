
<?php
include("includes/ncodes.php");
include("includes/navbarvisitors.php");
include("includes/header.php");

?>


<style>


.category{

	
	
	
}
.category .inputbox input{
	width: 100%;
	padding: 10px 5px;
	font-size: 12px;
	color:rgba(16,2,87,1.00);
	margin-bottom: 19px;
	border: none;
	border-bottom: 1px solid rgba(29,28,28,1.00);
	outline: none;
	background: transparent;
}

</style>

<!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module message">
							<div class="module-head">
								<h3>User's Management Tool</h3>
							</div >
							
							<div class="module-option clearfix">
									<h6>Add New User</h6>
							<div class="category">
								<form class="form form-control-lg" action="#" method="post">
									<div class="inputbox">
									<input type="text" name="first_name" placeholder="First Name" required>
									</div>
									<div class="inputbox">
									<input type="text" name="last_name" placeholder="Last Name" required>
									</div>

									
									<div class="inputbox">
									<input type="text" name="user_email" placeholder="Email" required>


									</div>
									<div class="inputbox">
									<input type="text" name="username" placeholder="Username " required>


									</div>
									<div class="inputbox">
										<label>User Status</label>
									<select name="user_status" required>
										<option value="enabled">Enabled</option>
										<option value="disabled">Disabled</option>
										<option value="suspended">Suspended</option>
									</select>


									</div>
									<div class="inputbox">
										<label>Role</label>
									<select name="role" required>
										
										<option value="admin">Admin</option>
										<option value="user">User</option>
										<option value="staff">Staff</option>
										
									</select>


									</div>
									<div class="inputbox">
									<input type="text" name="user_dept" placeholder="User Dept" required>


									</div>
									<div class="inputbox">
									<input type="text" name="password" placeholder="Password" required>


									</div>

									<input type="submit" class="btn btn-primary btn-sm btn-block" name="submit" value="Create New User">
								</form>
								
								</div>
								
							
							</div>
						
							
							
							
						</div>
						
						
						
							
							<!-- <div class="module">
								 
								<div class="module-head">
									<div class="pull-right">
									<a href="#" class="btn btn-primary btn-sm">Copy</a>&nbsp;
									<a href="#" class="btn btn-primary btn-sm">PDF</a>&nbsp;
										<a href="#" class="btn btn-primary btn-sm">Print</a>
								    </div>
									
                                    <h3>
										Visitors</h3>
									
									
                                </div>
								
									<div class="module-option clearfix">
											<div class="pull-left">
												Filter : &nbsp;
												<div class="btn-group">
													<button class="btn">All</button>
													<button class="btn dropdown-toggle" data-toggle="dropdown">
														<span class="caret"></span>
													</button>
													<ul class="dropdown-menu">
														<li><a href="#">All</a></li>
														<li><a href="#">Visitors Allowed</a></li>
														<li><a href="#">Expected visitors</a></li>
														<li class="divider"></li>
														<li><a href="#">Cancelled</a></li>

													</ul>
												</div>
											</div>
								
									</div>
										
										
								<div class="module-body table">								

									<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                   Full Name
                                                </th>
												<th>
													Email
												</th>
                                                <th>
                                                 Mobile
                                                </th>
												
                                                
												<th>
                                                  Office
                                                </th>
                                                <th>
                                                   O_Mobile
                                                </th>
                                                <th>
                                                   Created By
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
											
											<?php
								$conn = mysqli_connect("localhost","root","","mycms");
								if($conn-> connect_error){
									die("connection failed:". $conn-> connect_error);
									
								}

								$sql ="SELECT vFull_name, vEmail, vMobile, office, office_mobile, created_by FROM visitors";
								$result =$conn-> query($sql);
								
								if($result->num_rows >0){
									while ($row = $result-> fetch_assoc()){
										echo "<tr><td>". $row["vFull_name"] ."</td><td>". $row["vEmail"] 
											."</td><td>". $row["vMobile"]  ."</td><td>". $row["office"] ."</td><td>". $row["office_mobile"]."</td><td>". $row["created_by"] ."</td></tr>";
									}
									echo "</table>";
								}
								else{
									echo "0 result";
								}
									$conn-> close();
							?>
							
											
											
											
											
                                        </tbody>
                                        <tfoot>
                                           
                                        </tfoot>
                                    </table>
							</div>
										
									
								 
							</div> -->
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	

	<?php include("includes/scriptsvisitors.php");
			include("includes/footer.php");

	?>