<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/login.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
	//Gọi file config.php 
	require_once("config.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["Login"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
            $password = $_POST["password"];
            $role=$_POST["role"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{
			$sql = "SELECT * from users where username = '$username' and password = '$password'and role='$role' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
                        if($role=="Admin"){
                              header('Location: admin/admin.php');
                        }
                        else{
                        
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                        $_SESSION['username'] = $username;
                        header('Location: index.php'); }
                       // Thực thi hành động sau khi lưu thông tin vào session
                        // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php      
			}
		}
	}
?>
  <h1 style=text-align:center>Login </h1>
  <div class="container">
        <div class="row">
            <div class="col-md-6"><img src="https://studentstutorial.com/project/signuser/images/signin-image.jpg" alt=""> 
                <div class="content-link">
                    <a href="logout.php">Logout</a></br>
                    <a href="register.php">Create a new account</a>
                    </br>
                    </hr>
                    <a href="">Forgot your password ?</a>
                 </div>       
           </div>   
            <div class="col-md-6">
                <form style="width:300px; height:200px" action="" method="POST">
                    <div class="form-group">
                          <label for="">username</label>
                          <input type="username" class="form-control" name="username" id="txtusername" aria-describedby="emailHelpId" placeholder="">
                          
                    </div>
                    <div class="form-group">
                          <label for="">Password</label>
                          <input type="password" class="form-control" name="password" id="txtPassword" aria-describedby="emailHelpId" placeholder="">
                          
                    </div>
                    <div class="form-group">
                          <label for="">Role</label>
                          <input type="role" class="form-control" name="role" id="txtrole" aria-describedby="emailHelpId" placeholder="">
                          
                    </div>
                    
                    <div class="form-group">
                          <input type="submit" class="form-control btn btn-primary" value="Login" name="Login" id="txtLogin" aria-describedby="emailHelpId" placeholder="">
                    </div>
                    
                </form>
                
            </div>
        </div>
        
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
