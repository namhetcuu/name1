<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon"> -->
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/boostrap.min.css">
    <link rel="stylesheet" href="./css/inconfont.css">
    <link rel="stylesheet" href="./css/plugins.css">
    <link rel="stylesheet" href="./css/helper.css">
    <link rel="stylesheet" href="./css/style_sanpham.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <title>Trang chủ</title>
</head>

<body>
    <!--Header section start-->
<div id="main-wrapper">
<?php include "./header.php";?>;
    <!-- Page Banner Section Start -->
<div class="page-banner-section section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h1>My Account</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index .html">Home</a></li>
                        <li>My Account</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>

<!--My Account section start-->
<div
    class="my-account-section section pt-100 pt-lg-80 pt-md-70 
    pt-sm-60 pt-xs-50  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-9 col-12">
                        <div class="tab-content" id="myaccountContent">
                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ;?>" class="checkout-form" method="POST" >
                                    <div class="row row-40">
                                        <div class="col-lg-7">
                                            <!-- Billing Address -->
                                            <div id="billing-form" class="mb-10">
                                                <div class="row">
                                                    <div class="col-md-12 col-12 mb-5">
                                                        <label>Email Address*</label>
                                                        <input type="email" placeholder="Email">
                                                    </div>
                                                    <div class="col-12 mb-5">
                                                        <label>Password*</label>
                                                        <input type="password" placeholder="Password">
                                                    </div>
                                                    <div class="col-12 mb-5">
                                                        <input
                                                            name="sbm"
                                                            value="login"
                                                            type="submit"
                                                            required
                                                            class="btn btn-lg btn-round"
                                                            />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- My Account Tab Content End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--My Account section end-->

        <?php include "./footer.php";?>;