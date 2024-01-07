
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sản phẩm</title>
	<!-- <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
	<link rel="stylesheet" href="theme/css/styles.css">
	<!-- <link rel="stylesheet" href="theme/css/style.css"> -->
	<link rel="stylesheet" href="theme/css/stylee.css">
</head>
<body>
	
<div class="container" style="max-width: 100%;">
    <section class="main">
      <div class="main-top">
        <h1>Top 2 Nearest Order</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        <?php
        $db = Db::getInstance();
        $sql = $db->query("SELECT * FROM sanpham,khachhang,donhang 
        WHERE donhang.sanpham_id=sanpham.sanpham_id AND 
        donhang.khachhang_id=khachhang.khachhang_id ORDER BY donhang_id DESC LIMIT 2");
        foreach($sql->fetchAll() as $order){?>
          <div class="card">
            <img src="theme/images/icons/author.jpg">
            <h4><?= $order['name']?></h4> 
            <p><?= $order['soluong']?></p>
            <div class="per">
              <table>
                <tr>
                  <td><span><?= $order['tinhtrang']?></span></td>
                  <td><span><?= $order['mahang']?></span></td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td>Code</td>
                </tr>
              </table>
            </div>
            <!-- <button>Profile</button> -->
          </div>
        <?php }
        ?>
          
        
        
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
                    <!-- <th>Name Product</th> -->
                    <!-- <th>Quantity</th> -->
                    <th>Code Product</th>
                    
                    <th>Customer Name</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Manage</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $i=0;
                foreach($orders as $order){?>
                <tr>
                      <td><?php echo $i++ ?></td>
                      <!-- <td><?php echo $order->product_name; ?></td> -->
                      <!-- <td><img src="theme/images/<?php echo $product->product_image; ?>" style="width: 100px; height: 100px" alt=""></td> -->
                      <!-- <td><?php echo $order->order_quantity; ?></td> -->
                      <td><?php echo $order->mahang; ?></td>
                      <td><?php echo $order->name; ?></td>
                      <td><?php echo $order->ngaythang; ?></td>
                      <td>
                         <?php
                         if($order->tinhtrang == 0) echo "<p style='color: #34af6d;'>Proccessing"; 
                         else echo "<p style='color: red'>Not proccessing yet</p>"; 
                          ?>
                    </td>
                      <td>
                      <a href="?controller=order&action=detailOrder&id=<?php echo $order->mahang; ?>">View Detail</a> || 
                    <a href="?controller=order&action=delorder&id=<?php echo $order->mahang; ?>">Delete</a>
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