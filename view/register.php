<?php
    // session_start();
    // if( isset($_POST['dangnhap'])){
    //     $Username = $_POST['Username'];
    //     $password = $_POST['password'];

    //     if($Username == 'admin@gmail.com' && $password =='123'){
           
    //         header('location:login.php');
    //     }
    //     else{
    //         echo "tài khoản hoặc mật khẩu sai";
    //     }
    // }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>
<body>
<section class="container-login forms"> 
    <div class="form login">      
        <div class="form-content">
            <h2>Welcom to</h2>
            <h1>Run ELite</h1>
            <form action="#">
                <div class="field input-field">
                    <label for="">Username</label><br>
                    <input type="text" placeholder="Username" class="input" >
                </div>

                <div class="field input-field">
                    <label for="password">Password</label> <br>
                    <input type="password" name="matkhau" id="matkhau" placeholder="Mật khẩu của bạn">
                    
                    
                </div>
                <div class="field input-field">
                    <label for="password"> Nhập lại Password</label> <br>
                    <input type="password" name="confirm-matkhau" id="confirm-matkhau" placeholder="Nhập lại mật khẩu">
                    
                   </div>

                <div class="form-link">
                <input type="checkbox" name="show-matkhau" id="show-matkhau" onclick="hienmatkhau()">
                <label for="show-matkhau">Hiện mật khẩu</label>
                    <a href="#" class="forgot-pass">Forgot password?</a>
                </div>
                <div class="button-login">
                    <button>Register</button>
                </div>
            </form>
            <div class="form-register">
                <span>Don't have an account? <a href="./login.html" class="link signup-link">Signup</a></span>
            </div>
        </div>
        
    </div>
    <div class="login-image">
        <img src="../image/l.jpg" alt="">
    </div>       
    
</section>
<script src="../js/main.js"></script>
</body>
</html>