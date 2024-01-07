<?php
session_start();
include("header.php");
?>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <div class="home__container container grid">
                    <div class="home__img-bg">
                        <img src="https://media.hasaki.vn/hsk/1695872326500-x-500cp.jpg" alt="" class="home__img">
                    </div>
    
                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            Facebook
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            Twitter
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            Instagram
                        </a>
                    </div>
    
                    <div class="home__data">
                        <h1 class="home__title">CHỐT SIÊU DEAL <br> QUÀ CỰC YÊU</h1>
                        <p class="home__description">
                        Siêu deal tháng 9. <br>
                        KHOA HỌC TOÀN DIỆN, BẢO VỆ TỐI ƯU
                        </p>
                        <span class="home__price">550.000đ</span>

                        <div class="home__btns">
                            <a href="#" class="button button--gray button--small">
                                Khám phá
                            </a>

                            <button class="button home__button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== FEATURED ====================-->
            <section class="featured section container" id="featured">
                <h2 class="section__title">
                    Sản phẩm bán chạy
                </h2>

                <div class="featured__container grid">
                    <article class="featured__card">
                        <span class="featured__tag">Sale</span>

                        <img src="img/product-1.jpg" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">Sửa rửa mặt<br>(Cetary)</h3>
                            <span class="featured__price">$1050</span>
                        </div>

                        <form action="giohang.php" method="post">
                            <input class="button featured__button" type="submit" value="Add to cart" name="addtocart">
                            <input type="number" name="soluong" id="" value="1" min="1" max="10">
                            <input type="hidden" name="tensp" value="suaruamat">
                            <input type="hidden" name="gia" value="10">
                            <input type="hidden" name="hinh" value="product-1.jpg">
                        </form>

                        
                    </article>

                    <article class="featured__card">
                        <span class="featured__tag">Sale</span>

                        <img src="img/product-2.jpg" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">Mặt nạ<br>(Naruko)</h3>
                            <span class="featured__price">$250</span>
                        </div>

                        <form action="giohang.php" method="post">
                            <input class="button featured__button" type="submit" value="Add to cart" name="addtocart">
                            <input type="number" name="soluong" id="" value="1" min="1" max="10">
                            <input type="hidden" name="tensp" value="matna">
                            <input type="hidden" name="gia" value="10">
                            <input type="hidden" name="hinh" value="product-2.jpg">
                        </form>

                    </article>

                    <article class="featured__card">
                        <span class="featured__tag">Sale</span>

                        <img src="img/product-3.jpg" alt="" class="featured__img">

                        <div class="featured__data">
                            <h3 class="featured__title">Trang điểm mặt<br>(Walson)</h3>
                            <span class="featured__price">$890</span>
                        </div>

                        <!-- <form action="giohang.php" method="post">
                            <input class="button featured__button" type="submit" value="Add to cart" name="addtocart">
                            <input type="number" name="soluong" id="" value="1" min="1" max="10">
                            <input type="hidden" name="tensp" value="trangdiem">
                            <input type="hidden" name="gia" value="10">
                            <input type="hidden" name="hinh" value="product-3.jpg">
                        </form> -->
                        <form action="giohang.php" method="post">
                            <input type="submit" value="">
                        </form>

                    </article>
                </div>
            </section>
            
            <!--==================== PRODUCTS ====================-->
            <section class="products section container" id="products">
                <h2 class="section__title">
                    Products
                </h2>

                <div class="products__container grid">
                    <article class="products__card">
                        <img src="./img/facebook-dynamic-422209343-1689243046_img_300x300_b798dd_fit_center.jpg" alt="" class="products__img">

                        <h3 class="products__title">Spirit rose</h3>
                        <span class="products__price">$1500</span>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>

                    <article class="products__card">
                        <img src="./img/facebook-dynamic-422209343-1689243046_img_300x300_b798dd_fit_center.jpg" alt="" class="products__img">

                        <h3 class="products__title">Khaki pilot</h3>
                        <span class="products__price">$1350</span>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>

                    <article class="products__card">
                        <img src="./img/facebook-dynamic-422209343-1689243046_img_300x300_b798dd_fit_center.jpg" alt="" class="products__img">

                        <h3 class="products__title">Jubilee black</h3>
                        <span class="products__price">$870</span>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>

                    <article class="products__card">
                        <img src="./img/facebook-dynamic-422209343-1689243046_img_300x300_b798dd_fit_center.jpg" alt="" class="products__img">

                        <h3 class="products__title">Fosil me3</h3>
                        <span class="products__price">$650</span>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>

                    <article class="products__card">
                        <img src="./img/facebook-dynamic-422209343-1689243046_img_300x300_b798dd_fit_center.jpg" alt="" class="products__img">

                        <h3 class="products__title">Duchen</h3>
                        <span class="products__price">$950</span>

                        <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                    </article>
                </div>
            </section>

            <!--==================== TESTIMONIAL ====================-->
            <section class="testimonial section container">
                <div class="testimonial__container grid">
                    <div class="swiper testimonial-swiper">
                        <div class="swiper-wrapper">
                            <div class="testimonial__card swiper-slide">
                                <div class="testimonial__quote">
                                    <i class='bx bxs-quote-alt-left' ></i>
                                </div>
                                <p class="testimonial__description">
                                    They are the best watches that one acquires, also they are always with the latest 
                                    news and trends, with a very comfortable price and especially with the attention 
                                    you receive, they are always attentive to your questions.
                                </p>
                                <h3 class="testimonial__date">March 27. 2021</h3>
        
                                <div class="testimonial__perfil">
                                    <img src="./img/facebook-dynamic-422209343-1689243046_img_300x300_b798dd_fit_center.jpg" alt="" class="testimonial__perfil-img">
        
                                    <div class="testimonial__perfil-data">
                                        <span class="testimonial__perfil-name">Lee Doe</span>
                                        <span class="testimonial__perfil-detail">Director of a company</span>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial__card swiper-slide">
                                <div class="testimonial__quote">
                                    <i class='bx bxs-quote-alt-left' ></i>
                                </div>
                                <p class="testimonial__description">
                                    They are the best watches that one acquires, also they are always with the latest 
                                    news and trends, with a very comfortable price and especially with the attention 
                                    you receive, they are always attentive to your questions.
                                </p>
                                <h3 class="testimonial__date">March 27. 2021</h3>
        
                                <div class="testimonial__perfil">
                                    <img src="http://localhost/Example/img/facebook-dynamic-422209343-1689243046_img_300x300_b798dd_fit_center.jpg" alt="" class="testimonial__perfil-img">
        
                                    <div class="testimonial__perfil-data">
                                        <span class="testimonial__perfil-name">Samantha Mey</span>
                                        <span class="testimonial__perfil-detail">Director of a company</span>
                                    </div>
                                </div>
                            </div>

                            <div class="testimonial__card swiper-slide">
                                <div class="testimonial__quote">
                                    <i class='bx bxs-quote-alt-left' ></i>
                                </div>
                                <p class="testimonial__description">
                                    They are the best watches that one acquires, also they are always with the latest 
                                    news and trends, with a very comfortable price and especially with the attention 
                                    you receive, they are always attentive to your questions.
                                </p>
                                <h3 class="testimonial__date">March 27. 2021</h3>
        
                                <div class="testimonial__perfil">
                                    <img src="http://localhost/Example/img/facebook-dynamic-422209343-1689243046_img_300x300_b798dd_fit_center.jpg" alt="" class="testimonial__perfil-img">
        
                                    <div class="testimonial__perfil-data">
                                        <span class="testimonial__perfil-name">Raul Zaman</span>
                                        <span class="testimonial__perfil-detail">Director of a company</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="swiper-button-next">
                            <i class='bx bx-right-arrow-alt' ></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class='bx bx-left-arrow-alt' ></i>
                        </div>
                    </div>

                    <div class="testimonial__images">
                        <div class="testimonial__square"></div>
                        <img src="./img/facebook-dynamic-422210803-1694427653_img_300x300_b798dd_fit_center.jpg" alt="" class="testimonial__img">
                    </div>
                </div>
            </section>

            <!--==================== NEW ====================-->
            <section class="new section container" id="new">
                <h2 class="section__title">
                    New Arrivals
                </h2>
                
                <div class="new__container">
                    <div class="swiper new-swiper">
                        <div class="swiper-wrapper">
                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="https://media.hasaki.vn/hsk/1695872326500-x-500cp.jpg" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title">Longines rose</h3>
                                    <span class="new__price">$980</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="https://media.hasaki.vn/hsk/1695872326500-x-500cp.jpg" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title">Jazzmaster</h3>
                                    <span class="new__price">$1150</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="https://media.hasaki.vn/hsk/1695872326500-x-500cp.jpg" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title">Dreyfuss gold</h3>
                                    <span class="new__price">$750</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="https://media.hasaki.vn/hsk/1695872326500-x-500cp.jpg" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title">Portuguese rose</h3>
                                    <span class="new__price">$1590</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>                       
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== NEWSLETTER ====================-->
            <section class="newsletter section container">
                <div class="newsletter__bg grid">
                    <div>
                        <h2 class="newsletter__title">Subscribe Our <br> Newsletter</h2>
                        <p class="newsletter__description">
                            Don't miss out on your discounts. Subscribe to our email 
                            newsletter to get the best offers, discounts, coupons, 
                            gifts and much more.
                        </p>
                    </div>

                    <form action="" class="newsletter__subscribe">
                        <input type="email" placeholder="Enter your email" class="newsletter__input">
                        <button class="button">
                            SUBSCRIBE
                        </button>
                    </form>
                </div>
            </section>
        </main>
<?php 
include("footer.php");
?>