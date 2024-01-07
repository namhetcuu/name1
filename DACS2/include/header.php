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
                    $sql_category = mysqli_query($conn, 'SELECT * FROM tbl_category ORDER BY category_id ASC');
                    while ($row_category = mysqli_fetch_array($sql_category)) {
                    ?>
                        <li><a href="?quanly=danhmuc&id=<?php echo $row_category['category_id'] ?>"><?php echo $row_category['category_name']; ?></a></li>
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