<!-- ============================== Post starts ============================== -->
<section class="posts" id="posts">
    <div class="post">
        <div class="headline">
            <h3>Tin tức - Bài viết</h3>
        </div>
        <ul class="post-content">
            <?php
            $sql_post = mysqli_query($conn, "SELECT * FROM tbl_post ORDER BY post_id ASC");
            while ($row_post = mysqli_fetch_array($sql_post)) {
            ?>
                <li>
                    <div class="post-top">
                        <a href="?quanly=post&post_id=<?php echo $row_post['post_id'] ?>" class="product-thumb">
                            <img src="../view/images/<?php echo $row_post['post_image'] ?>" alt="">
                        </a>
                    </div>
                    <div class="post-info">
                        <h3><?php echo $row_post['post_title'] ?></h3>
                        <div class="post-time">
                            <span><?php echo $row_post['post_time'] ?></span>
                            <span>Viết bởi: <?php echo $row_post['post_author'] ?></span>
                        </div>
                        <P><?php echo $row_post['post_summary'] . '...' ?></P>
                        <a href="?quanly=post&post_id=<?php echo $row_post['post_id'] ?>">Xem thêm</a>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>
<!-- ============================== Post ends ============================== -->