<?php
// session_start();
include "C:/xampp/htdocs/123a/123aaa/model/pdo.php";
include "C:/xampp/htdocs/123a/123aaa/model/taikhoan.php";

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
                    if(is_array($checkuser) && ($checkuser!="")){
                        $thongbao="User đã tồn tại,đky tên khác";
                    }else{
                        themtaikhoan($name,$pass,$email);
                        $thongbao="Đăng Ký Thành Công";
                    }
                    
                }
                include "view/register.php";
                break;
case "dangnhap":
    include "view/login.php";
break;
    
        }
    }else{
            include "view/register.php";
        }    
    include "view/footer.php";
?>