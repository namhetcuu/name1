<?php
require_once 'connection.php';
$db = Db::getInstance();
if(isset($_POST['input'])){?>
     
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
                    $input = $_POST['input'];
               $req = $db->query("SELECT * FROM sanpham,danhmuc WHERE sanpham_name LIKE '{$input}%'
               AND sanpham.danhmuc_id=danhmuc.danhmuc_id");
               
               $i=0;
               foreach($req->fetchAll() as $product){?>
              <tr>
                    <td><?php echo $i++ ?></td>
                    <td><?php echo $product['sanpham_name']; ?></td>
                    <td><img src="theme/images/<?php echo $product['sanpham_image']; ?>" style="width: 100px; height: 100px" alt=""></td>
                    <td><?php echo $product['sanpham_gia']; ?></td>
                    <td><?php echo $product['sanpham_soluong']; ?></td>
                    <td><?php echo $product['danhmuc_name']; ?></td>
                    <td><?php echo $product['sanpham_xuat']; ?></td>
                    <td>
                    <a href="?controller=product&action=delproduct&id=<?php echo $product['sanpham_id'] ?>">Delete</a></td> 
                    <td><a href="?controller=product&action=viewup&id=<?php echo $product['sanpham_id'] ;?>">Edit</a>
                    </td>
                    
               </tr>
                    
              <?php }
              ?>
              
          </tbody>
        </table>
     <?php 
     }else{
          echo "<h6 class = 'text-danger text-center mt-3 '>No data Found!</h6>";
     }
     

?>