
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
	
<div class="container">
    <section class="main">
      <div class="main-top">
        <h1>Top 2 Nearest Product</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
	 
        <div class="card">
          
          <div class="per">
            <table>
              <tr>
                <td><span></span></td>
                <td><span>87%</span></td>
              </tr>
              <tr>
		    	<td>Quantity</td>
                <td>Percent</td>
              </tr>
            </table>
          </div>
          <button>Profile</button>
        </div>
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
               <a href="?controller=product&action=viewadd" style="color: black">ADD</a>
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
                    <th>Manage</th>
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
                      <a href="?controller=product&action=delproduct&id=<?php echo $product->product_id ?>">Delete</a> || 
                    <a href="?controller=product&action=viewup&id=<?php echo $product->product_id ;?>">Edit</a>
                      </td>
                      
                </tr>
                      
                <?php }
                ?>
				<!-- <td><?php echo '1' ?></td>
				<td><?php echo $product['product_price'] ?></td> -->
				<!-- <td><img src="../view/images/<?php echo $row_sp['sanpham_image'];?>" height="100" width="80"></td>
				<td><?php echo $row_sp['sanpham_soluong'] ?></td>
				<td><?php echo $row_sp['danhmuc_name'] ?></td>
				<td><?php echo number_format($row_sp['sanpham_gia']).'vnđ' ?></td>
				<td><?php echo number_format($row_sp['sanpham_giakhuyenmai']).'vnđ' ?></td>
				<td><a href="?act=product&xoa=<?php echo $row_sp['sanpham_id'] ?>">Delete</a> || 
				<a href="?act=capnhatsanpham&quanly=capnhat&capnhat_id=<?php echo $row_sp['sanpham_id'] ?>">Edit</a></td> -->
            </tbody>
          </table>
        </div>
      </section>
    </section>
  </div>
</body>
</html>