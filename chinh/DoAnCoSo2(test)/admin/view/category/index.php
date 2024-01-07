
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
<main >
			<div class="head-title">
				
				<a href="exportcate.php" class="btn btn-success">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download</span>
				</a>
			</div>
  </main>
    <section class="main">
      <div class="main-top">
        <h1>Top 2 Nearest Category</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        <?php
        $db = Db::getInstance();
        $sql = $db->query("SELECT * FROM danhmuc ORDER BY danhmuc_id DESC LIMIT 2");
        foreach($sql->fetchAll() as $category){?>
          <div class="card">
            <img src="theme/images/product-5.jpg">
            <h4><?= $category['danhmuc_name']?></h4>
            <div class="per">
              <table>
                <tr>
                  <td><span>Good</span></td>
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
               <h4 style="margin: auto;">ADD Category</h4>
               <div class="per">
                    <table>
                         <tr>
                              <form action="?controller=category&action=addcate" method="post">
                              <td style="padding-right: 0px"> 
                              <input type="text" name="category_name" id="" style="
                                   width: 100%;
                                   border-radius: 20px;
                                   font-size: 1rem"></td>
                              
                              
                         </tr>
                         <tr>
                              <td>Name Product</td>
                         </tr>
                    </table>
               </div>
               <input type="submit" style="color: black; cursor: pointer; width: 100%; margin-top: 0px" value="ADD" name="themdanhmuc"></input>
               </form>
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
                    <th>Manage</th>
              </tr>
            </thead>
            <tbody>
                <?php
                $i=0;
                foreach($categorys as $category){?>
                <tr>
                      <td><?php echo $i++ ?></td>
                      <td><?php echo $category->danhmuc_name; ?></td>
                      <td>
                      <a href="?controller=category&action=delcate&id=<?php echo $category->danhmuc_id ?>">Delete</a> || 
                    <a href="?controller=category&action=viewup&id=<?php echo $category->danhmuc_id ;?>">Edit</a>
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