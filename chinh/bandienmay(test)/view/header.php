<?php
session_start();
?>
<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Offer Zone Top Deals & Discounts
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						<li class="text-center border-right text-white">
							<a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
								<i class="fas fa-map-marker mr-2"></i>Select Location</a>
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-truck mr-2"></i>Track Order</a>
						</li>
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> 001 234 5678
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Log In </a>
						</li>
						<li class="text-center text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Register </a>
						</li>
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>
<!-- modals -->
<!-- log in -->
<div class="modal fade" id="dangnhap" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-center">Đăng nhập</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="#" method="post">
					<div class="form-group">
						<label class="col-form-label">Email</label>
						<input type="text" class="form-control" placeholder=" " name="email_login" required="">
					</div>
					<div class="form-group">
						<label class="col-form-label">Mật khẩu</label>
						<input type="password" class="form-control" placeholder=" " name="password_login" required="">
					</div>
					<div class="right-w3l">
						<input type="submit" class="form-control" name="dangnhap_home" value="Đăng nhập">
					</div>
					
					<p class="text-center dont-do mt-3">Chưa có tài khoản?
						<a href="#" data-toggle="modal" data-target="#dangky">
							Đăng ký</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- register -->
<div class="modal fade" id="dangky" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Đăng ký</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="" method="post">
					<div class="form-group">
						<label class="col-form-label">Tên khách hàng</label>
						<input type="text" class="form-control" placeholder=" " name="name" required="">
					</div>
					<div class="form-group">
						<label class="col-form-label">Email</label>
						<input type="email" class="form-control" placeholder=" " name="email" required="">
					</div>
					<div class="form-group">
						<label class="col-form-label">Phone</label>
						<input type="text" class="form-control" placeholder=" " name="phone"  required="">
					</div>
					<div class="form-group">
						<label class="col-form-label">Address</label>
						<input type="text" class="form-control" placeholder=" " name="address"  required="">
					</div>
					<div class="form-group">
						<label class="col-form-label">Password</label>
						<input type="password" class="form-control" placeholder=" " name="password"  required="">
						<input type="hidden" class="form-control" placeholder="" name="giaohang"  value="0">
					</div>
					<div class="form-group">
						<label class="col-form-label">Ghi chú</label>
						<textarea class="form-control" name="note"></textarea>
					</div>
					
					<div class="right-w3l">
						<input type="submit" class="form-control" name="dangky" value="Đăng ký">
					</div>
				
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //modal -->
<!-- //top-header -->


<!-- header-bottom-->
<div class="header-bot">
	<div class="container">
		<div class="row header-bot_inner_wthreeinfo_header_mid">
			<!-- logo -->
			<div class="col-md-3 logo_agile">
				<h1 class="text-center">
					<a href="index.php" class="font-weight-bold font-italic">
						<img src="" alt=" " class="img-fluid">Cosmetics Store
					</a>
				</h1>
			</div>
			<div class="col-md-9 header mt-4 mb-md-0 mb-4">
				<div class="row">
					<!-- search -->
					<div class="col-10 agileits_search">
						<form class="form-inline" action="index.php?quanly=timkiem" method="POST">
							<input class="form-control mr-sm-2" name="search_product" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search" required>
							<button class="btn my-2 my-sm-0" name="search_button" type="submit">Tìm kiếm</button>
						</form>
					</div>
					<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
						<div class="wthreecartaits wthreecartaits2 cart cart box_1">
							<form action="index.php?act=cart" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="btn w3view-cart" type="submit" name="submit" value="">
									<i class="fas fa-cart-arrow-down"><a href="index.php?act=cart"></a></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="navbar-inner">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="agileits-navi_search">
				<form action="#" method="post">
					<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
						<option value="">Danh mục sản phẩm</option>
					</select>
				</form>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto text-center mr-xl-5">
					<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link" href="index.php">Home
						</a>
					</li>
					<li class="nav-item  mr-lg-2 mb-lg-0 mb-2">
						
						<a class="nav-link " href="index.php?act=shop" role="button" aria-haspopup="true" aria-expanded="false">
							Shop
						</a>
						<div class="dropdown-menu">
							
						</div>
					</li>
					<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							About Us
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="product.html">Sản phẩm mới</a>

							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="checkout.html">Kiểm tra hàng</a>
							<a class="dropdown-item" href="payment.html">Thanh toán</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.html">Contact Us</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>