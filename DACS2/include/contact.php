<section class="page">
    <div class="links-page">
        <a href="">Trang chủ</a> /
        <p>Liên hệ</p>
    </div>
</section>
<!-- ============================== Contact starts ============================== -->
<section class="contact">
    <div class="headline">
        <h3>Liên hệ với chúng tôi</h3>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.518931001583!2d108.25388977505148!3d15.986479584681044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421093ec397f93%3A0xe288532cffdd3306!2zMjM0IMSQLiBUcuG6p24gxJDhuqFpIE5naMSpYSwgSG_DoCBI4bqjaSwgTmfFqSBIw6BuaCBTxqFuLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1699367268582!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="content">
        <div class="left-side">
            <div class="address details">
                <i class="fas fa-map-marker-alt"></i>
                <div class="topic">Địa chỉ</div>
                <div class="text-one">234 Trần Đại Nghĩa, Phường Hòa Hải, TP Đà Nẵng</div>
                <div class="text-two">15 Phạm Văn Đồng, An Hải, An Hải Bắc, Sơn Trà, Đà Nẵng</div>
            </div>
            <div class="phone details">
                <i class="fas fa-phone-alt"></i>
                <div class="topic">Số điện thoại</div>
                <div class="text-one">+84 777431697</div>
                <div class="text-two">+84 708056897</div>
            </div>
            <div class="email details">
                <i class="fas fa-envelope"></i>
                <div class="topic">Email</div>
                <div class="text-one">ndshopdn@gmail.com</div>
            </div>
        </div>
        <div class="right-side">
            <div class="topic-text">Liên hệ cho chúng tôi</div>
            <p> Để không ngừng nâng cao chất lượng dịch vụ và đáp ứng tốt hơn nữa các yêu cầu sử dụng sách của Quý khách, chúng tôi mong muốn nhận được các thông tin phản hồi. Nếu Quý khách có bất kỳ thắc mắc hoặc đóng góp nào, xin vui lòng liên hệ với chúng tôi theo thông tin dưới đây. Chúng tôi sẽ phản hồi lại Quý khách trong thời gian sớm nhất.</p>
            <?php
            if (isset($_POST['guilienhe'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $content = $_POST['content'];
                $sql_contact = mysqli_query($conn, "INSERT INTO tbl_contact(contact_name,contact_email,contact_content) VALUES ('$name','$email','$content')");
            }
            ?>
            <form action="" method="post">
                <div class="input-box">
                    <input type="text" name="name" placeholder="Nhập tên">
                </div>
                <div class="input-box">
                    <input type="text" name="email" placeholder="Nhập email">
                </div>
                <div class="input-box message-box">
                    <textarea name="content" id="" cols="30" rows="10" placeholder="Nội dung liên hệ"></textarea>
                </div>
                <div class="submit">
                    <input type="submit" name="guilienhe" value="Gửi">
                </div>
            </form>
        </div>
    </div>
</section>
<!-- ============================== Contact ends ============================== -->