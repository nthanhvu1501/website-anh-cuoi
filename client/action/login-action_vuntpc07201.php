<?php
require '../../connect.php';
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT *  FROM user WHERE username = '$username' and password='$password'";
    if ($conn->query($sql)->num_rows > 0) {
        $user = $conn->query($sql)->fetch_assoc();
        $_SESSION['user_id'] = $user['user_id'];
        switch ($user['permission']) {
            case 'user':
                $_SESSION['user'] = $user['username'];
                break;
            case 'admin':
                $_SESSION['admin'] = $user['username'];
        }
        header('location: ../index.php');
    } else {
        $_SESSION['error_login'] = "Sai thông tin";
        header('location: ../login_phuoctmpc07090.php');
    }
}
?>
