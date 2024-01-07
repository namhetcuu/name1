<?php
if (isset($_GET['product_id'])) {
    $id = $_GET['product_id'];
} else {
    $id = '';
}
?>
<section class="page">
    <div class="links-page">
        <a href="">Trang chủ</a> /
        <a href="">Nước hoa nam</a> /
        <?php
        $sql_product = mysqli_query($conn, "SELECT * FROM tbl_product WHERE product_id='$id' ORDER BY product_id DESC");
        $row_product = mysqli_fetch_array($sql_product);
        $giakhuyenmai = $row_product['product_price'] * (100 - $row_product['product_promotion']) / 100;
        ?>
        <p><?php echo $row_product['product_name'] ?></p>
    </div>
</section>
<!-- ============================== Products_detail starts ============================== -->
<section class="products" id="products">
    <h3 class="products-name"><?php echo $row_product['product_name'] ?></h3>
    <div class="products-main">
        <form action="?quanly=giohang" method="post">
            <div class="products-image">
                <img src="../view/images/<?php echo $row_product['product_image'] ?>" alt="">
            </div>
            <div class="products-info">
                <ul>
                    <li>Thương hiệu: Skin Aqua</li>
                    <li>Giá tiền: <span class="price_1"><?php echo number_format($giakhuyenmai) . ' VNĐ' ?></span><span class="price_2"><?php echo number_format($row_product['product_price']) . ' VNĐ' ?></span></li>
                    <li>
                        <p>Miễn phí vận chuyển cho đơn hơn giá trị trên 750.000 VNĐ</p>
                    </li>
                    <li>Dung tích: <span>100ML</span></li>
                    <li>Số lượng trong kho: <span><?php echo $row_product['product_quantity'] ?></span></li>
                    <li>Số lượng:<input type="number" name="cart_quantity" min="1" value="1"></li>
                    <li>
                        <input type="hidden" name="cart_name" value="<?php echo $row_product['product_name'] ?>" />
                        <input type="hidden" name="product_id" value="<?php echo $row_product['product_id'] ?>" />
                        <input type="hidden" name="cart_price" value="<?php echo $giakhuyenmai ?>" />
                        <input type="hidden" name="cart_image" value="<?php echo $row_product['product_image'] ?>" />
                        <input type="submit" value="Thêm giỏ hàng" name="themgiohang" class="input-cart">
                    </li>

                </ul>
            </div>
        </form>
    </div>
    <div class="products-describe">
        <h3>Mô tả sản phẩm</h3>
        <div class="content">
            <p>
                <?php echo $row_product['product_describe'] ?>
            </p>
            <img src="../view/images/<?php echo $row_product['product_image'] ?>" alt="">
        </div>
    </div>
</section>
<!-- ============================== Product starts ============================== -->
<section class="wrapper" id="wrapper">
    <div class="products">
        <div class="headline">
            <h3>Sản phẩm liên quan</h3>
        </div>
        <ul class="product-content">
            <?php
            $giakhuyenmai = 0;
            $sql_product = mysqli_query($conn, "SELECT * FROM tbl_product LIMIT 6");
            while ($row_product = mysqli_fetch_array($sql_product)) {
                $giakhuyenmai = $row_product['product_price'] * (100 - $row_product['product_promotion']) / 100;
            ?>
                <li>
                    <span class="discount"><?php echo $row_product['product_promotion'] . '%' ?></span>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="../view/images/<?php echo $row_product['product_image'] ?>" alt="" style="width: 250px;height: 250px">
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
<!-- ============================== Products ends ============================== -->