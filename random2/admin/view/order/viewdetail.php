
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
        <h1>Top 2 Nearest Product</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <section class="attendance">
        <div class="attendance-list">
          <h1>Attendance List</h1>
          <form action="?controller=order&action=uporder" method="post">
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
                  <th>Product Code</th>
                  <th>Name Product</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Total Money</th>
                  <th>Date Order</th>
                  <th>Status</th>
                  <th>Update</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $i=0;
                foreach($detailsOrder as $detail){?>
                    
                    <tr>
                         <td><?php echo $i++ ?></td>
                         <td><?php echo $detail->mahang; ?></td>
                         <td><?php echo $detail->sanpham_name; ?></td>
                         <td><?php echo $detail->soluong; ?></td>
                         <td><?php echo $detail->sanpham_gia; ?></td>
                         <td><?php echo $detail->sanpham_gia*$detail->soluong; ?></td>
                         <td><?php echo $detail->ngaythang; ?></td>
                         <td>
                            <input type="hidden" name="order_code" value="<?= $detail->mahang ?>">
                            <select name="tinhtrang" id="">
                              <option value="1"><p style='color: #34af6d;'>Proccessing</option>
                              <option value="0"><p style='color: red'>Not proccessing</p></option>
                            </select>
                         </td>
                         <td>
                          <input type="submit" value="Update" name="capnhatdonhang"></input>
                         </td>
                         
                    </tr>
                    
                <?php }?>
                    <tr>
                    <td><a href="?controller=order&action=index">Back</a></td>
                  </tr>
            </tbody>
          </table>
          </form>
        </div>
      </section>
    </section>
  </div>
</body>
</html>