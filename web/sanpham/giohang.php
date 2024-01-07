<?php
session_start();
if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
if((isset($_POST['addtocart']))&&($_POST['addtocart'])){
    $hinh = $_POST['hinh'];
    $soluong = $_POST['soluong'];
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];

    $fl = 0;
    for($i=0;$i<sizeof($_SESSION['giohang']);$i++){

        if($_SESSION['giohang'][$i][1]==$tensp){
            $fl+=1;
            $soluongnew =$soluong+$_SESSION['giohang'][$i][3];
            $_SESSION['giohang'][$i][3]=$soluongnew;
            break;
        }

    }
    if($fl==0){
        $sp = [$hinh,$tensp,$gia,$soluong];
        $_SESSION['giohang'][] = $sp;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | View Cart</title>
    <link rel="stylesheet" href="css/style_giohang.css">
</head>

<body>
    <div class="boxcenter">
        <div class="row mb ">
            <div class="boxtrai mr" id="bill">
                <form action="../bill.php" method="post">
                    <div class="row" >
                        <h1>THÔNG TIN NHẬN HÀNG</h1>
                        <table class="thongtinnhanhang">
                            <tr>
                                <td width="20%">Họ tên</td>
                                <td><input type="text" name="hoten" required></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><input type="text" name="diachi" required></td>
                            </tr>
                            <tr>
                                <td>Điện thoại</td>
                                <td><input type="text" name="dienthoai" required></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="text" name="email" required></td>
                            </tr>
                        </table>
                    </div>
                    <div class="row mb">
                        <h1>GIỎ HÀNG</h1>
                        <table>
                            <tr>
                                <th>STT</th>
                                <th>Hình</th>
                                <th>Tên sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền ($)</th>
                                <th>Xóa</th>
                            </tr>
                            <?php 
                                if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
                                    if(sizeof($_SESSION['giohang'])>0){
                                        $tong=0;
                                        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                                            $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                                            $tong+=$tt;
                                                echo    '<tr>
                                                            <td>'.($i+1).'</td>
                                                            <td><img src="img/'.$_SESSION['giohang'][$i][0].'" 
                                                            alt="" style="height: 100px; width: 100px;"/></td>
                                                            <td>'.$_SESSION['giohang'][$i][1].'</td>
                                                            <td>'.$_SESSION['giohang'][$i][2].'</td>
                                                            <td>'.$_SESSION['giohang'][$i][3].'</td>
                                                            <td>
                                                                <div>'.$tt.'</div>
                                                            </td>
                                                            <td>
                                                                <a href="cart.php?delid='.$i.'">Xóa</a>
                                                            </td>
                                                        </tr>';
                                        }
                                        echo '
                                        <tr>
                                            <th colspan="5">Tổng đơn hàng</th>
                                            <th colspan="2">
                                                <div>'.$tong.'</div>
                                            </th>
                                        </tr>';            
                                    }   
                                }
                             ?>
                        </table>
                    </div>
                    <div class="row mb">
                        <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
                        <a href="../cart.php?delcart=1"><input type="button" value="XÓA GIỎ HÀNG"></a>
                        <a href="./sanpham.php"><input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>