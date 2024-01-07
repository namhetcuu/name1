<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = '';
}
if (isset($_POST['xemthem'])) {
    $sql_product = mysqli_query($conn, "SELECT * FROM tbl_category,tbl_product WHERE tbl_category.category_id = tbl_product.category_id AND tbl_product.category_id='$id' LIMIT 20");
    $sql_category_title = mysqli_query($conn, "SELECT * FROM tbl_category,tbl_product WHERE tbl_category.category_id = tbl_product.category_id AND tbl_product.category_id='$id' ORDER BY tbl_product.product_id DESC");
    $row_title = mysqli_fetch_array($sql_category_title);
} else {
    $sql_product = mysqli_query($conn, "SELECT * FROM tbl_category,tbl_product WHERE tbl_category.category_id = tbl_product.category_id AND tbl_product.category_id='$id' LIMIT 8");
    $sql_category_title = mysqli_query($conn, "SELECT * FROM tbl_category,tbl_product WHERE tbl_category.category_id = tbl_product.category_id AND tbl_product.category_id='$id' ORDER BY tbl_product.product_id DESC");
    $row_title = mysqli_fetch_array($sql_category_title);
}
?>
<section class="page">
    <div class="links-page">
        <a href="index.php">Trang chủ</a> /
        <a href="?quanly=sanpham">Tất cả sản phẩm</a> /
        <p><?php echo $row_title['category_name'] ?></p>
    </div>
</section>
<!-- ------------------product starts------------------ -->
<section class="wrapper" id="wrapper">
    <div class="products">
        <div class="headline">
            <h3><?php echo $row_title['category_name'] ?></h3>
        </div>
        <div class="product-control">
            <h3>Phân loại</h3>
            <div class="control-title">
                <?php
                $sql_category = mysqli_query($conn, "SELECT * FROM tbl_category ORDER BY category_id  DESC");
                while ($row_category = mysqli_fetch_array($sql_category)) {
                ?>
                    <a href="?quanly=danhmuc&id=<?php echo $row_category['category_id'] ?>"><?php echo $row_category['category_name'] ?></a>
                <?php
                }
                ?>
            </div>
            <h3>Thương hiệu</h3>
            <div class="control-title">
                <a href="">Skin Aqua</a>
                <a href="">Vichy</a>
                <a href="">SENKA</a>
                <a href="">BioDerMa</a>
            </div>
            <div class="control-arrange">
                <select name="" id="">
                    <option value="">--- Sắp Xếp ---</option>
                    <option value="">Giá tăng dần</option>
                    <option value=""> Giá giảm dần</option>
                </select>
            </div>
        </div>
        <ul class="product-content">
            <?php
            $giakhuyenmai = 0;
            while ($row_product = mysqli_fetch_array($sql_product)) {
                $giakhuyenmai = $row_product['product_price'] * (100 - $row_product['product_promotion']) / 100;
            ?>
                <li>
                    <span class="discount"><?php echo $row_product['product_promotion'] . '%' ?></span>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="../view/images/<?php echo $row_product['product_image'] ?>" alt="">
                            </a>
                            <div class="product-center">
                                <a href="?quanly=xemchitiet&product_id=<?php echo $row_product['product_id'] ?>" class="bx bxs-show"></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="?quanly=xemchitiet&product_id=<?php echo $row_product['product_id'] ?>" class="product-name"><?php echo $row_product['product_name'] ?></a>
                        <div class="product-price">
                            <?php echo number_format($giakhuyenmai) . ' VNĐ' ?> <span> <?php echo number_format($row_product['product_price']) . ' VNĐ' ?></span>
                        </div>
                    </div>
                    <div class="product-cart">
                        <form action="?quanly=giohang" method="post">
                            <input type="hidden" name="cart_name" value="<?php echo $row_product['product_name'] ?>" />
                            <input type="hidden" name="product_id" value="<?php echo $row_product['product_id'] ?>" />
                            <input type="hidden" name="cart_quantity" value="1" />
                            <input type="hidden" name="cart_price" value="<?php echo $giakhuyenmai ?>" />
                            <input type="hidden" name="cart_image" value="<?php echo $row_product['product_image'] ?>" />
                            <input type="submit" value="Thêm giỏ hàng" name="themgiohang" class="input-cart">
                        </form>
                    </div>
                </li>
            <?php }
            ?>
        </ul>
    </div>
</section>
<div class="page">
    <form action="" method="post">
        <input type="submit" name="xemthem" value="Xem thêm">
    </form>

</div>