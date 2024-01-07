<?php
if (isset($_POST['binhluan']) && ($_POST['binhluan'])) {
    $review = $_POST['danhgia'];
    if ($review != '') {
        if (isset($_SESSION['dangnhap'])) {
            $id_review = $_SESSION['client_id'];
            $name_review = $_SESSION['dangnhap'];
            $sql_review = mysqli_query($conn, "INSERT INTO tbl_review(review_content,client_id,client_name) VALUES ('$review','$id_review','$name_review')");
        }
    }
}
?>
<!-- ============================== Review starts ============================== -->
<section class="review" id="review">
    <div class="headline">
        <h3>Đáng giá của khách hàng</h3>
    </div>
    <div class="box-container">
        <div class="box">
            <div class="user">
                <img src="../view/images/user.jpg" alt="jjjj">
                <div class="user-info">
                    <?php
                    if (isset($_SESSION['dangnhap'])) {
                    ?>
                        <h3><?php echo $_SESSION['dangnhap'] ?></h3>
                    <?php
                    } else {
                    ?>
                        <h3>Khách hàng</h3>
                    <?php } ?>
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                </div>
            </div>
            <div class="user-content">
                <form action="" method="post">
                    <input type="text" name="danhgia" class="user-text" placeholder="Nội dung đánh giá">
                    <input type="submit" name="binhluan" class="user-submit" value="Bình luận">
                </form>
            </div>
        </div>
        <div class="box-container">
            <?php
            $sql_client_rv = mysqli_query($conn, "SELECT * FROM tbl_review ORDER BY review_id DESC");
            while ($row_client_rv = mysqli_fetch_array($sql_client_rv)) {
            ?>
                <div class="box">
                    <div class="user">
                        <img src="../view/images/user.jpg" alt="jjjj">
                        <div class="user-info">
                            <h3><?php echo $row_client_rv['client_name'] ?></h3>
                            <div class="stars">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                    <p><?php echo $row_client_rv['review_content'] ?></p>
                </div>
            <?php } ?>
        </div>
</section>
<!-- ============================== Review ends ============================== -->