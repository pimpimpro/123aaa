<?php
function themtaikhoan($user,$pass,$email){
    $sql="INSERT INTO user (username,password,gmail) VALUES ( '$user', '$pass','$email')";
    pdo_execute($sql);
}
function checkuser($user){
    $sql="SELECT * FROM user WHERE username='$user'";
    $result=pdo_query_one($sql);
    return $result;
}
?>