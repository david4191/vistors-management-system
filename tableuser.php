<?php 
	

session_start();



	include('includes/header.php');
	
	include("includes/navbaruser.php");
	
	
?>
	    <div class="span9">
                        <div class="content">
                          	
							<div class="module">
								 
								<div class="module-head">
									<div class="pull-right">
									<a  download="user.doc" href="visitors.php" class="btn btn-primary btn-sm">Copy</a>&nbsp;
									<a href="visitors.php" download="user.pdf"class="btn btn-primary btn-sm">PDF</a>&nbsp;
										<button class="btn btn-primary btn-sm" onclick="printDiv()">Print</button>
										
										
										
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
									 <div id="printableTable">

									<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table  table-striped	 display"
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

								$sql ="SELECT vFull_name, vEmail, vMobile, office, created_by FROM visitors";
								$result =$conn-> query($sql);
								
								if($result->num_rows >0){
									while ($row = $result-> fetch_assoc()){
										echo "<tr><td>". $row["vFull_name"] ."</td><td>". $row["vEmail"] 
											."</td><td>". $row["vMobile"]  ."</td><td>". $row["office"] ."</td><td>". $row["created_by"] ."</td></tr>";
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
									
									<iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
							</div>
										
									
								 
							</div>
							
                         
							
							 <div class="module">
								 
								<div class="module-head">
									<div class="pull-right">
									<a  download="user.doc" href="visitors.php" class="btn btn-primary btn-sm">Copy</a>&nbsp;
									<a href="visitors.php" download="user.pdf"class="btn btn-primary btn-sm">PDF</a>&nbsp;
										<button class="btn btn-primary btn-sm" onclick="printDiv()">Print</button>
										
										
										
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
									
									 <div id="printableTable">

								<table cellpadding="0" cellspacing="0" border="0"class="datatable-1 table  table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                 Full Name
                                                </th>
												<th>
													Mobile No.
												</th>
                                                <th>
                                                  Date & Time
                                                </th>
											
												<th>Staff Name
                                                </th>
                                                <th>
                                                  Visit Type
                                                </th>
                                                <th>Visit Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
											
											<?php
								$conn = mysqli_connect("localhost","root","","mycms");
								if($conn-> connect_error){
									die("connection failed:". $conn-> connect_error);
									
								}

								$sql ="SELECT vfull_name, vmobile, timedate, staff_id, visit_type, visit_status FROM expected";
								$result =$conn-> query($sql);
								
								if($result->num_rows >0){
									while ($row = $result-> fetch_assoc()){
										echo "<tr><td>". $row["vfull_name"] ."</td><td>". $row["vmobile"] 
											."</td><td>". $row["timedate"]  ."</td><td>". $row["staff_id"] ."</td><td>". $row["visit_type"]."</td><td>". $row["visit_status"] ."</td></tr>";
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
									
									<iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
							</div>
								 
								 
							</div>
								 
								  <div class="module">
								 
								<div class="module-head">
									<div class="pull-right">
									<a  download="user.doc" href="visitors.php" class="btn btn-primary btn-sm">Copy</a>&nbsp;
									<a href="visitors.php" download="user.pdf"class="btn btn-primary btn-sm">PDF</a>&nbsp;
										<button class="btn btn-primary btn-sm" onclick="printDiv()">Print</button>
										
										
										
								    </div>
									
                                    <h3>
										Staffs</h3>
									
									
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
									
									 <div id="printableTable">

										<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table  table-striped	 display" width="100%">
										<?php 
											$conn = mysqli_connect("localhost", "root", "", "mycms");
											$query= "SELECT image, full_name, address, phone_number, created_by FROM staff";
											$query_run= mysqli_query($conn, $query);
										?>
                                        <thead>
                                            <tr>
												<th>Pics</th>
                                                <th>
                                                   Full Name
                                                </th>
												<th>
													Address
												</th>
                                                
												
                                                
												<th>
                                                 Mobile
                                                </th>
												<th>
                                                   Created By
                                                </th>
											
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php 
											if(mysqli_num_rows($query_run) >0)
											{
												while($row = mysqli_fetch_assoc($query_run))
												{
										?>
			
										<tr>
											<td><?php echo '<img src="upload/'.$row['image'].'" width="40px" height="30px" alt="image" >' ?></td>
											<td><?php echo $row['full_name']; ?></td>
											<td><?php echo $row['address']; ?></td>
											
											<td><?php echo $row['phone_number']; ?></td>
											<td><?php echo $row['created_by']; ?></td>
											
											
										</tr>

										<?php
												}
											}else{
												echo "NO Records Found";
											}
										?>
											
											
											
											
											
											
                                        </tbody>
                                        <tfoot>
                                           
                                        </tfoot>
                                    </table>
										 
										
									</div>
									
									<iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
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

<script type="text/javascript">
  function printDiv() {
         window.frames["print_frame"].document.body.innerHTML = document.getElementById("printableTable").innerHTML;
         window.frames["print_frame"].window.focus();
         window.frames["print_frame"].window.print();
       }
</script>

<?php 
	
	include('includes/footer.php');
	include("includes/scripts.php");
?>

       
		