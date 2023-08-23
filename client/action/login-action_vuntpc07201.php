<?php
require '../../connect.php';
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT *  FROM user WHERE username = '$username' and password='$password'";
    if ($conn->query($sql)->num_rows > 0) {
        $user = $conn->query($sql)->fetch_assoc();
        $_SESSION['user'] = $user['username'];
        $_SESSION['user_id'] = $user['user_id'];
        header('location: ../index.php');
    } else {
        echo "Sai thông tin tài khoản";
    }
}
?>