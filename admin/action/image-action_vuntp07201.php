<?php
require '../../connect.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
if (isset($_POST['image_add'])) {
    $imgCount = count($_FILES['image']['name']);
    $album_id = $_POST['album_id'];
    // $create_at = date('Y-m-d H-i-s');
    for ($i = 0; $i < $imgCount; $i++) {
        $image_temp = $_FILES["image"]["tmp_name"][$i];
        $image_ext = pathinfo($_FILES['image']['name'][$i], PATHINFO_EXTENSION);
        $image_name = date('YmdHis').$i. '.' . $image_ext;
        $target_dir = "../../uploads/";
        $target_file = $target_dir . $image_name;
        if (move_uploaded_file($image_temp, $target_file)) {
            $sql = "INSERT INTO image(image,album_id) VALUE ('$image_name','$album_id')";
            $result = $conn->query($sql);
        }
        if ($result) {
            header('location: ../index.php');
        }
    }
}
if(isset($_POST['image_delete'])){
    $image_id = $_POST['image_id'];
    $album_id = $_POST['album_id'];
    $result = $conn->query("DELETE FROM image WHERE image_id = $image_id");
    if ($result) {
        header('location: ../album-view_vuntpc07201.php?album_id='.$album_id);
    }
}
?>