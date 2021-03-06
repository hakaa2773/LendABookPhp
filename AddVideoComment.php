<!DOCTYPE html>
<html xmlns>
<meta charset="ISO-8859-1">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lend A Book</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
<body>

  <?php

  session_start();
$id = $_GET['id'];


  ?>

<!-- Navbar (sit on top) -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="img/logo.jpg" alt="Trulli" width="100" height="100">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="customerHome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tabels
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="viewVideo.php">View Video</a>
            <li><a class="dropdown-item" href="viewBook.php">View Book</a></li>
            <li><a class="dropdown-item" href="customerViewBookReservation.php">customer ViewBook Reservation</a></li>
            <li><a class="dropdown-item" href="customerViewVideoReservation.php">customer View VideoReservation</a></li>
            <li><a class="dropdown-item" href="customerViewFavBook.php">customer View Favorite Book </a></li>
            <li><a class="dropdown-item" href="customerViewfavVideo.php">customer View Favorite Video</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

 <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
      <div class="container-fluid">
        <h1 class="display-2"><center><B>New Video Comment</B></center></h1>
            <form action="php/videoComment.php?id=<?php echo($id)?>" method="post">
             
                    <div class="mb-3 row">
                      <label for="video_comment" class="col-sm-2 col-form-label">Comment</label>
                          <div class="col-sm-10">
                            <textarea type="text"  name="video_comment" value="" class="form-control"></textarea> 
                          </div>
                    </div>                       
                    <button class="btn btn-primary" type="submit" name="save">Add Comment</button>         
                    
          </form> 
        </div>    
        </div>
      </div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered By <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Hakaa</a></p>
</footer>

</body>
</html>