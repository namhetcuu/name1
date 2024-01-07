
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sản phẩm</title>
	<link href="theme/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<br>
	<div class="container" style="margin-top: 5rem;">
		<div class="row">
			<div class="col-md-10">
				<br><br>
				
				<form action="?controller=product&action=addproduct" method="POST" enctype="multipart/form-data">

					<label>Product Name</label>
					<input type="text" class="form-control" name="product_name" placeholder=""><br>
					<label>Product Image</label>
					<input type="file" class="form-control" name="product_image"><br>
					<label>Product Price</label>
					<input type="number" class="form-control" name="product_price" placeholder=""><br>
					<label>Product Outstan</label>
					<input type="number" class="form-control" name="product_outstan" placeholder=""><br>
					<label>Product Quantity</label>
					<input type="number" class="form-control" name="product_quantity" placeholder=""><br>
					<label>Product Promotion</label>
					<input type="number" class="form-control" name="product_promotion" placeholder=""><br>
					<label>Product Detail</label>
					<textarea class="form-control" name="product_detail"></textarea><br>
					<label>Product describe</label>
					<textarea class="form-control" name="product_describe"></textarea><br>
					<label>Danh mục</label>
					<!-- <input type="number" class="form-control" name="" placeholder=""><br> -->
					
					<select name="category_id" class="form-control">
						<option value="0">-----Chọn danh mục-----</option>
						<?php
      						$db = Db::getInstance();

							$req = $db->query('SELECT * FROM danhmuc');
							foreach($req->fetchAll() as $category){?>
								<option value="<?php echo $category['danhmuc_id'] ?>">
								<?php echo $category['danhmuc_name'] ?>
								</option>
							<?php }
							?>
					</select><br>
					<input type="submit" name="themsanpham" value="Add Product" class="btn btn-outline-success">
                         <a href="?controller=product&action=index" class="btn btn-outline-primary">Back View</a>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>