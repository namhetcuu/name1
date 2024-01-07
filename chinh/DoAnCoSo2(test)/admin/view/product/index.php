
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
  <main >
			<div class="head-title">
				
				<a href="exportpro.php" class="btn btn-success">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download</span>
				</a>
			</div>
  </main>
    <section class="main">
      <div class="main-top">
        <h1>Top 2 Nearest Product</h1>
        <i class="fas fa-user-cog"></i>
        
      </div>
      <div class="users">
        <?php
        $db = Db::getInstance();
        $sql = $db->query("SELECT * FROM sanpham,danhmuc WHERE
        sanpham.danhmuc_id=danhmuc.danhmuc_id ORDER BY sanpham_id DESC LIMIT 2");
        foreach($sql->fetchAll() as $row){?>
          <div class="card">
            <img src="theme/images/<?php echo $row['sanpham_image']?>">
            <h4><?= $row['sanpham_name']?></h4>
            <p><?= $row['danhmuc_name']?></p>
            <div class="per">
              <table>
                <tr>
                  <td><span><?= $row['sanpham_soluong'] ?></span></td>
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
               <h4>ADD sanpham</h4>
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
                    <th>Export</th>
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
                        <td><?php echo $product->sanpham_name; ?></td>
                        <td><img src="theme/images/<?php echo $product->sanpham_image; ?>" style="width: 100px; height: 100px" alt=""></td>
                        <td><?php echo $product->sanpham_gia; ?></td>
                        <td><?php echo $product->sanpham_soluong; ?></td>
                        <td><?php echo $product->danhmuc_name; ?></td>
                        <td><?php echo $product->sanpham_xuat; ?></td>
                        <td>
                        <a href="?controller=product&action=delproduct&id=<?php echo $product->sanpham_id ?>">Delete</a></td> 
                      <td><a href="?controller=product&action=viewup&id=<?php echo $product->sanpham_id ;?>">Edit</a>
                        </td>
                        
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
                              <th>Export</th>
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
                              <td><?php echo $product->sanpham_name; ?></td>
                              <td><img src="theme/images/<?php echo $product->sanpham_image; ?>" style="width: 100px; height: 100px" alt=""></td>
                              <td><?php echo $product->sanpham_gia; ?></td>
                              <td><?php echo $product->sanpham_soluong; ?></td>
                              <td><?php echo $product->danhmuc_name; ?></td>
                              <td><?php echo $product->sanpham_xuat; ?></td>
                              <td>
                              <a href="?controller=product&action=delproduct&id=<?php echo $product->sanpham_id ?>">Delete</a></td> 
                            <td><a href="?controller=product&action=viewup&id=<?php echo $product->sanpham_id ;?>">Edit</a>
                              </td>
                              
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
