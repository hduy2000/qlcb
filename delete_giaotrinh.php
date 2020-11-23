<?php
	include_once('connect.php');
	
	$id=$_GET['id'];
	$sql = "DELETE FROM qlgt WHERE id='$id'";
	$sql_froren = "SET FOREIGN_KEY_CHECKS=0";
	$result = mysqli_query($conn,$sql_froren);
	if ($conn->query($sql) === TRUE) {
		header ('location: qlgt.php');
	}else {
	echo "Error updating record: " . $conn->error;
	}
 
	$conn->close();

?>