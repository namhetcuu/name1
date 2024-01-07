<?php
	session_start();
	include('../db/connect.php'); 
	$conn = connectdb();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập Admin</title>
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<h2 align="center">Đăng nhập Admin</h2>
	<div class="col-md-6">
	<div class="form-group">
		<form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="POST">
			<label>Tài khoản</label>
			<input type="text" name="taikhoan" placeholder="Username" class="form-control"><br>
			<label>Mật khẩu</label>
			<input type="password" name="matkhau" placeholder="Password" class="form-control"><br>
			<input type="submit" name="dangnhap" class="btn btn-primary" value="Đăng nhập Admin">
		</form>
	</div>
	</div>
</body>
</html>
<?php
	if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
		$taikhoan = $_POST['taikhoan'];
		$matkhau = ($_POST['matkhau']);

		if($taikhoan=='' || $matkhau ==''){
			echo '<p>Xin nhập đủ</p>';
		}else{
			$sql_select_admin = mysqli_query($conn,"SELECT * FROM admin WHERE username='$taikhoan' 
			AND password='$matkhau'");
			$count = mysqli_num_rows($sql_select_admin);
			$row_dangnhap = mysqli_fetch_array($sql_select_admin);
			if($count>0){
				$_SESSION['username'] = $row_dangnhap['username'];
				$_SESSION['admin_id'] = $row_dangnhap['admin_id'];
				header('location: dashboard.php');
			}else{
				echo '<p>Tài khoản hoặc mật khẩu sai</p>';
			}
			
		}
	}

	if(isset($_GET['act'])){
		$action = $_GET['act'];
		switch ($action) {
			case 'catalog':
				header("location: dashboard.php?act=catalog");
				break;
			case 'product':
				header("location: dashboard.php?act=product");
				break;
			case 'order':
				header("location: dashboard.php?act=order");
				break;
			default:
				header("location: dashboard.php?act=");
				break;
		}
	}
?>

