<?php
require '../../connect.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');

if (isset($_POST['album_upload'])) {
    $album_name = $_POST['album_name'];
    $album_description = $_POST['album_description'];

    $file = $_FILES["album_thumbnail"]["tmp_name"];
    $image_ext = pathinfo($_FILES['album_thumbnail']['name'], PATHINFO_EXTENSION);
    $image_name = date('YmdHis') . '.' . $image_ext;
    $target_dir = "../../uploads/";
    $target_file = $target_dir . $image_name;
    $update_at = date('Y-m-d H-i-s');
    if (move_uploaded_file($file, $target_file)) {
        $sql = "INSERT INTO album (thumbnail, name,description,update_at)
         VALUES ('$image_name','$album_name','$album_description','$update_at')";
        $result = $conn->query($sql);
        if ($result) {
            header('location: ../index.php');
        }
    }

}
?>