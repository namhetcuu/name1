
<section class="home" id="home" style="background: url('./view/images/hero/hero-2.jpg')
 no-repeat center; min-height: 94vh; position: relative;top:-15px">
    <div class="content">
      <h3>N<span>D</span> Shop</h3>
      <span>Comstestic </span>
      <p>Vì một mùi hương thoáng qua, người ta có thể nhớ ai đó cả cuộc đời</p>
      <a href="?act=product" class="btn">Xem cửa hàng</a>
    </div>
  </section>
<section class="products" id="products">
    <h1 class="heading">Tóp bán chạy nhất tuần</h1>
    <div class="box-container">
      <?php
      $sql_select = mysqli_query($conn, "SELECT * FROM sanpham LIMIT 4");
      if(mysqli_num_rows($sql_select)){
        while($row = mysqli_fetch_array($sql_select)){?>
      <div class="box">
        <span class="discount">-10%</span>
        <div class="image">
          <img src="./view/images/<?php echo $row['sanpham_image'] ?>" alt="">
          <div class="icons" style="display: block;">
            <!-- <a href="" class="cart-btn">Thêm vào giỏ</a> -->
            <form action="?act=cart" method="post">
              <input type="hidden" name="id_sanpham" value="<?= $row['sanpham_id'];?>">
              <input type="hidden" name="tensp" value="<?= $row['sanpham_name'];?>">
              <input type="hidden" name="price" value="<?= $row['sanpham_gia'];?>">
              <input type="hidden" name="image" value="<?= $row['sanpham_image'];?>">
              <input type="hidden" name="mota" value="<?= $row['sanpham_mota'];?>">
              <input class="link-product-add-cart" 
              style="text-align: center; cursor: pointer; width: 100%" name="view" value="Add to cart" type="submit"></input>
            </form>
          </div>
        </div>
        <div class="content">
          <h3><?= $row['sanpham_name'] ?></h3>
          <div class="price"><?= $row['sanpham_giakhuyenmai'] ?> <span><?= $row['sanpham_gia'] ?></span></div>
        </div>
      </div>
        <?php }
      }
      ?>
      
    </div>
    <h1 class="heading">Trang điểm mặt</h1> 
    <div class="box-container">
    <?php
      $sql_select = mysqli_query($conn, "SELECT * FROM sanpham WHERE danhmuc_id=1");
      if(mysqli_num_rows($sql_select)){
        while($row = mysqli_fetch_array($sql_select)){?>
      <div class="box">
        <span class="discount">-10%</span>
        <div class="image">
          <img src="./view/images/<?= $row['sanpham_image'] ?>" alt="">
          <div class="icons">
            <!-- <a href="" class="cart-btn">Thêm vào giỏ</a> -->
            <form action="?act=cart" method="post">
              <input type="hidden" name="id_sanpham" value="<?= $row['sanpham_id'];?>">
              <input type="hidden" name="tensp" value="<?= $row['sanpham_name'];?>">
              <input type="hidden" name="price" value="<?= $row['sanpham_gia'];?>">
              <input type="hidden" name="image" value="<?= $row['sanpham_image'];?>">
              <input type="hidden" name="mota" value="<?= $row['sanpham_mota'];?>">
              <input class="link-product-add-cart" 
              style="text-align: center; cursor: pointer; width: 100%" name="view" value="Add to cart" type="submit"></input>
            </form>
          </div>
        </div>
        <div class="content">
          <h3><?= $row['sanpham_name'] ?></h3>
          <div class="price"><?= $row['sanpham_gia'] ?> <span><?= $row['sanpham_giakhuyenmai'] ?></span></div>
        </div>
      </div>
      <?php }}?>
    </div>
    <h1 class="heading">Trang điểm môi</h1>
    <div class="box-container">
    <?php
      $sql_select = mysqli_query($conn, "SELECT * FROM sanpham WHERE danhmuc_id=3");
      if(mysqli_num_rows($sql_select)){
        while($row = mysqli_fetch_array($sql_select)){?>
      <div class="box">
        <span class="discount">-10%</span>
        <div class="image">
          <img src="./view/images/<?= $row['sanpham_image'] ?>" alt="">
          <div class="icons">
            <!-- <a href="" class="cart-btn">Thêm vào giỏ</a> -->
            <form action="?act=cart" method="post">
              <input type="hidden" name="id_sanpham" value="<?= $row['sanpham_id'];?>">
              <input type="hidden" name="tensp" value="<?= $row['sanpham_name'];?>">
              <input type="hidden" name="price" value="<?= $row['sanpham_gia'];?>">
              <input type="hidden" name="image" value="<?= $row['sanpham_image'];?>">
              <input type="hidden" name="mota" value="<?= $row['sanpham_mota'];?>">
              <input class="link-product-add-cart" 
              style="text-align: center; cursor: pointer; width: 100%" name="view" value="Add to cart" type="submit"></input>
            </form>
          </div>
        </div>
        <div class="content">
          <h3><?= $row['sanpham_name'] ?></h3>
          <div class="price"><?= $row['sanpham_gia'] ?> <span><?= $row['sanpham_giakhuyenmai'] ?></span></div>
        </div>
      </div>
      <?php }}?>
    </div>
    <h1 class="heading">Trang điểm mắt</h1>
    <div class="box-container">
    <?php
      $sql_select = mysqli_query($conn, "SELECT * FROM sanpham WHERE danhmuc_id=6");
      if(mysqli_num_rows($sql_select)){
        while($row = mysqli_fetch_array($sql_select)){?>
      <div class="box">
        <span class="discount">-10%</span>
        <div class="image">
          <img src="./view/images/<?= $row['sanpham_image'] ?>" alt="">
          <div class="icons">
            <!-- <a href="" class="cart-btn">Thêm vào giỏ</a> -->
            <form action="?act=cart" method="post">
              <input type="hidden" name="id_sanpham" value="<?= $row['sanpham_id'];?>">
              <input type="hidden" name="tensp" value="<?= $row['sanpham_name'];?>">
              <input type="hidden" name="price" value="<?= $row['sanpham_gia'];?>">
              <input type="hidden" name="image" value="<?= $row['sanpham_image'];?>">
              <input type="hidden" name="mota" value="<?= $row['sanpham_mota'];?>">
              <input class="link-product-add-cart" 
              style="text-align: center; cursor: pointer; width: 100%" name="view" value="Add to cart" type="submit"></input>
            </form>
          </div>
        </div>
        <div class="content">
          <h3><?= $row['sanpham_name'] ?></h3>
          <div class="price"><?= $row['sanpham_gia'] ?> <span><?= $row['sanpham_giakhuyenmai'] ?></span></div>
        </div>
      </div>
      <?php }}?>
    </div>
</section>
  <!-- ------------------product ends------------------ -->
  <!-- post starts -->
  <section class="post" id="post">
    <h1 class="heading">Tin tức - Bài viết</h1>
    <div class="box-container">
      <div class="box">
        <div class="image">
          <img src="image/anh1.jpg" alt="">
        </div>
        <div class="content">
          <h3>Gucci Flora Gorgeous Magnolia - nàng hoa xinh đẹp của Gucci.</h3>
          <div class="content-info">
            <span>26/10/2023</span> |
            <span>Viết bởi: Blanc Perfume</span>
          </div>
          <P>Link mua: Gucci Flora Gorgeous Magnolia EDP Gucci thực sự là một nhà hương biết cách yêu chiều khứu giác của phái đẹp khi liên tục cho ra những ấn phẩm từ nhóm...</P>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="image/anh1.jpg" alt="">
        </div>
        <div class="content">
          <h3>Gucci Flora Gorgeous Magnolia - nàng hoa xinh đẹp của Gucci.</h3>
          <div class="content-info">
            <span>26/10/2023</span> |
            <span>Viết bởi: Blanc Perfume</span>
          </div>
          <P>Link mua: Gucci Flora Gorgeous Magnolia EDP Gucci thực sự là một nhà hương biết cách yêu chiều khứu giác của phái đẹp khi liên tục cho ra những ấn phẩm từ nhóm...</P>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="image/anh1.jpg" alt="">
        </div>
        <div class="content">
          <h3>Gucci Flora Gorgeous Magnolia - nàng hoa xinh đẹp của Gucci.</h3>
          <div class="content-info">
            <span>26/10/2023</span> |
            <span>Viết bởi: Blanc Perfume</span>
          </div>
          <P>Link mua: Gucci Flora Gorgeous Magnolia EDP Gucci thực sự là một nhà hương biết cách yêu chiều khứu giác của phái đẹp khi liên tục cho ra những ấn phẩm từ nhóm...</P>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="image/anh1.jpg" alt="">
        </div>
        <div class="content">
          <h3>Gucci Flora Gorgeous Magnolia - nàng hoa xinh đẹp của Gucci.</h3>
          <div class="content-info">
            <span>26/10/2023</span> |
            <span>Viết bởi: Blanc Perfume</span>
          </div>
          <P>Link mua: Gucci Flora Gorgeous Magnolia EDP Gucci thực sự là một nhà hương biết cách yêu chiều khứu giác của phái đẹp khi liên tục cho ra những ấn phẩm từ nhóm...</P>
        </div>
      </div>
    </div>
  </section>
  <!-- post ends -->
  <!-- review starts -->
  <section class="review" id="review">
    <h1 class="heading">Đáng giá của khách hàng</h1>
    <div class="box-container">
      <div class="box">
        <div class="user">
          <img src="" alt="jjjj">
          <div class="user-info">
            <h3>Hồ Văn Dân</h3>
            <div class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
          </div>
        </div>
        <input type="text" placeholder="Nội dung đánh giá">
      </div>
    <div class="box-container">
      <div class="box">
        <div class="user">
          <img src="image/anhhvd.jpg" alt="jjjj">
          <div class="user-info">
            <h3>Hồ Văn Dân</h3>
            <div class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
          </div>
        </div>
        <p>Sản phẩm chất lượng, shop hỗ trợ nhiệt tình </p>
      </div>
      <div class="box">
        <div class="user">
          <img src="image/anhhvd.jpg" alt="jjjj">
          <div class="user-info">
            <h3>Hồ Văn Dân</h3>
            <div class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
          </div>
        </div>
        <p>Sản phẩm chất lượng, shop hỗ trợ nhiệt tình </p>
      </div>
      <div class="box">
        <div class="user">
          <img src="image/anhhvd.jpg" alt="jjjj">
          <div class="user-info">
            <h3>Hồ Văn Dân</h3>
            <div class="stars">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
          </div>
        </div>
        <p>Sản phẩm chất lượng, shop hỗ trợ nhiệt tình</p>
      </div>
    </div>
  </section>