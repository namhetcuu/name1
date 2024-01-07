
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
			<h1>Recent Customer</h1>
			<i class="fas fa-user-cog"></i>
		</div>
		<div class="users">
			<?php
				$sql_select_dm = mysqli_query($conn, "SELECT * FROM donhang,khachhang,sanpham
				WHERE donhang.sanpham_id = sanpham.sanpham_id 
				AND khachhang.khachhang_id = donhang.khachhang_id 
				ORDER BY donhang_id DESC LIMIT 2");
				
				while($row_dm = mysqli_fetch_array($sql_select_dm)){?>
			<div class="card">
				<img src="../view/images/product-7.jpg">
				<h4><?= $row_dm['name']?></h4>
				<p>?</p>
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
		<section class="attendance">
			<div class="attendance-list">
				<h1>Customer List</h1>

				<table class="table">
				<thead>
				<tr>
						<th>STT</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Address</th>
						<th>Email</th>
						<th>Date</th>
						<th>Manage</th>
				</tr>
				</thead>
				<tbody>
					<?php
					$sql_khachhang = "SELECT * FROM khachhang, giaodich 
					WHERE khachhang.khachhang_id = giaodich.khachhang_id
					GROUP BY giaodich.magiaodich
					ORDER BY khachhang.khachhang_id DESC ";
					$sql_select_kh = mysqli_query($conn, $sql_khachhang);
					$i=0;
					while($row_kh = mysqli_fetch_array($sql_select_kh)){?>
				<tr>
						<td><?php echo $i++ ?></td>
						<td><?php echo $row_kh['name'] ?></td>
						<td><?php echo $row_kh['phone'] ?></td>
						<td><?php echo $row_kh['address'] ?></td>
						<td><?php echo $row_kh['email'] ?></td>
						<td><?php echo $row_kh['ngaythang'] ?></td>
						<td><a href="?act=user&khachhang=<?php echo $row_kh['magiaodich'] ?>">View Transaction</a></td>
				</tr>
				<?php }
					?>
				</tbody>
				</table>
			</div>
		</section>
		<?php
			if(isset($_GET['khachhang'])){
				$magiaodich = $_GET['khachhang'];
			}
			else {
				$magiaodich = '';
			}
			?>
		<section class="attendance">
			<div class="attendance-list">
				<h1>Transaction</h1>

				<table class="table">
				<thead>
				<tr>
						<th>STT</th>
						<th>Transaction Code</th>
						<th>Name Product</th>
						<th>Date</th>
				</tr>
				</thead>
				<tbody>
					<?php
					$sql_select = mysqli_query($conn, "SELECT * FROM giaodich,khachhang,sanpham
					WHERE giaodich.sanpham_id = sanpham.sanpham_id AND giaodich.khachhang_id = khachhang.khachhang_id
					AND giaodich.magiaodich = '$magiaodich' ORDER BY giaodich.giaodich_id DESC");
					$i=0;
					while($row_donhang = mysqli_fetch_array($sql_select)){ 
						$i++;
					?> 
					<tr>
						<td><?php echo $i; ?></td>
						
						<td><?php echo $row_donhang['magiaodich']; ?></td>
					
						<td><?php echo $row_donhang['sanpham_name']; ?></td>
						
						<td><?php echo $row_donhang['ngaythang'] ?></td>
					
					
					</tr>
				<?php }
					?>
				</tbody>
				</table>
			</div>
		</section>
    </section>
  </div>
</body>
</html>