<?php 
    	require'connect.php';
  		$id=$_GET['id'];
		$query = mysqli_query($conn,"SELECT  * FROM  user WHERE magv ='$id'");
	    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin</title>
</head>
<body>
	<a href="#">Đổi mật khẩu</a>
	<form  action="xl_suathongtin.php" method="POST">
 		<div class="form-group">
		    <label for="email">Họ và tên:</label>
		    <input name = "name" type="text" class="form-control"  value="<?php echo $row['name'] ?>">
		</div>
		<div class="form-group">
		    <label for="email">Địa chỉ:</label>
			<input name="addr" type="text" class="form-control"  value="<?php echo $row['addr'] ?>">
		</div>
		<select name="sex">
	        <option value="Nam">Nam</option>
    		<option value="Nữ">Nữ</option>
	    </select><br/>
		<div class="form-group">
		    <label for="email">Số điện thoại:</label>
		    <input name="phone" type="text" class="form-control"  value="<?php echo $row['phone'] ?>">
		</div>
		<div class="form-group">
		    <label for="email">Email:</label>
		    <input name="email"type="text" class="form-control"   value="<?php echo $row['email'] ?>">
		</div>
		<input type="submit" name="submit-edittt" value="Lưu">
	</form>

</body>
</html>