
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ND Shop</title>
  <link href="./view/pages/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="./view/pages/css/style.css">
    <link rel="stylesheet" href="./view/pages/css/iconfont.min.css">
  <link rel="stylesheet" href="./view/pages/css/styless.css">
	<!-- <link href="./view/pages/css/style.css" rel="stylesheet" type="text/css" media="all" /> -->

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
    <label for="toggler" class="bi bi-list"></label>
    <input type="checkbox" id="toggler">
    <a href="" class="logo">N<span>D</span> Shop</a>
    <nav class="navbar">
      <a href="?controller=pages&action=home">Trang chủ</a>
      <a href="?controller=product&action=index">Sản phẩm</a>
      <a href="http://127.0.0.1:5500/about.html">Giới thiệu</a>
      <a href="#review">Đánh giá</a>
      <a href="http://127.0.0.1:5500/contact.html">Liên hệ</a>
    </nav>
    <div class="navbar-icons">
      <a href="index.php?act=cart" class="bx bx-cart"></a>
      <!-- <a href="index.php?act=login" class="bx bxs-user-rectangle" data-toggle="modal" data-target="#dangnhap"></a>
      <a href=""></a> -->
         
        
    </div>
  </header>
  <!-- <script>
    var loader = document.getElementById("preloader");
    window.addEventListener('load', function(load) {
    window.removeEventListener('load', load, false);               
    setTimeout(function(){loader.style.display = 'none'},500);
    },false);
  </script> -->
  <?php
    require_once 'routes.php';
  ?>
  <footer class="footer" style="overflow: hidden;top:auto;position: relative;">
      <div class="row">
        <div class="footer-col">
          <h4>Trang</h4>
          <ul>
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Sản phẩm</a></li>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Liên hệ</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Hỗ trợ khách hàng</h4>
          <ul>
            <li><a href="#">Chính sách bảo mật</a></li>
            <li><a href="#">Chính sách vận chuyển</a></li>
            <li><a href="#">Chính sách đổi trả</a></li>
            <li><a href="#">Tình trạng đơn hàng</a></li>
            <li><a href="#">Hình thức thanh toán</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Hướng dẫn</h4>
          <ul>
            <li><a href="#">Hướng dẫn mua hàng</a></li>
            <li><a href="#">Hướng dẫn mua hàng</a></li>
            <li><a href="#">Hướng dẫn giao nhận</a></li>
            <li><a href="#">Điều khoản dịch vụ</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Kênh</h4>
          <div class="social-links">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
  </footer>
</body>
</html>

	