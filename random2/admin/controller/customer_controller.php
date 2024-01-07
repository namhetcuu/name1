<?php
class CustomerController{
     public $khachhang_id,$name,$phone,$address,
     $email,$note;
     public function index(){
          if(isset($_SESSION['username'])){
               $customers = Customer::all();
               require_once ('view/customer/index.php');
          }else{
               require_once 'view/pages/login.php';
          }
          
     }
}
?>