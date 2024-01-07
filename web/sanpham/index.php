<?php
require'config/connection.php';
include("header.php");
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
$kq = mysqli_query($conn,$sql);?>
<div class="row">
    <div class="card">
        <div class="card-header"><h1>Danh mục</h1></div>
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/p/r/pro-m2.jpg" alt="Card image cap" style="width: 300px; height: 300px;">
        <div class="card-body">
            <h5 class="card-title">Laptop</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">ít 5 quả trứng nhiều 1 tên lửa</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <div class="card-body">
            <a href="main.php?iddm=1" class="card-link btn btn-outline-success">Truy cập</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/t/_/t_m_18.png" alt="Card image cap" style="width: 300px; height: 300px;">
        <div class="card-body">
            <h5 class="card-title">Điên thoại</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">ít thì 5 quả trứng nhiều 1 tên lửa</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <div class="card-body">
            
            <a href="main.php?iddm=2" class="card-link btn btn-outline-success">Truy cập</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/1/w/1w2kuj.jpg" alt="Card image cap" style="width: 300px; height: 300px;">
        <div class="card-body">
            <h5 class="card-title">Máy tính bảng</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">ít thì 5 quả trứng nhiều 1 tên lửa</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <div class="card-body">
            <a href="main.php?iddm=3" class="card-link btn btn-outline-success">Truy cập</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://cdn2.cellphones.com.vn/insecure/rs:fill:358:358/q:80/plain/https://cellphones.com.vn/media/catalog/product/f/r/frame_1_4_2.png" alt="Card image cap" style="width: 300px; height: 300px;">
        <div class="card-body">
            <h5 class="card-title">Tai nghe</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">ít thì 5 quả trứng nhiều 1 tên lửa</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <div class="card-body">  
            <a href="main.php?iddm=4" class="card-link btn btn-outline-success">Truy cập</a>
        </div>
    </div>
</div><br>
    
    <a href="themdanhmuc.php" class="btn btn-outline-primary">Them Danh Muc</a>
    <br>
</body>
</html>
<?php
echo "<br>";
include('footer.php');
?>

