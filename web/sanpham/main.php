<?php
    session_start();
    include("header.php");
    echo '<br>';
    require'config/connection.php';

    // $sql_danhmuc = "SELECT * FROM danhmuc INNER JOIN sanpham on danhmuc.IDDanhMuc=sanpham.IDDanhMuc";
    // $query_danhmuc = mysqli_query($conn,$sql_danhmuc);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach san pham</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php
        $sql_sanpham = "SELECT * FROM sanpham WHERE IDDanhMuc =".$_GET['iddm'];
        $query = mysqli_query($conn,$sql_sanpham);
        ?>
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <h2>Danh sach san pham</h2>
                </thead>
                <tbody>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Ten sp</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Gia</th>
                        <th scope="col">So Luong</th>
                        <th scope="col">Mo ta</th>
                        <th scope="col">IDDanhMuc</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                        <th>Chi tiết</th>
                    </tr>
                    <?php
                    $i=1;
                        while($row = mysqli_fetch_assoc($query)){?>
                    <tr>
                        <td><?php echo $i++?></td>
                        <td><?php echo $row['TenSP'];?></td>
                        <td><img src="img/<?php echo $row['img']; ?>" alt="" style="width: 100px;height:100px"></td>
                        <td><?php echo $row['Gia'];?></td>
                        <td><?php echo $row['SoLuong'];?></td>
                        <td><?php echo $row['description'];?></td>
                        <td><?php echo $row['IDDanhMuc'];?></td>
                        <td><a href="suasanpham.php?id=<?php echo $row['ID'];?>" class="btn btn-outline-warning">Sửa</a></td>
                        <td><a href="xoasanpham.php?id=<?php echo $row['ID'];?>" class="btn btn-outline-danger">Xóa</a></td>
                        <td><a href="chitietsanpham.php?idsp=<?php echo $row['ID'] ;?>" class="btn btn-outline-secondary">Chi tiết</a></td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
            <a href="index.php" class="btn btn-outline-primary">Back</a>
            <a href="themsanpham.php" class="btn btn-outline-success">Insert</a>
        
</body>
</html>
<?php
echo "<br>";
    include('footer.php');
?>