
<?php
session_start();


include("includes/ncodes.php");
include("includes/navbaruser.php");
include("includes/header.php");
include('counts.php');
	include('countsUsers.php');

?>


					<div class="span9">
                        <div class="content">
							 <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class="icon-group"></i><b><?php echo $total_users; ?></b>
                                        <p class="text-muted">
                                            User's</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b><?php echo $total_visits; ?></b>
                                        <p class="text-muted">
                                           Visitor's</p>
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
                                    <div class="span8">
                                        <div class="row-fluid">
                                            
                                        </div> 
                                        
                                    </div>
                                     
                                </div>
                            </div>
							
							<div class="module">
                                <div class="module-head">
									
									
                                    <h3>
										Users</h3>
									
									
                                </div>
                                <div class="module-body table">
									
									
									
                                    <table cellpadding="0" cellspacing="0" border="0"class="datatable-1 table  table-striped	 display"
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
                                                   Username
                                                </th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
											
											<?php
								$conn = mysqli_connect("localhost","root","","mycms");
								if($conn-> connect_error){
									die("connection failed:". $conn-> connect_error);
									
								}

								$sql ="SELECT first_name, last_name, user_email, user_status,  username FROM user";
								$result =$conn-> query($sql);
								
								if($result->num_rows >0){
									while ($row = $result-> fetch_assoc()){
										echo "<tr><td>". $row["first_name"] ."</td><td>". $row["last_name"] ."</td><td>". $row["user_email"] ."</td><td>". $row["user_status"]  ."</td><td>". $row["username"]."</td></tr>";
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
	include("includes/scripts.php");
	include('includes/footer.php');

?>