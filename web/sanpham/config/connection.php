<?php
$server = "localhost";
$user = "root";
$pass = "";
$name_db = "ban_hang";
try {
    $conn = mysqli_connect($server,$user,$pass,$name_db);
} catch (\Throwable $th) {
    echo'Not connected';
}
?>