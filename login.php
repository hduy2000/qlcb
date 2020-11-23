<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="./scss/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>


<?php 
		require'connect.php';

		if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		}
		if (isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			if (!$username || !$password) {
		        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
		        exit;
		    }
			//Kiểm tra tên đăng nhập có tồn tại không
		    $query = mysqli_query($conn,"SELECT magv,username, password,position FROM user WHERE username='$username'");

		    if (mysqli_num_rows($query) == 0) {
		        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
		        exit;
		    }	
		    //Lấy mật khẩu trong database ra
   			$row = mysqli_fetch_array($query);
   		
   			
   			 $_SESSION['username'] = $username;

   			//So sánh 2 mật khẩu có trùng khớp hay không
		    if ($password != $row['password']) {
		        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
		    exit;
			
    		}
    		else if ($row['position']==1) {
    			# code...
    			header("location:admin.php");
    			die();
    		}
    		else{
    			$id=$row['magv'];
    			header('location:user.php?id='.$id);
    			die();
    		}
     	
		}
        
        // lấy dữ liệu người dùng
		

 ?>

<body>

    <form method="POST" action="login.php" class="login-form">
        <h1>Login</h1>
        <div class="txtb">
            <input id="input1" type="text" name="username">
            <span data-placeholder="Username"></span>
        </div>

        <div class="txtb">
            <input id="input2" type="password" name="password">
            <span data-placeholder="Password"></span>
        </div>
        <input type="submit" class="logbtn" value="Login" name="submit">
        <div class="bottom-text">
            Don't have account? <a href="#">Sign up</a>
        </div>
    </form>

    <script src="main.js"></script>
    <script>
	function newDoc() {
  		window.location.assign("https://www.w3schools.com")
	}
</script>
</body>
</html>