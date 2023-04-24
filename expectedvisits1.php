<?php


session_start();
include("includes/visitcodes.php");
include("includes/navbar.php");
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
						<div class="module">
			
							<div class="module-body table">								

									<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
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