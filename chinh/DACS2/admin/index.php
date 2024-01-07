<?php
require_once 'connection.php';
if(!isset($_SESSION['username'])){
     
}
if(isset($_GET['controller'])){
     $controller = $_GET['controller'];
}else{
     $controller = 'pages';
}
if(isset($_GET['action']))    $action = $_GET['action'];
else $action = 'product';

require_once './view/layout.php';
?>