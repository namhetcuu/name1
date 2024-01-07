<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ND SHOP</title>
  <link rel="stylesheet" href="./view/css/style.css">
  <link rel="stylesheet" href="Js/script.js">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
     <?php
$sql_post = mysqli_query($conn, "SELECT * FROM baiviet  ORDER BY baiviet_id DESC");
$row_post = mysqli_fetch_array($sql_post);
?>
<!-- ============================== Trang Post ends ============================== -->
<section class="page">
    <div class="links-page">
        <a href="">Trang chủ</a> /
        <p>Tin tức - Bài viết</p> /
        <p><?php echo $row_post['baiviet_title'] ?></p>
    </div>
</section>
<section class="posts" id="posts">
    <div class="post-wrapper">
        <div class="headline">
            <h3>Tin tức - Bài viết</h3>
        </div>
        <div class="post-container">
            <h3 class="post_title"><?php echo $row_post['baiviet_title'] ?></h3>
            <div class="post-info">
                <span><?php echo $row_post['post_time'] ?></span>
                <p>Tác giả: <?php echo $row_post['baiviet_author'] ?></p>
            </div>
            <div class="post-content">
                <p><?php echo $row_post['baiviet_sumary'] ?></p>
            </div>
            <div class="post-img">
                <img src="./view/images/<?php echo $row_post['baiviet_image'] ?>" alt="">
            </div>
            <div class="post-content">
                <p><?php echo $row_post['baiviet_describe'] ?></p>
            </div>
        </div>
    </div>
    <div class="post-list">
        <div class="post-list_title">
            <h3>Tin tức khác</h3>
        </div>
        <ul>
            <?php
            $sql_post = mysqli_query($conn, "SELECT * FROM baiviet ORDER BY baiviet_id ASC LIMIT 2");
            while ($row_post_1 = mysqli_fetch_array($sql_post)) {
            ?>
                <a href="?quanly=post&post_id=<?php echo $row_post_1['baiviet_id'] ?>">
                    <li>
                        <div class="post-list_img">
                            <img src="./view/images/<?php echo $row_post_1['baiviet_image'] ?>" alt="">
                        </div>
                        <div class="post-list_content">
                            <h3 class="btn"><?php echo $row_post_1['baiviet_title'] ?></h3>
                            <span><?php echo $row_post_1['baiviet_time'] ?></span>
                        </div>
                    </li>
                </a>
            <?php } ?>
        </ul>
    </div>
</section>