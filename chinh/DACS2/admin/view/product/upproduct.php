<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sản phẩm</title>
	<link href="theme/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
     <div class="col-md-10" style="margin-top: 3rem;">
          <h4>Cập nhật sản phẩm</h4>
          
          <form action="" method="POST" enctype="multipart/form-data">
          <label>Product Name</label>
          <input type="text" class="form-control" name="product_name" value="<?= $product->product_name ?>" placeholder=""><br>
          <label>Product Image</label>
          <input type="file" class="form-control" name="product_image" value="<?= $product->product_image ?>"><br>
          <label>Product Price</label>
          <input type="number" class="form-control" name="product_price"value="<?= $product->product_price ?>" placeholder=""><br>
          <label>Product Outstan</label>
          <input type="number" class="form-control" name="product_outstan"value="<?= $product->product_outstan ?>" placeholder=""><br>
          <label>Product Quantity</label>
          <input type="number" class="form-control" name="product_quantity"value="<?= $product->product_quantity ?>" placeholder=""><br>
          <label>Product Promotion</label>
          <input type="number" class="form-control" name="product_promotion"value="<?= $product->product_promotion ?>" placeholder=""><br>
          <label>Product Detail</label>
          <textarea class="form-control" name="product_detail" value="<?= $product->product_detail ?>"></textarea><br>
          <label>Product describe</label>
          <textarea class="form-control" name="product_describe" value="<?= $product->product_describe ?>"></textarea><br>
          <label>Danh mục</label>
          <input type="text" class="form-control" value="<?= $product->category_name ?>" name="category_id" placeholder=""><br>
          
          <!-- <select name="danhmuc" class="form-control">
               <option value="0">-----Chọn danh mục-----</option>
               
          </select><br> -->
          <input type="submit" name="themsanpham" value="Add Product" class="btn btn-outline-success">
          <a href="?controller=product&action=index" class="btn btn-outline-primary">Back View</a>
               
          </form>