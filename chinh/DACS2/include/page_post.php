<?php
if (isset($_GET['post_id'])) {
    $id = $_GET['post_id'];
} else {
    $id = '';
}
$sql_post = mysqli_query($conn, "SELECT * FROM tbl_post WHERE  post_id='$id' ORDER BY post_id DESC");
$row_post = mysqli_fetch_array($sql_post);
?>
<!-- ============================== Trang Post ends ============================== -->
<section class="page">
    <div class="links-page">
        <a href="">Trang chủ</a> /
        <p>Tin tức - Bài viết</p> /
        <p><?php echo $row_post['post_title'] ?></p>
    </div>
</section>
<section class="posts" id="posts">
    <div class="post-wrapper">
        <div class="headline">
            <h3>Tin tức - Bài viết</h3>
        </div>
        <div class="post-container">
            <h3 class="post_title"><?php echo $row_post['post_title'] ?></h3>
            <div class="post-info">
                <span><?php echo $row_post['post_time'] ?></span>
                <p>Tác giả: <?php echo $row_post['post_author'] ?></p>
            </div>
            <div class="post-content">
                <?php echo $row_post['post_summary'] ?>
            </div>
            <div class="post-img">
                <img src="../view/images/<?php echo $row_post['post_image'] ?>" alt="">
            </div>
            <div class="post-content">
                <?php echo $row_post['post_describe'] ?>
            </div>
            <div class="post-contact">
                <form action="" method="">
                    <label for="name">Họ và tên <span>*</span></label>
                    <input type="text" id="name" name="name">

                    <label for="email">Email <span>*</span></label>
                    <input type="text" id="email" name="email">


                    <label for="subject">Nội dung <span>*</span></label>
                    <textarea id="subject" name="subject" style="height:200px"></textarea>

                    <input type="submit" name="guinoidung" value="Bình luận">
                </form>
            </div>
        </div>
    </div>
    <div class="post-list">
        <div class="post-list_title">
            <h3>Tin tức khác</h3>
        </div>
        <ul>
            <?php
            $sql_post = mysqli_query($conn, "SELECT * FROM tbl_post ORDER BY post_id DESC");
            while ($row_post_1 = mysqli_fetch_array($sql_post)) {
            ?>
                <a href="?quanly=post&post_id=<?php echo $row_post['post_id'] ?>">
                    <li>
                        <div class="post-list_img">
                            <img src="../view/images/<?php echo $row_post_1['post_image'] ?>" alt="">
                        </div>
                        <div class="post-list_content">
                            <h3><?php echo $row_post['post_title'] ?></h3>
                            <span><?php echo $row_post['post_time'] ?></span>
                        </div>
                    </li>
                </a>
            <?php } ?>
        </ul>
    </div>
</section>