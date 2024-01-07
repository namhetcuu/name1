<?php 
require_once'config/connection.php';
$id = $_GET['id'];
$sql = "SELECT * FROM sanpham WHERE ID=".$id;
$query_sql = mysqli_query($conn,$sql);
$row_sanpham = mysqli_fetch_assoc($query_sql);

$sql_danhmuc = "SELECT * FROM danhmuc";
$query_sql_danhmuc = mysqli_query($conn,$sql_danhmuc);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Chỉnh sửa sản phẩm</h2>
            </div>
            <div class="card-body">
                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" class="" method="POST">
                    <div class="form-group">
                        <label for="">Ten sp</label>
                        <input type="text" name="tensp" class="form-control" value="<?php echo $row_sanpham['TenSP'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh sản phẩm</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Gia</label>
                        <input type="number" name="gia" class="form-control" value="<?php echo $row_sanpham['Gia'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">So luong</label>
                        <input type="number" name="soluong" class="form-control" value="<?php echo $row_sanpham['SoLuong'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Danh muc</label>
                        <select name="danhmuc" id="" class="form-control" value="<?php echo $row_sanpham['DanhMuc'] ?>">
                            <?php
                            while($row = mysqli_fetch_assoc($query_sql_danhmuc)){?>
                                <option value="<?php echo $row['IDDanhMuc']; ?>"><?php echo $row['Ten_Danh_Muc'];?></option>
                            <?php } ?>
                        </select>
                    </div><br>

                    <div class="container" style="margin-left: 0px;padding-left:0">
                        <textarea id="editor" name="description" value="<?php echo $row['description'];?>"></textarea>
                    </div>
                    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
                    <script>
                        ClassicEditor
                            .create(document.querySelector('#editor'))
                            .then(editor => {
                                console.log(editor);
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    </script>

                    <br>
                    <input type="submit" class="btn btn-outline-success" value="Sua" name="sua">
                    <a href="index.php" class="btn btn-outline-primary">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['sua'])&&$_POST['sua']){
    $tensp = $_POST['tensp'];
    
    if($_FILES['image']['name']==''){
        $image = $row_sql_products['image'];
    }else{
        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['image_tmp'];
        move_uploaded_file($image_tmp,'img/'.$image);
    }

    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];
    $danhmuc = $_POST['danhmuc'];

    $sql = "UPDATE sanpham SET TenSp='$tensp', 
            Gia='$gia',SoLuong='$soluong',IDDanhMuc='$danhmuc'
            WHERE ID=".$id;
    $query_update_sanpham = mysqli_query($conn,$sql);
    header("location: index.php");
}
?>