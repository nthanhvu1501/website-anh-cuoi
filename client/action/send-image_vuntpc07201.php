<?php
require '../connect.php';
if (isset($_POST['send'])) {
    $imageSelected = explode(',', $_POST['imageSelected']);
    $imgDB = $conn->query("SELECT image FROM imageselected")->fetch_assoc();
    $imgDBArr = explode(',', $imgDB['image']);
    foreach ($imageSelected as $value) {
        if (in_array($value, $imgDBArr)) {
            echo 1;
        } else {
            $sql = "INSERT INTO imageselected(image) VALUE ('$value')";
            $result = $conn->query($sql);
            if($result){
                header('location: ../index.php');
            }
        }
    }


}
?>