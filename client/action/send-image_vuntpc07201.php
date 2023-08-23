<?php
session_start();
require '../../connect.php';
if (isset($_POST['send'])) {
    $user_id = $_SESSION['user_id'];
    $imageSelected = explode(',', $_POST['imageSelected']);
    $imgDB = $conn->query("SELECT image FROM imageselected")->fetch_assoc();
    $imgDBArr = explode(',', $imgDB['image']);
    foreach ($imageSelected as $value) {
        if (in_array($value, $imgDBArr)) {
            echo 1;
        } else {
            $sql = "INSERT INTO imageselected(image,user_id) VALUE ('$value','$user_id')";
            $result = $conn->query($sql);
            if($result){
                header('location: ../index.php');
            }
        }
    }


}
?>