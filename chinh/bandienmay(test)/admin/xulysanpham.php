<?php
	include('../db/connect.php');
	$conn = connectdb();
?>
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
		(sp_name,sp_price,sp_img, iddm, sp_giakhuyenmai, 
		sp_soluong, sp_mota, sp_chitiet) values 
		('$tensanpham','$gia','$image','$danhmuc','$giakhuyenmai','$soluong','$mota','$chitiet')");
		move_uploaded_file($image_tmp,'../view/images/'.$image);
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
		$path = '../uploads/';
		if($hinhanh==''){
			$sql_update_image = "UPDATE sanpham SET name='$tensanpham',chitiet='$chitiet',mota='$mota',gia='$gia',giakhuyenmai='$giakhuyenmai',soluong='$soluong',category_id='$danhmuc' WHERE id='$id_update'";
		}else{
			move_uploaded_file($hinhanh_tmp,$path.$hinhanh);
			$sql_update_image = "UPDATE sanpham SET name='$tensanpham',chitiet='$chitiet',mota='$mota',gia='$gia',giakhuyenmai='$giakhuyenmai',soluong='$soluong',image='$hinhanh',category_id='$danhmuc' WHERE id='$id_update'";
		}
		mysqli_query($conn,$sql_update_image);
	}
	
?> 
<?php
	if(isset($_GET['xoa'])){
		$id= $_GET['xoa'];
		$sql_xoa = mysqli_query($conn,"DELETE FROM sanpham WHERE sp_id='$id'");
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
	<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="xulydonhang.php">Đơn hàng <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="xulydanhmuc.php">Danh mục</a>
	      </li>
	       <li class="nav-item">
	        <a class="nav-link" href="xulydanhmucbaiviet.php">Danh mục Bài viết</a>
	      </li>
	         <li class="nav-item">
	        <a class="nav-link" href="xulybaiviet.php">Bài viết</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="xulysanpham.php">Sản phẩm</a>
	      </li>
	       <li class="nav-item">
	        <a class="nav-link" href="xulykhachhang.php">Khách hàng</a>
	      </li>
	      
	    </ul>
	  </div>
	</nav><br><br> -->
	<br>
	<div class="container">
		<div class="row">
		<?php
			if(isset($_GET['quanly'])=='capnhat'){
				$id_capnhat = $_GET['capnhat_id'];
				$sql_capnhat = mysqli_query($conn,"SELECT * FROM sanpham WHERE sp_id='$id_capnhat'");
				$row_capnhat = mysqli_fetch_array($sql_capnhat);
				$id_category_1 = $row_capnhat['sp_id'];
				?>
				<div class="col-md-4">
					<h4>Cập nhật sản phẩm</h4>
					
					<form action="" method="POST" enctype="multipart/form-data">
						<label>Tên sản phẩm</label>
						<input type="text" class="form-control" name="tensanpham" 
						value="<?php echo $row_capnhat['sp_name'] ?>"><br>
						<input type="hidden" class="form-control" name="id_update" 
						value="<?php echo $row_capnhat['sp_id'] ?>">
						<label>Hình ảnh</label>
						<input type="file" class="form-control" name="hinhanh"><br>
						<img src="../view/images/<?php echo $row_capnhat['sp_img'] ?>" height="80" width="80"><br>
						<label>Giá</label>
						<input type="text" class="form-control" name="giasanpham" 
						value="<?php echo $row_capnhat['sp_price'] ?>"><br>
						<label>Giá khuyến mãi</label>
						<input type="text" class="form-control" name="giakhuyenmai" 
						value="<?php echo $row_capnhat['sp_giakhuyenmai'] ?>"><br>
						<label>Số lượng</label>
						<input type="text" class="form-control" name="soluong" 
						value="<?php echo $row_capnhat['sp_soluong'] ?>"><br>
						<label>Mô tả</label>
						<textarea class="form-control" rows="10" name="mota">
							<?php echo $row_capnhat['sp_mota'] ?></textarea><br>
						<label>Chi tiết</label>
						<textarea class="form-control" rows="10" name="chitiet">
							<?php echo $row_capnhat['sp_chitiet'] ?></textarea><br>
						<label>Danh mục</label>
						<?php
						$sql_danhmuc = mysqli_query($conn,"SELECT * FROM danhmuc ORDER BY id DESC"); 
						?>
						<select name="danhmuc" class="form-control">
							<option value="0">-----Chọn danh mục-----</option>
							<?php
							while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
								if($id_category_1==$row_danhmuc['id']){
							?>
							<option selected value="<?php echo $row_danhmuc['id'] ?>"><?php echo $row_danhmuc['name'] ?></option>
							<?php 
								}else{
							?>
							<option value="<?php echo $row_danhmuc['id'] ?>"><?php echo $row_danhmuc['name'] ?></option>
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
				<div class="col-md-4">
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
					$sql_danhmuc = mysqli_query($conn,"SELECT * FROM danhmuc ORDER BY id DESC"); 
					?>
					<select name="danhmuc" class="form-control">
						<option value="0">-----Chọn danh mục-----</option>
						<?php
						while($row_danhmuc = mysqli_fetch_array($sql_danhmuc)){
						?>
						<option value="<?php echo $row_danhmuc['id'] ?>"><?php echo $row_danhmuc['name'] ?></option>
						<?php 
						}
						?>
					</select><br>
					<input type="submit" name="themsanpham" value="Thêm sản phẩm" class="btn btn-default">
				</form>
				</div>
				<?php
			} 
			
				?>
			<div class="col-md-8">
				<br><br>
				<?php
				$sql_select_sp = mysqli_query($conn,"SELECT * FROM sanpham,danhmuc WHERE 
				sanpham.iddm=danhmuc.id ORDER BY sanpham.sp_id DESC"); 
				?> 
				<table class="table table-bordered ">
					<thead>
						<h2>Product</h2>
					</thead>
					<tr>
						<th>STT</th>
						<th>Tên sản phẩm</th>
						<th>Hình ảnh</th>
						<th>Số lượng</th>
						<th>Danh mục</th>
						<th>Giá sản phẩm</th>
						<th>Giá khuyến mãi</th>
						<th>Quản lý</th>
					</tr>
					<?php
					$i = 0;
					while($row_sp = mysqli_fetch_array($sql_select_sp)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $row_sp['sp_name'] ?></td>
						<td><img src="../view/images/<?php echo $row_sp['sp_img'];?>" height="100" width="80"></td>
						<td><?php echo $row_sp['sp_soluong'] ?></td>
						<td><?php echo $row_sp['name'] ?></td>
						<td><?php echo number_format($row_sp['sp_price']).'vnđ' ?></td>
						<td><?php echo number_format($row_sp['sp_giakhuyenmai']).'vnđ' ?></td>
						<td><a href="?xoa=<?php echo $row_sp['sp_id'] ?>">Xóa</a> || 
						<a href="xulysanpham.php?quanly=capnhat&capnhat_id=<?php echo $row_sp['sp_id'] ?>">Cập nhật</a></td>
					</tr>
				<?php
					} 
					?> 
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>