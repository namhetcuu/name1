<?php
  class ProductController {
    public function index() {
      // we store all the posts in a variable
      $products = Product::all();
      require_once('view/product/index.php');
    }

    // public function show() {
    //   // we expect a url of form ?controller=posts&action=show&id=x
    //   // without an id we just redirect to the error page as we need the post id to find it in the database
    //   if (!isset($_GET['id']))
    //     return call('pages', 'error');

    //   // we use the given id to get the right post
    //   $post = Post::find($_GET['id']);
    //   require_once('views/posts/show.php');
    // }
    public function viewadd() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      // if (!isset($_GET['id']))
      //   return call('pages', 'error');

      // we use the given id to get the right post
      // $post = Product::addsp($_GET['id']);
      require_once('view/product/addproduct.php');
    }
    public function addproduct(){
      if(isset($_POST['themsanpham'])){
        $product_name = $_POST['product_name'];

        $product_image = $_FILES['product_image']['name'];
        $product_image_tmp = $_FILES['product_image']['tmp_name'];
        
        $product_quantity = $_POST['product_quantity'];
        $product_price = $_POST['product_price'];
        $product_outstan = $_POST['product_outstan'];
        $category_id = $_POST['category_id'];
        $product_detail = $_POST['product_detail'];
        $product_describe = $_POST['product_describe'];
        $product_promotion = $_POST['product_promotion'];

        // $product = array($product_name,$product_image,$product_quantity,$product_price
        // ,$product_outstan,$product_describe,$product_detail,$product_promotion,$category_id);
        // var_dump($product);
        $addproduct = Product::addsp($product_name,$product_image,$product_quantity,$product_price
        ,$product_outstan,$product_describe,$product_detail,$product_promotion,$category_id);
        header("location: ?controller=product&action=index");
      }
    }
    public function delproduct(){
      if(isset($_GET['id']))  $id=$_GET['id'];
      $delpro = Product::delpro($id);
      header("location: ?controller=product&action=index");
    }
    public function viewup(){
      if(isset($_GET['id']))  $id=$_GET['id'];
      $product = Product::viewup($id);
      require_once('view/product/upproduct.php');
    }
    public function upproduct(){
      
      //header("location: ?controller=product&action=index");
    }
  }
?>