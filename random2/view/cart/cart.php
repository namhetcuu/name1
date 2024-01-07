<?php
if(isset($_POST['dathang'])&&($_POST['dathang'])){
    if(!isset($_SESSION['dangnhap_home'])){
        echo "<script>alert('Not Found Account')</script>";
        include './view/product.php';
    }
    $sp_id = $_POST['id_sanpham'];
    $sp_name = $_POST['tensp'];
    $sp_price = $_POST['price'];
    $sp_image = $_POST['image'];
    $sp_soluong = $_POST['soluong'];
    $sql = "INSERT INTO giohang(tensanpham, sanpham_id,giasanpham,hinhanh,soluong) 
    VALUES ('$sp_name','$sp_id','$sp_price','$sp_image','$sp_soluong')";
    $query = mysqli_query($conn, $sql);
}
else if(isset($_GET['xoa'])){
    $id = $_GET['xoa'];
    $sql_delete = mysqli_query($conn,"DELETE FROM giohang WHERE giohang_id='$id'");
    header("location: index.php?act=cart");
}
 if(isset($_POST['capnhat'])){
    for($i=0;$i<count($_POST['product_id']);$i++){
        $sanpham_id = $_POST['product_id'][$i];
        $soluong = $_POST['soluong'][$i];
        if($soluong<=0){
            $sql_delete = mysqli_query($conn,"DELETE FROM giohang WHERE sanpham_id='$sanpham_id'");
        }else{
            $sql_update = mysqli_query($conn,"UPDATE giohang SET soluong='$soluong' WHERE sanpham_id='$sanpham_id'");
        }
    }
    //header("location: index.php?act=cart");
}
//else if(isset($_POST['thanhtoan'])){
    // $name = $_POST['name'];
    // $phone = $_POST['phone'];
    // $address = $_POST['address'];
    // $email = $_POST['email'];
    // $note = $_POST['note'];
    // $giaohang = $_POST['giaohang'];
    // $sql_khachhang = mysqli_query($conn,"INSERT INTO khachhang(name,phone,address,note,email,giaohang)
    // VALUES('$name','$phone','$address','$note','$email','$giaohang')");
    // if($sql_khachhang){
        // $sql_select_khachhang = mysqli_query($conn, "SELECT * FROM khachhang
        //  WHERE khachhang_id = ".$_SESSION['dangnhap_home']);
        //  $mahang = rand(0,9999);
        //  $row_khachhang = mysqli_fetch_array($sql_select_khachhang);
        //  $khachhang_id = $row_khachhang['khachhang_id'];
        //  for ($i=0; $i < count($_POST['thanhtoan_product_id']); $i++) { 
        //     $sanpham_id = $_POST['thanhtoan_product_id'][$i];
        //     $soluong = $_POST['thanhtoan_soluong'][$i];
        //     $sql_donhang = mysqli_query($conn, "INSERT INTO donhang(sanpham_id,soluong,
        //     mahang,khachhang_id) VALUES ('$sanpham_id','$soluong','$mahang','$khachhang_id')");
        //     $sql_delete_thanhtoan = mysqli_query($conn, "DELETE FROM giohang WHERE sanpham_id='$sanpham_id'");
        //     $sql_giaodich = mysqli_query($conn, "INSERT INTO giaodich(sanpham_id,soluong,magiaodich,khachhang_id) 
        //     VALUES ('$sanpham_id','$soluong','$mahang','$khachhang_id')");
        //  }  

    //}
//}



if(!isset($_SESSION['dangnhap_home'])){?>
        <p>Vui long dang nhap or dang ky</p>
<?php }else{?>
    <section class="cart" id="cart">
        <h1 class="heading">Giỏ hàng
        </h1>
        <form action="?act=cart" method="post">
        <div class="cart-container">
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Hình ảnh</th>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá tiền</th>
                        <th>Quản lý</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM giohang 
                ORDER BY giohang_id DESC");
                    $i = 0;$tong = 0;
                    while($value = mysqli_fetch_array($result)){
                        $tt = $value['soluong']*$value['giasanpham'];
                        $tong += $tt;
                        ?>
                        <tr>
                            <td><?= $i++ ;?></td>
                            <td>
                                <img src="./view/images/<?= $value['hinhanh']?>" alt="dđ">
                            </td>
                            <td><?=$value['tensanpham'];?></td>
                            <td>
                                <input type="hidden" name ="product_id[]"  value="<?=$value['sanpham_id'];?>">
                                <input type="number" name="soluong[]"  min="0" value="<?=$value['soluong'];?>">
                            </td>
                            <td><?=$value['giasanpham'];?> VNĐ</td>
                            <td>
                                <!-- <input type="hidden" name="giohang_id" value="<?=$value['giohang_id'];?>"> -->
                                <a href="?act=cart&xoa=<?=$value['giohang_id'];?>" class="btn btn-outline">Delete</a>
                            </td>
                        </tr>
                    <?php }
                    
                    ?>
                    <tr>
                        <td colspan="6">
                            <p>Tổng tiền: <?= $tong;?> VNĐ</p>
                                <!-- <a name="thanhtoan" class="btn btn-outline" href="index.php?act=bill">Thanh toan</a> -->
                        </td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <a href="?act=product" class="btn btn-outline">Tiep tuc dat hang</a>
                            <!-- <input type="submit" name="capnhat" class="btn btn-outline" value="Update"></input> -->
                            <input type="submit" value="Cập nhập" name="capnhat" class="btn btn-outline" style="transition: none;">
                    </tr>
                    

                </tbody>
            </table>
            </form>
        </div>
        <div class="container">
            <form action="index.php?act=bill" style="text-align: center" method="POST">
                <div class="row">
                    <div class="col">
                        <h3 class="title">Thanh Toan</h3>
                        <h3>Gift Code</h3>
                        <input type="text" name="magiamgia" style="width: 30%; font-size: 15px;border-radius: 5px">
                    </div>
                    <?php
                        if(isset($_SESSION['dangnhap_home'])){?>
                                <?php
                                $sql_select_giohang = mysqli_query($conn, "SELECT * FROM giohang ORDER BY giohang_id DESC");
                                while($row = mysqli_fetch_array($sql_select_giohang)){?>
                                    <input type="hidden" name="thanhtoan_product_id[]" value="<?php echo $row['sanpham_id']?>">
                                    <input type="hidden" name="thanhtoan_soluong[]" value="<?php echo $row['soluong']?>">
                                    <!-- <input type="hidden" name="giohang_product_id[]" value="<?= $row['giohang_id'] ;?>"> -->
                                <?php }
                                ?>
                                <!-- <input type="submit" value="Thanh toán" class="btn btn-outline-success" name="thanhtoan" style="width: 30%; margin-right: 10px;">
                                <input type="submit" value="Clear" class="btn btn-outline-primary" name="clear" style="width: 30%;"> -->
                        
                        </div>
                        <?php }
                        ?>
                        
                    
                    <input type="submit" name="thanhtoan" value="Thanh toán" class="submit-btn" style="width: 30%">
                </div>
                
        
            </form>
    
        </div>    
<?php } ?>

    <!-- <?php
    if(!isset($_SESSION['dangnhap_home'])){?>
        <p>Vui long dang nhap or dang ky</p>
            <?php
            $sql_select_giohang = mysqli_query($conn, "SELECT * FROM giohang ORDER BY giohang_id DESC");
            while($row = mysqli_fetch_array($sql_select_giohang)){?>
                <input type="hidden" name="thanhtoan_product_id[]" value="<?php echo $row['sanpham_id']?>">
                <input type="hidden" name="thanhtoan_soluong[]" value="<?php echo $row['soluong']?>">
            <?php }
            ?>
            <input type="submit" value="Thanh toán" class="btn btn-outline-success" name="thanhtoan" style="width: 30%; margin-right: 10px;">
            <input type="submit" value="Clear" class="btn btn-outline-primary" name="clear" style="width: 30%;">
    
        </form>
    
    </div>
    <?php }
    ?> -->
        
  </section>