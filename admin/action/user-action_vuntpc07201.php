<?php
require '../../connect.php';
// session_start();
if (isset($_POST['user_add'])) {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $permission = $_POST['permission'];
    $password = md5($_POST['password']);

    // kiểm tra username tồn tại trong db
    $usernameDB = $conn->query("SELECT * FROM user WHERE username = '$username'")->fetch_assoc();
    if ($usernameDB > 0) {
        header('location: ../user-add_vuntpc07201.php?error_username');
    } else {
        $sql = "INSERT INTO user (fullName,username,email,password,permission)
                VALUE ('$fullName','$username','$email','$password','$permission')";
        $result = $conn->query($sql);
        if ($result) {
            header('location: ../user-list_vuntpc07201.php');
        }
    }
}
if (isset($_POST['user_edit'])) {
    $user_id = $_POST['user_id'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $permission = $_POST['permission'];
    $username = $_POST['username'];
    $password_old = $_POST['password_old'];
    $password_new = $_POST['password_new'];
    // kiểm tra mật khẩu
    if ($password_new == $password_old) {
        $password = $password_old;
    } else {
        $password = md5($password_new);
    }
    // kiểm tra username trong db
    $usernameDB = $conn->query("SELECT * FROM user WHERE username = '$username' AND user_id != '$user_id'")->fetch_assoc();
    if ($usernameDB > 0) {
        header('location: ../user-edit_vuntpc07201.php?user_id='.$user_id.'&error_username');
    } else {
        $sql = "UPDATE user
                    SET 
                        fullName = '$fullName',
                        username = '$username',
                        password = '$password',
                        email = '$email',
                        permission ='$permission'
                    WHERE user_id= '$user_id'";
        $result = $conn->query($sql);
        if ($result) {
            header('location: ../user-list_vuntpc07201.php');
        }
    }
}
if (isset($_POST['user_delete'])) {
    $user_id = $_POST['user_id'];
    $sql = "DELETE FROM user WHERE user_id = '$user_id'";
    $result = $conn->query($sql);
    if ($result) {
        header('location: ../user-list_vuntpc07201.php');
    }
}
