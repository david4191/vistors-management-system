
<?php


//session_start();
include("includes/vcodes.php");
include("includes/navbaruser.php");
include("includes/header.php");
//include("saveimage.php");


?>
<?php

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
									
									<a  href="photosnapuser.php" class="btn btn-primary">Capture Visitor's Image</a>&nbsp;
									
									
										
										
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
										
										
										<option value="user">User</option>
									</select>


									</div>

									<input type="submit" class="btn btn-primary btn-sm btn-block" name="submit" value="Create New Visitor">
								&nbsp;
								<a  href="visitsuser.php" class="btn btn-primary btn-block">Register A Visit</a>&nbsp;<br>
								
						
								</form>
								
								</div>
								
							
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
											<!-- PRINT DIV AND TABLE-->
											 <div id="printableTable">

									<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table  table-striped	 display"
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
												<form action="printidcarduser.php" method="post">
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
									
									<iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
									</div>
										
									
							</div>
										
									
								 
							</div>
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->


<script type="text/javascript">
  function printDiv() {
         window.frames["print_frame"].document.body.innerHTML = document.getElementById("printableTable").innerHTML;
         window.frames["print_frame"].window.focus();
         window.frames["print_frame"].window.print();
       }
</script>
	

	<?php 


		include("includes/scriptsvisitors.php");
			include("includes/footer.php");
			

	?>