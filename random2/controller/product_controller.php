<?php
class ProductController{
     public function index(){
          $p = 1;
          $products = Product::all($p);
          require_once 'view/product/index.php';
     }
}
?>