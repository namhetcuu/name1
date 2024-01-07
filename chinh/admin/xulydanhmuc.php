
<?php
	if(isset($_POST['themdanhmuc'])){
		$tendanhmuc = $_POST['danhmuc'];
		$sql_insert = mysqli_query($conn,"INSERT INTO danhmuc(danhmuc_name) values ('$tendanhmuc')");
	}else if(isset($_POST['capnhatdanhmuc'])){
		$danhmuc_id = $_POST['danhmuc_id'];
		$danhmuc_name = $_POST['danhmuc_name'];
		$sql_edit_dm = mysqli_query($conn, "UPDATE danhmuc SET danhmuc_name = '$danhmuc_name' WHERE 
		danhmuc_id = '$danhmuc_id'");
		header("location: ?act=catalog");

	}
	if(isset($_GET['xoa'])){
		$id= $_GET['xoa'];
		$sql_xoa = mysqli_query($conn,"DELETE FROM danhmuc WHERE danhmuc_id='$id'");
		header("location: ?act=catalog");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sản phẩm</title>
	<!-- <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
	
	<link rel="stylesheet" href="./view/css/styles.css">
	<link rel="stylesheet" href="./view/css/stylee.css">
</head>

<body>

<div class="container">
    <section class="main">
      <div class="main-top">
        <h1>Manage Catalog</h1>
        <i class="fas fa-user-cog"></i>
      </div>
	 <div class="users">
	 	<?php
			$sql_select_dm = mysqli_query($conn, "SELECT * FROM danhmuc ORDER BY danhmuc_id DESC LIMIT 2");
			
			while($row_dm = mysqli_fetch_array($sql_select_dm)){?>
		<div class="card">
			<img src="../view/images/product-7.jpg">
			<h4><?= $row_dm['danhmuc_name']?></h4>
			<p>?</p>
			<div class="per">
				<table>
				<tr>
					<td><span>?</span></td>
					<td><span>?%</span></td>
				</tr>
				<tr>
					<td>Quantity</td>
					<td>Percent</td>
				</tr>
				</table>
			</div>
			<!-- <a href="index.php?act=themdanhmuc" style="color: black">ADD</a> -->
		</div>
		<?php }
		?>
		<?php
		if(isset($quanly)=='capnhat'){
			$sql_select_dm = mysqli_query($conn,"SELECT * FROM danhmuc WHERE danhmuc_id = $capnhat_id");
			$row_dm = mysqli_fetch_array($sql_select_dm);?>
			<div class="card">
				<img src="../view/images/">
				<h4>ADD Catalog</h4>
				<div class="per">
					<table>
					<tr>
						<form action="" method="post">
							<input type="hidden" name="danhmuc_id" value="<?= $row_dm['danhmuc_id']?>">
							<td style="padding-right: 0px"> 
							<input type="text" name="danhmuc_name" id="" style="
								width: 100%;
								border-radius: 20px;
								font-size: 1rem" value="<?= $row_dm['danhmuc_name']?>"></td>

						
						
					</tr>
					<tr>
						<td>Name Product</td>
					</tr>
					</table>
				</div>
				<button style="width: 50%" name="capnhatdanhmuc">Edit</button>
				</form>
			</div>
		<?php 
		}else{?>
		<div class="card">
			<img src="../view/images/">
			<h4>ADD Catalog</h4>
			<div class="per">
				<table>
				<tr>
					<form action="" method="post">
					<td style="padding-right: 0px"> 
					<input type="text" name="danhmuc" id="" style="
						width: 100%;
						border-radius: 20px;
						font-size: 1rem"></td>
					
					
				</tr>
				<tr>
					<td>Name Product</td>
				</tr>
				</table>
			</div>
			<button style="width: 50%" name="themdanhmuc">ADD</button>
			</form>
		</div>
		<?php }
		?>
		
	</div>
      <section class="attendance">
        <div class="attendance-list">
          <h1>Attendance List</h1>

          <table class="table">
            <thead>
              <tr>
				<th>STT</th>
				<th>Name</th>
				<th>Manage</th>
              </tr>
            </thead>
            <tbody>
			<?php
			$sql = "SELECT * FROM danhmuc WHERE danhmuc_id
			ORDER BY danhmuc.danhmuc_id DESC";
			$sql_select_sp = mysqli_query($conn, $sql);
			$i=0;
			while($row_sp = mysqli_fetch_array($sql_select_sp)){?>
			
              <tr>
				<td><?php echo $i++ ?></td>
				<td><?php echo $row_sp['danhmuc_name'] ?></td>
				<td><a href="?act=catalog&xoa=<?php echo $row_sp['danhmuc_id']?>">Delete</a> || 
				<a href="?act=capnhatdanhmuc&quanly=capnhat&capnhat_id=
				<?php echo $row_sp['danhmuc_id'] ?>">Edit</a></td>
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