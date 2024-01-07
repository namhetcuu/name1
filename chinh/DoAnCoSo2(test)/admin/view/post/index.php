
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
					<h1>Post</h1>
					<ul class="breadcrumb">
						<li>
							<a href="">Dashboard</a>
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
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>
                                   <?php
                                   $db = Db::getInstance();
                                   $sql = $db->query("SELECT COUNT(*) AS total FROM baiviet ");
                                   $post = $sql->fetch();
                                   if(isset($post['total']))     echo $post['total'];
                                   else echo " ";

                                   ?>
                              </h3>
						<h4>Total Post</h4>
					</span>
				</li>
				<li>

					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>
                                   <?php
                                   $db = Db::getInstance();
                                   $sql = $db->query("SELECT COUNT(DISTINCT baiviet_author) AS total FROM `baiviet`");
                                   $post = $sql->fetch();
                                   if(isset($post['total']))     echo $post['total'];
                                   else echo " ";
                                   ?>
                              </h3>
						<h4>Author</h4>
					</span>
				</li>

			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Overview Post</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table class="table">
						<thead>
							<tr >
								<th>STT</th>
								<th>Title</th>
								<th>Image</th>
                                        <th>Time</th>
								<th>Author</th>
								<th>Describe</th>
							</tr>
						</thead>
						<tbody >
                                   <?php
                                   $i=0;
                                   foreach($posts as $post){?>
                                        <tr>
                                             <td style="color: red"><?= $i++ ;?></td>
                                             <td><?= $post->baiviet_title ;?></td>
                                             <td><?= $post->baiviet_image ;?></td>
                                             <td><?= $post->baiviet_time ;?></td>
                                             <td style="color: green"><?= $post->baiviet_author ;?></td>
                                             <td><?= $post->baiviet_describe ;?></td>
                                        </tr>
                                   <?php }
                                   ?>
                                   
						</tbody>
					</table>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src=""></script>
</body>
</html>