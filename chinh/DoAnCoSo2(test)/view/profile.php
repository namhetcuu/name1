<?php

if(isset($_POST['change'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $khachhang_id = $_SESSION['khachhang_id'];
    $sql = mysqli_query($conn, "UPDATE khachhang SET name = '$name',
    phone = '$phone', address = '$address', email = 
    '$email' WHERE khachhang_id = $khachhang_id");

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon"> -->
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/iconfont.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/helper.css">
    <link rel="stylesheet" href="assets/css/style.css"> -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <title>Trang chủ</title>
</head>

<body>
    <!--Header section start-->
    <div id="main-wrapper">
        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-center">
                            <h1>My Account</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="?act=">Home</a></li>
                                <li>My Account</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--My Account section start-->
        <div
            class="my-account-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="row">
                            <!-- My Account Tab Menu Start -->
                            <div class="col-lg-3 col-12">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                        Dashboard</a>

                                    <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>

                                    

                                    <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Account
                                        Details</a>

                                    <!-- <a href="login-register .html"><i class="fa fa-sign-out"></i> Logout</a> -->
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->

                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-12">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">

                                            <form action="#" class="checkout-form">
                                                <div class="row row-40">

                                                    <div class="col-lg-7">
                                                       <?php
                                                       if($_SESSION['khachhang_id']){
                                                            $khachhang_id = $_SESSION['khachhang_id'];
                                                            $sql = mysqli_query($conn, "SELECT * FROM khachhang WHERE khachhang_id = $khachhang_id");
                                                            while($value = mysqli_fetch_array($sql)){?>
                                                            <div id="billing-form" class="mb-10">
                                                                 <div class="row">
                                                                 <div class="col-md-12 col-12 mb-5">
                                                                      <label>Họ và tên*</label>
                                                                      <input type="text" placeholder="Full Name" value="<?= $value['name'] ?>" readonly>
                                                                 </div>
                                                                 <div class="col-md-12 col-12 mb-5">
                                                                      <label>Email Address*</label>
                                                                      <input type="email" placeholder="Email" value="<?= $value['email'] ?>" readonly>
                                                                 </div>
                                                                 <div class="col-md-12 col-12 mb-5">
                                                                      <label>Phone no*</label>
                                                                      <input type="text" placeholder="Phone" value="<?= $value['phone'] ?>" readonly>
                                                                 </div>
                                                                 <div class="col-12 mb-5">
                                                                      <label>Address*</label>
                                                                      <input type="text" placeholder="Address" value="<?= $value['address'] ?>" readonly>
                                                                 </div>
                                                                 <div class="col-12 mb-5">
                                                                      <label>Money*</label>
                                                                      <input type="text" placeholder="money" value="<?= $value['client_money'] ?> VND" readonly>
                                                                 </div>
                                                                 

                                                                 </div>

                                                            </div>
                                                            <?php }
                                                       }
                                                       ?>
                                                        <!-- Billing Address -->
                                                        

                                                        <!-- Shipping Address -->

                                                    </div>


                                                </div>
                                            </form>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Orders</h3>

                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Quantity</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <!-- <th>Action</th> -->
                                                        </tr>
                                                    </thead>
                                                    <?php
                                                       if($_SESSION['khachhang_id']){
                                                            
                                                            $sql = mysqli_query($conn, "SELECT * FROM donhang,sanpham 
                                                            WHERE donhang.sanpham_id = sanpham.sanpham_id ");
                                                            $i=0;
                                                            while($value = mysqli_fetch_array($sql)){?>
                                                    <tbody>
                                                        <tr>
                                                            <td><?= $i++ ?></td>
                                                            <td><?= $value['sanpham_name'] ?></td>
                                                            <td><?= $value['soluong'] ?></td>
                                                            <td><?php 
                                                            if($value['tinhtrang']=='0')  echo "Not proccessing";
                                                            else echo "proccessing";
                                                             ?></td>
                                                            <td>$<?= $value['soluong']*$value['sanpham_gia'] ?></td>
                                                            <!-- <td><a href="cart .html" class="btn">View</a></td> -->
                                                       </tr>
                                                    </tbody>
                                                    <?php }} ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="download" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Downloads</h3>

                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Product</th>
                                                            <th>Date</th>
                                                            <th>Expire</th>
                                                            <th>Download</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>Mostarizing Oil</td>
                                                            <td>Aug 22, 2018</td>
                                                            <td>Yes</td>
                                                            <td><a href="#" class="btn">Download File</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Katopeno Altuni</td>
                                                            <td>Sep 12, 2018</td>
                                                            <td>Never</td>
                                                            <td><a href="#" class="btn">Download File</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Payment Method</h3>

                                            <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Billing Address</h3>

                                            <address>
                                                <p><strong>Alex Tuntuni</strong></p>
                                                <p>1355 Market St, Suite 900 <br>
                                                    San Francisco, CA 94103</p>
                                                <p>Mobile: (123) 456-7890</p>
                                            </address>

                                            <a href="#" class="btn d-inline-block edit-address-btn"><i
                                                    class="fa fa-edit"></i>Edit Address</a>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Account Details</h3>

                                            <div class="account-details-form">
                                            <?php
                                                if($_SESSION['khachhang_id']){
                                                    $khachhang_id = $_SESSION['khachhang_id'];
                                                    $sql = mysqli_query($conn, "SELECT * FROM khachhang WHERE khachhang_id = $khachhang_id");
                                                    if($value = mysqli_fetch_array($sql)){?>
                                                <form action="" method="POST">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="first-name" value="<?= $value['name'] ?>" placeholder="Full Name" type="text" name="name">
                                                        </div>

                                                        <div class="col-lg-6 col-12 mb-30">
                                                            <input id="last-name" value="<?= $value['email'] ?>" placeholder="Email" type="email" name="email">
                                                        </div>

                                                        <div class="col-12 mb-30">
                                                            <input id="display-name" value="<?= $value['phone'] ?>" placeholder="Phone"
                                                                type="text" name="phone">
                                                        </div>

                                                        <div class="col-12 mb-30">
                                                            <input id="email" value="<?= $value['address'] ?>" placeholder="Address" type="text" name="money">
                                                        </div>
                                                        

                                                        <div class="col-12">
                                                            <input type="submit" name="change" value="Save Changes" class="btn btn-success"></input>
                                                        </div>

                                                    </div>
                                                </form>
                                                <?php }} ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                </div>
                            </div>
                            <!-- My Account Tab Content End -->
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--My Account section end-->

        <!--Brand section start-->
        <!--Brand section end-->