 <?php
    if (isset($_SESSION['client_id'])) {
        $client_id = $_SESSION['client_id'];
    } else {
        $client_id = '';
    }
    if (isset($_POST['update_sp'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $sql_update = mysqli_query($conn, "UPDATE tbl_client SET client_name = '$name',client_phone='$phone',client_address='$address',client_email='$email',client_password = '$pass' WHERE client_id = '$client_id' ");
        header('Location: ?quanly=client');
    }
    ?>

 <!-- ============================== client starts ============================== -->
 <section class="page">
     <div class="links-page">
         <a href="">Trang chủ</a> /
         <p>Trang khách hàng</p>
     </div>
 </section>
 <div class="headline">
     <h3>Trang khách hàng</h3>
 </div>
 <section class="clients" id="clients">
     <div class="main-client">
         <form action="">
             <div class="client-info">
                 <h3>Cập nhập thông tin</h3>
                 <ul>
                     <?php
                        $sql_client = mysqli_query($conn, "SELECT * FROM tbl_client WHERE client_id = '$client_id' ");
                        $row_client = mysqli_fetch_array($sql_client);
                        ?>
                     <li><i class='bx bxs-home'></i>Tên tài khoản: <?php echo $row_client['client_name'] ?></li>
                     <li><i class='bx bxs-map'></i>Địa chỉ: <?php echo $row_client['client_address'] ?></li>
                     <li><i class='bx bxs-phone-call'></i>Điện thoại: <?php echo $row_client['client_phone'] ?></li>
                     <li><i class='bx bxs-envelope'></i>Email: <?php echo $row_client['client_email'] ?></li>
                 </ul>
             </div>
         </form>
         <div class="form-client">
             <form action="" method="post">
                 <label for="name">Tên tài khoản</label>
                 <input type="text" id="name" value="<?php echo $row_client['client_name'] ?>" name="name">
                 <label for="email">Mật khẩu</label>
                 <input type="hidden" value="<?php echo $row_client['client_email'] ?>" name="email">
                 <input type="text" id="pass" value="<?php echo $row_client['client_password'] ?>" name="pass">
                 <label for="phone">Số điện thoại</label>
                 <input type="text" id="phone" value="<?php echo $row_client['client_phone'] ?>" name="phone">
                 <label for="address">Địa chỉ</label>
                 <input type="text" id="address" value="<?php echo $row_client['client_address'] ?>" name="address">
                 <button type="submit" name="update_sp" class="btn btn-primary">Cập nhật</button>
             </form>
         </div>
     </div>
 </section>
 <!-- ============================== client ends ============================== -->