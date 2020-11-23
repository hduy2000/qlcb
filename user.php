
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <?php 
    	require'connect.php';
  		$id=$_GET['id'];
		$query = mysqli_query($conn,"SELECT  * FROM  user WHERE magv='$id'");
		$row = mysqli_fetch_array($query);
     ?>
    <body>
	<form  action="user.php">
 		<div class="form-group">
		    <label for="email">Họ và tên:</label>
		    <input type="text" class="form-control" readonly value="<?php echo $row['name'] ?>">
		</div>
		<div class="form-group">
		    <label for="email">Địa chỉ:</label>
			<input type="text" class="form-control" readonly value="<?php echo $row['addr'] ?>">
		</div>
		<div class="form-group">
		    <label for="phone">Số điện thoại:</label>
		    <input type="text" class="form-control" readonly value="<?php echo $row['phone'] ?>">
		</div>
		<div class="form-group">
		    <label for="email">Email:</label>
		    <input type="text" class="form-control" readonly  value="<?php echo $row['email'] ?>">
		</div>
		<a href="giaotrinh.php?id=<?php echo $id ?>" type="button" class="btn btn-info">Quản lý giáo trình</a>
		
		<a href="suathongtin.php?id=<?php  echo $id ?>" type="button" class="btn btn-info">Sửa thông tin</a>
		<a href="themdetai.php?id=<?php echo $id ?>" type="button" class="btn btn-info">Thêm đề tài</a>
	</form>
    </body>
</html>