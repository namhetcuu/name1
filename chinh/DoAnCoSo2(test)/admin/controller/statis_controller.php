<?php
  class StatisController {
    public function index() {
      if(isset($_SESSION['username'])){
        //$categorys = Category::all();
        require_once('view/statistical/index.php');
      }else{
        require_once('view/pages/login.php');
      }
      // we store all the posts in a variable
       
    }
    public function search(){
      $thoigiannhap = $_POST['thoigiannhap'];
      $thoigianxuat = $_POST['thoigianxuat'];
      $result = Statis::search($thoigiannhap,$thoigianxuat);
      require_once('view/statistical/viewthongke.php');
      
    }
    
  }
?>