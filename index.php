<?php
// session_start();
include "model/pdo.php";
include "model/taikhoan.php";

    include "view/header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "dangky":
                if(isset($_POST['dangky'])&&($_POST['dangky']!="")){
                    $name = $_POST['user'];
                    $email = $_POST['email'];
                    $pass=$_POST['matkhau'];
                  $checkuser=checkuser($name);
if(is_array($checkuser)){
    $thongbao="User "
}
                    themtaikhoan($name,$pass,$email);
                    $thongbao="Đăng Ký Thành Công";
                }
include "view/register.php";
break;
case "dangnhap":
    include "view/login.php";
break;
    
        }
    }else{
            include "view/trangchu.php";
        }    
    include "view/footer.php";
?>