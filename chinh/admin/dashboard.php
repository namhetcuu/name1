<?php
session_start();
include '../config/database.php';
$conn = connectdb();
?>

<?php
	if(!isset($_SESSION['username'])){
		header('Location: index.php');
	} 
	// if(isset($_GET['login'])){
 	// $dangxuat = $_GET['login'];
	//  }else{
	//  	$dangxuat = '';
	//  }
	//  if($dangxuat=='dangxuat'){
	//  	session_destroy();
	//  	header('Location: index.php');
	//  }
	include './navbar.php';
if(isset($_GET['act'])){
    $action = $_GET['act'];
    switch ($action) {
     	case 'catalog':
			if(isset($_GET['xoa']))	
				$xoa_id = $_GET['xoa'];
			include 'xulydanhmuc.php';
			break;
		case 'delcatalog':
			if(isset($_GET['xoa']))	
				$xoa_id = $_GET['xoa'];
			include 'xulydanhmuc.php';
			break;
		case 'capnhatdanhmuc':
			$quanly = $_GET['quanly'];
			$capnhat_id = $_GET['capnhat_id'];
			include 'xulydanhmuc.php';
			break;
		case 'themdanhmuc':
			include 'themdanhmuc.php';
			break;
        	case 'product':
			if(isset($_GET['xoa']))	
				$xoa_id = $_GET['xoa'];
			include 'xulysanpham.php';
			break;
	   	case 'themsanpham':
			include 'themsanpham.php';
			break;
		case 'capnhatsanpham':
			$quanly = $_GET['quanly'];
			$capnhat_id = $_GET['capnhat_id'];
			include 'themsanpham.php';
			break;
		case 'order':
			include 'xulydonhang.php';
			break;
		case 'user':
			include 'xulykhachhang.php';
			break;
        default:
			include 'home.php';
				break;
    }
}else{
	 include 'home.php';
 }
?>
