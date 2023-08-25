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
        echo "username: " . $username . " đã tồn tại";
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
    $username_old = $_POST['username_old'];
    $username_new = $_POST['username_new'];
    $permission = $_POST['permission'];
    $password = md5($_POST['password']);

    // kiểm tra username tồn tại trong db



    if ($username_new == $username_old) {
        $username = $username_old;
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
    } else {
        $usernameDB = $conn->query("SELECT * FROM user WHERE username = '$username_new'")->fetch_assoc();
        if ($usernameDB > 0) {
            echo $username_new . ' đã tồn tại';
        } else {
            $username = $username_new;
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
}
if (isset($_POST['user_delete'])) {
    $user_id = $_POST['user_id'];
    $sql = "DELETE FROM user WHERE user_id = '$user_id'";
    $result = $conn->query($sql);
    if ($result) {
        header('location: ../user-list_vuntpc07201.php');
    }
}
?>