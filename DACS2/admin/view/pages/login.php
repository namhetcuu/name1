<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <!-- <link href="theme/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="theme/theme/font-awesome.css" rel="stylesheet"> -->

    <!-- <link href="theme/css/animate_css.css" rel="stylesheet"> -->
    <!-- <link href="theme/css/style_csss.css" rel="stylesheet"> -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/stylee.css" rel="stylesheet">

</head>

<body class="gray-bg" style="background-image: url('./images/hero/hero-9.jpg');">

    <div class="middle-box text-center loginscreen animated fadeInDown" 
    >
        <div>
            <div>

                <!-- <h1 class="logo-name">LOGIN+</h1> -->

            </div>
            <h3>Welcome to IN+</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 
			50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form method="post" role="form" action="?controller=pages&action=login">
                <div class="form-group">
                    <input type="text"name="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password"name="password" class="form-control" placeholder="Password" required="">
                </div>
                <input type="submit" name="login" value="Login" class="btn btn-primary block full-width m-b"></input>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <!-- <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> -->
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
