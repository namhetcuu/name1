<?php
	include('../db/connect.php');
	$conn = connectdb();
?>
<?php 
if(isset($_POST['capnhatdonhang'])){
	$xuly = $_POST['xuly'];
	$mahang = $_POST['mahang_xuly'];
	$sql_update_donhang = mysqli_query($conn,"UPDATE donhang SET tinhtrang='$xuly' WHERE mahang='$mahang'");
	$sql_update_giaodich = mysqli_query($conn,"UPDATE giaodich SET tinhtrangdon='$xuly' WHERE magiaodich='$mahang'");
}

?>
<?php
	if(isset($_GET['xoadonhang'])){
		$mahang = $_GET['xoadonhang'];
		$sql_delete = mysqli_query($conn,"DELETE FROM donhang WHERE mahang='$mahang'");
		header('Location:xulydonhang.php');
	} 
	if(isset($_GET['xacnhanhuy'])&& isset($_GET['mahang'])){
		$huydon = $_GET['xacnhanhuy'];
		$magiaodich = $_GET['mahang'];
	}else{
		$huydon = '';
		$magiaodich = '';
	}
	$sql_update_donhang = mysqli_query($conn,"UPDATE donhang SET huydon='$huydon' WHERE mahang='$magiaodich'");
	$sql_update_giaodich = mysqli_query($conn,"UPDATE giaodich SET huydon='$huydon' WHERE magiaodich='$magiaodich'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đơn hàng</title>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<br>
	<div class="conntainer-fluid">
		<div class="row">
			 <?php
			if(isset($_GET['quanly'])=='xemdonhang'){
				$mahang = $_GET['mahang'];
				$sql_chitiet = mysqli_query($conn,"SELECT * FROM donhang,sanpham WHERE donhang.sanpham_id=sanpham.sanpham_id AND donhang.mahang='$mahang'");
				?>
				<div class="col-md-7">
				<p>Xem chi tiết đơn hàng</p>
			<form action="" method="POST">
				<table class="table table-bordered ">
					<tr>
						<th>Thứ tự</th>
						<th>Mã hàng</th>
						<th>Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Giá</th>
						<th>Tổng tiền</th>
						<th>Ngày đặt</th>

						
						<!-- <th>Quản lý</th> -->
					</tr>
					<?php
					$i = 0;
					while($row_donhang = mysqli_fetch_array($sql_chitiet)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row_donhang['mahang']; ?></td>
						
						<td><?php echo $row_donhang['sanpham_name']; ?></td>
						<td><?php echo $row_donhang['soluong']; ?></td>
						<td><?php echo $row_donhang['sanpham_giakhuyenmai']; ?></td>
						<td><?php echo number_format($row_donhang['soluong']*$row_donhang['sanpham_giakhuyenmai']).'vnđ'; ?></td>
						
						<td><?php echo $row_donhang['ngaythang'] ?></td>
						<input type="hidden" name="mahang_xuly" value="<?php echo $row_donhang['mahang'] ?>">

						<!-- <td><a href="?xoa=<?php echo $row_donhang['donhang_id'] ?>">Xóa</a> || <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['mahang'] ?>">Xem đơn hàng</a></td> -->
					</tr>
					 <?php
					} 
					?> 
				</table>

				<select class="form-conntrol" name="xuly">
					<option value="1">Đã xử lý | Giao hàng</option>
					<option value="0">Chưa xử lý</option>
				</select><br>

				<input type="submit" value="Cập nhật đơn hàng" name="capnhatdonhang" class="btn btn-success">
			</form>
				</div>  
			<?php
			}else{
				?> 
				
				<div class="col-md-7"><br><br>
					<p>Đơn hàng</p>
				</div>  
				<?php
			} 
			
				?> 
			<div class="col-md-5"><br><br>
				<!-- <h4>Liệt kê đơn hàng</h4> -->
				<?php
				$sql_select = mysqli_query($conn,"SELECT * FROM sanpham,khachhang,donhang 
				WHERE donhang.sanpham_id=sanpham.sp_id AND donhang.khachhang_id=khachhang.khachhang_id 
				GROUP BY mahang "); 
				?> 
				<table class="table table-bordered ">
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
					<?php
					$i = 0;
					while($row_donhang = mysqli_fetch_array($sql_select)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i; ?></td>
						
						<td><?php echo $row_donhang['mahang']; ?></td>
						<td><?php
							if($row_donhang['tinhtrang']==0){
								echo 'Chưa xử lý';
							}else{
								echo 'Đã xử lý';
							}
						?></td>
						<td><?php echo $row_donhang['name']; ?></td>
						
						<td><?php echo $row_donhang['ngaythang'] ?></td>
						<td><?php echo $row_donhang['note'] ?></td>
						<td><?php if($row_donhang['huydon']==0){ }elseif($row_donhang['huydon']==1){
							echo '<a href="xulydonhang.php?quanly=xemdonhang&mahang='.$row_donhang['mahang'].'&xacnhanhuy=2">Xác nhận hủy đơn</a>';
						}else{
							echo 'Đã hủy';
						} 
						?></td>

						<td><a href="?xoadonhang=<?php echo $row_donhang['mahang'] ?>">Xóa</a> || <a href="?quanly=xemdonhang&mahang=<?php echo $row_donhang['mahang'] ?>">Xem </a></td>
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