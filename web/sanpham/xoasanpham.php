<?php
require_once'config/connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM sanpham WHERE ID=".$id;
$query_sql = mysqli_query($conn,$sql);
header("location: index.php");
?>
