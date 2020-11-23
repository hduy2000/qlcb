<?php 
	include_once "connect.php";

	$magv = $_GET['id'];
	$sql = "DELETE FROM user WHERE magv = '$magv'";
	echo "$magv";
	if($conn->query($sql)==TRUE){
		echo $magv;
		header("location: admin.php");

	}
?>