<?php
require '../../connect.php';
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT *  FROM user WHERE username = '$username' and password='$password'";
    if ($conn->query($sql)->num_rows > 0) {
        $user = $conn->query($sql)->fetch_assoc();
        $_SESSION['user'] = $username;
        $_SESSION['id_user'] = $user['id_user'];
        header('location: ../index.php');
    } else {
        echo "Sai thông tin tài khoản";
    }
}
if (isset($_POST['register'])) {
    $fullName = $_POST['fullName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $account_db = $conn->query("SELECT *  FROM user WHERE username = '$username'")->fetch_assoc();
    if ($account_db > 0) {
        header('location: ../frmdangky_nguyennpc07304.php');
    } else {
        $sql = "INSERT INTO user (fullName,username,password,email) VALUES ('$fullName','$username','$password','$email')";
        $result = $conn->query($sql);
        if($result){
            header('location: ../login_phuoctmpc07090.php');
        }
    }
}

?>