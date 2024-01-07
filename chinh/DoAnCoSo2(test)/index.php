
<?php
session_start();
include 'config/database.php';
$conn = connectdb();
include './model/dnvadk.php';
include './model/cart.php';
include './view/header.php';

if(isset($_GET['act'])){
    $action = $_GET['act'];
    switch ($action) {
        case 'product':
            if(isset($_GET['p'])){
                $p = $_GET['p'];

            }else $p = 1;
            include './view/product.php';
            break;
        case 'cart':
            include './view/cart.php';
            exit();
            break;
        // case 'addcart':
        //     if(isset($_POST['dathang'])&&($_POST['dathang'])){
        //         $sp_id = $_POST['id_sanpham'];
        //         $sp_name = $_POST['tensp'];
        //         $sp_price = $_POST['price'];
        //         $sp_image = $_POST['image'];
        //         $sp_soluong = $_POST['soluong'];
        //         addgiohang($sp_id,$sp_name,$sp_price,$sp_image,$sp_soluong);
        //     }
        //     include './view/cart.php';
        //     break;
        // case 'delcart':
        //     if(isset($_GET['delid']))
        //     {
        //         $delid = $_GET['delid'];
        //         deletegiohang($delid);
        //     }
        //     include './view/cart.php';
        //     break;
        // case 'upcart':
        //     $sanpham_id = $_POST['product_id'];
        //     $soluong = $_POST['soluong'];
            
        //     include './view/cart.php';
        //     break;
        case 'quickview':
            include './view/viewsp.php';
            break;
        case 'danhmuc':
            if(isset($_GET['id']))  $id_dm = $_GET['id'];
            
            include './view/danhmuc.php';
            break;
        case 'login':
            include './view/login.php';
            break;
        case 'post':
            include './view/page_post.php';
            break;
        case 'dn':
            if(isset($_POST['email'])&&(isset($_POST['pass']))){
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                login($email,$pass);
                
            }
            include './view/home.php';
            
            
            break;
        case 'dk':
            if(isset($_POST['name'])
            &&(isset($_POST['email']))&&isset($_POST['pass'])
            &&isset($_POST['note'])&&(isset($_POST['address']))
            &&isset($_POST['phone'])){
                $email = $_POST['email'];
                $name = $_POST['name'];
                $pass = $_POST['pass'];
                $phone = $_POST['phone'];
                $note = $_POST['note'];
                $address = $_POST['address'];
                reg($name,$email,$pass,$phone,$note,$address);
            }
            include './view/home.php';
            break;
        case 'logout':
            if(isset($_GET['dangxuat'])){
                $dangxuat = $_GET['dangxuat'];
                logout($dangxuat);
            }
            break;
        case 'reg':
            include './view/reg.php';
            break;
        case 'profile':
            include './view/profile.php';
            break;
        case 'thembinhluan':
            include './view/thembinhluan.php';
            break;
        case 'bill':
            include './view/bill.php';
            header("location: index.php?act=bill");
            exit();
            break;
        case 'viewbill':
            include './view/viewbill.php';
            exit();
            break;
        case 'home':
            include './view/home.php';
            break;
        case 'searchpro':
            include './view/searchpro.php';
            break;
        default:
            include './view/home.php';
            break;
    }
}else{
    include './view/home.php';
}

include './view/footer.php';

?>