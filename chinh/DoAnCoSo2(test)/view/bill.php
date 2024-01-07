
<?php
if(isset($_POST['upbill'])){
     $name = $_POST['name'];
     $phone = $_POST['phone'];
     $address = $_POST['address'];
     $khachhang_id = $_SESSION['khachhang_id'];
     $sql = mysqli_query($conn, "UPDATE khachhang SET name = '$name',
     phone = '$phone', address = '$address' WHERE khachhang_id = $khachhang_id");
     header("location: index.php?act=bill");

}
if(isset($_POST['viewbill'])){
     header("location: index.php?act=viewbill");
}
if(isset($_POST['thanhtoan'])){
     if(isset($_POST['magiamgia'])&&$_POST['magiamgia']!=''){
          $_SESSION['magiamgia'] = $_POST['magiamgia'];
     }else{
          $_SESSION['magiamgia'] = '';
          
     }
     
     $mahang = rand(0,9999);
     $khachhang_id = $_SESSION['khachhang_id'];
      for ($i=0; $i < count($_POST['thanhtoan_product_id']); $i++) { 
          
          $sanpham_id = $_POST['thanhtoan_product_id'][$i];
          $soluong = $_POST['thanhtoan_soluong'][$i];
          $sql_donhang = mysqli_query($conn, "INSERT INTO donhang(sanpham_id,soluong,
          mahang,khachhang_id) VALUES ('$sanpham_id','$soluong','$mahang','$khachhang_id')");
          // $total_money = $soluong*
          // $sql_select_kh = mysqli_query($conn, "SELECT * FROM khachhang ");
          // if($value = mysqli_fetch_array($sql_select_kh)){

          // }
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
                                             <label>Họ và tên*</label>
                                             <input type="text" placeholder="" value="<?= $value['name'] ;?>" name="name">
                                             </div>
                                             
                                             <div class="col-md-12 col-12 mb-5">
                                             <label>Phone no*</label>
                                             <input type="text" placeholder="" value="<?= $value['phone'] ;?>" name="phone">
                                             </div>
                                             <div class="col-12 mb-5">
                                             <label>Dia chi nhan hang *</label>
                                             
                                             <input type="text" placeholder="" value="<?php echo $value['address'] ;?>" name="address">
                                             </div>
                                             <div class="col-12 mb-6">
                                                  <input type="submit" name="upbill" value="Charge info" class="btn btn-success">
                                                  </form>
                                                  <form action="?act=viewbill" method="post">
                                                  <?php
                                                  $khachhang_id = $_SESSION['khachhang_id'];
                                                  $result = mysqli_query($conn, "SELECT * FROM donhang,sanpham
                                                  WHERE donhang.sanpham_id = sanpham.sanpham_id AND donhang.khachhang_id = $khachhang_id");
                                                  $tt=0;
                                                  while($value_kh = mysqli_fetch_array($result)){
                                                       
                                                       $tt+=$value_kh['soluong']*$value_kh['sanpham_giakhuyenmai'];?>
                                                       <input type="hidden" name="thanhtoan_product_id[]" value="<?php echo $value_kh['sanpham_id']?>">
                                                       <input type="hidden" name="thanhtoan_soluong[]" value="<?php echo $value_kh['soluong']?>">
                                                  
                                                  <?php } ?>
                                                  <input type="hidden" value="<?= $tt ?>" name="tongtien">
                                                  <input type="submit" name="viewbill" value="Accept" class="btn btn-success">
                                                  
                                                  </form>
                                                  <a href="?act=home" class="btn btn-primary">Back</a>
                                                  
                                                  <!--  -->
                                             </div>
                                             
                                             

                                        </div>
                                        
                                        <?php }
                                         ?>

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
                                             WHERE donhang.sanpham_id=sanpham.sanpham_id AND donhang.khachhang_id=$khachhang_id
                                             GROUP BY sanpham.sanpham_id");
                                             $tong = 0;
                                             while ($row = mysqli_fetch_array($sql_select_dh)) {
                                                  $tong+= $row['sanpham_giakhuyenmai']*$row['soluong'];
                                                  ?>
                                                  
                                                  <li><?= $row['sanpham_name'] ;?> <span>$<?= $row['sanpham_giakhuyenmai'] ;?> (x<?= $row['soluong'] ?>)</span></li>
                                             
                                             <?php }

                                             ?>
                                             
                                             </ul><br>
                                             <?php
                                             if($_SESSION['magiamgia']!=''){
                                                  $sql_select_gg = mysqli_query($conn, 
                                                  "SELECT * FROM giamgia WHERE giamgia_code = '". 
                                                  $_SESSION['magiamgia'] ."' ");
                                                  if($sql_select_gg){
                                                       $row = mysqli_fetch_array($sql_select_gg);
                                                       $tong -= $row['2'];?>
                                                       <h4>Total <span>$<?php echo $tong?>
                                                  <?php } ?>
                                                  
                                                  <?php }else{
                                                       $tong+=$tong*0.1;
                                                       ?>
                                                       
                                                       <h4>Total <span>$<?= $tong;?>
                                                  <?php }
                                                  
                                             
                                             
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
        

        