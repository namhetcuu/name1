
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="./view/css/style.css">

	<title>AdminHub</title>
</head>
<body>


	<!-- CONTENT -->
	<section id="content" style="width:auto; left: 0;overflow: hidden">

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="?act=">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
				<?php
				$sql_select_dm = mysqli_query($conn, 
				"SELECT COUNT(*) AS total FROM donhang");
				$data = mysqli_fetch_assoc($sql_select_dm);
				?>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3><?php
						if(isset($data))	echo $data['total'];
						 ?></h3>
						<p>Total Order</p>
					</span>
				</li>
				<li>
				<?php
				$sql_select_dm = mysqli_query($conn, 
				"SELECT COUNT(*) AS total FROM khachhang");
				$data = mysqli_fetch_assoc($sql_select_dm);
				?>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3><?php
							echo $data['total'];
						 ?></h3>
						<p>Customers</p>
					</span>
				</li>
				<li>
				
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
					<?php
					$sql_select_dm = mysqli_query($conn, 
					"SELECT * FROM donhang,sanpham WHERE 
					donhang.sanpham_id=sanpham.sanpham_id");
					$data = mysqli_fetch_assoc($sql_select_dm);
					?>
						<h3>$<?php
						if($data){
							echo $data['sanpham_giakhuyenmai']*$data['soluong'];
						}else{
							echo " ";
						}
							
						 ?></h3>
						<p>Total Sales</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Date Order</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
            <?php
			$sql_select_dm = mysqli_query($conn, "SELECT * FROM donhang,
      khachhang,sanpham
			WHERE donhang.sanpham_id = sanpham.sanpham_id AND khachhang.
      khachhang_id = donhang.khachhang_id 
			ORDER BY donhang_id DESC LIMIT 2");
			
			while($row_dm = mysqli_fetch_array($sql_select_dm)){?>
							<tr>
								<td>
									<a href="?act=order">
									<img src="./view/images/icons/author.jpg">
									</a>
									
									<p><?= $row_dm['name']?></p>
								</td>
								<td><?= $row_dm['ngaythang']?></td>
								<td><span class="status completed"><?= $row_dm['tinhtrang']?></span></td>
							</tr>
              <?php } ?> 
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Recent Customer Comment</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src=""></script>
</body>
</html>