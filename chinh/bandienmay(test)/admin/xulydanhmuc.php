<?php
	include('../db/connect.php');
	$conn = connectdb();
?>
<?php
	if(isset($_POST['themdanhmuc'])){
		$tendanhmuc = $_POST['danhmuc'];
		$sql_insert = mysqli_query($conn,"INSERT INTO danhmuc(name) values ('$tendanhmuc')");
	}elseif(isset($_POST['capnhatdanhmuc'])){
		$id_post = $_POST['id_danhmuc'];
		$tendanhmuc = $_POST['danhmuc'];
		$sql_update = mysqli_query($conn,"UPDATE danhmuc SET name='$tendanhmuc' WHERE id='$id_post'");
		header('Location:index.php?act=catalog');
	}
	if(isset($_GET['xoa'])){
		$id= $_GET['xoa'];
		$sql_xoa = mysqli_query($conn,"DELETE FROM danhmuc WHERE id='$id'");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh mục</title>
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
				$id_capnhat = $_GET['id'];
				$sql_capnhat = mysqli_query($conn,"SELECT * FROM danhmuc WHERE id='$id_capnhat'");
				$row_capnhat = mysqli_fetch_array($sql_capnhat);
				?>
				<div class="col-md-4">
				<h4>Cập nhật danh mục</h4>
				<label>Tên danh mục</label>
				<form action="" method="POST">
					<input type="text" class="form-control" name="danhmuc" 
					value="<?php echo $row_capnhat['name'] ?>"><br>
					<input type="hidden" class="form-control" name="id_danhmuc" 
					value="<?php echo $row_capnhat['id'] ?>">

					<input type="submit" name="capnhatdanhmuc" value="Cập nhật danh mục" 
					class="btn btn-outline-success">
					<a href="index.php?act=catalog" class="btn btn-outline-danger">Exit</a>
				</form>
				</div>
			<?php
			}else{
				?>
				<div class="col-md-4">
					<br><br>
					<label>Tên danh mục</label>
					<form action="" method="POST">
						<input type="text" class="form-control" name="danhmuc" 
						placeholder="Tên danh mục"><br>
						<input type="submit" name="themdanhmuc" value="Thêm danh mục" 
						class="btn btn-outline-success">
					</form>
				</div>
				<?php
			} 
			
				?>
			<div class="col-md-8">
				<br><br>
				<?php
				$sql_select = mysqli_query($conn,"SELECT * FROM danhmuc ORDER BY id DESC"); 
				?>
				<table class="table table-bordered ">
					<thead>
						<h2>Catalog</h2>
					</thead>
					<tr>
						<th>Thứ tự</th>
						<th>Tên danh mục</th>
						<th>Quản lý</th>
					</tr>
					<?php
					$i = 0;
					while($row_category = mysqli_fetch_array($sql_select)){ 
						$i++;
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row_category['name'] ?></td>
						<td><a href="?xoa=<?php echo $row_category['id'] ?>">Xóa</a> || 
						<a href="xulydanhmuc.php?quanly=capnhat&id=<?php echo $row_category['id'] ?>">Cập nhật</a></td>
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