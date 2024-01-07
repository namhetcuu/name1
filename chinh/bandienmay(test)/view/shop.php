
<div class="page-head_agile_info_w3l" style="background: url('./view/images/bg/cta-bg.jpg')">

</div>
<div class="ads-grid py-sm-5 py-4">
	<div class="container py-xl-4 py-lg-2">
		<!-- tittle heading -->
		<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
			<span>C</span>osmetics
			<span>&</span>
			<span>S</span>tore</h3>
		<div class="row">
			<div class="agileinfo-ads-display col-lg-9">
				<div class="wrapper">
					<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
						<div class="row">
						<?php
						$soluong = 3;
						$start = ($p-1)*$soluong;
						$sql = "SELECT * FROM sanpham LIMIT $start,$soluong";
						$result = mysqli_query($conn,$sql);

						if(mysqli_num_rows($result)>0){
							while($row = mysqli_fetch_assoc($result)){?>
								<div class="col-md-4 product-men">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="./view/images/<?= $row['img'];?>" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<form action="index.php?act=quickview" method="post">
														<input type="hidden" name="id_sanpham" value="<?= $row['id'];?>">
														<input type="hidden" name="tensp" value="<?= $row['name'];?>">
														<input type="hidden" name="price" value="<?= $row['price'];?>">
														<input type="hidden" name="image" value="<?= $row['img'];?>">
														<input class="link-product-add-cart" 
														style="text-align: center; cursor: pointer;" name="view" value="Quick View" type="submit"></input>
													</form>
													
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single.html"><?= $row['name'];?></a>
												<button style="border: none; "><a href=""><i class="fa fa-heart"></i></a></button>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?= $row['price'];?></span>
												<del>$280.00</del>
											</div>
											
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="index.php?act=cart" method="post" class="d-flex">
													<input type="hidden" name="sanpham_id" value="<?= $row['name'];?>" />
													<input type="hidden" name="name" value="<?= $row['name'];?>" />
													<input type="hidden" name="price" value="<?= $row['price'];?>" />
													<input type="hidden" name="image" value="<?= $row['img'];?>" />
													<input type="number" name="quantity" value="1" max="10" min="1">
													<input type="submit" name="dathang" value="Add to cart" class="button btn" />
												</form>
											</div>
										</div>
									</div>
								</div>
							<?php }
						}
						?>
						</div>
					</div>
					<div class="row mb-30 mb-sm-40 mb-xs-30">
						<div class="col">
							<ul class="page-pagination">
								<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
								<li><a href="index.php?act=shop&p=1">01</a></li>
								<li><a href="index.php?act=shop&p=2">02</a></li>
								<li><a href="index.php?act=shop&p=3">03</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
                	</div>
				</div>
			</div>
			<!-- //product left -->
			<!-- product right -->
			<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
				<div class="side-bar p-sm-4 p-3">
					<div class="search-hotel border-bottom py-2">
						<h3 class="agileits-sear-head mb-3">Brand</h3>
						<form action="#" method="post">
							<input type="search" placeholder="Search Brand..." name="search" required="">
							<input type="submit" value=" ">
						</form>
						<div class="left-side py-2">
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Red</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Blue</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Green</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Black</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">White</span>
								</li>
							</ul>
						</div>
					</div>
					<!-- //arrivals -->
				</div>
				<!-- //product right -->
			</div>
		</div>
	</div>
</div>
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
