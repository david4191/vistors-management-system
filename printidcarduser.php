<?php
session_start();
include("includes/connect.php");
include("includes/navbaruser.php");
include("includes/header.php");



?>
<link href="bootstrap/jquery-3.4.1.min.js" rel="stylesheet" type="text/javascript">
<style>
	.data{
		
		font-size: 13px;
		font-weight: 400;
		margin: 5px;
	}
</style>
<div class="span9">
	<div class="content">
		 <div class="module"> 
			 
			 	<div class="module-head">
									<div class="pull-right">
									
								    </div>
									
                                    <h3>
										 ID Card</h3>
									
									
                                </div>
			
			 
			 <div class="module-option clearfix">
			 <div class="category">
				 <div id="printableTable">
				<table>
					<?php
							
							$conn = mysqli_connect("localhost", "root", "", "mycms");
						
							if(isset($_POST['print_btn']))
							{
								$firstname= $_POST['print_name'];

								$query= "SELECT image, vFull_name, vEmail, vMobile, office,  created_by FROM visitors WHERE vFull_name='$firstname'";
								$query_run= mysqli_query($conn, $query);

								foreach($query_run as $row)
								{
									?>
					<thead>
					<tr>
							
					</tr>
					
					</thead>
					
					<tbody>
						<tr>
							
							<td><br>
								<?php echo '<img src="'.$row['image'].'" width="90px" height="90px" alt="image" >'; ?> 
								
						
							
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="data">
									<br>
									<?php echo $row['vFull_name']; ?><br>
									
									<?php echo $row['vEmail']; ?><br>


									
									<?php echo $row['vMobile']; ?><br>


							</td>
								

						
								
									<?php
								}

							}

					?>
					</tr>
					</tbody>
					
								 	
				 </table><br>
				 <button class="Btn btn-primary btn-sm" onclick="printDiv()">Print</button>
				 </div>
				  <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
			 </div>

			</div>
		</div>
			

</div>
</div>
</div>

<script type="text/javascript">
  function printDiv() {
         window.frames["print_frame"].document.body.innerHTML = document.getElementById("printableTable").innerHTML;
         window.frames["print_frame"].window.focus();
         window.frames["print_frame"].window.print();
       }
</script>






	<?php 


		include("includes/scripts.php");
			include("includes/footer.php");
			

	?>