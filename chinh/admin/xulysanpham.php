
<?php
	if(isset($_GET['xoa'])){
		$id= $_GET['xoa'];
		$sql_xoa = mysqli_query($conn,"DELETE FROM sanpham WHERE sanpham_id='$id'");
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sản phẩm</title>
	<!-- <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
	<link rel="stylesheet" href="./view/css/stylee.css">
	<link rel="stylesheet" href="./view/css/styles.css">
</head>
<body>
	
<div class="container">
    <section class="main">
      <div class="main-top">
        <h1>Top 2 Nearest Product</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
	 <?php
	$sql = "SELECT * FROM sanpham,danhmuc WHERE sanpham.danhmuc_id = danhmuc.danhmuc_id
	 ORDER BY sanpham_id DESC LIMIT 2";
	$select_limit_sp = mysqli_query($conn,$sql);
	while($row_sp=mysqli_fetch_array($select_limit_sp)){?>
        <div class="card">
          <img src="../view/images/<?php echo $row_sp['sanpham_image']?>">
          <h4><?= $row_sp['sanpham_name']?></h4>
          <p><?= $row_sp['danhmuc_name']?></p>
          <div class="per">
            <table>
              <tr>
                <td><span><?= $row_sp['sanpham_soluong']?></span></td>
                <td><span>87%</span></td>
              </tr>
              <tr>
		    	<td>Quantity</td>
                <td>Percent</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
	 <?php }
	?>
	<div class="card">
          <img src="../view/images/">
          <h4>ADD Product</h4>
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
		<a href="?act=themsanpham" style="color: black">ADD</a>
        </div>
	</div>
      <section class="attendance">
        <div class="attendance-list">
          <h1>Attendance List</h1>

          <table class="table">
            <thead>
              <tr>
				<th>STT</th>
				<th>Name</th>
				<th>Image</th>
				<th>Quantity</th>
				<th>Catalog</th>
				<th>Price</th>
				<th>Promotional Price</th>
				<th>Manage</th>
              </tr>
            </thead>
            <tbody>
			<?php
			$sql = "SELECT * FROM sanpham,danhmuc WHERE sanpham.danhmuc_id=danhmuc.danhmuc_id
			ORDER BY sanpham.sanpham_id DESC";
			$sql_select_sp = mysqli_query($conn, $sql);
			$i=0;
			while($row_sp = mysqli_fetch_array($sql_select_sp)){?>
			
              <tr>
				<td><?php echo $i++ ?></td>
				<td><?php echo $row_sp['sanpham_name'] ?></td>
				<td><img src="../view/images/<?php echo $row_sp['sanpham_image'];?>" height="100" width="80"></td>
				<td><?php echo $row_sp['sanpham_soluong'] ?></td>
				<td><?php echo $row_sp['danhmuc_name'] ?></td>
				<td><?php echo number_format($row_sp['sanpham_gia']).'vnđ' ?></td>
				<td><?php echo number_format($row_sp['sanpham_giakhuyenmai']).'vnđ' ?></td>
				<td><a href="?act=product&xoa=<?php echo $row_sp['sanpham_id'] ?>">Delete</a> || 
				<a href="?act=capnhatsanpham&quanly=capnhat&capnhat_id=<?php echo $row_sp['sanpham_id'] ?>">Edit</a></td>
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