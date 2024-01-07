<?php
if(isset($_POST['view'])&&($_POST['view'])){
     $id_sanpham = $_POST['id_sanpham'];
    $name = $_POST['tensp'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $mota = $_POST['mota'];
}
?>
<div class="page-head_agile_info_w3l" style="background: url('./view/images/bg/cta-bg.jpg')">

</div>
<!-- //banner-2 -->


<!-- Single Page -->
<div id="main-wrapper">
        <div class="page-banner-section section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-banner text-center">
                            <h1 style="margin: 0 !important;">Sản phẩm</h1>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Sản phẩm</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product Section Start -->
        <div class="single-product-section section pt-30 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
            <div class="container" style="display: block;">
                <div class="row">
                    <div class="col-md-5">
                        <!-- Product Details Left -->
                        <div class="product-details-left">
                            <div>
                                <div class="lg-image">
                                    <img src="./view/images/<?= $image;?>" alt="">
                                    <!-- <a href="./view/images/product/large-product/l-product-1.jpg" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a> -->
                                </div>
                            </div>
                        </div>
                        <!--Product Details Left -->
                    </div>
                    <div class="col-md-7">
                        <!--Product Details Content Start-->
                        <div class="product-details-content">
                            
                            <h2><?= $name ;?></h2>
                            <div class="single-product-reviews">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <a class="review-link" href="#">(1 customer review)</a>
                            </div>
                            <div class="single-product-price">
                                <span class="price new-price"><?= $price ;?></span>
                                <span class="regular-price">$77.00</span>
                            </div>
                            <div class="product-description">
                            <p><?= $mota ;?></p>
                            </div>
                            <div class="single-product-quantity">
                                <form action="?act=cart" method="post">
                                   <input type="hidden" name="id_sanpham" value="<?= $id_sanpham;?>">
                                   <input type="hidden" name="tensp" value="<?= $name ;?>">
                                   <input type="hidden" name="price" value="<?= $price ;?>">
                                   <input type="hidden" name="image" value="<?= $image ;?>">
                                    <div class="product-quantity">
                                        <input value="1" type="number" name="soluong">
                                    </div>
                                    <div class="add-to-link">
                                        <input class="product-add-btn" name="dathang" type="submit" value="add to cart"></input>
                                    </div>
                                </form>
                            </div>
                            <div class="wishlist-compare-btn">
                                <a href="#" class="wishlist-btn">Add to Wishlist</a>
                                <a href="#" class="add-compare">Compare</a>
                            </div>
                            <div class="product-meta">
                                <span class="posted-in">
                                    Categories:
                                    <a href="#">Accessories</a>,
                                    <a href="#">Electronics</a>
                                </span>
                            </div>
                            <div class="single-product-sharing">
                                <h3>Share this product</h3>
                                <ul>
                                    <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                    <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                    <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Product Details Content End-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product Section End -->

        <!--Product Description Review Section Start-->
        <div class="product-description-review-section section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-review-tab">
                            <!--Review And Description Tab Menu Start-->
                            <ul class="nav dec-and-review-menu">
                                <li>
                                    <a class="active" data-toggle="tab" href="#description">Description</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews">Reviews (1)</a>
                                </li>
                            </ul>
                            <!--Review And Description Tab Menu End-->
                            <!--Review And Description Tab Content Start-->
                            <div class="tab-content product-review-content-tab" id="myTabContent-4">
                                <div class="tab-pane fade active show" id="description">
                                    <div class="single-product-description">
                                    Với phương châm "Chất lượng thật - Giá trị thật”, 
                                    ... luôn nỗ lực không ngừng nhằm nâng cao chất lượng sản phẩm & 
                                    dịch vụ để khách hàng có được những trải nghiệm mua sắm tốt nhất. 
                                    Toàn bộ sản phẩm có ở ... đều được cam kết 100% chính hãng, 
                                    đảm bảo nguồn gốc xuất xứ, có đầy đủ hóa đơn mua hàng VAT 
                                    và tem phụ Tiếng Việt, với mức giá luôn tốt hàng đầu thị trường trong 
                                    mọi thời điểm
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p> -->
                                        <!-- <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p> -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="reviews">
                                    <div class="review-page-comment" id="dsbinhluan">
                                        <h2>1 comment rated this product</h2>
                                        <ul>
                                            <li>
                                                <div class="product-comment">
                                                    <img src="./view/images/icons/author.jpg" alt="">
                                                    <div class="product-comment-content">
                                                        
                                                        <p class="meta">
                                                            
                                                            <strong style="color: #CEA679">Admin</strong> - <span>November 22, 2018</span>
                                                            
                                                            
                                                        <div class="description">
                                                            <p>Good Product</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <?php
                                        $sql_select_bl = mysqli_query($conn,"SELECT * FROM binhluan");
                                        while($row = mysqli_fetch_array($sql_select_bl)){?>
                                            <ul>
                                                <li>
                                                    <div class="product-comment">
                                                        <img src="./view/images/icons/author.jpg" alt="">
                                                        <div class="product-comment-content">
                                                            
                                                            <p class="meta">
                                                                
                                                                <strong style="color: #CEA679"><?= $row['khachhang_name'] ;?>(User)</strong> - <span>November 22, 2018</span>
                                                                
                                                                
                                                            <div class="description">
                                                                <p><?= $row['noidung'] ;?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        <?php }
                                        ?>

                                        <div class="review-form-wrapper">
                                            <?php
                                            if(isset($_SESSION['dangnhap_home'])){?>
                                            <div class="review-form">
                                                <span class="comment-reply-title">Add a review </span>
                                                <!-- <form action=""> -->
                                                    <!-- <p class="comment-notes">
                                                        <span id="email-notes">Your email address will not be published.</span>
                                                        Required fields are marked
                                                        <span class="required">*</span>
                                                    </p> -->
                                                    <!-- <div class="comment-form-rating">
                                                        <label>Your rating</label>
                                                        <div class="rating">
                                                            <i class="bx bx-star"></i>
                                                            <i class="bx bx-star"></i>
                                                            <i class="bx bx-star"></i>
                                                            <i class="bx bx-star"></i>
                                                            <i class="bx bx-star"></i>
                                                        </div>
                                                    </div> -->
                                                    <div id="show_alert"></div>
                                                    <div class="input-element">
                                                        <div class="comment-form-comment">
                                                            <form action="" method="post" id="add_form">
                                                            <input type="hidden" name="idsp" id="idsp" value="<?= $id_sanpham ?>">
                                                            <label>Comment</label>
                                                            <textarea name="noidung" cols="40" rows="8" id="noidung"></textarea>
                                                            <input type="hidden" name="name" value="<?= $_SESSION['dangnhap_home'] ;?>">
                                                            <div class="comment-submit">
                                                                <input type="submit" class="form-button" value="Submit" id="btnGui">
                                                            </div>
                                                        </div>
                                                        <!-- <div class="review-comment-form-author">
                                                            <label>Name </label>
                                                            <input required="required" type="text">
                                                        </div> -->
                                                        <!-- <div class="review-comment-form-email">
                                                            <label>Email </label>
                                                            <input required="required" type="text">
                                                        </div> -->
                                                        
                                                    </div>
                                                    </form>
                                                    <script>
                                                        // $("#btnGui").click(function(){
                                                        //     $.ajax({
                                                        //         method: "post",
                                                        //         url: 'thembinhluan.php',
                                                        //         data: {id: $('#idsp').val(), noidung: $('#noidung').val()}
                                                        //     })
                                                        //     .done(function(data){
                                                                
                                                        //         console.log($('#noidung').val());
                                                        //         $('#noidung').val('');
                                                        //     })
                                                        // })
                                                        $("#add_form").submit(function(e){
                                                            e.preventDefault();
                                                            $("#btnGui").val('Adding...');
                                                            $.ajax({
                                                                url: 'thembinhluan.php',
                                                                method: 'post',
                                                                data: $(this).serialize(),
                                                                success:function(response){
                                                                    console.log(response);
                                                                    $("#add_form")[0].reset();
                                                                    $("#btnGui").val('Add');
                                                                    $("#show_alert").html(`<div class="alert alert-success" role="alert">${response}</div>`)
                                                            }
                                                        });
                                                        });
                                                    </script>
                                                <!-- </form> -->
                                            </div>
                                            <?php }else{
                                                echo "<p style='color: red;'>Please <a href='index.php?act=login'>log in</a> to your account to add comment</p>";
                                            }
                                            ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Review And Description Tab Content End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="join-w3l1 py-sm-5 py-4" style="background-image: none;">
    <div class="container py-xl-4 py-lg-2">
      <div class="row">
        <div class="col-lg-6">
          <div class="join-agile text-left p-4">
            <div class="row">
              <div class="col-sm-7 offer-name">
                <h6>SKIN 79</h6>
                <h4 class="mt-2 mb-3">PINK ENERGY LOTION</h4>
                <p>Sale up to 25% off all in store</p>
              </div>
              <div class="col-sm-5 offerimg-w3l">
                <img src="./view/images/banner/h1-banner-1.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-lg-0 mt-5">
          <div class="join-agile text-left p-4">
            <div class="row ">
              <div class="col-sm-7 offer-name">
                <h6>BEAUTY AND COSMESTICS</h6>
                <h4 class="mt-2 mb-3">SHOP NOW</h4>
                <p>Free shipping order over $100</p>
              </div>
              <div class="col-sm-5 offerimg-w3l">
                <img src="./view/images/banner/h1-banner-3.png" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div><br>
