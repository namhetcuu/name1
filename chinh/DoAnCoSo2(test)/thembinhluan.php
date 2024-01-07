<?php
include './config/database.php';
$conn = connectdb();
$id_sp = $_POST['idsp'];
$content = $_POST['noidung'];
$name = $_POST['name'];
$sql_insert = mysqli_query($conn, "INSERT INTO binhluan(sanpham_id,noidung,khachhang_name)
VALUES('$id_sp','$content','$name')");
echo 'Item inserted successfully';
?>