
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Don hang</title>
	<!-- <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
	<link rel="stylesheet" href="theme/css/stylee.css">
	<link rel="stylesheet" href="theme/css/styles.css">
</head>
<body>
	
<div class="container" style="max-width: 100%;">
    <section class="main">
		<!-- <div class="main-top">
			<h1>Recent Customer</h1>
			<i class="fas fa-user-cog"></i>
		</div>
		<div class="users">
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
				<a href="index.php?act=themdanhmuc" style="color: black">ADD</a>
			</div>
		
		</div> -->
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
					<th>Note</th>
					<!-- <th>Manage</th> -->
				</tr>
				</thead>
				<tbody>
					<?php
					$i=0;
					foreach($customers as $customer){?>
					<tr>
							<td><?php echo $i++ ?></td>
							<td><?php echo $customer->name ?></td>
							<td><?php echo $customer->phone ?></td>
							<td><?php echo $customer->address ?></td>
							<td><?php echo $customer->address ?></td>
							<td><?php echo $customer->note ?></td>
							<!-- <td><a href="?act=user&khachhang=<?php echo $row_kh['magiaodich'] ?>">View Transaction</a></td> -->
					</tr>
				<?php }
					?>
				</tbody>
				</table>
			</div>
		</section>

		<section class="attendance">
			<div class="attendance-list">
				<h1>Review</h1>

				<table class="table">
				<thead>
				<tr>
						<th>STT</th>
						<th>Transaction Code</th>
						<th>Name Product</th>
						<th>Name Customer</th>
				</tr>
				</thead>
				<tbody>
					<?php
					$db = Db::getInstance();
					$sql = $db->query("SELECT * FROM danhgia,sanpham,khachhang 
					WHERE danhgia.sanpham_id=sanpham.sanpham_id AND danhgia.khachhang_id=khachhang.khachhang_id
					 ORDER BY danhgia_id DESC");
					$i=0;
					foreach($sql->fetchAll() as $kh){?>
					<tr>
						<td><?php echo $i++; ?></td>
						
						<td><?php echo $kh['danhgia_content']; ?></td>
						<td><?php echo $kh['sanpham_name']; ?></td>
					
						<td style="color: red"><?php echo $kh['name']; ?></td>
						
						<!-- <td><?php echo $kh['ngaythang'] ?></td> -->
					
					
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