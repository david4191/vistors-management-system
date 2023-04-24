                
<?php 
	

session_start();





	include('includes/header.php');
	include('includes/navbaruser.php');
	
include('counts.php');

	
?>
<!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="visitorsuser.php" class="btn-box big span4"><i class=" icon-group"></i><b><?php echo $total_visitors; ?></b>
                                        <p class="text-muted">
                                           Visitors</p>
                                    </a><a href="#" class="btn-box big span4"><i class="menu-icon icon-user"></i><b><?php echo $total_visits; ?></b>
                                        <p class="text-muted">
                                            Visits</p>
                                    </a>
									
									  <ul class="widget widget-usage unstyled span4">
                                        <li>
                                            <p>
                                                <strong>Visit </strong> <span class="pull-right small muted"><?php echo $total_visits; ?></span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar" style="width: <?php echo $total_visits; ?>%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Expected Visits </strong> <span class="pull-right small muted"><?php echo $total_visits; ?></span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-success" style="width: <?php echo $total_visits; ?>%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Total Users </strong> <span class="pull-right small muted"><?php echo $total_users; ?></span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-warning" style="width: <?php echo $total_users; ?>%;">
                                                </div>
                                            </div>
                                        </li>
                                       
                                    </ul>
									
                                </div>
								
								 <div class="btn-box-row row-fluid">
                                    <a href="visitorsuser.php" class="btn-box big span4"><i class=" icon-group"></i><b><?php echo $total_users; ?></b>
                                        <p class="text-muted">
                                          Users</p>
                                    </a><a href="#" class="btn-box big span4"><i class="menu-icon icon-bar-chart"></i><b><?php echo $total_chat; ?></b>
                                        <p class="text-muted">
                                           Chats</p>
                                    </a>
									
									
									
                                </div>
                               <!-- <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="#" class="btn-box small span4"><i class="icon-sort-down"></i><b>All Visitors</b>
                                                </a><a href="visitorsuser.php" class="btn-box small span4"><i class="icon-group"></i><b>Visitors</b>
                                                </a><a href="expectedvisits.php" class="btn-box small span4"><i class="icon-exchange"></i><b>Visits</b>
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                   
                                
                                </div> -->
                            </div>
                            <!--/#btn-controls-->
                            <div class="module">
                              
                               
                            </div>
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    
                                </div>
                             
                            </div>
                           <div class="module">
                                 <div class="module-head">
                                    <h3>
                                        Visitors</h3>
                                </div>
                                <div class="module-body table">
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
                                                  Occupation
                                                </th>
												<th>
                                                 Office
                                                </th>
                                             <th>
                                                    Created by
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
											
											<?php
								$conn = mysqli_connect("localhost","root","","mycms");
								if($conn-> connect_error){
									die("connection failed:". $conn-> connect_error);
									
								}

								$sql ="SELECT vFull_name, vEmail, vMobile, occupation, office, created_by FROM visitors";
								$result =$conn-> query($sql);
								
								if($result->num_rows >0){
									while ($row = $result-> fetch_assoc()){
										echo "<tr><td>". $row["vFull_name"] ."</td><td>". $row["vEmail"] ."</td><td>". $row["vMobile"] ."</td><td>". $row["occupation"] ."</td><td>". $row["office"] ."</td><td>". $row["created_by"] ."</td></tr>";
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
	include('includes/scripts.php');
	include('includes/footer.php');
?>
