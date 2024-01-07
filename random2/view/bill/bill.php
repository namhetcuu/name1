<?php
if(isset($_POST['thanhtoan'])){
     if(isset($_POST['magiamgia'])&&$_POST['magiamgia']!=''){
          $_SESSION['magiamgia'] = $_POST['magiamgia'];
     }else{
          $_SESSION['magiamgia'] = $_POST['magiamgia'];
          
     }
     
     $mahang = rand(0,9999);
     $khachhang_id = $_SESSION['khachhang_id'];
      for ($i=0; $i < count($_POST['thanhtoan_product_id']); $i++) { 
          
          $sanpham_id = $_POST['thanhtoan_product_id'][$i];
          $soluong = $_POST['thanhtoan_soluong'][$i];
          $sql_donhang = mysqli_query($conn, "INSERT INTO donhang(sanpham_id,soluong,
          mahang,khachhang_id) VALUES ('$sanpham_id','$soluong','$mahang','$khachhang_id')");
          $sql_delete_thanhtoan = mysqli_query($conn, "DELETE FROM giohang WHERE sanpham_id='$sanpham_id'");
          // $sql_giaodich = mysqli_query($conn, "INSERT INTO giaodich(sanpham_id,soluong,magiaodich,khachhang_id) 
          // VALUES ('$sanpham_id','$soluong','$mahang','$khachhang_id')");
     } 
}


?>

    <!--Header section start-->
    <div id="main-wrapper">
          <div class="page-banner-section section bg-gray">
               <div class="container">
                    <div class="row">
                         <div class="col">
                         <div class="page-banner text-center">
                              <h1>Check Out</h1>
                              <ul class="page-breadcrumb">
                                   <li><a href="?act=home">Home</a></li>
                                   <li>Check out</li>
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
                         <form action="#" class="checkout-form">
                         <div class="row row-40" style="gap:unset">

                              <div class="col-lg-7">

                                   <!-- Billing Address -->
                                   <div id="billing-form" class="mb-10">
                                        <h4 class="checkout-title">Billing Address</h4>
                                        <form action="?act=bill" method="post">
                                        <div class="row">
                                             <div class="col-md-12 col-12 mb-5">
                                             <label>Họ và tên*</label>
                                             <input type="text" placeholder="" value="<?= $_SESSION['dangnhap_home'] ;?>">
                                             </div>
                                             
                                             <div class="col-md-12 col-12 mb-5">
                                             <label>Phone no*</label>
                                             <input type="text" placeholder="" value="<?= $_SESSION['phone'] ;?>">
                                             </div>
                                             <div class="col-12 mb-5">
                                             <label>Dia chi nhan hang *</label>
                                             
                                             <input type="text" placeholder="" value="<?php echo $_SESSION['address'] ;?>">
                                             </div>
                                             <div class="col-12 mb-5">
                                                  <a href="?act=cart" class="btn btn-outline-primary">Back</a>
                                             </div>
                                             

                                        </div>
                                        </form>

                                   </div>
                              </div>

                              <div class="col-lg-5">
                                   <div class="row">
                                        
                                        <!-- Cart Total -->
                                        <div class="col-12 mb-60">

                                             <h4 class="checkout-title">Your Order</h4>

                                             <div class="checkout-cart-total">

                                             <h4>Product <span>Total</span></h4>
                                             
                                             <ul>
                                             <?php
                                             $khachhang_id = $_SESSION['khachhang_id'];
                                             $sql_select_dh = mysqli_query($conn, "SELECT * FROM donhang,sanpham,khachhang 
                                             WHERE donhang.sanpham_id=sanpham.sanpham_id AND donhang.khachhang_id=$khachhang_id");
                                             $tong = 0;
                                             while ($row = mysqli_fetch_array($sql_select_dh)) {
                                                  $tong+= $row['sanpham_giakhuyenmai'];
                                                  ?>
                                                  
                                                  <li><?= $row['sanpham_name'] ;?> <span>$<?= $row['sanpham_giakhuyenmai'] ;?></span></li>
                                             
                                             <?php }

                                             ?>
                                             
                                             </ul><br>
                                             <?php
                                                  $sql_select_gg = mysqli_query($conn, "SELECT * FROM giamgia WHERE giamgia_code = '". $_SESSION['magiamgia'] ."' ");
                                                  if($sql_select_gg){
                                                       $row = mysqli_fetch_array($sql_select_gg);
                                                       $tong -= $row['2'];?>
                                                       <h4>Total <span>$<?php echo $tong?>
                                                  <?php }else{?>

                                                       <h4>Total <span>$<?= $tong;?>
                                                  <?php }
                                                  
                                             
                                             
                                             ?>
                                             
                                             (<?php
                                                 
                                                       if($row==''){
                                                            $row['1']='';
                                                       }else{
                                                            if($row['1']=='giangsinhvv')
                                                                  echo "-30%";
                                                            else if($row['1']=='tet2024') echo "-20%";
                                                       }
                                                       
                                                       
                                            
                                             ?>)</span></h4>
                                             
                                             <p>Shipping method <span>Fast</span></p>
                                             <p>Shipping Fee <span>$00.00</span></p>
                                             <br>
                                             
                                             </div>

                                        </div>

                                   </div>
                              </div>

                         </div>
                         </form>

                         </div>
                    <?php }else{?>
                         <p>Vui long dang nhap or dang ky</p>
                    <?php }
                    ?>
                    
                </div>
            </div>
        </div>

        