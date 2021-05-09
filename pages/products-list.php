<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link rel="icon" href="/Il-cappellaio-matto/resources/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/Il-cappellaio-matto/css/index.css">
    <link rel="stylesheet" href="/Il-cappellaio-matto/css/products-list.css">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top justify-content-between">
      <div class="container">
        <a class="navbar-brand" href="/Il-cappellaio-matto/index.php">
          <img class="navbar-logo" src="/Il-cappellaio-matto/resources/logo-white.png">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav" id="pages">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/Il-cappellaio-matto/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Il-cappellaio-matto/pages/products-list.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/Il-cappellaio-matto/pages/about-us.php">About us</a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Account
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php 
                session_start();
                if($_SESSION["account"]){
                  print('<a class="dropdown-item" href="/Il-cappellaio-matto/pages/profile.php">My profile</a>');
                  print('<a class="dropdown-item" href="/Il-cappellaio-matto/pages/confirm.php?reason=sign-out">Sign out</a>');
                } else {
                  print('<a class="dropdown-item" href="/Il-cappellaio-matto/pages/sign-in.php">Sign in</a>');
                  print('<a class="dropdown-item" href="/Il-cappellaio-matto/pages/sign-up.php">Sign up</a>');
                }
              ?>
            </div>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Il-cappellaio-matto/pages/shopping-cart.php"><i class="fas fa-shopping-cart"></i> / 0€</a>
          </li>
        </ul>
      </div>
    </nav>

    <br><br><br><br>

    <div class="container text-center">
        <h2>All products</h2>
        <br>
        <div class="row justify-content-center">
          <a class="item-list-link" href="/Il-cappellaio-matto/pages/product-page.php?id=1">
            <img class="item-list-image" src="/Il-cappellaio-matto/resources/images/cappelli/cap1.jpg">
            <h5 class="item-list-text">polo cap</h5>
            <h5 class="item-list-text">19 €</h5>
          </a>
          <a class="item-list-link" href="/Il-cappellaio-matto/pages/product-page.php?id=1">
            <img class="item-list-image" src="/Il-cappellaio-matto/resources/images/cappelli/cap5.jpg">
            <h5 class="item-list-text">pink cap</h5>
            <h5 class="item-list-text">19 €</h5>
          </a>
          <a class="item-list-link" href="/Il-cappellaio-matto/pages/product-page.php?id=1">
            <img class="item-list-image" src="/Il-cappellaio-matto/resources/images/cappelli/cap3.jpg">
            <h5 class="item-list-text">jordan cap</h5>
            <h5 class="item-list-text">19 €</h5>
          </a>
        </div>
        <div class="row justify-content-center">
          <a class="item-list-link" href="/Il-cappellaio-matto/pages/product-page.php?id=1">
            <img class="item-list-image" src="/Il-cappellaio-matto/resources/images/cappelli/cap9.jpg">
            <h5 class="item-list-text">tommy cap</h5>
            <h5 class="item-list-text">19 €</h5>
          </a>
          <a class="item-list-link" href="/Il-cappellaio-matto/pages/product-page.php?id=1">
            <img class="item-list-image" src="/Il-cappellaio-matto/resources/images/cappelli/cap8.jpg">
            <h5 class="item-list-text">north face cap</h5>
            <h5 class="item-list-text">19 €</h5>
          </a>
          <a class="item-list-link" href="/Il-cappellaio-matto/pages/product-page.php?id=1">
            <img class="item-list-image" src="/Il-cappellaio-matto/resources/images/cappelli/cap2.jpg">
            <h5 class="item-list-text">nike cap</h5>
            <h5 class="item-list-text">19 €</h5>
          </a>
        </div>
        <div class="row justify-content-center">
          <a class="item-list-link" href="/Il-cappellaio-matto/pages/product-page.php?id=1">
            <img class="item-list-image" src="/Il-cappellaio-matto/resources/images/cappelli/cap9.jpg">
            <h5 class="item-list-text">tommy cap</h5>
            <h5 class="item-list-text">19 €</h5>
          </a>
          <a class="item-list-link" href="/Il-cappellaio-matto/pages/product-page.php?id=1">
            <img class="item-list-image" src="/Il-cappellaio-matto/resources/images/cappelli/cap8.jpg">
            <h5 class="item-list-text">north face cap</h5>
            <h5 class="item-list-text">19 €</h5>
          </a>
          <a class="item-list-link" href="/Il-cappellaio-matto/pages/product-page.php?id=1">
            <img class="item-list-image" src="/Il-cappellaio-matto/resources/images/cappelli/cap2.jpg">
            <h5 class="item-list-text">nike cap</h5>
            <h5 class="item-list-text">19 €</h5>
          </a>
        </div>
        <div class="row justify-content-center">
          <a class="item-list-link" href="/Il-cappellaio-matto/pages/product-page.php?id=1">
            <img class="item-list-image" src="/Il-cappellaio-matto/resources/images/cappelli/cap9.jpg">
            <h5 class="item-list-text">tommy cap</h5>
            <h5 class="item-list-text">19 €</h5>
          </a>
          <a class="item-list-link" href="/Il-cappellaio-matto/pages/product-page.php?id=1">
            <img class="item-list-image" src="/Il-cappellaio-matto/resources/images/cappelli/cap8.jpg">
            <h5 class="item-list-text">north face cap</h5>
            <h5 class="item-list-text">19 €</h5>
          </a>
          <a class="item-list-link" href="/Il-cappellaio-matto/pages/product-page.php?id=1">
            <img class="item-list-image" src="/Il-cappellaio-matto/resources/images/cappelli/cap2.jpg">
            <h5 class="item-list-text">nike cap</h5>
            <h5 class="item-list-text">19 €</h5>
          </a>
        </div>
    </div>

    <br>

    <nav id="pagination-ui">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item active"><a class="page-link" href="/Il-cappellaio-matto/pages/products-list.php?page=1">1</a></li>
        <li class="page-item"><a class="page-link" href="/Il-cappellaio-matto/pages/products-list.php?page=2">2</a></li>
        <li class="page-item"><a class="page-link" href="/Il-cappellaio-matto/pages/products-list.php?page=3">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </nav>

    <br><br><br>

    <footer class="bg-dark text-center text-white">
        <div class="container p-4">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
                repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
                eum harum corrupti dicta, aliquam sequi voluptate quas.
            </p>
            <div class="container">
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i class="fab fa-google"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"><i class="fab fa-github"></i></a>
            </div>
        </div>
        <div id="footer-bottom-line" class="text-center p-3">
            © 2021 Copyright:
            <a class="text-white" href="https://github.com/MrC3drik/Capp-L">Il Cappellaio Matto</a>
        </div>
    </footer>
</body>
</html>