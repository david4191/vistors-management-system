                
<?php 
	

session_start();


	include('includes/header.php');
	include('includes/navbar.php');

	
	
?>

<!-- HEADER SETTINGS -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/jquery-3.4.1.min.js"></script>
<!---MAIN CODES--->

<!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a  class="btn-box big span4"><i class=" icon-user"></i><b><?php echo $total_users; ?></b>
                                        <p class="text-muted">
                                            Users</p>
                                    </a><a  class="btn-box big span4"><i class="icon-group"></i><b><?php echo $total_visitors; ?></b>
                                        <p class="text-muted">
                                            Visitors</p>
                                    </a><a  class="btn-box big span4"><i class="icon-user"></i><b><?php echo $total_staff; ?></b>
                                        <p class="text-muted">
                                            Staffs</p>
                                    </a>
									
                                </div>
								<div class="btn-box-row row-fluid">
									
									
									<a  class="btn-box big span4"><i class=" icon-user"></i><b><?php echo $total_dept; ?></b>
                                        <p class="text-muted">
                                            Departments</p>
                                    </a><a  class="btn-box big span4"><i class="icon-group"></i><b><?php echo $total_visits; ?></b>
                                        <p class="text-muted">
                                            Visits</p>
                                    </a><a  class="btn-box big span4"><i class="menu-icon icon-bar-chart"></i><b><?php echo $total_chat; ?></b>
                                        <p class="text-muted">
                                            Chats</p>
                                    </a>
									
								</div>
                            </div>
                           
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
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
                                    <hr />
                                    <div class="slider-range">
                                    </div>
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
											$query= "SELECT first_name, last_name, user_email, user_status, role,username, password FROM user";
											$query_run= mysqli_query($conn, $query);
										?>
	
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
											<td><?php echo $row['first_name']; ?></td>
											<td><?php echo $row['last_name']; ?></td>
											<td><?php echo $row['user_email']; ?></td>
											<td><?php echo $row['user_status']; ?></td>
											<td><?php echo $row['role']; ?></td>
											<td><?php echo $row['username']; ?></td>
											<td><?php echo $row['password']; ?></td>
											<td>
												<form action="adminuseredit.php" method="post">
													<input type="hidden" name="edit_name" value="<?php echo $row['first_name']; ?>">
											<button name="edit_btn" type="submit" class="btn btn-success">EDIT</button>
												</form>
											</td>
											<td>
												<form action="adminuserdelete.php" method="post">	
												<input type="hidden" name="delete_name" value="<?php echo $row['first_name'] ?>" >
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
	include('includes/scripts.php');
	include('includes/footer.php');
?>
