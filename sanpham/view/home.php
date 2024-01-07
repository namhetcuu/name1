<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row">
            <div class="banner">
                <img src="../view/images/banner.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="boxsp mr">
                <div class="row img"><img src="../view/images/1.jpg" alt=""></div>
                <p>$<span>10</span></p>
                <a href="#">Đồng hồ</a>
                <form action="../cart.php" method="post">
                    <input type="number" name="soluong" min="1" max="10" value="1">
                    <input type="submit" name="addcart" value="Đặt hàng">
                    <input type="hidden" name="tensp" value="Đồng hồ">
                    <input type="hidden" name="gia" value="10">
                    <input type="hidden" name="hinh" value="1.jpg">
                </form>
            </div>
            <div class="boxsp mr">
                <div class="row img"><img src="../view/images/2.gif" alt=""></div>
                <p>$<span>20</span></p>
                <a href="#">Laptop</a>
                <form action="../cart.php" method="post">
                    <input type="number" name="soluong" min="1" max="10" value="1">
                    <input type="submit" name="addcart" value="Đặt hàng">
                    <input type="hidden" name="tensp" value="Laptop">
                    <input type="hidden" name="gia" value="20">
                    <input type="hidden" name="hinh" value="2.gif">
                </form>
            </div>
            <div class="boxsp ">
                <div class="row img"><img src="../view/images/3.jpg" alt=""></div>
                <p>$<span>30</span></p>
                <a href="#">Đồng hồ trắng</a>
                <form action="cart.php" method="post">
                    <input type="number" name="soluong" min="1" max="10" value="1">
                    <input type="submit" name="addcart" value="Đặt hàng">
                    <input type="hidden" name="tensp" value="Đồng hồ trắng">
                    <input type="hidden" name="gia" value="30">
                    <input type="hidden" name="hinh" value="3.jpg">
                </form>
            </div>
            <div class="boxsp mr">
                <div class="row img"><img src="../view/images/4.jpg" alt=""></div>
                <p>$<span>40</span></p>
                <a href="#">Đồng hồ đen</a>
                <input type="number" name="soluong" min="1" max="10" value="1">
                <button>Đặt hàng</button>
            </div>
            <div class="boxsp mr">
                <div class="row img"><img src="../view/images/5.jpg" alt=""></div>
                <p>$<span>50</span></p>
                <a href="#">Nón</a>
                <input type="number" name="soluong" min="1" max="10" value="1">
                <button>Đặt hàng</button>
            </div>
            <div class="boxsp ">
                <div class="row img"><img src="../view/images/6.jpg" alt=""></div>
                <p>$<span>60</span></p>
                <a href="#">Vali</a>
                <input type="number" name="soluong" min="1" max="10" value="1">
                <button>Đặt hàng</button>
            </div>
            <div class="boxsp mr">
                <div class="row img"><img src="../view/images/7.jpg" alt=""></div>
                <p>$<span>70</span></p>
                <a href="#">Điện thoại</a>
                <input type="number" name="soluong" min="1" max="10" value="1">
                <button>Đặt hàng</button>
            </div>
            <div class="boxsp mr">
                <div class="row img"><img src="../view/images/8.jpg" alt=""></div>
                <p>$<span>80</span></p>
                <a href="#">Điện thoại cam</a>
                <input type="number" name="soluong" min="1" max="10" value="1">
                <button>Đặt hàng</button>
            </div>
            <div class="boxsp ">
                <div class="row img"><img src="../view/images/9.jpg" alt=""></div>
                <p>$<span>90</span></p>
                <a href="#">Đồng hồ tròn trắng</a>
                <input type="number" name="soluong" min="1" max="10" value="1">
                <button>Đặt hàng</button>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <div class="row mb ">
            <div class="boxtitle">TÀI KHOẢN</div>
            <div class="boxcontent formtaikhoan">
                <?php
                    if($logined==1){?>
                        <li>
                            <a href="index.php?info"><?=$_SESSION['user'];?></a>
                        </li>
                        <li>
                            <a href="#">Giỏ hàng của tôi</a>
                        </li>
                        <li>
                            <a href="#">Thay đổi mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?delc=1">Thoát</a>
                        </li>
                <?php                                
                    }else{
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                    <div class="row mb10">
                        Tên đăng nhập<br>
                        <input type="text" name="user">
                    </div>
                    <div class="row mb10">
                        Mật khẩu<br>

                        <input type="password" name="pass">
                    </div>
                    <div class="row mb10">
                        <input type="checkbox" name="ghinho"> Ghi nhớ tài khoản?</div>
                    <div class="row mb10">
                        <input type="submit" name="login" value="Đăng nhập">

                    </div>
                </form>

                <li>
                    <a href="index.php?delc=1">Xóa cookie</a>
                </li>
                <li>
                    <a href="#">Quên mật khẩu</a>
                </li>
                <li>
                    <a href="#">Đăng ký thành viên</a>
                </li>

                <?php }?>
            </div>
        </div>
        <div class="row mb ">
            <div class="boxtitle">LƯỢT TRUY CẬP</div>
            <div style="text-align:center;">
                <h1>
                <?php
                    if(isset($_SESSION['luottruycap'])) echo $_SESSION['luottruycap'];
                ?>
                </h1>
                
            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">DANH MỤC</div>
            <div class="boxcontent2 menudoc">
                <ul>
                    <li>
                        <a href="#">Đồng hồ</a>
                    </li>
                    <li>
                        <a href="#">Laptop</a>
                    </li>
                    <li>
                        <a href="#">Điện thoại</a>
                    </li>
                    <li>
                        <a href="#">Ba lô</a>
                    </li>
                    <li>
                        <a href="#">Đồng hồ</a>
                    </li>
                    <li>
                        <a href="#">Laptop</a>
                    </li>
                    <li>
                        <a href="#">Điện thoại</a>
                    </li>
                    <li>
                        <a href="#">Ba lô</a>
                    </li>
                </ul>
            </div>
            <div class="boxfooter searbox">
                <form action="#" method="post">
                    <input type="text" name="" id="">
                </form>
            </div>
        </div>
        <div class="row">
            <div class="boxtitle">TOP 10 YÊU THÍCH</div>
            <div class="row boxcontent">
                <div class="row mb10 top10">
                    <img src="../view/images/1.jpg" alt="">
                    <a href="#">Sir Rodney's Marmalade</a>
                </div>
                <div class="row mb10 top10">
                    <img src="../view/images/5.jpg" alt="">
                    <a href="#">Cate de Blaye</a>
                </div>
                <div class="row mb10 top10">
                    <img src="../view/images/3.jpg" alt="">
                    <a href="#">Tharinger Rostbratwurst</a>
                </div>
                <div class="row mb10 top10">
                    <img src="../view/images/4.jpg" alt="">
                    <a href="#">Mishi Kobe Niku</a>
                </div>
                <div class="row mb10 top10">
                    <img src="../view/images/1.jpg" alt="">
                    <a href="#">Sir Rodney's Marmalade</a>
                </div>
                <div class="row mb10 top10">
                    <img src="../view/images/5.jpg" alt="">
                    <a href="#">Cate de Blaye</a>
                </div>
                <div class="row mb10 top10">
                    <img src="../view/images/3.jpg" alt="">
                    <a href="#">Tharinger Rostbratwurst</a>
                </div>
                <div class="row mb10 top10">
                    <img src="../view/images/4.jpg" alt="">
                    <a href="#">Mishi Kobe Niku</a>
                </div>
            </div>
        </div>
    </div>
</div>