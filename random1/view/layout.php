
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ND SHOP</title>
  <link rel="stylesheet" href="./view/theme/Css/style.css">
  <link rel="stylesheet" href="Js/script.js">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  
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






<!-- ============================== Header starts ============================== -->
<header>
    <label for="toggler" class="bx bx-menu"></label>
    <input type="checkbox" id="toggler">
    <a href="index.php" class="logo">N<span>D</span> Shop</a>
    <nav class="navbar">
        <ul>
            <li> <a href="index.php">Trang chủ</a></li>
            <li>
                <a href="?quanly=sanpham">Sản phẩm</a>
                <ul class="dropdown_menu">
                    <?php
                    $db = Db::getInstance();

                    $sql_category = $db->query('SELECT * FROM danhmuc ORDER BY danhmuc_id ASC');
                    foreach($sql_category->fetchAll() as $row_category){
                    ?>
                        <li><a href="?quanly=danhmuc&id=<?php echo $row_category['danhmuc_id'] ?>"><?php echo $row_category['danhmuc_name']; ?></a></li>
                    <?php } ?>
                </ul>
            </li>
            <li> <a href="?quanly=gioithieu">Giới thiệu</a></li>
            <li> <a href="#review">Đánh giá</a></li>
            <li> <a href="?quanly=lienhe">Liên hệ</a></li>
            <li>
                <div class="search-container">
                    <form action="?quanly=timkiem" method="POST">
                        <input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
                        <button type="submit" name="timkiem" class='bx bx-search-alt'></button>
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <div class="navbar-icons">
        <a href="?quanly=giohang" class="bx bx-cart"></a>
        <?php
        if (isset($_SESSION['dangnhap'])) {
        ?>
            <div>
                <form action="?quanly=client" method="post">
                    <input type="hidden" name="client_id" value="<?php echo $_SESSION['client_id'] ?>">
                    <input type="submit" value="<?php echo $_SESSION['dangnhap'] ?>">
                </form>
                <a href="?quanly=dangxuat">Đăng xuẩt</a>
            </div>
        <?php } else { ?>
            <a href="?quanly=dangnhap" class="bx bx-user-circle"></a>
        <?php } ?>
    </div>
</header>
<!-- ============================== Header ends ============================== -->

<?php
require_once 'routes.php';
?>

<!-- ============================== Footer starts ============================== -->
<footer class="footer">
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
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class="bx bxl-twitter"></i></a>
                <a href="#"><i class="bx bxl-instagram"></i></a>
                <a href="#"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- ============================== Footer ends ============================== -->
</body>

</html>