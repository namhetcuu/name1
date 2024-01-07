<?php
include "../model/connectdb.php";
include "../model/sanpham.php";
if(isset($_POST['themdm'])&&($_POST['themdm'])){
    $tensp = $_POST['tensp'];
    $gia = $_POST['price'];
    $iddm = $_POST['iddm'];

    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    insert_sanpham($tensp,$image,$gia,$iddm);
    move_uploaded_file($image_tmp,'../view/images'.$image);
    header("location: index.php?act=sanpham");
}
?>