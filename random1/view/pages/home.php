<!-- ============================== Product starts ============================== -->
<section class="wrapper" id="wrapper">
    <div class="products">
        <div class="headline">
            <h3>Sản phẩm bán chạy</h3>
        </div>
        <ul class="product-content">
            <?php
            $db = Db::getInstance();

            $sql_category = $db->query('SELECT * FROM tbl_product WHERE product_outstan=1 LIMIT 8');
            foreach($sql_category->fetchAll() as $row_category){
            $giakhuyenmai = 0;
            while ($row_product_outstran = mysqli_fetch_array($sql_product_outstan)) {
                $giakhuyenmai = $row_product_outstran['product_price'] * (100 - $row_product_outstran['product_promotion']) / 100;
            ?>
                <li>
                    <span class="discount"><?php echo $row_product_outstran['product_promotion'] . ' %' ?></span>
                    <div class="product-item">
                        <div class="product-top">
                            <a href="" class="product-thumb">
                                <img src="../view/images/<?php echo $row_product_outstran['product_image'] ?>" alt="" style="width: 250px; height: 250px">
                            </a>
                            <div class="product-center">
                                <a href="?quanly=xemchitiet&product_id=<?php echo $row_product_outstran['product_id'] ?>" class="bx bxs-show"></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="?quanly=xemchitiet&product_id=<?php echo $row_product_outstran['product_id'] ?>" class="product-name"><?php echo $row_product_outstran['product_name'] ?></a>
                        <div class="product-price">
                            <?php echo number_format($giakhuyenmai) . ' VNĐ' ?> <span> <?php echo number_format($row_product_outstran['product_price']) . ' VNĐ' ?></span>
                        </div>
                    </div>
                    <div class="product-cart">
                        <form action="?quanly=giohang" method="post">
                            <input type="hidden" name="cart_name" value="<?php echo $row_product_outstran['product_name'] ?>" />
                            <input type="hidden" name="product_id" value="<?php echo $row_product_outstran['product_id'] ?>" />
                            <input type="hidden" name="cart_quantity" value="1" />
                            <input type="hidden" name="cart_price" value="<?php echo $giakhuyenmai ?>" />
                            <input type="hidden" name="cart_image" value="<?php echo $row_product_outstran['product_image'] ?>" />
                            <input type="submit" value="Thêm giỏ hàng" name="themgiohang" class="input-cart">
                        </form>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
    <?php
    $sql_category_title = mysqli_query($conn, "SELECT * FROM tbl_category ORDER BY category_id ASC");
    while ($row_category_title = mysqli_fetch_array($sql_category_title)) {
        $id_category = $row_category_title['category_id'];
    ?>
        <div class="products">
            <div class="headline">
                <h3><?php echo $row_category_title['category_name'] ?></h3>
            </div>
            <ul class="product-content">
                <?php
                $sql_product = mysqli_query($conn, "SELECT * FROM tbl_product ORDER BY product_id ASC LIMIT 16");
                $giakhuyenmai = 0;
                while ($row_product = mysqli_fetch_array($sql_product)) {
                    $giakhuyenmai = $row_product['product_price'] * (100 - $row_product['product_promotion']) / 100;
                    if ($row_product['category_id'] == $id_category) {

                ?>
                        <li>
                            <span class="discount"><?php echo $row_product['product_promotion'] . ' %' ?></span>
                            <div class="product-item">
                                <div class="product-top">
                                    <a href="" class="product-thumb">
                                        <img src="../view/images/<?php echo $row_product['product_image'] ?>" alt="" style="width: 250px; height: 250px">
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
                <?php
                    }
                }

                ?>
            </ul>
        </div>
    <?php } ?>
</section>
<!-- ============================== Product ends ============================== -->