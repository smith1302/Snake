<?php
	require 'connect.php';
	$count = (int) $_POST['count'];
	$sql = mysqli_query($con, "SELECT * FROM Snake_Scores ORDER BY Score DESC LIMIT $count") or die(mysql_error());
	$arr = array();
	while($row = $sql->fetch_assoc()) {
		$arr[] = $row;
	}
	echo json_encode($arr);
?>