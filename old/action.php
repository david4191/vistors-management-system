<?php

$mysqli = new mysqli('localhost', 'root', '', 'mycms');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

$page = isset($_GET['p'])?  $_GET['p'] : '';
if($page=='view'){
	$result= $mysqli->query("SELECT * FROM department WHERE deleted !='1'");
	while($row= $result->fetch_assoc()){
		?>
		<tr>
			<td><?php echo $row['dept_id'] ?></td>
			<td><?php echo $row['dept_name'] ?></td>
			<td><?php echo $row['dept_desc'] ?></td>
			<td><?php echo $row['created_by'] ?></td>
			<td><?php echo $row['date_created'] ?></td>
		</tr>

		<?php
	}
}else{
	




	// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
	// Note that is just an example. Should take precautions such as filtering the input data.

	header('Content-Type: application/json');

	$input = filter_input_array(INPUT_POST);



	if ($input['action'] == 'edit') {
		$mysqli->query("UPDATE department SET dept_name='" . $input['dept_name'] . "', dept_desc='" . $input['dept_desc'] . "', created_by='" . $input['created_by'] . "', date_created='" . $input['date_created'] ."' WHERE dept_id='" . $input['id'] . "'");
	} else if ($input['action'] == 'delete') {
		$mysqli->query("UPDATE department SET deleted=1 WHERE dept_id='" . $input['id'] . "'");
	} else if ($input['action'] == 'restore') {
		$mysqli->query("UPDATE department SET deleted=0 WHERE dept_id='" . $input['id'] . "'");
	}

	mysqli_close($mysqli);

	echo json_encode($input);

}

?>