<?php
include './config/connection.php';
$idsp = $_POST['id'];
$noidung = $_POST['noidung'];

$sql = "INSERT INTO binhluan (idsp,noidung) VALUES ($idsp,'$noidung')";
$query = mysqli_query($conn, $sql);
header("location: chitietsanpham.php?idsp=".$idsp);
?>