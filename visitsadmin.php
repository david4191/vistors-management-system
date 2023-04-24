<?php


session_start();
include("includes/visitcodes.php");
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


<!-- HEADER SETTINGS -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/jquery-3.4.1.min.js"></script>
<!---MAIN CODES--->

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
									<h6>Add New Visit</h6>
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

									<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-striped	 display"
                                        width="100%">
										<?php 
											$conn = mysqli_connect("localhost", "root", "", "mycms");
											$query= "SELECT vfull_name,visit_type,  timedate, staff_id, visit_status, created_by FROM expected";
											$query_run= mysqli_query($conn, $query);
										?>
										
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
												<th>Edit</th>
												<th>Delete</th>
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
											<td><?php echo $row['vfull_name']; ?></td>
											<td><?php echo $row['visit_type']; ?></td>
											<td><?php echo $row['timedate']; ?></td>
											<td><?php echo $row['staff_id']; ?></td>
											<td><?php echo $row['visit_status']; ?></td>
											<td><?php echo $row['created_by']; ?></td>
											
											<td>
												<form action="visitadmiinedit.php" method="post">
													<input type="hidden" name="edit_name" value="<?php echo $row['vfull_name']; ?>">
											<button name="edit_btn" type="submit" class="btn btn-success">EDIT</button>
												</form>
											</td>
											<td><form action="visitadmindelete.php" method="post">	
												<input type="hidden" name="delete_name" value="<?php echo $row['vfull_name'] ?>" >
												<button name="delete_btn" type="submit" class="btn btn-danger">DELETE</button>
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