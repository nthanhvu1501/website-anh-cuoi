<?php
require '../../connect.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');

if (isset($_POST['album_add'])) {
    $album_name = $_POST['album_name'];
    $album_description = $_POST['album_description'];
    $is_active = $_POST['is_active'];
    //  hình ảnh
    $file = $_FILES["album_thumbnail"]["tmp_name"];
    $image_ext = pathinfo($_FILES['album_thumbnail']['name'], PATHINFO_EXTENSION);
    $image_name = date('YmdHis') . '.' . $image_ext;
    $target_dir = "../../uploads/";
    $target_file = $target_dir . $image_name;
    $update_at = date('Y-m-d H-i-s');
    if (move_uploaded_file($file, $target_file)) {
        $sql = "INSERT INTO album (thumbnail, name,description,is_active,update_at)
         VALUES ('$image_name','$album_name','$album_description','$is_active','$update_at')";
        $result = $conn->query($sql);
        if ($result) {
            header('location: ../index.php');
        }
    }

}
if (isset($_POST['album_edit'])) {
    $album_id = $_POST['album_id'];
    $album_name = $_POST['album_name'];
    $album_description = $_POST['album_description'];
    $is_active = $_POST['is_active'];
    // hình ảnh
    $thumbnail_new = $_FILES['album_thumbnail']['name'];
    $thumbnail_old = $_POST['thumbnail_old'];
    if ($thumbnail_new != "") {
        $image_ext = pathinfo($_FILES['album_thumbnail']['name'], PATHINFO_EXTENSION);
        $image_name = date('YmdHis') . '.' . $image_ext;
    } else {
        $image_name = $thumbnail_old;
    }
    $file = $_FILES["album_thumbnail"]["tmp_name"];
    $target_dir = "../../uploads/";
    $target_file = $target_dir . $image_name;
    $update_at = date('Y-m-d H-i-s');
    move_uploaded_file($file, $target_file);
    $sql = "UPDATE album 
                SET thumbnail = '$image_name',
                name = '$album_name',
                description = '$album_description',
                is_active = '$is_active',
                update_at = '$update_at'
                WHERE album_id = '$album_id'";
    $result = $conn->query($sql);
    if ($result) {
        header('location: ../index.php');
    }
}
if (isset($_POST['album_delete'])) {
    $album_id = $_POST['album_id'];
    $sql = "DELETE FROM album WHERE album_id = '$album_id'";
    $result = $conn->query($sql);
    if ($result) {
        header('location: ../album-list_vuntpc07201.php');
    }
}
?>