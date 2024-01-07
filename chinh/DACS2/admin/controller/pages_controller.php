<?php
class PagesController{
     public function home(){
          $first_name = "nam";
          $age = "20";
          require_once './view/pages/home.php';
     }
     public function error(){
          require_once './view/pages/error.php';
     }
     public function dashboard(){
          
          require_once './view/pages/dashboard.php';
     }
     public function login(){
          $login = Login::getAccount($_POST['username'],$_POST['password']);
          require_once './view/pages/dashboard.php';
     }
}
?>