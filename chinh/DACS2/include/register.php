<?php
if (isset($_POST['dangky'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql_register = mysqli_query($conn, "INSERT INTO tbl_client(client_name,client_email,client_password) VALUES ('$name','$email','$pass')");
    header('Location: index.php?quanly=dangnhap');
}
?>

<!-- ============================== Register starts ============================== -->
<section class="page">
    <div class="links-page">
        <a href="">Trang chủ</a> /
        <p>Đăng ký</p>
    </div>
</section>
<section class="register" id="register">
    <div class="headline">
        <h3>Đăng ký tài khoản</h3>
    </div>
    <div class="form">
        <form action="" method="post" class="form-container">
            <label for="name">Họ&Tên:</label>
            <input type="text" name="name" id="name" placeholder="">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" placeholder="">
            <label for="pass">Mật khẩu:</label>
            <input type="text" name="pass" id="pass" placeholder="">
            <div class="form-content">
                <input type="submit" name="dangky" value="Đăng ký">
                <p>Nếu bạn đã có tài khoản, vui lòng đăng nhập <a href="?quanly=dangnhap">tại đây</a></p>
            </div>
        </form>
    </div>
</section>