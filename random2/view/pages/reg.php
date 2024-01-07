<?php
if(!isset($_SESSION['dangnhap_home'])){?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND Shop</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  </head>
  <body>
    <!-- header starts -->
    <section class="page">
      <div class="links-page">
        <a href="">Trang chủ</a> /
        <p>Đăng ký</p>
      </div>
    </section>
    <!-- header ends -->
    <section class="register" id="register" style="overflow: hidden; height: 900px">
      <h1 class="heading">Register</h1>
      <div class="form">
        <form action="index.php?act=dk" class="form-container" method="POST">
          <label for="name">Full Name:</label>
          <input type="text" name="name" id="name" placeholder="Abc" style="font-size: 20px;">
          <label for="email">Email:</label>
          <input type="email"name="email" id="email" placeholder="abc@gmail.com" style="font-size: 20px;">
          <label for="pass">Password:</label>
          <input type="password"name="pass" id="pass" placeholder="" style="font-size: 20px;">
          <label for="name">Phone:</label>
          <input type="text" name="phone" id="phone" placeholder="098***" style="font-size: 20px;">
          <label for="note">Note:</label>
          <input type="text"name="note" id="note" placeholder="bla bla" style="font-size: 20px;">
          <label for="address">Address:</label>
          <input type="text"name="address" id="address" placeholder="Phu Xuan District..." style="font-size: 20px;">
        
        <div class="form-content">
          <button class="btn" style="font-size: 15px;">Register</button>
          <p>Nếu bạn đã có tài khoản, vui lòng đăng nhập <a href="?act=login">tại đây</a></p>
        </div>
      </div>
      </form>
    </section>
  </body>
  </html>
<?php 
}else{?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND Shop</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  </head>
  <body>
    <!-- header starts -->
    <section class="page">
      <div class="links-page">
        <a href="">Trang chủ</a> /
        <p>Đăng ký</p>
      </div>
    </section>
    <!-- header ends -->
    <section class="register" id="register">
      <h1 class="heading">Ban da co tai khoan roi 
      <a href="?act=home">Back</a>
      </h1>
    </section>
  </body>
  </html>
<?php }
?>
