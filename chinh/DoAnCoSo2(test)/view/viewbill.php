
<?php
if(isset($_POST['viewbill'])&&$_POST['viewbill']){
     $tongtien = $_POST['tongtien'];
     $khachhang_id = $_SESSION['khachhang_id'];

     
     $sql_money = mysqli_query($conn, "SELECT * FROM khachhang WHERE khachhang_id = $khachhang_id");
     $row_money = mysqli_fetch_array($sql_money);
     $money = $row_money['client_money'];
     $tt = $money-$tongtien;
     //echo "<script>alert('$tt')</script>";
     $sql_kh = mysqli_query($conn, "UPDATE khachhang SET client_money = 
     '$tt' WHERE khachhang_id = $khachhang_id");
     for($i=0;$i<count($_POST['thanhtoan_product_id']);$i++){
          $sanpham_id = $_POST['thanhtoan_product_id'][$i];
          // if($sanpham_id){
          // echo "<script>alert('$sanpham_id')</script>";
          // }
        $soluong = $_POST['thanhtoan_soluong'][$i];
        $sql_select_soluong = mysqli_query($conn, "SELECT * FROM sanpham WHERE sanpham_id = $sanpham_id");
          $row_soluong = mysqli_fetch_array($sql_select_soluong);
          $soluong_sql = $row_soluong['sanpham_soluong'];
          $sl_sau = $soluong_sql-$soluong;
          $sql_update_soluong = mysqli_query($conn, "UPDATE sanpham SET sanpham_soluong = 
          '$sl_sau' WHERE sanpham_id = $sanpham_id");

     }
     header("location: index.php?act=viewbill");

}



?>

    <!--Header section start-->
    <div id="main-wrapper">
          <div class="page-banner-section section bg-gray">
               <div class="container">
                    <div class="row">
                         <div class="col">
                         <div class="page-banner text-center">
                              <h1>View Detail Orders</h1>
                              <ul class="page-breadcrumb">
                                   <li><a href="?act=home">Home</a></li>
                                   <li>Detail Orders</li>
                              </ul>
                         </div>

                         </div>
                    </div>
               </div>
          </div>

        <!--Checkout section start-->
        <div
            class="checkout-section section " style="background: white;">
            <div class="container">
                <div class="row">
                    <?php
                    if(isset($_SESSION['khachhang_id'])){

                         ?>
                         
                         <div class="col-12">

                         <!-- Checkout Form Start-->
                         <form action="?act=bill" method="post" class="checkout-form">
                         <div class="row row-40" style="gap:unset">

                              <div class="col-lg-7">

                                   <!-- Billing Address -->
                                   <div id="billing-form" class="mb-10">
                                        <h4 class="checkout-title">Billing Address</h4>
                                        <?php
                                        $khachhang_id = $_SESSION['khachhang_id'];
                                        $result = mysqli_query($conn, "SELECT * FROM khachhang WHERE khachhang_id = $khachhang_id");
                                        
                                            while($value = mysqli_fetch_array($result)){
                                        ?>
                                        <div class="row">
                                             <div class="col-md-12 col-12 mb-5">
                                             <label>Full Name*</label>
                                             <input type="text" placeholder="" value="<?= $value['name'] ;?>" name="name" readonly>
                                             </div>
                                             
                                             <div class="col-md-12 col-12 mb-5">
                                             <label>Phone no*</label>
                                             <input type="text" placeholder="" value="<?= $value['phone'] ;?>" name="phone" readonly>
                                             </div>
                                             <div class="col-12 mb-5">
                                             <label>Address to get product *</label>
                                             
                                             <input type="text" placeholder="" value="<?php echo $value['address'] ;?>" name="address" readonly>
                                             </div>
                                             <div class="col-12 mb-6">
                                                  <!-- <input type="submit" name="upbill" value="Charge info" class="btn btn-success"> -->
                                                  <a href="?act=home" class="btn btn-primary">Back to Home</a>
                                                  
                                                  <!--  -->
                                             </div>
                                             
                                             

                                        </div>
                                        </form>
                                        <?php }
                                         ?>

                                   </div>
                              </div>

                              <div class="col-lg-5">
                                   <div class="row">
                                        
                                        <!-- Cart Total -->
                                        <div class="col-12 mb-60">

                                             <h4 class="checkout-title">Your Order</h4>

                                             <div class="checkout-cart-total" style="height: 90%;">

                                             <h4>Product <span>Total</span></h4>
                                             
                                             <ul>
                                             <?php
                                             $khachhang_id = $_SESSION['khachhang_id'];
                                             $sql_select_dh = mysqli_query($conn, "SELECT * FROM donhang,sanpham,khachhang 
                                             WHERE donhang.sanpham_id=sanpham.sanpham_id AND donhang.khachhang_id=$khachhang_id
                                             GROUP BY sanpham.sanpham_id");
                                             $tong = 0;
                                             while ($row = mysqli_fetch_array($sql_select_dh)) {
                                                  $tong+= $row['sanpham_giakhuyenmai']*$row['soluong'];
                                                  ?>
                                                  
                                                  <li><?= $row['sanpham_name'] ;?> <span>$<?= $row['sanpham_giakhuyenmai'] ;?>(x<?= $row['soluong'] ?>)</span></li>
                                             
                                             <?php }

                                             ?>
                                             
                                             </ul><br>
                                             <?php
                                                  if($_SESSION['magiamgia']!=''){
                                                  $sql_select_gg = mysqli_query($conn, "SELECT * FROM giamgia 
                                                  WHERE giamgia_code = '". $_SESSION['magiamgia'] ."' ");
                                                  if($sql_select_gg){
                                                       $row = mysqli_fetch_array($sql_select_gg);
                                                       $tong -= $row['2'];?>
                                                       <h4>Total <span>$<?php echo $tong?>
                                                  <?php } ?>
                                                  <?php }
                                                  else{?>

                                                       <h4>Total <span>$<?= $tong;?></h4>
                                                       <?php
                                                       $khachhang_id = $_SESSION['khachhang_id'];
                                                       $sql_kh = mysqli_query($conn, "SELECT * FROM khachhang WHERE khachhang_id = $khachhang_id");
                                                       if($row = mysqli_fetch_array($sql_kh)){ 
                                                            $tt = $row['client_money'];
                                                            ?>

                                                            <h4>Your current amount <span>$<?= $tt ;?></h4>
                                                  <?php 
                                                  
                                                  
                                                  }}
                                                  
                                             
                                             
                                             ?>
                                             
                                             <?php
                                                 
                                                       if($row==''){
                                                            $row['1']='';
                                                       }else{
                                                            if($row['1']=='giangsinhvv')
                                                                  echo "(-30%)";
                                                            else if($row['1']=='tet2024') echo "(-20%)";
                                                       }
                                                       
                                                       
                                            
                                             ?></span></h4>
                                             
                                             <p>Shipping method <span>Fast</span></p>
                                             <p>Shipping Fee <span>$00.00</span></p>
                                             <br>
                                             
                                             </div>

                                        </div>

                                   </div>
                              </div>

                         </div>
                    

                         </div>
                    <?php }
                    else{?>
                         <p>Vui long dang nhap or dang ky</p>
                    <?php }
                    ?>
                    
                </div>
            </div>
        </div>
        
        

        