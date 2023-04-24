<?php


session_start();
include("includes/visitcodes.php");
include("includes/navbaruser.php");
include("includes/header.php");


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


<!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module message">
							<div class="module-head">
								<div class="pull-right">
									
										
										
								    </div>
								<h3>Visit Management Tool</h3>
							</div >
							
							<div class="module-option clearfix">
									<h6>Add New Visitor</h6>
							<div class="category">
						<form class="form form-control-lg" action="#" method="post">
							<div class="inputbox">
									<input type="text" name="vfull_name" placeholder="Full Name" required>


									</div>
							<div class="inputbox">
									<input type="text" name="vmobile" placeholder="Mobile Number" required>


									</div>
									<div class="inputbox">
									<label>Visit Type</label>
										<select name="visit_type" required>
												<option value="personal">Personal</option>
												<option value="business">Business</option>
												<option value="official">Official</option>
										</select>
										


									</div> 
									<div class="inputbox">
									<input type="text" name="visit_purpose" placeholder="Purpose of Visit" required>


									</div>
							
							<div class="inputbox">
									<label>Created By</label>		<select name="created_by" required>
												<option value="user">User</option>
											
											</select>
										


									</div>
									
									<div class="inputbox">
									<input type="text" name="staff_id" placeholder="Staff Id" required>


									</div>
									<div class="inputbox">
									<label>Visit Status</label>		<select name="visit_status" required>
												<option value="arrived">Arrived</option>
												<option value="cancelled">Cancelled</option>
												<option value="rescheduled">Rescheduled</option>
											</select>
										


									</div> <br>
									

									<input type="submit" class="btn btn-primary btn-sm btn-block" name="submit" value="Create New Visit">
								</form>
								</div>
								
							
							</div>
						
							
							
							
						</div>
						
							
							 <div class="module"> 
								 
								<div class="module-head">
									<div class="pull-right">
									<a  download="user.doc" href="visitors.php" class="btn btn-primary btn-sm">Copy</a>&nbsp;
									<a href="visitors.php" download="user.pdf"class="btn btn-primary btn-sm">PDF</a>&nbsp;
										<button onClick="fungsiCetak()"  class="btn btn-primary">Print</button>
													<script type="text/javascript">
														function fungsiCetak(){
															window.print();
														}
													</script>
										
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

									<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
												<th>
													Full Name
												</th>
                                                <th>
                                                  Visit Type
                                                </th>
												
                                                <th>
                                                  Date & Time
                                                </th>
											
												<th>Staff Name
                                                </th>
                                                <th>
                                                  Visit Status
                                                </th>
                                                <th>Created By</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
											
											<?php
								$conn = mysqli_connect("localhost","root","","mycms");
								if($conn-> connect_error){
									die("connection failed:". $conn-> connect_error);
									
								}

								$sql ="SELECT vfull_name,visit_type, timedate, staff_id, visit_status, created_by FROM expected";
								$result =$conn-> query($sql);
								
								if($result->num_rows >0){
									while ($row = $result-> fetch_assoc()){
										echo "<tr><td>". $row["vfull_name"] ."</td><td>". $row["visit_type"] 
											."</td><td>". $row["timedate"]  ."</td><td>". $row["staff_id"] ."</td><td>". $row["visit_status"]."</td><td>". $row["created_by"] ."</td></tr>";
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
							
							
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	

	<?php 


		include("includes/scriptsvisitors.php");
			include("includes/footer.php");
			

	?>