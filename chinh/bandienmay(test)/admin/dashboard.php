<?php
	session_start();
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
?>
<?php
include 'navbar.php';

if(isset($_GET['act'])){
    $action = $_GET['act'];
    switch ($action) {
        case 'catalog':
            include 'xulydanhmuc.php';
            break;
        case 'product':
            include 'xulysanpham.php';
            break;
		case 'order':
		include 'xulydonhang.php';
		break;
        
        default:
            break;
    }
}else{
    
}
?>
