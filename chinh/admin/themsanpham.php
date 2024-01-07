
<?php
	if(isset($_POST['themsanpham'])){
		$tensanpham = $_POST['tensanpham'];

		$image = $_FILES['image']['name'];
		$image_tmp = $_FILES['image']['tmp_name'];
		
		$soluong = $_POST['soluong'];
		$gia = $_POST['giasanpham'];
		$giakhuyenmai = $_POST['giakhuyenmai'];
		$danhmuc = $_POST['danhmuc'];
		$chitiet = $_POST['chitiet'];
		$mota = $_POST['mota'];

		$sql_insert_product = mysqli_query($conn,"INSERT INTO sanpham
		(sanpham_name,sanpham_gia,sanpham_image, danhmuc_id, sanpham_giakhuyenmai, 
		sanpham_soluong, sanpham_mota, sanpham_chitiet) values 
		('$tensanpham','$gia','$image','$danhmuc','$giakhuyenmai','$soluong','$mota','$chitiet')");
		move_uploaded_file($image_tmp,'../view/images/'.$image);
		header("location: dashboard.php?act=product");
	}elseif(isset($_POST['capnhatsanpham'])) {
		$id_update = $_POST['id_update'];
		$tensanpham = $_POST['tensanpham'];

		$hinhanh = $_FILES['hinhanh']['name'];
		$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];

		$soluong = $_POST['soluong'];
		$gia = $_POST['giasanpham'];
		$giakhuyenmai = $_POST['giakhuyenmai'];
		$danhmuc = $_POST['danhmuc'];
		$chitiet = $_POST['chitiet'];
		$mota = $_POST['mota'];
		if($hinhanh==''){
			$sql_update_image = "UPDATE sanpham SET
			 sanpham_name='$tensanpham',sanpham_chitiet='$chitiet',sanpham_mota='$mota',sanpham_gia='$gia',
			 sanpham_giakhuyenmai='$giakhuyenmai',sanpham_soluong='$soluong',danhmuc_id='$danhmuc' 
			 WHERE sanpham_id='$id_update'";
		}else{
			move_uploaded_file($hinhanh_tmp,'../view/images/'.$hinhanh);
			$sql_update_image = "UPDATE sanpham SET 
			sanpham_name='$tensanpham',sanpham_chitiet='$chitiet',sanpham_mota='$mota',sanpham_gia='$gia',
			sanpham_giakhuyenmai='$giakhuyenmai',sanpham_soluong='$soluong',sanpham_image='$hinhanh',
			danhmuc_id='$danhmuc' WHERE sanpham_id='$id_update'";
		}
		mysqli_query($conn,$sql_update_image);
		header("location: dashboard.php?act=product");
	}
	
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sản phẩm</title>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<br>
	<div class="container">
		<div class="row">
		<?php
			if(isset($_GET['quanly'])=='capnhat'){
				$id_capnhat = $_GET['capnhat_id'];
				$sql_capnhat = mysqli_query($conn,"SELECT * FROM sanpham WHERE sanpham_id='$id_capnhat'");
				$row_capnhat = mysqli_fetch_array($sql_capnhat);
				$id_category_1 = $row_capnhat['danhmuc_id'];
				?>
				<div class="col-md-10" style="margin-top: 3rem;">
					<h4>Cập nhật sản phẩm</h4>
					
					<form action="" method="POST" enctype="multipart/form-data">
						<label>Tên sản phẩm</label>
						<input type="text" class="form-control" name="tensanpham" 
						value="<?php echo $row_capnhat['sanpham_name'] ?>"><br>
						<input type="hidden" class="form-control" name="id_update" 
						value="<?php echo $row_capnhat['sanpham_id'] ?>">
						<label>Hình ảnh</label>
						<input type="file" class="form-control" name="hinhanh"><br>
						<img src="../view/images/<?php echo $row_capnhat['sanpham_image'] ?>" height="80" width="80"><br>
						<label>Giá</label>
						<input type="text" class="form-control" name="giasanpham" 
						value="<?php echo $row_capnhat['sanpham_gia'] ?>"><br>
						<label>Giá khuyến mãi</label>
						<input type="text" class="form-control" name="giakhuyenmai" 
						value="<?php echo $row_capnhat['sanpham_giakhuyenmai'] ?>"><br>
						<label>Số lượng</label>
						<input type="text" class="form-control" name="soluong" 
						value="<?php echo $row_capnhat['sanpham_soluong'] ?>"><br>
						<label>Mô tả</label>
						<textarea class="form-control" rows="10" name="mota">
							<?php echo $row_capnhat['sanpham_mota'] ?></textarea><br>
						<label>Chi tiết</label>
						<textarea class="form-control" rows="10" name="chitiet">
							<?php echo $row_capnhat['sanpham_chitiet'] ?></textarea><br>
						<label>Danh mục</label>
						<?php
						$sql_danhmuc = mysqli_query($conn,"SELECT * FROM danhmuc 
						ORDER BY danhmuc_id DESC"); 
						?>
						<select name="danhmuc" class="form-control">
							<option value="0">-----Chọn danh mục-----</option>
							<?php
							while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
								if($id_category_1==$row_danhmuc['danhmuc_id']){
							?>
							<option selected value="<?php echo $row_danhmuc['danhmuc_id'] ?>">
							<?php echo $row_danhmuc['danhmuc_name'] ?></option>
							<?php 
								}else{
							?>
							<option value="<?php echo $row_danhmuc['danhmuc_id'] ?>">
							<?php echo $row_danhmuc['danhmuc_name'] ?></option>
							<?php
								}
							}
							?>
						</select><br>
						<input type="submit" name="capnhatsanpham" value="Cập nhật sản phẩm" class="btn btn-outline-success">
						<a href="index.php?act=product" class="btn btn-outline-danger">Exit</a>
						
					</form>
				</div>
			<?php
			}else{
				?> 
				<div class="col-md-10">
				<br><br>
				
				<form action="" method="POST" enctype="multipart/form-data">

					<label>Tên sản phẩm</label>
					<input type="text" class="form-control" name="tensanpham" placeholder="Tên sản phẩm"><br>
					<label>Hình ảnh</label>
					<input type="file" class="form-control" name="image"><br>
					<label>Giá</label>
					<input type="text" class="form-control" name="giasanpham" placeholder="Giá sản phẩm"><br>
					<label>Giá khuyến mãi</label>
					<input type="text" class="form-control" name="giakhuyenmai" placeholder="Giá khuyến mãi"><br>
					<label>Số lượng</label>
					<input type="text" class="form-control" name="soluong" placeholder="Số lượng"><br>
					<label>Mô tả</label>
					<textarea class="form-control" name="mota"></textarea><br>
					<label>Chi tiết</label>
					<textarea class="form-control" name="chitiet"></textarea><br>
					<label>Danh mục</label>
					<?php
					$sql_danhmuc = mysqli_query($conn,"SELECT * FROM danhmuc ORDER BY danhmuc_id DESC"); 
					?>
					<select name="danhmuc" class="form-control">
						<option value="0">-----Chọn danh mục-----</option>
						<?php
						while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
						?>
						<option value="<?php echo $row_danhmuc['danhmuc_id'] ?>"><?php echo $row_danhmuc['danhmuc_name'] ?></option>
						<?php 
						}
						?>
					</select><br>
					<input type="submit" name="themsanpham" value="Add Product" class="btn btn-outline-success">
                         <a href="?act=product" class="btn btn-outline-primary">Back View</a>
				</form>
				</div>
				<?php
			} 
			
				?>
		</div>
	</div>
	
</body>
</html>