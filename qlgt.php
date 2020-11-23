<?php 
	require 'connect.php';
	$query = "SELECT * FROM `qlgt` ";
	$result = mysqli_query($conn, $query);
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./scss/fontawesome-free-5.15.1-web/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="./scss/qlgt.css">
	<title>Quản lý giáo trình</title>
	<meta charset="utf-8">
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
			<table class="table " border="1" style="border-spacing: 0">
			<tr>
		        <!-- <th scope="col">Mã giảng viên</th> -->
		        <th scope="col">Tên giảng viên</th>
		        <th scope="col">Tên học phần</th>
		        <th scope="col">Hành động</th>
		    </tr>
		    <?php 
		    	if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
				        <td>$row[magv]</td>
				        <td>$row[name]</td>
				        <td class='flex-tb'> <a title='view' href='view_giaotrinh.php?id=$row[id]'><i class='fas fa-eye'></i></a> | <a title='delete' href='delete_giaotrinh.php?id=$row[id]'><i class='fas fa-trash-alt'></i></a></td>
			   		</tr>
				";
				}
			}
		    ?>
		</table>
	
</body>
</html>