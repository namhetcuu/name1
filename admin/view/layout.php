<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
     <link rel="stylesheet" href="theme/css/styles.css">
     <link rel="stylesheet" href="theme/css/stylee.css">
        <link href="view/pages/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/pages/css/stylee.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
          .image{
               opacity: 1;
               display: block;
               width: 100%;
               height: auto;
               transition: 0.5s ease;
               backface-visibility: hidden;     
          }
          .middle{
               transition: 0.5s ease;
               opacity: 0;
               transform: translate(40rem, 60%);
               -ms-transform: translate(-50%, -50%);
               text-align: center;
               position: absolute;
               top: 50%;
               left: 50%;
          }
          .header__img:hover .image {
          opacity: 1;
          }

          .header__img:hover .middle {
          opacity: 1;
          }
          .profile {
          background-color: #46C1F6;
          color: white;
          font-size: 16px;
          padding: 8px 32px;
          border-radius: 25px;
          box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
          font-size: 20px;
          }
          .middle .profile:before{
          position: absolute;
          content: "";
          height: 15px;
          width: 15px;
          background: #fff;
          left: 50%;
          bottom: 40px;
          transform: translateX(-50%) rotate(45deg);
          transition: 0.5s ease;
          }
          .header__img:hover .profile:before{
          background: #46C1F6;
          }
    </style>
</head>
<body id="body-pd" style="background-color: rgb(226, 226, 226);">
     <!-- <header>
          <a href="/php_mvc_blog">Home</a>
          <a href="?controller=post&action=index">Post</a>
          <a href="?controller=product&action=index">Product</a>
          <a href="?controller=category&action=index">Category</a>
          <a href="?controller=order&action=index">Order</a>
          <a href="?controller=customer&action=index">Customer</a>
     </header> -->
     <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
            <div class="header__img">
                <img src="theme/images/icons/img_avatar.png" alt="" class="image">
                <div class="middle">
                    <div class="profile">
                    <?php
                    if(isset($_SESSION['username'])&&(!empty($_SESSION['username'])))
                         echo $_SESSION['username'];
                    else echo "No person";?>
                    </div>
                </div>
            </div>
     </header>

     <div class="l-navbar" id="nav-bar">
          <nav class="nav">
               <div>
               <a href="?controller=pages&action=dashboard" class="nav__logo">
                    <i class='bx bx-user nav__logo-icon'></i>
                    <span class="nav__logo-name">Hello ! <?php
                    if(isset($_SESSION['username'])&&(!empty($_SESSION['username'])))
                         echo $_SESSION['username'];
                    else echo " ";
                    // if($_SESSION['username']){
                    // echo $_SESSION['username'];
                    // }else{
                    // echo "";
                    // }
                    ?></span>
               </a>

               <div class="nav__list">
                    <a href="?controller=category&action=index" class="nav__link ">
                    <i class='bx bx-grid-alt nav__icon' ></i>
                         <span class="nav__name">Catalog</span>
                    </a>

                    <a href="?controller=product&action=index" class="nav__link">
                         <i class='bx bx-layer nav__icon' ></i>
                         <span class="nav__name">Product</span>
                    </a>
                    
                    <a href="?controller=order&action=index" class="nav__link">
                         <i class='bx bx-message-square-detail nav__icon' ></i>
                         <span class="nav__name">Your Order</span>
                    </a>

                    <a href="?controller=customer&action=index" class="nav__link">
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

               <a href="?controller=pages&action=logout" class="nav__link">
               <i class='bx bx-log-out nav__icon' ></i>
               <span class="nav__name">Log Out</span>
               </a>
          </nav>
     </div>
     <?php require_once './routes.php' ?>
     

     <script src="theme/js/main.js"></script>
</body>
</html>