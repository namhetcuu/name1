<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ND SHOP</title>
  <link rel="stylesheet" href="Css/style.css">
  <link rel="stylesheet" href="Js/script.js">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <?php
  session_start();
  include_once('../config/database.php');
  $conn = connectdb();
  include_once('../include/header.php');
  if (isset($_GET['quanly'])) {
    $tmp = $_GET['quanly'];
  } else {
    $tmp = '';
  }
  if ($tmp == 'client') {
    include_once('../include/client.php');
  } else if ($tmp == 'dangnhap') {
    if (isset($_POST['dangnhap'])) {
      $email = $_POST['Email'];
      $matkhau = $_POST['matkhau'];
      if ($email == '' || $matkhau == '') {
        echo '<script> alert("Xin nhập đầy đủ thông tin");</script>';
      } else {
        $sql_login = mysqli_query($conn, "SELECT * FROM tbl_client WHERE client_email = '$email' AND client_password = '$matkhau' LIMIT 1");
        $count = mysqli_num_rows($sql_login);
        $row_dangnhap = mysqli_fetch_array($sql_login);
        if ($count > 0) {
          $_SESSION['dangnhap'] = $row_dangnhap['client_name'];
          $_SESSION['client_id'] = $row_dangnhap['client_id'];
          $_SESSION['client_email'] = $email;
          header('Location: index.php');
        } else {
          echo '<script> alert("Tài khoản sai");</script>';
        }
      }
    }
    include_once('../include/login.php');
  } else if ($tmp == 'dangky') {
    include_once('../include/register.php');
  } else if ($tmp == 'dangxuat') {
    unset($_SESSION['dangnhap']);
    unset($_SESSION['client_id']);
    unset($_SESSION['client_email']);
    header('Location: index.php');
  } else if ($tmp == 'update_client') {
    include_once('../include/client_update.php');
  } else {
    if ($tmp == 'danhmuc') {
      include_once('../include/category.php');
    } else if ($tmp == 'giohang') {
      include_once('../include/cart.php');
    } else if ($tmp == 'gioithieu') {
      include_once('../include/about.php');
    } else if ($tmp == 'lienhe') {
      include_once('../include/contact.php');
    } else if ($tmp == 'dangnhap') {
      include_once('../include/login.php');
    } else if ($tmp == 'dangky') {
      include_once('../include/register.php');
    } else if ($tmp == 'xemchitiet') {
      include_once('../include/product_detail.php');
    } else if ($tmp == 'post') {
      include_once('../include/page_post.php');
    } else if ($tmp == 'sanpham') {
      include_once('../include/product.php');
    } else if ($tmp == 'timkiem') {
      include_once('../include/search_product.php');
    } else {
  ?>
      <!-- ============================== Home starts ============================== -->
      <section class="home" id="home" style="background-image: url('../view/images/hero/hero-2.jpg');">
        <div class="content">
          <h3>N<span>D</span> Shop</h3>
          <span>Cửa hàng mỹ phẩm</span>
          <p>Chất lượng thật, Giá trị thật</p>
          <a href="#wrapper">Xem cửa hàng</a>
        </div>
      </section>
      <!-- ============================== Home ends ============================== -->
  <?php

      include_once('../include/home.php');
    }
    include_once('../include/post.php');
    include_once('../include/review.php');
  }
  include_once('../include/footer.php');
  ?>



</body>

</html>