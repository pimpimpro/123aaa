<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Run Elite</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="image/runelite-removebg.png">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>  
    <link rel="stylesheet" href="css/login.css">              

</head>
    <!-- BIGIN HEADER -->
    <div class="wrapper">
        <div class="header">
          <div class="header-logo">
                <a href=""><img src="image/runelite-removebg.png" alt=""></a>    
                  
          </div>

          <div class="box_search">
            <form action="" method="POST">
                <input type="text" placeholder="Từ khóa tìm kiếm" name="keyword">
                <button name="timkiem" ><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </div>

          <div class="nav">
            <ul>
                <li><a href="">Trang chủ</a></li>
                <li><a href="">Sản Phẩm</a></li>
                <li class="nav2">
                  <a href="">My Order <i class="fa-regular fa-heart"></i></a>
                </li>
                <li>               
                  <a href="">My Cart <i class="fa-solid fa-cart-shopping"></i></a>
                </li>
                
                <!-- <li class='margin'><a href="">Giỏ hàng</a></li>  -->
                <!-- <li class="menu2">
                      <?php
                        if(isset($_SESSION['user'])){
                            extract($_SESSION['user']);  
                            if($role==0){
                              echo "<a>Xin chào: <b>$user</b> !</a>
                                  <ul class='menu2-1'>
                                    <li><a href='index.php?act=edittk'>Thông tin tài khoản</a></li>
                                    <li><a href='logout.php'>Đăng xuất</a></li>
                                  </ul>
                            ";
                            }else{
                              echo "<a>Xin chào: <b>$user</b> !</a>
                                    <ul class='menu2-1'>
                                        <li><a href='index.php?act=edittk'>Thông tin tài khoản</a></li>
                                        <li><a href='admin/index.php'>Quản lý web</a></li>
                                        <li><a href='logout.php'>Đăng xuất</a></li>
                                        
                                    </ul>
                              ";
                            }                    
                                  
                        }else{
                            echo '<a class="button-login" href="login.php">Đăng nhập</a>' ;
                        } 
                        ?>
                  </li>     -->
                  <!-- <li class="menu2"><a href="">Đăng nhập</a></li> -->
                  <button class="menu2"><a href="">Đăng nhập</a></button>
              </ul>
          </div>
      </div>
            <!-- END HEADER -->