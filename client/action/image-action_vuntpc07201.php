<?php
session_start();
require '../../connect.php';
if (isset($_POST['select_image'])) {
    $user_id = $_SESSION['user_id'];
    $imageSelected =  explode(',', $_POST['imageSelected']);
    foreach ($imageSelected as $value) {
        $sql = "SELECT image FROM imageselected WHERE image = '$value'";
        $result = $conn->query($sql)->fetch_assoc();
        if ($result['image'] == "") {
            $sql = "INSERT INTO imageselected(image,user_id) VALUES ('$value','$user_id')";
            $result = $conn->query($sql);
            if ($result) {
                header('location: ../index.php');
            }
        }else{
            header('location: ../index.php');
        }
    }
}
