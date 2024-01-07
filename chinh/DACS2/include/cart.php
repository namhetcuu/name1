<?php
if (isset($_POST['themgiohang'])) {
    $cart_name = $_POST['cart_name'];
    $product_id = $_POST['product_id'];
    $cart_price = $_POST['cart_price'];
    $cart_quantity = $_POST['cart_quantity'];
    $cart_image = $_POST['cart_image'];
    $sql_select_giohang = mysqli_query($conn, "SELECT * FROM tbl_cart WHERE product_id='$product_id'");
    $count = mysqli_num_rows($sql_select_giohang);
    if ($count > 0) {
        $row_product = mysqli_fetch_array($sql_select_giohang);
        $cart_quantity = $row_product['cart_quantity'] + 1;
        $sql_giohang = "UPDATE  tbl_cart SET cart_quantity='$cart_quantity' WHERE product_id='$product_id'";
    } else {
        $cart_quantity = $cart_quantity;
        $sql_giohang = "INSERT INTO tbl_cart (cart_name,product_id,cart_price,cart_image,cart_quantity) VALUES ('$cart_name','$product_id','$cart_price','$cart_image','$cart_quantity')";
    }
    $insert_row = mysqli_query($conn, $sql_giohang);
    if ($insert_row == 0) {
        header('Location: index.php?quanly=chitietsp$id=' . $product_id);
    }
} else if (isset($_POST['capnhatgiohang'])) {
    if (!empty($_POST['sanpham_id'])) {
        for ($i = 0; $i < count($_POST['sanpham_id']); $i++) {
            $product_id = $_POST['sanpham_id'][$i];
            $quantity = $_POST['quantity'][$i];
            if ($quantity <= 0) {
                $sql_delete_giohang = mysqli_query($conn, "DELETE FROM tbl_cart  WHERE product_id='$product_id'");
            } else {
                $sql_update_giohang = mysqli_query($conn, "UPDATE tbl_cart SET cart_quantity='$quantity' WHERE product_id='$product_id'");
            }
        }
    }
} else if (isset($_GET['remove'])) {
    $id_delete = $_GET['remove'];
    $sql_delete_giohang = mysqli_query($conn, "DELETE FROM tbl_cart  WHERE cart_id='$id_delete'");
} else if (isset($_POST['pay'])) {
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $note = $_POST['note'];
    $name_card = $_POST['name_card'];
    $number_card = $_POST['number_card'];
    $time_card = $_POST['time_card'];
    $year_card = $_POST['year_card'];
    $number_cvv = $_POST['number_cvv'];
    if (isset($_SESSION['dangnhap'])) {
        $client_id = $_SESSION['client_id'];
        $client = mysqli_query($conn, "SELECT * FROM tbl_client WHERE client_id='$client_id'");
        $count = mysqli_num_rows($client);
        if ($count > 0) {
            if ($address != '' && $phone != '' && $note != '' && $name_card != '' && $number_card != '' && $time_card != '' && $year_card != '' && $number_cvv != '') {
                $sql_client = "UPDATE  tbl_client SET client_phone='$phone',client_address='$address',client_note='$note',name_card='$name_card',number_card='$number_card',time_card='$time_card',year_card='$year_card',number_cvv='$number_cvv' WHERE client_id='$client_id'";
                $insert = mysqli_query($conn, $sql_client);
                if ($sql_client) {
                    $sql_select_khachhang = mysqli_query($conn, "SELECT * FROM tbl_client ORDER BY client_id DESC LIMIT 1");
                    $madonhang = rand(0, 9999);
                    $row_khachhang = mysqli_fetch_array($sql_select_khachhang);
                    for ($i = 0; $i < count($_POST['thanhtoan_sanpham_id']); $i++) {
                        $client_id = $row_khachhang['client_id'];
                        $product_id = $_POST['thanhtoan_sanpham_id'][$i];
                        $quantity = $_POST['thanhtoan_quantity'][$i];
                        $sql_client = mysqli_query($conn, "INSERT INTO tbl_oder (product_id,oder_quantity,oder_code,client_id,oder_status) 
            VALUE ('$product_id','$quantity','$madonhang','$client_id','Chưa xác nhận')");
                        $sql_delete_thanhtoan = mysqli_query($conn, "DELETE FROM tbl_cart  WHERE product_id='$product_id'");
                    }
                }
            } else {
                $sql_client_1 = mysqli_query($conn, "SELECT * FROM tbl_client WHERE client_id='$client_id'");
                $row_client_1 = mysqli_fetch_array($sql_client_1);
                $address = $row_client_1['client_address'];
                $phone = $row_client_1['client_phone'];
                $note = $row_client_1['client_note'];
                $name_card = $row_client_1['name_card'];
                $number_card = $row_client_1['number_card'];
                $time_card = $row_client_1['time_card'];
                $year_card = $row_client_1['year_card'];
                $number_cvv = $row_client_1['number_cvv'];
                $sql_client = "UPDATE  tbl_client SET client_phone='$phone',client_address='$address',client_note='$note',name_card='$name_card',number_card='$number_card',time_card='$time_card',year_card='$year_card',number_cvv='$number_cvv' WHERE client_id='$client_id'";
                $insert = mysqli_query($conn, $sql_client);
                if ($sql_client) {
                    $sql_select_khachhang = mysqli_query($conn, "SELECT * FROM tbl_client ORDER BY client_id DESC LIMIT 1");
                    $madonhang = rand(0, 9999);
                    $row_khachhang = mysqli_fetch_array($sql_select_khachhang);
                    for ($i = 0; $i < count($_POST['thanhtoan_sanpham_id']); $i++) {
                        $client_id = $row_khachhang['client_id'];
                        $product_id = $_POST['thanhtoan_sanpham_id'][$i];
                        $quantity = $_POST['thanhtoan_quantity'][$i];
                        $sql_client = mysqli_query($conn, "INSERT INTO tbl_oder (product_id,oder_quantity,oder_code,client_id,oder_status) 
            VALUE ('$product_id','$quantity','$madonhang','$client_id','Chưa xác nhận')");
                        $sql_delete_thanhtoan = mysqli_query($conn, "DELETE FROM tbl_cart  WHERE product_id='$product_id'");
                    }
                }
            }
        }
    } else {
        header('Location: index.php?quanly=dangnhap');
    }
}
?>
<section class="page">
    <div class="links-page">
        <a href="index.php">Trang chủ</a> /
        <p>Giỏ hàng</p>
    </div>
</section>
<!-- ============================== Cart starts ============================== -->
<section class="cart" id="cart">
    <div class="headline">
        <h3>Giỏ hàng</h3>
    </div>
    <div class="cart-container">
        <form action="" method="post">
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
                    $sql_laygiohang = mysqli_query($conn, "SELECT * FROM tbl_cart ORDER BY cart_id DESC ");
                    $i = 0;
                    $total = 0;
                    while ($row_laygiohang = mysqli_fetch_array($sql_laygiohang)) {
                        $subtotal = $row_laygiohang['cart_quantity'] * $row_laygiohang['cart_price'];
                        $total += $subtotal;
                        $i++ ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td>
                                <img src="../view/images/<?php echo $row_laygiohang['cart_image'] ?>" alt="dđ">
                            </td>
                            <td><?php echo $row_laygiohang['cart_name'] ?></td>
                            <td>
                                <input type="hidden" name="sanpham_id[]" value="<?php echo $row_laygiohang['product_id'] ?>">
                                <input type="number" name="quantity[]" id="" min="0" value="<?php echo $row_laygiohang['cart_quantity'] ?>">
                            </td>
                            <td><?php echo number_format($row_laygiohang['cart_price']) . ' VNĐ' ?></td>
                            <td>
                                <a href="?quanly=giohang&remove=<?php echo $row_laygiohang['cart_id'] ?>">Xóa</a>
                            </td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="6">Tổng tiền: <?php echo number_format($total) . ' VNĐ' ?></td>
                    </tr>
                    <tr>
                        <td colspan="6"><input type="submit" name="capnhatgiohang" value="Cập nhập"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <div class="container">
        <form action="" method="post">
            <div class="row">
                <?php
                if (isset($_SESSION['dangnhap'])) {
                    $client_id = $_SESSION['client_id'];
                    $sql_client_2 = mysqli_query($conn, "SELECT * FROM tbl_client WHERE client_id='$client_id'");
                    $row_client_2 = mysqli_fetch_array($sql_client_2);
                ?>
                    <div class="col">
                        <h3 class="title">Địa chỉ</h3>
                        <div class="inputBox">
                            <span>Họ&Tên:</span>
                            <input type="text" name="name" placeholder="Nguyễn Văn A" value="<?php echo $row_client_2['client_name'] ?>">
                        </div>
                        <div class="inputBox">
                            <span>Email:</span>
                            <input type="email" name="email" placeholder="<?php echo $row_client_2['client_email'] ?>">
                        </div>
                        <div class="inputBox">
                            <span>Địa chỉ:</span>
                            <input type="text" name="address" placeholder="">
                        </div>
                        <div class="inputBox">
                            <span>Số điện thoại:</span>
                            <input type="text" name="phone" placeholder="">
                        </div>
                        <div class="inputBox">
                            <span>Note:</span>
                            <input type="text" name="note" placeholder="">
                        </div>
                    </div>
                    <div class="col">
                        <h3 class="title">Thanh toán</h3>
                        <div class="inputBox">
                            <span>Thẻ được chấp nhận:</span>
                            <img src="../view/images/card_img.png" alt="">
                        </div>
                        <div class="inputBox">
                            <span>Tên thẻ:</span>
                            <input type="text" name="name_card" placeholder="">
                        </div>
                        <div class="inputBox">
                            <span>Số thẻ:</span>
                            <input type="text" name="number_card" placeholder="">
                        </div>
                        <div class="inputBox">
                            <span>Tháng mở thẻ:</span>
                            <input type="text" name="time_card" placeholder="">
                        </div>
                        <div class="flex">
                            <div class="inputBox">
                                <span>Năm mở thẻ:</span>
                                <input type="text" name="year_card" placeholder="">
                            </div>
                            <div class="inputBox">
                                <span>CVV:</span>
                                <input type="text" name="number_cvv" placeholder="">
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php

            $sql_lay_giohang = mysqli_query($conn, "SELECT * FROM tbl_cart ORDER BY cart_id DESC");
            while ($row_thanhtoan = mysqli_fetch_array($sql_lay_giohang)) {
            ?>
                <input type="hidden" name="thanhtoan_sanpham_id[]" value="<?php echo $row_thanhtoan['product_id'] ?>">
                <input type="hidden" min="0" name="thanhtoan_quantity[]" value="<?php echo $row_thanhtoan['cart_quantity'] ?>">
            <?php } ?>
            <input type="submit" value="Thanh toán" name="pay" class="submit-btn">
        </form>
    </div>
</section>
<!-- ============================== Cart starts ============================== -->