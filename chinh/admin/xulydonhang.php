
<?php 
if(isset($_POST['capnhatdonhang'])){
	$xuly = $_POST['tinhtrang'];
	$donhang_id = $_POST['donhang_id'];
	$sql_update_donhang = mysqli_query($conn, "UPDATE donhang SET tinhtrang='$xuly'
	 WHERE donhang_id = '$donhang_id'");
	header("location: ?act=order");
}else if(isset($_GET['xoadonhang'])){
	$id_donhang = $_GET['xoadonhang'];
	$sql_delete_mahang = mysqli_query($conn, "DELETE FROM donhang WHERE donhang_id = '$id_donhang'");
	header("location: ?act=order");
}

?>
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Don hang</title>
	<!-- <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
	<link rel="stylesheet" href="./view/css/stylee.css">
	<link rel="stylesheet" href="./view/css/styles.css">
</head>
<body>
	
<div class="container">
    <section class="main">
      <div class="main-top">
        <h1>Recent Order</h1>
        <i class="fas fa-user-cog"></i>
      </div>
	 <div class="users">
	 	<?php
			$sql_select_dm = mysqli_query($conn, "SELECT * FROM donhang,khachhang,sanpham
			WHERE donhang.sanpham_id = sanpham.sanpham_id AND khachhang.khachhang_id = donhang.khachhang_id 
			ORDER BY donhang_id DESC LIMIT 2");
			
			while($row_dm = mysqli_fetch_array($sql_select_dm)){?>
		<div class="card">
			<img src="../view/images/product-7.jpg">
			<h4><?= $row_dm['name']?></h4>
			<p><?= $row_dm['email']?></p>
			<div class="per">
				<table>
				<tr>
					<td><span><?= $row_dm['sanpham_name']?></span></td>
					<td><span><?= $row_dm['soluong']?></span></td>
				</tr>
				<tr>
					<td>Name</td>
					<td>Quantity</td>
				</tr>
				</table>
			</div>
			<!-- <a href="index.php?act=themdanhmuc" style="color: black">ADD</a> -->
		</div>
	
		<?php }
		?>
	</div>
		<?php
		if(isset($_GET['quanly'])=='xemdonhang'){
			$mahang = $_GET['mahang'];
			$sql_chitiet = mysqli_query($conn, "SELECT * FROM donhang,sanpham WHERE
			donhang.sanpham_id = sanpham.sanpham_id AND donhang.mahang = '$mahang'");

			?>
			<section class="attendance">
				<div class="attendance-list">
					<h1>Xem chi tiet don hang</h1>
					<form action="" method="post">
					<table class="table">
					<thead>
					<tr>
						<th>Thứ tự</th>
						<th>Mã hàng</th>
						<th>Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Giá</th>
						<th>Tổng tiền</th>
						<th>Ngày đặt</th>
						<th>Tinh trang</th>
						<th>Update</th>
					</tr>
					</thead>
					<tbody>
						<?php
						$i=0;
						while($row_ct = mysqli_fetch_array($sql_chitiet)){?>
					<tr>
						<td><?php echo $i++ ?></td>
						<td><?php echo $row_ct['mahang'] ?></td>
						<td>
							<?php echo $row_ct['sanpham_name'];?>
						</td>
						<td><?php echo $row_ct['soluong'] ?></td>
						<td><?php echo $row_ct['sanpham_gia'] ?></td>
						<td><?php echo $row_ct['soluong']*$row_ct['sanpham_gia'] ?></td>
						<td><?php echo $row_ct['ngaythang']?></td>
						<input type="hidden" name="donhang_id" value="<?php echo $row_ct['donhang_id'];?>">
						<td>
							<select name="tinhtrang" id="">
								<option value="1">Đã xử lý</option>
								<option value="0">Chưa xử lý</option>
							</select>
						</td>
						<td><input type="submit" name="capnhatdonhang" value="Update"></input></td>
						
					</tr>
					
					<?php }
						?>
						<tr>
							<td><a href="?act=order">Back</a></td>
						</tr>
					</tbody>
							
					</table>
					
					</form>
				</div>
			</section>
		<?php 
		}else{?>
			<section class="attendance">
				<div class="attendance-list">
					<h1>Order List</h1>

					<table class="table">
					<thead>
					<tr>
							<th>Thứ tự</th>
							<th>Mã hàng</th>
							<th>Tình trạng đơn hàng</th>
							<th>Tên khách hàng</th>
							<th>Ngày đặt</th>
							<th>Ghi chú</th>
							<th>Hủy đơn</th>
							<th>Quản lý</th>
					</tr>
					</thead>
					<tbody>
						<?php
						$sql_donhang = "SELECT * FROM donhang,sanpham,khachhang 
						WHERE donhang.sanpham_id=sanpham.sanpham_id
						AND donhang.khachhang_id = khachhang.khachhang_id 
						ORDER BY donhang.donhang_id DESC LIMIT 1";
						$sql_select_sp = mysqli_query($conn, $sql_donhang);
						$i=0;
						while($row_sp = mysqli_fetch_array($sql_select_sp)){?>
					<tr>
							<td><?php echo $i++ ?></td>
							<td><?php echo $row_sp['mahang'] ?></td>
							<td>
								<?php
								if($row_sp['tinhtrang']==0)	echo "Chưa xử lý";
								else echo "Đã xử lý";
								?>
							</td>
							<td><?php echo $row_sp['name'] ?></td>
							<td><?php echo $row_sp['ngaythang'] ?></td>
							<td><?php echo $row_sp['note'] ?></td>
							<td><a href="?act=order&xoadonhang=<?php echo $row_sp['donhang_id']?>">Delete</a> </td>
							<td><a href="?act=order&quanly=xemdonhang&mahang=
							<?php echo $row_sp['mahang'] ?>">View Details</a></td>
					</tr>
					<?php }
						?>
					</tbody>
					</table>
				</div>
			</section>
		<?php }
		?>
		

      
    </section>
  </div>
</body>
</html>