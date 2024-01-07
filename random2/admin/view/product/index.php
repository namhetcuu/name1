
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

          <table class="table">
            <thead>
              <tr>
				<!-- <th>STT</th>
				<th>Name</th>
				<th>Image</th>
				<th>Quantity</th>
				<th>Catalog</th>
				<th>Price</th>
				<th>Promotional Price</th>
				<th>Manage</th> -->
                    <th>STT</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Category</th>
                    <th>Product Detail</th>
                    <th>Manage</th>
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
                      <td><?php echo $product->sanpham_chitiet; ?></td>
                      <td>
                      <a href="?controller=product&action=delproduct&id=<?php echo $product->sanpham_id ?>">Delete</a> || 
                    <a href="?controller=product&action=viewup&id=<?php echo $product->sanpham_id ;?>">Edit</a>
                      </td>
                      
                </tr>
                      
                <?php }
                ?>
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>
</body>
</html>