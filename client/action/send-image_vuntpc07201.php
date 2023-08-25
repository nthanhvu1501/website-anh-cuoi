<?php
session_start();
require '../../connect.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');

if (isset($_POST['send'])) {
    $user_id = $_SESSION['user_id'];
    $imageSelected = explode(',', $_POST['imageSelected']);
    $send_at = date('Y-m-d H-i-s');
    foreach($imageSelected as $value){
        $sql = "INSERT INTO imageselected(image,user_id,send_at) VALUE ('$value','$user_id','$send_at')";
        $result = $conn->query($sql);
    }
    // $imgDB = $conn->query("SELECT * FROM imageselected");
    // if ($imgDB->num_rows > 0) {
    //     while ($imgDBArr = $imgDB->fetch_assoc()) {
    //         foreach ($imageSelected as $value) {
    //             if (in_array($value, $imgDBArr)) {
    //                 continue;
    //             } else {
    //                 $sql = "INSERT INTO imageselected(image,user_id) VALUE ('$value','$user_id')";
    //                 $result = $conn->query($sql);
    //                 if ($result) {
    //                     header('location: ../index.php');
    //                 }
    //             }
    //         }
    //     }
    // } else {
    //     foreach($imageSelected as $value){
    //         $sql = "INSERT INTO imageselected(image,user_id) VALUE ('$value','$user_id')";
    //         $result = $conn->query($sql);
    //         if ($result) {
    //             header('location: ../index.php');
    //         }
    //     }
    // }
}
?>