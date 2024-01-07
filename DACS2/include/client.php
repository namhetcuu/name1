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
                 <h3>TÀI KHOẢN CỦA TÔI</h3>
                 <ul>
                     <?php
                        if (isset($_SESSION['dangnhap'])) {
                            $client_id = $_SESSION['client_id'];
                        } else {
                            $client_id = '';
                        }
                        $sql_client = mysqli_query($conn, "SELECT * FROM tbl_client WHERE client_id = '$client_id' ");
                        $row_client = mysqli_fetch_array($sql_client);
                        ?>
                     <li><i class='bx bxs-home'></i>Tên tài khoản: <?php echo $row_client['client_name'] ?></li>
                     <li><i class='bx bxs-map'></i>Địa chỉ: <?php echo $row_client['client_address'] ?></li>
                     <li><i class='bx bxs-phone-call'></i>Điện thoại: <?php echo $row_client['client_phone'] ?></li>
                     <li><i class='bx bxs-envelope'></i>Email: <?php echo $row_client['client_email'] ?></li>
                     <li><a href="?quanly=update_client">Sửa thông tin tài khoản</a></li>
                 </ul>
             </div>
         </form>
         <div class="cart-container">
             <table class="cart-table">
                 <thead>
                     <tr>
                         <th>STT</th>
                         <th>Mã đơn hàng</th>
                         <th>Tên khách hàng</th>
                         <th>Giá trị đơn hàng</th>
                         <th>Trạng thái đơn hàng</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                        $giakhuyenmai = 0;
                        $sql_order = mysqli_query($conn, "SELECT * FROM 
                        tbl_order,tbl_product,tbl_client WHERE 
                        tbl_order.product_id=tbl_product.product_id AND 
                        tbl_order.client_id=tbl_client.client_id AND tbl_order.client_id = '$client_id'");
                        $i = 0;
                        $count = mysqli_num_rows($sql_order);
                        if ($count > 0) {
                            while ($row_order = mysqli_fetch_array($sql_order)) {
                                $giakhuyenmai = $row_order['product_price'] * (100 - $row_order['product_promotion']) / 100;
                                $total = $giakhuyenmai * $row_order['order_quantity'];
                                $i++;

                        ?>
                             <tr>
                                 <td><?php echo $i ?></td>
                                 <td><?php echo $row_order['order_code'] ?></td>
                                 <td><?php echo $row_order['client_name'] ?></td>
                                 <td><?php echo number_format($total) . ' VNĐ' ?></td>
                                 <td><?php echo $row_order['order_status'] ?></td>
                             </tr>
                         <?php }
                        } else { ?>
                         <tr>
                             <td colspan="5">Chưa có đơn hàng</td>
                         </tr>
                     <?php } ?>
                 </tbody>
             </table>
         </div>
     </div>
 </section>
 <!-- ============================== client ends ============================== -->