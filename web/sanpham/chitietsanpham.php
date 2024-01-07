<?php
include './config/connection.php';
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
    <link rel="stylesheet" href="./css/boostrap.min.css">
    <link rel="stylesheet" href="./css/inconfont.css">
    <link rel="stylesheet" href="./css/plugins.css">
    <link rel="stylesheet" href="./css/helper.css">
    <link rel="stylesheet" href="./css/style_sanpham.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <title>Trang chủ</title>
    <script src="/js/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>

<body>
    <!--Header section start-->
    <div id="main-wrapper">
        <header class="header header-transparent header-sticky">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div
                            class="col-xl-6 col-lg-8 d-flex flex-wrap justify-content-lg-start justify-content-center align-items-center">
                            <!--Links start-->
                            <div class="header-top-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-phone"></i>(08) 123 456 7890</a></li>
                                    <li><a href="#"><i class="fa fa-envelope-open-o"></i>yourmail@domain.com</a></li>
                                </ul>
                            </div>
                            <!--Links end-->
                        </div>
                        <div class="col-xl-6 col-lg-4">
                            <div class="ht-right d-flex justify-content-lg-end justify-content-center">
                                <ul class="ht-us-menu d-flex">
                                    <li><a href="#"><i class="fa fa-user-circle-o"></i>Login</a>
                                        <ul class="ht-dropdown right">
                                            <!-- <li><a href="compare.html">Compare Products</a></li> -->
                                            <li><a href="my-account.html">My Account</a></li>
                                            <!-- <li><a href="wishlist.html">My Wish List</a></li> -->
                                            <li><a href="login-register.html">Sign In</a></li>
                                            <!-- <li><a href="login-register.html">Sign In</a></li> -->
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="header-bottom menu-right">
                <div class="container">
                    <div class="row align-items-center">

                        <!--Logo start-->
                        <div class="col-lg-3 col-md-3 col-6 order-lg-1 order-md-1 order-1">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logo.png" alt="logo TG shop"></a>
                            </div>
                        </div>
                        <!--Logo end-->

                        <!--Menu start-->
                        <div
                            class="col-lg-6 col-md-6 col-12 order-lg-2 order-md-2 order-3 d-flex justify-content-center">
                            <nav class="main-menu">
                                <ul>
                                    <li><a href="index.html">Home</a>
                                    </li>
                                    <li><a href="shop.html">Shop</a>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                    </li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!--Menu end-->

                        <!--Search Cart Start-->
                        <div class="col-lg-3 col-md-3 col-6 order-lg-3 order-md-3 order-2 d-flex justify-content-end">
                            <div class="header-search">
                                <button class="header-search-toggle"><i class="fa fa-search"></i></button>
                                <div class="header-search-form">
                                    <form action="#">
                                        <input type="text" placeholder="Type and hit enter">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="header-cart">
                                <a href="cart.html"><i class="fa fa-shopping-cart"></i><span>3</span></a>
                                <!--Mini Cart Dropdown Start-->
                                
                                <!--Mini Cart Dropdown End-->
                            </div>
                        </div>
                        <!--Search Cart End-->
                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->
                </div>
            </div>
        </header>
        <div class="page-banner-section section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-banner text-center">
                            <h1 style="margin: 0 !important;">Sản phẩm</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Sản phẩm</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product Section Start -->
        <div class="single-product-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <!-- Product Details Left -->
                        <div class="product-details-left">
                            <?php
                            $sql = "SELECT * FROM sanpham WHERE ID = ".$_GET['idsp'];
                            $query = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($query);
                            ?>
                            <div class="product-details-thumbs slider-thumbs-1 tf-element-carousel" data-slick-options='{
                                "slidesToShow": 4,
                                "slidesToScroll": 1,
                                "infinite": true,
                                "focusOnSelect": true,
                                "asNavFor": ".slider-lg-image-1",
                                "arrows": false,
                                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                }' data-slick-responsive='[
                                {"breakpoint":991, "settings": {
                                    "slidesToShow": 3
                                }},
                                {"breakpoint":767, "settings": {
                                    "slidesToShow": 4
                                }},
                                {"breakpoint":479, "settings": {
                                    "slidesToShow": 2
                                }}
                            ]'>
                                <div class="sm-image"><img src="./img/<?php echo $row['img'] ;?>" alt="product image thumb"></div>
                            </div>
                        </div>
                        <!--Product Details Left -->
                    </div>
                    <div class="col-md-7">
                        <!--Product Details Content Start-->
                        <div class="product-details-content">
                            
                            <h2><?php echo $row['TenSP'];?></h2>
                            <div class="single-product-reviews">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <a class="review-link" href="#">(1 customer review)</a>
                            </div>
                            <div class="single-product-price">
                                <span class="price new-price"><?php echo $row['Gia'];?></span>
                                <span class="regular-price"></span>
                            </div>
                            <div class="product-description">
                                <p><?php echo $row['description'];?></p>
                            </div>
                            <div class="single-product-quantity">
                                <form class="add-quantity" action="#">
                                    <div class="product-quantity">
                                        <input value="1" type="number" value="<?php echo $row['SoLuong'];?>">
                                    </div>
                                    <div class="add-to-link">
                                        <button class="product-add-btn" data-text="add to cart">add to cart</button>
                                    </div>
                                </form>
                            </div>
                            <div class="wishlist-compare-btn">
                                <a href="#" class="wishlist-btn">Add to Wishlist</a>
                                <a href="#" class="add-compare">Compare</a>
                            </div>
                            <div class="product-meta">
                                <span class="posted-in">
                                    Categories:
                                    <a href="#">Accessories</a>,
                                    <a href="#">Electronics</a>
                                </span>
                            </div>
                            <div class="single-product-sharing">
                                <h3>Share this product</h3>
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Product Details Content End-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product Section End -->

        <!--Product Description Review Section Start-->
        <div class="product-description-review-section section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-review-tab">
                            <!--Review And Description Tab Menu Start-->
                            <ul class="nav dec-and-review-menu">
                                <li>
                                    <a class="active" data-toggle="tab" href="#description">Description</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews">Reviews (1)</a>
                                </li>
                            </ul>
                            <!--Review And Description Tab Menu End-->
                            <!--Review And Description Tab Content Start-->
                            <div class="tab-content product-review-content-tab" id="myTabContent-4">
                                <div class="tab-pane fade active show" id="description">
                                    <div class="single-product-description" id="dsbinhluan">
                                        <?php
                                        $sql = "SELECT * FROM binhluan ";
                                        $query = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_array($query)){
                                            echo $row['id']." ".$row['noidung']."<br>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="idsp" value="<?= $_GET['idsp'];?>">
                            <textarea name="noidung" id="noidung" cols="30" rows="10">
                            </textarea><br>
                            <input type="submit" value="Confirm" id="btnGui">
                            <script>
                                $("#btnGui").click(function(){
                                    $.ajax({
                                        method: "post",
                                        url: 'thembinhluan.php',
                                        data: {id: $('#idsp').val(), noidung: $('#noidung').val()}
                                    })
                                    .done(function(data){
                                        $('#dsbinhluan').append('<p>'+$('#noidung').val()+'</p>');
                                        console.log($('#noidung').val());
                                        $('#noidung').val('');
                                    })
                                })
                            </script>
                            <!--Review And Description Tab Content End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Product Description Review Section Start-->
        <footer class="footer-section section bg-dark">

            <!--Footer Top start-->
            <div
                class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-45 pb-lg-25 pb-md-15 pb-sm-5 pb-xs-0">
                <div class="container">
                    <div class="row row-25">

                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">About TheFace</span></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat</p>
                            <div class="footer-social">
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="linkedin"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                                <a href="#" class="pinterest"><i class="fa fa-vimeo"></i></a>
                            </div>
                        </div>
                        <!--Footer Widget end-->


                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">Information</span></h4>
                            <ul class="ft-menu">
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Delivery</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Mobile</a></li>
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Unsubscribe Notification</a></li>
                            </ul>
                        </div>
                        <!--Footer Widget end-->


                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">Our Offers</span></h4>
                            <ul class="ft-menu">
                                <li><a href="#">New products</a></li>
                                <li><a href="#">Top sellers</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Manufacturers</a></li>
                                <li><a href="#">Suppliers</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Service</a></li>
                            </ul>
                        </div>
                        <!--Footer Widget end-->

                        <!--Footer Widget start-->
                        <div class="footer-widget col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                            <h4 class="title"><span class="text">Contact us</span></h4>
                            <ul class="address">
                                <li><i class="fa fa-home"></i><span>HH2 BacHa building, Tohuu Street Hanoi,
                                        Vietnam</span>
                                </li>
                                <li><i class="fa fa-phone"></i><span><a href="#">(08) 123 456 7890</a></span></li>
                                <li><i class="fa fa-envelope-o"></i><span><a href="#">yourmail@domain.com</a></span>
                                </li>
                            </ul>
                            <div class="payment-box mt-15 mb-15">
                                <a href="#"><img src="./assets/images/payment.png" alt=""></a>
                            </div>
                        </div>
                        <!--Footer Widget end-->
                    </div>
                </div>
            </div>
            <!--Footer Top end-->

            <!--Footer bottom start-->
            <div class="footer-bottom section">
                <div class="container ft-border pt-40 pb-40 pt-xs-20 pb-xs-20">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-8">
                            <div class="copyright text-left">
                                <p>Copyright &copy;2019 <a href="#">Theface</a>. All rights reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-4">
                            <div class="footer-logo text-right">
                                <a href="index.html"><img src="./assets/images/logofoo.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer bottom end-->
        </footer>
    </div>

</body>

</html>