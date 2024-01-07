<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <header>
          <a href="/php_mvc_blog">Home</a>
          <a href="?controller=post&action=index">Post</a>
          <a href="?controller=product&action=index">Product</a>
          <a href="?controller=category&action=index">Category</a>
     </header>
     <?php require_once './routes.php' ?>
     <footer>
          footer
     </footer>

     
</body>
</html>