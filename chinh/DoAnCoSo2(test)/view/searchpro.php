
<section class="products" id="products">
    <div class="product-content">
      <h1 class="heading">Tất cả sản phẩm</h1>
      <div class="filter">
        <div class="filter-category">
          <ul style="flex-wrap: wrap;">
            <?php
              $result = mysqli_query($conn,"SELECT * FROM danhmuc");
                while($row = mysqli_fetch_array($result)){?>
               <li style="border: 0.1rem solid #bebebe; padding: 0.5rem">
               <a style="font-size: 20px; color: #ec5e5e" href="?act=danhmuc&id=<?php echo $row['danhmuc_id'] ?>">
               <?php echo $row['danhmuc_name'] ?>
              </a></li>
              <?php }
              ?>
          </ul>
        </div>
        <!-- <div class="filter-price"> -->
          <!-- <span>Sắp xếp: </span>
          <input type="text" class="btn btn-outline-primary"> -->
          <div class="input-group mb-3" style="display: inline-block;">
          <form action="?act=searchpro" method="post">
          
          <div class="input-group-append">
          <input type="text" class="form-control" style="font-size: 1.5rem" 
          placeholder="Name Products" name="name">
            <input class="btn btn-outline-secondary" value="Search" style="margin-top:0" type="submit">
            </form>
        </div>
        </div>
      </div>
      <div class="box-container" style="justify-content: unset; gap: 0rem">
        
        <?php
          $name = $_POST['name'];
          $sql = "SELECT * FROM sanpham WHERE sanpham_name LIKE '{$name}%'";
          $result = mysqli_query($conn,$sql);

          if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_array($result)){?>
                  <div class="col-lg-3" style="max-width: none;">
                    <div class="men-pro-item simpleCart_shelfItem">
                      <div class="men-thumb-item text-center">
                        <img src="./view/images/<?= $row['sanpham_image'];?>" alt="" style="width: 300px; height: 300px">
                        <div class="men-cart-pro">
                          <div class="inner-men-cart-pro">
                            <form action="?act=quickview" method="post">
                              <input type="hidden" name="id_sanpham" value="<?= $row['sanpham_id'];?>">
                              <input type="hidden" name="tensp" value="<?= $row['sanpham_name'];?>">
                              <input type="hidden" name="price" value="<?= $row['sanpham_gia'];?>">
                              <input type="hidden" name="image" value="<?= $row['sanpham_image'];?>">
                              <input type="hidden" name="mota" value="<?= $row['sanpham_mota'];?>">
                              <input class="link-product-add-cart" 
                              style="text-align: center; cursor: pointer;" name="view" value="Quick View" type="submit"></input>
                            </form>
                            
                          </div>
                        </div>
                      </div>
                      <div class="item-info-product text-center border-top mt-4">
                        <h4 class="pt-1">
                          <a href="single.html"><?= $row['sanpham_name'];?></a>
                          <button style="border: none; "><a href=""><i class="fa fa-heart"></i></a></button>
                        </h4>
                        <div class="info-product-price my-2">
                          <span class="item_price"><?= $row['sanpham_gia'];?></span>
                          <del>$280.00</del>
                        </div>
                        
                        <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                          
                          <form action="index.php?act=cart" method="post" class="d-flex">
                            <input type="hidden" name="id_sanpham" value="<?= $row['sanpham_id'];?>">
                            <input type="hidden" name="tensp" value="<?= $row['sanpham_name'] ;?>">
                            <input type="hidden" name="price" value="<?= $row['sanpham_gia'] ;?>">
                            <input type="hidden" name="image" value="<?= $row['sanpham_image'] ;?>">
                            <input type="hidden" name="soluong" value="1">
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
  </section>
  <div class="row mb-30 mb-sm-40 mb-xs-30">
    <div class="col">
      <ul class="page-pagination">
        <li><a href="#"><i class="bx bx-left-arrow-alt"></i></a></li>
        <li><a href="index.php?act=product&p=1">01</a></li>
        <li><a href="index.php?act=product&p=2">02</a></li>
        <li><a href="index.php?act=product&p=3">03</a></li>
        <li><a href="#"><i class="bx bx-right-arrow-alt"></i></a></li>
      </ul>
    </div>
  </div><br>
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


