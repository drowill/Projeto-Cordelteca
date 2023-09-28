<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cordel</title>
  <style>
    img {
      pointer-events: none;
    }
  </style>
</head>
<body class="bg-dark">
  
<nav class="sticky-top navbar navbar-expand-lg bg-info">
        <div class="container">
            <a class="navbar-brand" href="/">Cordelteca UFRN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php 
                
                if(!isset($_SESSION['admin'])){
                    echo '<ul class="navbar-nav">';
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" aria-current="page" href="/lista">Listar cordeis</a>';
                    echo '</ul>';
                    echo '<ul class="navbar-nav">';
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" aria-current="page" href="/login">Login</a>';
                    echo '</ul>';

                } else {
                    echo '<ul class="navbar-nav">';
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" aria-current="page" href="/admin/dashboard">Dashboard</a>';
                    echo '</ul>';
                    echo '<ul class="navbar-nav">';
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" aria-current="page" href="/criar">Criar Cordel</a>';
                    echo '</ul>';
                    echo '<ul class="navbar-nav">';
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" aria-current="page" href="/logout">Logout</a>';
                    echo '</ul>';
                }
                
                ?>
            </div>
        </div>
    </nav>

  <div class="container ">
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class=" carousel-item active">
          <img src="/img/page1.jpg" class="d-block w-50" alt="">
        </div>
        <div class="carousel-item">
          <img src="/img/page4.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="/img/page5.jpg" class="d-block w-100" alt="">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  
</body>
</html>