<?php 
	require 'connect.php';
	$id = $_GET['id'];
	$query = "SELECT * FROM `qlgt` WHERE magv='$id'";
	$result = mysqli_query($conn, $query);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Quản lý giáo trình</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./scss/fontawesome-free-5.15.1-web/css/all.min.css">
	<style type="text/css">
	*{
			margin: 0;
		}
		.img{
			height: 50px;
			width: 50px;
		}
	</style>
</head>
<body>

		
		<br>
		<table border="1" style="border-spacing: 0">
			<tr>
		        <th>ID</th>
		        <th>Mã gv</th>
		        <th>Tên</th>
		        <th>Chắc năng</th>
		        
		    </tr>
		    <?php 
		    	if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
				        <td>$row[id]</td>
				        <td>$row[magv]</td>
				        <td>$row[name]</td>
				        <td class='flex-tb'> <a title='view' href='view_giaotrinh.php?id=$row[id]'><i class='fas fa-eye'></i></a> | <a title='delete' href='delete_giaotrinh.php?id=$row[id]'><i class='fas fa-trash-alt'></i></a>
				        </td>
				        
			   		</tr>
				";
				}
			}
		    ?>
		</table>
</body>
</html>