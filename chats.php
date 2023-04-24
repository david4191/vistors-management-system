
<?php
	
session_start();


		
?>
<!DOCTYPE html>
<html>
	<head>
		
		<title>Login</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		
		
		<script src="bootstrap/js/bootstrap.min.js"></script>
		
		<style>
			*{
				margin: 0;
				padding: 0;
			}
			#main{
				border: 1px solid black; width:450px; height: 500px; margin: 24px auto; 
			}
			#message_area{
				width: 98%;
				border: 1px solid blue;
				height: 400px;
			}
		</style>
		
	</head>
	
	<body>
	<div id="main">
		<div id="message_area">
	
			
			
		</div>
		<?php 
		
		$q1= "SELECT * FROM message ";
		$r1= mysqli_query($conn, $q1);
		while($row= mysqli_fetch_assoc($r1)){
			$message= $row['message'];
			$username= $row['username'];
			echo '<h4 style="color:red">' .$username. '<?h4>';
			echo '<p>' .$message. '<?p>';
		}
			
		
		
			include("includes/connect.php");
			if(isset($_POST['submit'])){
				$message= $_POST['message'];
				
				
				$q= 'INSERT INTO chats(id, message, username) VALUES ("","'.$message.'", "'.$_SESSION['username'].'")';
				if (mysqli_query($conn, $q)){
					echo '<h4 style="color:red">' .$_SESSION['username']. '<?h4>';
					echo '<p>' .$message. '<?p>';
				}
			}
		?>
		
		<br>
		<form action="#" method="post">
				
				
				<input type="text" name="message" style="width:400px, height:50px" placeholder="Type your message" required />
					<input type="submit" class="btn btn-primary" name="submit" value="Message">
			
					
				
				</form>
	</div>
	
	</body>

</html>
