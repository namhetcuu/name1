<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sản phẩm</title>
	<link href="theme/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
     <div class="col-md-10" style="margin-top: 4rem;">
          <h4>Update Product</h4>
          
          <form action="?controller=category&action=upcategory" method="POST" enctype="multipart/form-data">
               <label>Product Name</label><br>
               <input type="text" class="form-control" name="category_name" value="<?= $category->danhmuc_name ?>" placeholder=""><br>
               <input type="hidden" class="form-control" name="category_id" value="<?= $category->danhmuc_id ?>" placeholder=""><br>
               
               
               <input type="submit" name="suadanhmuc" value="Update Category" class="btn btn-outline-success">
               <a href="?controller=category&action=index" class="btn btn-outline-primary">Back View</a>
               
          </form>