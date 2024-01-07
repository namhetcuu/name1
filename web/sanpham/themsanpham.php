<?php
require'config/connection.php';
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
    <?php
    $sql = "SELECT * FROM danhmuc";
    $query_sql = mysqli_query($conn,$sql);
    ?>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Thêm sản phẩm</h2>
            </div>
            <div class="card-body">
                <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" class="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Ten sp</label>
                        <input type="text" name="tensp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh sản phẩm</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Gia</label>
                        <input type="number" name="gia" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="">So luong</label>
                        <input type="number" name="soluong" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Danh muc</label>
                        <select name="danhmuc" id="" class="form-control">
                            <?php
                            while($row = mysqli_fetch_assoc($query_sql)){?>
                                <option value="<?php echo $row['IDDanhMuc']; ?>"><?php echo $row['Ten_Danh_Muc'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <br>
                    <div class="container" style="margin-left: 0px;padding-left:0">
                        <textarea id="editor" name="description"></textarea>
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
                    <input type="submit" class="btn btn-outline-success" value="Them" name="sbm">
                    <a href="index.php" class="btn btn-outline-primary">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['sbm'])&&($_POST['sbm'])){
    $tensp = $_POST['tensp'];

    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];
    $danhmuc = $_POST['danhmuc'];
    $description = $_POST['description'];

    //echo $image.$description;

    $sql_sanpham = "INSERT INTO sanpham(TenSP,img,Gia,SoLuong,description,IDDanhMuc)
            VALUES ('$tensp','$image','$gia','$soluong','$description','$danhmuc')";
    $query_sql_sanpham = mysqli_query($conn,$sql_sanpham);
    move_uploaded_file($image_tmp,'img/'.$image);
    header("location: main.php?iddm=".$danhmuc);
}
?>