
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ND Shop</title>
  <link href="./css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./view/Css/style.css">
	<!-- <link rel="stylesheet" href="./css/styless.css"> -->
	<!-- <link rel="stylesheet" href="./css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="./css/iconfont.min.css"> -->
    <!-- <link rel="stylesheet" href="./css/plugins.css"> -->
    <!-- <link rel="stylesheet" href="./css/helper.css"> -->
	<!-- Bootstrap css -->
  <link rel="stylesheet" href="./css/styless.css">
	<link href="./css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<!-- <link rel="stylesheet" href="./css/fontawesome-all.css"> -->
	<!-- Font-Awesome-Icons-CSS -->
	<!-- <link href="./css/popuo-box.css" rel="stylesheet" type="text/css" media="all" /> -->
	<!-- pop-up-box -->
	<!-- <link href="./css/menu.css" rel="stylesheet" type="text/css" media="all" /> -->
  
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="./view/Js/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./view/Js/js/popper.min.js"></script>
<script src="./view/Js/js/bootstrap.min.js"></script>
<script src="./view/Js/js/plugins.js"></script>
<script src="./view/Js/js/main.js"></script>


  <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
</head>
<body style="font-size: 0">
<!-- <div id="preloader" style="background: #000 url('./view/images/Spinner-1s-200px.gif') no-repeat center -->
    center;"></div>
  <!-- header starts -->
  <header class="header header-transparent header-sticky" style="padding: 0;margin-top: -25px">
  <div class="header-top" style="width: 100%;">
      <div class="container" style="display: block;padding: 0px">
          <div class="row align-items-center">
              <div
                  class="col-xl-6 col-lg-8 d-flex flex-wrap justify-content-lg-start justify-content-center align-items-center">
                  <!--Links start-->
                  <div class="header-top-links">
                      <ul>
                          <li><a href="#"><i class="bx bx-phone"></i>(08) 123 456 7890</a></li>
                          <li><a href="#"><i class="bx bx-envelope"></i>yourmail@domain.com</a></li>
                      </ul>
                  </div>
                  <!--Links end-->
              </div>
              <div class="col-xl-6 col-lg-4">
                  <div class="ht-right d-flex justify-content-lg-end 
                  justify-content-center">
                      <?php
                        if(isset($_SESSION['dangnhap_home'])){?>  
                        <ul class="ht-us-menu d-flex">
                            <li><a href="#"><i class="bx bxs-user-rectangle"></i>
                            <?php echo $_SESSION['dangnhap_home'] ; ?>
                          </a>
                                <ul class="ht-dropdown right" style="z-index: 100000;">
                                    <!-- <li><a href="compare.html">Compare Products</a></li> -->
                                    <li><a href="?act=profile">My Account</a></li>
                                    <!-- <li><a href="wishlist.html">My Wish List</a></li> -->
                                    <li><a href="?act=logout&dangxuat=1">Log out</a></li>
                                    <!-- <li><a href="login-register.html">Sign In</a></li> -->
                                </ul>
                            </li>
                        </ul>
                      <?php } 
                      else{?>
                        <ul class="ht-us-menu d-flex">
                            <li><a href="#"><i class="bx bxs-user-rectangle"></i>                    </a>
                                <ul class="ht-dropdown right" style="z-index: 100000;">
                                    <!-- <li><a href="compare.html">Compare Products</a></li> -->
                                    <!-- <li><a href="?act=login">My Account</a></li> -->
                                    <!-- <li><a href="wishlist.html">My Wish List</a></li> -->
                                    <li><a href="?act=login">Login</a></li>
                                    <!-- <li><a href="login-register.html">Sign In</a></li> -->
                                </ul>
                            </li>
                        </ul>
                      <?php }
                      ?>
                  </div>
              </div>
          </div>

      </div>
  </div>
  </header>
  <header>
    <label for="toggler" class="bi bi-list"><i class="bx bx-list-ul"></i></label>
    <input type="checkbox" id="toggler">
    <a href="" class="logo">N<span>D</span> Shop</a>
    <nav class="navbar">
      <a href="index.php?act=">Trang chủ</a>
      <a href="index.php?act=product">Sản phẩm</a>
      <a href="http://127.0.0.1:5500/about.html">Giới thiệu</a>
      <a href="?act=post">Post</a>
      <a href="?act=viewbill">Bill</a>
    </nav>
    <div class="navbar-icons">
      <a href="index.php?act=cart" class="bx bx-cart"></a>
      <!-- <a href="index.php?act=login" class="bx bxs-user-rectangle" data-toggle="modal" data-target="#dangnhap"></a>
      <a href=""></a> -->
         
        
    </div>
  </header>
  <script>
    var loader = document.getElementById("preloader");
    window.addEventListener('load', function(load) {
    window.removeEventListener('load', load, false);               
    setTimeout(function(){loader.style.display = 'none'},500);
    },false);
  </script>

	