<?php
ob_start();
session_start();
require_once 'config/database.php';
if(isset($_GET['controller'])){
    $controller=$_GET['controller'];
}else{
    $controller = 'pages';
}
if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'home';
}
require_once 'view/layout.php';
?>