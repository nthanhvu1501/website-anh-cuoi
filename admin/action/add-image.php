<?php
require '../../connect.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
if (isset($_POST['submit'])) {
    $file = $_FILES["image"]["tmp_name"];
    $image_ext = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
    $image_name  = date('YmdHis').'.'.$image_ext;
    $target_dir = "../../uploads/";
    $target_file = $target_dir . $image_name;
    
    if(move_uploaded_file($file, $target_file)){
        $sql = "INSERT INTO image(image) VALUE ('$image_name')";
        $result = $conn->query($sql);
    }
    if($result){
        header('location: ../index.php');
    }
}
?>