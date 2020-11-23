<?php 
	require('connect.php');

	$query = "SELECT * FROM `user`";
	$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

		   <form name="form-add"  action="" method="POST">
		   		<label for="magv">Mã giảng viên:</label> <input type="text" value="" name="magv" id="magv"><br/>
                <label for="name">Tên giảng viên:</label> <input type="text" value="" name="name"><br/>
	           
	            <label for="addr">Địa chỉ: <input type="text" value="" name="addr"></label><br/>
	            <label for="sex">Giới tính: </label>
	            <select name="sex">
	            	<option value="Nam">Nam</option>
    				<option value="Nữ">Nữ</option>
	            </select><br/>
            	<label>Phone: <input type="text" value="" name="phone"></label><br/>
            	 <label for="email">Email: <input type="text" value="" name="email"></label><br/>
            	<label for="username">username:</label> <input type="text" value="" name="username"><br/>
                <label for="password">password:</label> <input type="text" value="" name="password"><br/>
	            <input type="submit" value="Lưu" name="update_user">
           </form>
          
	
</body>
</html>
<?php 
	
	require 'connect.php';
		
	if (isset($_POST["update_user"])){
		$magv= $_POST['magv'];
		$username = $_POST['username'];
		$query = "SELECT * FROM `user` WHERE magv = '$magv' or username='$username'";

		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($result);
		if ($row) {
			echo "
	 	<script type='text/javascript'>
	 		
	 		alert('Mã giảng viên hoặc tên đăng nhập đã tồn tại mời nhập lại');
	 	</script>";

 	

		# code...
		}
		else{
			$magv= $_POST['magv'];
			$name = $_POST['name'];
			$addr = $_POST['addr'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$sex = $_POST['sex'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			echo $magv;

			$sql = "INSERT INTO user(magv,name,sex,addr,phone,email,username,password) VALUES ('$magv','$name','$sex','$addr','$phone','$email','$username','$password')";
			$query = mysqli_query($conn,$sql);
			if ($query) {
        		header ('location: admin.php');
    		} else {
        		echo "Error: " . $sql . "<br>" . $conn->error;
    		}
		}
	

//Đóng database
$conn->close();
	}
	
 ?>
