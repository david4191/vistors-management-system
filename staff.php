
<?php


session_start();

include("includes/navbarvisitors.php");
include("includes/header.php");
include("includes/staffupload.php");

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

<!-- HEADER SETTINGS -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/jquery-3.4.1.min.js"></script>
<!---MAIN CODES--->
<!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module message">
							<div class="module-head">
								
								<h3>Staff's Management Tool</h3>
							</div >
							
							<div class="module-option clearfix">
									<h6>Add New Staff</h6>
										
                            <!-- NOTIFICATION FORM-->
									<center>
										  <form method="post" id="comment_form">
										   <div class="form-group">
											</div>
										   <div class="form-group">
											</div>
										   <div class="form-group">
											</div>
										  </form>
									</center>
								<!---MAIN CODES-->
							<div class="category">
								<form class="form form-control-lg" action="?" enctype="multipart/form-data" method="post">
									<div class="inputbox">
										<label>Upload Image</label>
									<input type="file" name="file" required>


									</div>
									<div class="inputbox">
									<input type="text" name="full_name" placeholder="Full Name" required>


									</div>
									
									<div class="inputbox">
									<input type="text" name="address" placeholder="Address" required>


									</div>
									<div class="inputbox">
									<input type="text" name="email" placeholder="Email" required>


									</div>
									<div class="inputbox">
									<input type="text" name="phone_number" placeholder="Mobile Number" required>


									</div>
									
									<div class="inputbox">
										<label>Created By</label>
									<select  name="created_by" required>
										
										<option value="admin">Admin</option>
										<option value="user">User</option>
									</select>


									</div>

									<input type="submit" class="btn btn-primary btn-sm btn-block" name="submit" value="Create New Staff">
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
										Staff's</h3>
									
									
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
										
										 <div id="printableTable">

									<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table  table-striped display" width="100%">
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
												<th>Edit</th>
												<th>Delete</th>
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
											<td><?php echo '<img src="upload/'.$row['image'].'" width="40px" height="30px" alt="image" >' ?></td>
											<td><?php echo $row['full_name']; ?></td>
											<td><?php echo $row['address']; ?></td>
											
											<td><?php echo $row['phone_number']; ?></td>
											<td><?php echo $row['created_by']; ?></td>
											
											<td>
												<form action="staffedit.php" method="post">
													<input type="hidden" name="edit_name" value="<?php echo $row['full_name']; ?>">
											<button name="edit_btn" type="submit" class="btn btn-success">EDIT</button>
												</form>
											</td>
											<td>
												<form action="staffdelete.php" method="post">	
													<input type="hidden" name="delete_name" value="<?php echo $row['full_name']; ?>" >
													<button name="delete_btn" type="submit"  class="btn btn-danger">DELETE</button>
												</form>

											</td>
											
											<td>
												<form action="printidcard.php" method="post">
													<input type="hidden" name="print_name" value="<?php echo $row['full_name']; ?>">
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

	
<!---SCRIPT FOR NOTIFIACTION-->
	
<script>
$(document).ready(function(){
// updating the view with notifications using ajax
function load_unseen_notification(view = '')
{
 $.ajax({
  url:"fetch.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
  {
   $('.dropdown-menu').html(data.notification);
   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }
  }
 });
}
load_unseen_notification();
// submit form and get new records
$('#comment_form').on('submit', function(event){
 event.preventDefault();
 if($('#subject').val() != '' && $('#comment').val() != '')
 {
  var form_data = $(this).serialize();
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
   {
    $('#comment_form')[0].reset();
    load_unseen_notification();
   }
  });
 }
 else
 {
  alert("Both Fields are Required");
 }
});
// load new notifications
$(document).on('click', '.dropdown-toggle', function(){
 $('.count').html('');
 load_unseen_notification('yes');
});
setInterval(function(){
 load_unseen_notification();;
}, 5000);
});

	
</script>

	<?php 


		include("includes/scriptsvisitors.php");
			include("includes/footer.php");
	?>