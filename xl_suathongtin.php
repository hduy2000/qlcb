<?php 
	include_once "connect.php";
	$magv = $_GET['id'];
		echo $magv;
	if ($_POST['submit-edittt']) {

		$name = $_POST['name'];
		$sex = $_POST['sex'];
		$addr = $_POST['addr'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];

		$sql = "UPDATE user SET name = '$name', sex = '$sex', addr = '$addr', phone = '$phone', email = '$email' ";
	}
?>