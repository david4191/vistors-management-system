
<?php


session_start();
include("includes/vcodes.php");
include("includes/navbarvisitors.php");
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
								<h3>Visitor's Management Tool</h3>
							</div >
							
							<div class="module-option clearfix">
									<h6>Add New Visitor</h6>
							<div class="category">
						<form class="form form-control-lg" action="?" enctype="multipart/form-data" method="post">
									<div class="inputbox">
									
									<img src="<?php if(isset($_SESSION['picture'])){ echo $_SESSION['picture']; $_SESSION['location'] = $_SESSION['picture']; unset($_SESSION['picture']); } else{echo 'images/user.png'; }?>  " name='passport'>
									
										


									</div><br>
									<div class="inputbox">
									<input type="text" name="vFull_name" placeholder="Full Name" required>


									</div>
									<div class="inputbox">
									<input type="text" name="vEmail" placeholder="Email" required>


									</div>
									<div class="inputbox">
									<input type="text" name="vMobile" placeholder="Mobile " required>


									</div>
									<div class="inputbox">
									<input type="text" name="occupation" placeholder="Occupation" required>


									</div>
									<div class="inputbox">
									<input type="text" name="office" placeholder="Office" required>


									</div>
									
									<div class="inputbox">
										<label>Created By</label>
									<select  name="created_by" required>
										
										<option value="admin">Admin</option>
										
									</select>


									</div>

									<input type="submit" class="btn btn-primary btn-sm btn-block" name="submit" value="Create New Visitor"><br>
							&nbsp;
								</form>
								
								</div>
								
							
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
										Visitors</h3>
									
									
                                </div>
								
									<div class="module-option clearfix">
											
								
									</div>
								<!-- TABLE CODES -->
									<div class="table-responsive">
										<?php
											if(isset($_SESSION['success']) && $_SESSION['success'] !='')
											{
												echo '<h2> '.$_SESSION['success']. ' </h2>';
												unset($_SESSION['success']);
											}
											if(isset($_SESSION['status']) && $_SESSION['status'] !='')
											{
												echo '<h2> '.$_SESSION['status']. ' </h2>';
												unset($_SESSION['status']);
											}

											?>					

									<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-striped	 display"
                                        width="100%">
										<?php 
											$conn = mysqli_connect("localhost", "root", "", "mycms");
											$query= "SELECT image, vFull_name, vEmail, vMobile, office,  created_by FROM visitors";
											$query_run= mysqli_query($conn, $query);
										?>
                                        <thead>
                                            <tr>
												<th>Pics</th>
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
												<th>Edit</th>
												<th>Delete</th>\
												<th>Print ID</th>
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
										
											<td><?php echo '<img src="'.$row['image'].'" width="40px" height="30px" alt="image" >'; ?></td>
											
											<td><?php echo $row['vFull_name']; ?></td>
											<td><?php echo $row['vEmail']; ?></td>
											<td><?php echo $row['vMobile']; ?></td>
											<td><?php echo $row['office']; ?></td>
											
											<td><?php echo $row['created_by']; ?></td>
											
											<td>
												<form action="visitoredit.php" method="post">
													<input type="hidden" name="edit_name" value="<?php echo $row['vFull_name']; ?>">
											<button name="edit_btn" type="submit" class="btn btn-success">EDIT</button>
												</form>
											</td>
											<td>
												<form action="visitordelete.php" method="post">	
													<input type="hidden" name="delete_name" value="<?php echo $row['vFull_name'] ?>" >
													<button name="delete_btn" type="submit"  class="btn btn-danger">DELETE</button>
												</form>

											</td>
											
											<td>
												<form action="printidcardv.php" method="post">
													<input type="hidden" name="print_name" value="<?php echo $row['vFull_name']; ?>">
											<button name="print_btn" type="submit" class="btn btn-primary">ID</button>
												</form>
											</td>
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