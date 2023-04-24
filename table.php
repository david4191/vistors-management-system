<?php 
	

session_start();



	include('includes/header.php');
	
	include("includes/navbarvisitors.php");
	
	
?>
	    <div class="span9">
                        <div class="content">
                          	
							<div class="module">
								 
								<div class="module-head">
									<div class="pull-right">
									<a  download="user.doc" href="visitors.php" class="btn btn-primary btn-sm">Copy</a>&nbsp;
									<a href="visitors.php" download="user.pdf"class="btn btn-primary btn-sm">PDF</a>&nbsp;
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

									<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped display"
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
										
									
								 
							</div>
							
                            <div class="module">
                                <div class="module-head">
									<div class="pull-right">
									<a href="newuser.php" class="btn btn-primary">Create New User</a>
								    </div>
									
                                    <h3>
										Users</h3>
									
									
                                </div>
                                <div class="module-body table">
									
									
									
                                <table cellpadding="0" cellspacing="0" border="0" class=" table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    First Name
                                                </th>
                                                <th>
                                                   Last Name
                                                </th>
                                                <th>
                                                   Email
                                                </th>
												<th>
                                                  User Status
                                                </th>
												<th>
                                                  Role
                                                </th>
                                                <th>
                                                   Username
                                                </th>
                                                <th>
                                                    Password
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
											
											<?php
								$conn = mysqli_connect("localhost","root","","mycms");
								if($conn-> connect_error){
									die("connection failed:". $conn-> connect_error);
									
								}

								$sql ="SELECT first_name, last_name, user_email, user_status, role, username, password FROM user";
								$result =$conn-> query($sql);
								
								if($result->num_rows ){
									while ($row = $result-> fetch_assoc()){
										echo "<tr><td>". $row["first_name"] ."</td><td>". $row["last_name"] ."</td><td>". $row["user_email"] ."</td><td>". $row["user_status"] ."</td><td>". $row["role"] ."</td><td>". $row["username"]."</td><td>". $row["password"] ."</td></tr>";
									}
									echo "</table>";
								}
								else{
									echo "";
								}
									$conn-> close();
							?>
							
											
											
											
											
                                        </tbody>
                                        <tfoot>
                                           
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
							
							 <div class="module">
								 
								<div class="module-head">
									<div class="pull-right">
									<a  download="user.doc" href="visitors.php" class="btn btn-primary btn-sm">Copy</a>&nbsp;
									<a href="visitors.php" download="user.pdf"class="btn btn-primary btn-sm">PDF</a>&nbsp;
										<a href="#" class="btn btn-primary btn-sm">Print</a>
										
										
										
								    </div>
									
                                    <h3>
										Visits</h3>
									
									
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
														<li><a href="#">Arrived</a></li>
														<li><a href="#">Cancelled</a></li>
														<li class="divider"></li>
														<li><a href="#">Rescheduled</a></li>

													</ul>
												</div>
											</div>
								
									</div>
										
										
								<div class="module-body table">								

								
							</div>
										
									
								 
							</div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->


<?php 
	
	include('includes/footer.php');
	include("includes/scripts.php");
?>

       
		