<?php
require '../../connect.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
if (isset($_POST['submit'])) {
    $imgCount = count($_FILES['image']['name']);
    $id_album = $_POST['id_album'];
    // $create_at = date('Y-m-d H-i-s');
    for ($i = 0; $i < $imgCount; $i++) {
        $image_temp = $_FILES["image"]["tmp_name"][$i];
        $image_ext = pathinfo($_FILES['image']['name'][$i], PATHINFO_EXTENSION);
        $image_name = date('YmdHis') . '.' . $image_ext;
        $target_dir = "../../uploads/";
        $target_file = $target_dir . $image_name;
        if (move_uploaded_file($image_temp, $target_file)) {
            $sql = "INSERT INTO image(image,id_album) VALUE ('$image_name','$id_album')";
            $result = $conn->query($sql);
        }
        if ($result) {
            header('location: ../index.php');
        }
    }
}
?>