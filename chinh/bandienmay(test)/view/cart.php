<?php

if((isset($_POST['dathang']))&&($_POST['dathang'])){
    $sanpham_id = $_POST['sanpham_id'];
    $name = $_POST['name'];
    $image = $_POST['image'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $sql_giohang = mysqli_query($conn, "INSERT INTO giohang(tensanpham,sanpham_id,giasanpham,
    hinhanh,soluong) values ('$name','$sanpham_id','$price','$image','$quantity')");

    if($sql_giohang==0){
        header("location: index.php?act=quickview&id=".$sanpham_id);
    }
}
if(isset($_GET['delid'])){
    $id = $_GET['delid'];
    $sql = mysqli_query($conn,"DELETE FROM giohang WHERE giohang_id = .$id");
}
?>
<div class="page-banner-section section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h1>Shopping Cart</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.php?act=">Home</a></li>
                        <li>Cart</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="cart-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  
    pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cart-table table-responsive mb-30">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="pro-thumbnail">Image</th>
                                <th class="pro-title">Name Product</th>
                                <th class="pro-price">Price</th>
                                <th class="pro-quantity">Quantity</th>
                                <th class="pro-subtotal">Total</th>
                                <th class="pro-remove">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sqli_get_giohang = mysqli_query($conn, "SELECT * FROM giohang 
                            ORDER BY giohang_id DESC");
                            $i=0;
                            $tong=0;
                            while($row_giohang = mysqli_fetch_assoc($sqli_get_giohang)){
                                $tt = $row_giohang['giasanpham']*$row_giohang['soluong'];
                                $tong+=$tt;
                                $i++;
                                echo '
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img
                                                    src="../images/'.$row_giohang['hinhanh'].'" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#">'.$row_giohang['tensanpham'].'</a></td>
                                        <td class="pro-price"><span>$'.$row_giohang['giasanpham'].'</span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="number" value="'.$row_giohang['soluong'].'"></div>
                                        </td>
                                        <td class="pro-subtotal"><span>$'.$tt.'</span></td>
                                        <td class="pro-remove"><a href="index.php?act=delcart&id='.$row_giohang['giohang_id'].'"><i class="fa fa-trash btn btn-danger" style="font-size: 20px; padding: 10px"></i></a></td>
                                    </tr>
                                    ';
                            }
                            echo'
                                <tr>
                                    <td colspan="4" class="text-right" >
                                        <h4 style="line-height: 45px;">Tổng:</h4>
                                    </td>
                                    <td class="text-center"><h4 style="line-height: 45px;">$'.$tong.'</h4></td>
                                    <td class="text-center">
                                        <div class="cart-summary-button">
                                            <a style="color: #fff;" class="btn" href="index.php?act=shop">Tiếp tục đặt hàng</a>
                                            <a style="color: #fff;" class="btn" href="index.php?act=checkout">Thanh toán</a>
                                        </div>
                                    </td>
                                </tr>
                            ';
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

        