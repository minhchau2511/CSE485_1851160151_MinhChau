<!doctype html>
<html lang="en">

<head>
  <title>Ducan Kitchen</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="http://sachinchoolur.github.io/lightslider/index.html">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="js/lightslider.css">
  <link type="text/css" rel="stylesheet" href="./css/lightslider.css" />   

</head>

<body>
<!--Chúc mừng bạn có username là <?php echo $_SESSION['username'];  ?> đã đăng nhập thành công !-->
   <!-- header start -->
<header class="header">
    <div class="hd-top">
        <div class="container">
            <div class="row">
                <div class="h-left col-md-2 text-center">
                    <span class="uppercase">bài viết phổ biến</span>
                </div>
                <div class="icon-left-right col-md-1 text-center">
                    <i class="fa fa-angle-left"></i>
                    <i class="fa fa-angle-right"></i>
                </div>
                <div class="row h-right col-md-8 white-hover">
                    <div class="col-md-6 hover left">
                        <a href="#">7 Cách Làm Nước Sốt Salad Đơn Giản</a>
                    </div>
                    <div class="col-md-6 hover right white-hover">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter-square"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-envelope-open-text"></i></a>
                    </div>
                </div>
                <div class="row h-right col-md-1 white-hover">
                   <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Guest</a>
                      <div class="dropdown-menu" aria-labelledby="dropdownId">
                          <a class="dropdown-item" href="login.php">Login</a>
                          <a class="dropdown-item" href="register.php">Register</a>
                      </div>
                  </li>
                </div>
            </div> 
        </div>
    </div>

    <!-- navbar start -->
    <div class="hd-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light nav-style">
                <a class="navbar-brand active" href="index.php">Trang chủ</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto col-md-11">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Đồ Uống
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="congthuc.php">công thức</a>
                              <a class="dropdown-item" href="#">Bia</a>
                              <a class="dropdown-item" href="#">Nước Ngọt</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Tất Cả</a>
                            </div>
                        </li>                            
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dinh dưỡng
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="dinhduong.php">Thực phẩm</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="congthuc.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                               Khoá học
                            </a>
                        </li>    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Món Âu
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Đồ Tráng Miệng
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>    
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hỏi Và Đáp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bản Quyền & Liên Hệ</a>
                        </li>
                    </ul>
                    <div class="col-md-1 icon-search text-center">
                        <a href=""><i class="fa fa-search"></i></a>
                    </div>

                </div>
              </nav>
        </div>
    </div>
</header>