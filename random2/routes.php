<?php
function call($controller,$action){
     require_once 'controller/'.$controller.'_controller.php';
     switch ($controller) {
          case 'pages':
               require_once 'model/pages.php';
               $controller = new PagesController();
               break;
          case 'product':
               require_once 'model/product.php';
               $controller = new ProductController();
               break;
     }
     $controller->{$action}();
}
$controllers = array(
     'pages' => ['home'],
     'product' => ['index'],
     'category' => ['index']
);
if(array_key_exists($controller, $controllers)){
     if(in_array($action, $controllers[$controller])){
          call($controller,$action);
     }else{
          call('pages','error');
     }
}



?>