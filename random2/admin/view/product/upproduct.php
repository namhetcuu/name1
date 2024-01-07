<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sản phẩm</title>
	<link href="theme/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
     <div class="col-md-10" style="margin-top: 3rem;">
          <h4>Update Product</h4>
          
          <form action="?controller=product&action=upproduct" method="POST" enctype="multipart/form-data">
               <label>Product Name</label>
               <input type="text" class="form-control" name="product_name" value="<?= $product->sanpham_name ?>" placeholder=""><br>
               <label>Product Image</label>
               <input type="file" class="form-control" name="product_image" value="<?= $product->sanpham_image ?>"><br>
               <label>Product Price</label>
               <input type="number" class="form-control" name="product_price"value="<?= $product->sanpham_gia ?>" placeholder=""><br>
               <!-- <label>Product Outstan</label>
               <input type="number" class="form-control" name="product_outstan"value="<?= $product->sanpham_chitiet ?>" placeholder=""><br> -->
               <label>Product Quantity</label>
               <input type="number" class="form-control" name="product_quantity"value="<?= $product->sanpham_soluong ?>" placeholder=""><br>
               <label>Product Promotion</label>
               <input type="number" class="form-control" name="product_promotion"value="<?= $product->sanpham_giakhuyenmai ?>" placeholder=""><br>
               <label>Product Detail</label>
               <textarea class="form-control" name="product_detail" >
               <?= $product->sanpham_chitiet ?>
               </textarea><br>
               <label>Product describe</label>
               <textarea class="form-control" name="product_describe">
               <?= $product->sanpham_mota ?>
               </textarea><br>
               <label>Danh mục</label>
               <!-- <input type="text" class="form-control" value="<?= $product->category_name ?>" name="category_id" placeholder=""><br> -->
               <input type="hidden" class="form-control" value="<?= $product->product_id ?>" name="product_id" placeholder=""><br>
               <!-- <input type="text" class="form-control" value="<?= $product->product_id ?>" name="category_id" placeholder=""><br> -->
               
               <select name="category_id" class="form-control">
                    <option value="0">-----Chọn danh mục-----</option>
                    <?php
                    $db = Db::getInstance();
                    $req = $db->query("SELECT * FROM danhmuc");
                    foreach($req->fetchAll() as $category){
                         if($product->category_id == $category['danhmuc_id']){?>
                              <option selected value="<?= $category['danhmuc_id'] ?>" >
                              <?= $category['danhmuc_name'] ?>
                              </option>
                         <?php }else{?>
                              <option value="<?= $category['danhmuc_id'] ?>" >
                              <?= $category['danhmuc_name'] ?>
                              </option>
                         <?php }
                    }

                    ?>
               </select><br>
               <input type="submit" name="suasanpham" value="Update Product" class="btn btn-outline-success">
               <a href="?controller=product&action=index" class="btn btn-outline-primary">Back View</a>
               
          </form>