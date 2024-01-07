<?php

function delcart($id){
    $conn = connectdb();
    $sql = "DELETE FROM giohang WHERE giohang_id = ".$id;
    $result = mysqli_query($conn,$sql);
}
?>