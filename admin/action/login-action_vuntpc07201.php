<?php
require '../../connect.php';
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT *  FROM user WHERE username = '$username' and password='$password'";
    if ($conn->query($sql)->num_rows > 0) {
        $user = $conn->query($sql)->fetch_assoc();
        if($user['permission'] === "admin"){
            $_SESSION['admin'] = $user['username'];
            header('location: ../index.php');
            // unset($_SESSION['user']);
        }
        if($user['permission']=== "user"){
            header('location: ../../client');
        }
    } else {
        echo "Sai thông tin tài khoản";
    }
}
?>