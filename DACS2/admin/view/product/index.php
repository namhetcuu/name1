
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sản phẩm</title>
	<link rel="stylesheet" href="theme/css/styles.css">
  <script src="theme/js/main.js"></script>

	<link rel="stylesheet" href="theme/css/stylee.css">
</head>
<body>
	
<div class="container" style="max-width: 100%;">
    <section class="main">
      <div class="main-top">
        <h1>Top 2 Nearest Product</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        <?php
        $db = Db::getInstance();
        $sql = $db->query("SELECT * FROM tbl_product,tbl_category WHERE
        tbl_product.category_id=tbl_category.category_id ORDER BY product_id DESC LIMIT 2");
        foreach($sql->fetchAll() as $row){?>
          <div class="card">
            <img src="theme/images/<?php echo $row['product_image']?>">
            <h4><?= $row['product_name']?></h4>
            <p><?= $row['category_name']?></p>
            <div class="per">
              <table>
                <tr>
                  <td><span><?= $row['product_quantity'] ?></span></td>
                  <td><span>87%</span></td>
                </tr>
                <tr>
                  <td>Quantity</td>
                  <td>Review</td>
                </tr>
              </table>
            </div>
            <button>Profile</button>
          </div>
        <?php }
        ?>
          <div class="card">
               <img src="../view/images/">
               <h4>ADD Product</h4>
               <p>?</p>
               <div class="per">
                <table>
                  <tr>
                        <td><span>?</span></td>
                        <td><span>?%</span></td>
                  </tr>
                  <tr>
                        <td>Quantity</td>
                        <td>Percent</td>
                  </tr>
                </table>
               </div>
               <a href="?controller=product&action=viewadd" style="color: black; width: 100%">ADD</a>
          </div>
	</div>
      <section class="attendance">
        <div class="attendance-list">
          <h1>Attendance List</h1>
          <input type="text" name="" value="" class="form-control" id="live_search">

          <div id="searchresult">

          <table class="table">
            <thead>
              <tr>
				
                    <th>STT</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th>Delete</th>
                    <th>Edit</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $i=0;
                foreach($products as $product){?>
                <tr>
                      <td><?php echo $i++ ?></td>
                      <td><?php echo $product->product_name; ?></td>
                      <td><img src="theme/images/<?php echo $product->product_image; ?>" style="width: 100px; height: 100px" alt=""></td>
                      <td><?php echo $product->product_price; ?></td>
                      <td><?php echo $product->product_quantity; ?></td>
                      <td><?php echo $product->category_name; ?></td>
                      <td>
                      <a href="?controller=product&action=delproduct&id=<?php echo $product->product_id ?>">Delete</a></td>
                    <td><a href="?controller=product&action=viewup&id=<?php echo $product->product_id ;?>">Edit</a></td>
                      
                      
                </tr>
                      
                <?php }
                ?>
				
            </tbody>
          </table>

            </div>

        </div>
      </section>
    </section>
  </div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
            $(document).ready(function(){
  
                $("#live_search").keyup(function(){
                  var input = $(this).val();
                  
                  if(input != ""){
                    $.ajax({
                      url: "searchpro.php",
                      method: "POST",
                      data: {input: input},
                      success:function(data){
                        $("#searchresult").html(data);
                      }
                    })
                  }else{
                    $("#searchresult").html(`
                    <table class="table">
                      <thead>
                        <tr>
                  
                              <th>STT</th>
                              <th>Name</th>
                              <th>Image</th>
                              <th>Price</th>
                              <th>Quantity</th>
                              <th>Category</th>
                              <th>Delete</th>
                              <th>Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          $i=0;
                          foreach($products as $product){?>
                          <tr>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo $product->product_name; ?></td>
                                <td><img src="theme/images/<?php echo $product->product_image; ?>" style="width: 100px; height: 100px" alt=""></td>
                                <td><?php echo $product->product_price; ?></td>
                                <td><?php echo $product->product_quantity; ?></td>
                                <td><?php echo $product->category_name; ?></td>
                                <td>
                                <a href="?controller=product&action=delproduct&id=<?php echo $product->product_id ?>">Delete</a></td>
                              <td><a href="?controller=product&action=viewup&id=<?php echo $product->product_id ;?>">Edit</a></td>
                                
                                
                          </tr>
                                
                          <?php }
                          ?>
                  
                      </tbody>
                    </table>
                    `)
                  }
                })
            })
    </script>