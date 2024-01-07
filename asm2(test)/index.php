<?php
include("./view/header.php");
if(isset($_GET['act'])){
    $action = $_GET['act'];
    switch ($action) {
        case 'about':
            include "view/about.php";
            break;
        case 'product':
            include "view/product.php";
            break;
        case 'shop':
            include "view/product.php";
            break;
        
        default:
            include "view/home.php";
            break;
    }
}else{
    include './view/home.php';
}
include("./view/footer.php");
?>