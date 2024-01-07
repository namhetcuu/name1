
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="theme/css/bootstrap.css">
	<link rel="stylesheet" href="theme/css/style.css">

	<title>AdminHub</title>
</head>
<body>


	<!-- CONTENT -->
	<section id="content" style="width:auto; left: 0;overflow: hidden">

		<!-- MAIN -->
		<main style="padding: 70px 24px;">
			<div class="head-title">
				<div class="left">
					<h1>Commodity Statistics</h1>
					<ul class="breadcrumb">
						<li>
							<a href="">Commodity Statistics</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="?controller=pages&action=dashboard">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-category' ></i>
					<span class="text">
						<h3>
                                   <?php
                                   $db = Db::getInstance();
                                   $sql = $db->query("SELECT COUNT(*) AS total FROM danhmuc");
                                   $post = $sql->fetch();
                                   if(isset($post['total']))     echo $post['total'];
                                   else echo " ";

                                   ?>
                              </h3>
						<h4>Số lượng loại sản phẩm</h4>
					</span>
				</li>
				<li>

					<i class='bx bxs-category' ></i>
					<span class="text">
						<h3>
                                   <?php
                                   $db = Db::getInstance();
                                   $sql = $db->query("SELECT COUNT(*) AS total FROM sanpham");
                                   $post = $sql->fetch();
                                   if(isset($post['total']))     echo $post['total'];
                                   else echo " ";
                                   ?>
                              </h3>
						<h4>Số lượng sản phẩm</h4>
					</span>
				</li>

			</ul>
               <ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>
                                   <?php
                                   $db = Db::getInstance();
                                   $sql = $db->query("SELECT * FROM sanpham WHERE sanpham_xuat > '0'");
                                   $tong=0;
                                   foreach($sql->fetchAll() as $product){
                                        $tong+=$product['sanpham_xuat']; 
                                   }
                                   echo $tong;

                                   ?>
                              </h3>
						<h4>Thống kê sản phẩm đã xuất</h4>
					</span>
				</li>
				<li>

					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h4 style="color: green;">
                                   <?php
                                   $db = Db::getInstance();
                                   $sql = $db->query("SELECT * FROM sanpham WHERE sanpham_soluong = '0'");
                                   foreach($sql->fetchAll() as $product){
                                        echo $product['sanpham_name'].",";
                                   }
                                       
                                   
                                   ?>
                              </h4>
						<h4>Thống kê sản phẩm đã hết</h4>
					</span>
				</li>

			</ul>
               <ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h5 style="color: green;">
                                   <?php
                                   $db = Db::getInstance();
                                   $sql = $db->query("SELECT * FROM sanpham WHERE sanpham_soluong < '15' AND sanpham_soluong > '0'");
                                   foreach($sql->fetchAll() as $product){
                                        echo $product['sanpham_name'].",";
                                   }

                                   ?>
                              </h5>
						<h4>Thống kê sản phẩm sắp hết</h4>
					</span>
				</li>
				<li>

					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h5 style="color: green;">
                                   <?php
                                   $db = Db::getInstance();
                                   $sql = $db->query("SELECT * FROM sanpham WHERE sanpham_soluong > '50'");
                                   foreach($sql->fetchAll() as $product){
                                        echo $product['sanpham_name'].",";
                                   }
                                       
                                   
                                   ?>
                              </h5>
						<h4>Thống kê sản phẩm còn nhiều</h4>
					</span>
				</li>

			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Thống kê trong khoảng thời gian</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					
						<form action="?controller=statis&action=search" method="post">
					<input type="date" class="form-control" placeholder="Thoi gian tu" name="thoigiannhap">
					<input type="date" class="form-control" placeholder="Cho den" name="thoigianxuat">
					<input class="btn btn-outline-secondary" type="submit" id="button-addon2" value="View" name="search"></input>
					</form>
					
					
					<table class="table">
						<thead>
							<tr >
								<th>STT</th>
								<th>So luong nhap</th>
								<th>Thoi gian nhap</th>
								<th>Da Nhap</th>
								<th>So luong xuat</th>
								<th>Thoi gian xuat</th>
								<!-- <th>Da xuat</th> -->
								
							</tr>
						</thead>
						<tbody>
							<?php
                                        if($result){

                                        
								$i=0;
								foreach($result as $product){?>
                                        <tr>
									<td><?= $i++ ?></td>
									<td><?= $product->soluongnhap ?></td>
									<td><?= $product->thoigiannhap ?></td>
									<td><?= $product->danhap ?></td>
									<td><?= $product->soluongxuat ?></td>
									<td><?= $product->thoigianxuat ?></td>
									</tr>
								<?php }}
							?>
							
						</tbody>
					</table>
					
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<!-- <script>
		$(document).ready(function(){
			$("#button-addon2").keyup(function(){
				var input = $(this).val();
				if(input != ""){
					$.ajax({
						url:"thongkethoigian.php",
						method: "POST",
						data: {input:input},
						success: function(data){
							$("#searchresult").html(data);
						}
					})
				}else{
					$("#searchresult").html(`
					`)
				}
			})
		})
	</script> -->
</body>
</html>