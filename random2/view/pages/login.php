
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ND Shop</title>
  <link rel="stylesheet" href="./Css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
  <!-- header starts -->
     
     <section class="page">
          <div class="links-page">
               <a href="">Trang chủ</a> /
               <p>Đăng nhập</p>
          </div>
     </section>
   <!-- header ends -->
   <?php
     if(!isset($_SESSION['dangnhap_home'])){?>
     <section class="register" id="register">
          <h1 class="heading">Log in</h1>
          <div class="form">
               <form action="index.php?act=dn" class="form-container" method="POST">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" placeholder="abc@gmail.com" require="" style="font-size: 20px;">
                    <label for="pass">Mật khẩu:</label>
                    <input type="password" id="pass" name="pass" placeholder="" style="font-size: 20px;" require="">
                    
                    <div class="form-content">
                    <button class="btn" style="font-size: 15px;">Log in</button>
                    <p>Nếu bạn chưa có tài khoản, vui lòng đăng ký <a href="?act=reg">tại đây</a></p>
               </div>
          </div>
               </form>
     </section>
     <?php }else{?>
     <section class="register" id="register">
          <h1 class="heading">Ban da dang nhap roi</h1>
          <p><a href="?act=home">Back</a></p>
          
     </section>
     <?php }
     ?>
     
  

</body>
</html>