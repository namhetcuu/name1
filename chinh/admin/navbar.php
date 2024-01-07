<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="./view/css/styles.css">
        <link rel="stylesheet" href="./view/css/stylee.css">
        

        <title>Sidebar menu responsive</title>
    </head>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>

            <div class="header__img">
                <img src="assets/img/perfil.jpg" alt="">
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="?act=" class="nav__logo">
                        <i class='bx bx-user nav__logo-icon'></i>
                        <span class="nav__logo-name">Hello ! <?php
                        if($_SESSION['username']){
                         echo $_SESSION['username'];
                        }else{
                         echo "";
                        }
                         ?></span>
                    </a>

                    <div class="nav__list">
                        <a href="?act=catalog" class="nav__link ">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Catalog</span>
                        </a>

                        <a href="?act=product" class="nav__link">
                            <i class='bx bx-layer nav__icon' ></i>
                            <span class="nav__name">Product</span>
                        </a>
                        
                        <a href="?act=order" class="nav__link">
                            <i class='bx bx-message-square-detail nav__icon' ></i>
                            <span class="nav__name">Your Order</span>
                        </a>

                        <a href="?act=user" class="nav__link">
                            <i class='bx bx-bookmark nav__icon' ></i>
                            <span class="nav__name">View User</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-folder nav__icon' ></i>
                            <span class="nav__name">View Post</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-bar-chart-alt-2 nav__icon' ></i>
                            <span class="nav__name">Analytics</span>
                        </a>
                    </div>
                </div>

                <a href="#" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
        

        <!--===== MAIN JS =====-->
        <script src="./view/js/main.js"></script>
    </body>
</html>