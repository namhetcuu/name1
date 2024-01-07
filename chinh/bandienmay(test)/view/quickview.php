<?php
if(isset($_POST['view'])&&($_POST['view'])){
    $id_sanpham = $_POST['id_sanpham'];
    $tensp = $_POST['tensp'];
    $image = $_POST['image'];
    $price = $_POST['price'];
}
?>
<div class="page-head_agile_info_w3l" style="background: url('./view/images/bg/cta-bg.jpg')">

</div>
<!-- //banner-2 -->
<!-- page -->
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="index.php?act=">Home</a>
                    <i>|</i>
                </li>
                <li>Product Details</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->

<!-- Single Page -->
<div class="banner-bootom-w3-agileits py-5">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <span>P</span>roduct
            <span>D</span>etail</h3>
        <!-- //tittle heading -->
        <div class="row">
            <div class="col-lg-5 col-md-8 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="./view/images/<?= $image ;?>">
                                <div class="thumb-image">
                                    <img src="./view/images/<?= $image ;?>" class="img-fluid" alt=""> </div>
                            </li>
                            <li data-thumb="./view/images/<?= $image ;?>">
                                <div class="thumb-image">
                                    <img src="./view/images/<?= $image ;?>" class="img-fluid" alt=""> </div>
                            </li>
                            <li data-thumb="./view/images/<?= $image ;?>">
                                <div class="thumb-image">
                                    <img src="./view/images/<?= $image ;?>" class="img-fluid" alt=""> </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 single-right-left simpleCart_shelfItem">
                <h3 class="mb-3"><?= $tensp;?></h3>
                <p class="mb-3">
                    <span class="item_price">$<?= $price;?></span>
                    <del class="mx-2 font-weight-light">$280.00</del>
                    <label>Free delivery</label>
                </p>
                <div class="single-infoagile">
                    <ul>
                        <li class="mb-3">
                            Cash on Delivery Eligible.
                        </li>
                        <li class="mb-3">
                            Shipping Speed to Delivery.
                        </li>
                        <li class="mb-3">
                            EMIs from $655/month.
                        </li>
                        <li class="mb-3">
                            Bank OfferExtra 5% off* with Axis Bank Buzz Credit CardT&C
                        </li>
                    </ul>
                </div>
                <div class="product-single-w3l">
                    <ul>
                        <li class="mb-1">
                        Giá thị trường: 535.000 ₫ - Tiết kiệm: 113.000 ₫
                        </li>
                        <li class="mb-1">
                        La Roche-Posay Anthelios UV Mune 400 Oil Control Gel-Cream: phiên bản mới cải tiến.
                        </li>
                        <div class="single-product-reviews">
                            <i class="fas fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <a class="review-link" href="#">(1 customer review)</a>
                        </div>
                    </ul>
                    <p class="my-3">
                        <i class="far fa-hand-point-right mr-2"></i>
                        <label>1 Year</label>Manufacturer Warranty</p>
                    <p class="my-sm-4 my-3">
                        <i class="fas fa-retweet mr-3"></i>Net banking & Credit/ Debit/ ATM card
                    </p>
                </div>
                <div class="single-product-quantity">
                    <form class="add-quantity" action="index.php?act=cart" method="post">
                        <div class="product-quantity">
                            <input type="hidden" name="sanpham_id" value="<?= $id_sanpham;?>" />
                            <input value="1" type="number" max="10" min="1" name="quantity">
                            <input value="<?= $tensp;?>" type="hidden" name="name">
                            <input value="<?= $price;?>" type="hidden" name="price">
                            <input value="<?= $image;?>" type="hidden" name="image">
                        </div>
                        <div class="add-to-link">
                            <input class="product-add-btn" value="add to cart" name="dathang" style="font-size: 20px;" type="submit"></input>
                        </div>
                    </form>
                </div>
                <a href="index.php?act=shop" class="btn btn-outline-success" style="line-height: 30px">Back to Shop</a>
            </div>
        </div>
    </div>
</div>
<!-- //Single Page -->

<!-- middle section -->
<div class="join-w3l1 py-sm-5 py-4">
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
</div>