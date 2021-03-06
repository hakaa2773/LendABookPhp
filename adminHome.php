<!DOCTYPE html>
<html>
<title>Lend A Book</title>
<meta charset="UTF-8">
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
          <a class="nav-link active" aria-current="page" href="adminHome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="php/logout.php">Logout</a>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tabels
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="newLibrarean.php">Add Librarean</a></li>
            <li><a class="dropdown-item" href="viewCustomer.php">View Customers</a></li>            
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



<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="w3-image" src="img/home1.jpg" alt="Hamburger Catering" width="1600" height="800">
      <div class="carousel-caption d-none d-md-block">
        <p class="w3-center w3-padding-large w3-xlarge w3-wide w3-animate-opacity">The more that you read, the more things you will know. The more that you learn, the more places you???ll go.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="w3-image" src="img/home2.jpg" alt="Hamburger Catering" width="1600" height="800">
      <div class="carousel-caption d-none d-md-block">
        <p class="w3-center w3-padding-large w3-xlarge w3-wide w3-animate-opacity">Books are the quietest and most constant of friends; they are the most accessible and wisest of counselors, and the most patient of teachers</p>
      </div>      
    </div>
    <div class="carousel-item">
      <img class="w3-image" src="img/home3.jpg" alt="Hamburger Catering" width="1600" height="800">
      <div class="carousel-caption d-none d-md-block">
        <p class="w3-center w3-padding-large w3-xlarge w3-wide w3-animate-opacity">A book is a version of the world. If you do not like it, ignore it; or offer your own version in return.</p>
      </div>      
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>

  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
      <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Admin<span class="w3-hide-small"> </span>Home</span>
    </div>
  </div>


</div>
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="https://d1whtlypfis84e.cloudfront.net/guides/wp-content/uploads/2019/08/19123105/library-768x513.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Library</h1><br>
      <h5 class="w3-center">Since 1889</h5>
      <p class="w3-large">A service dedicated to students of Sri Lanka Distance learning community. We provide online resources, professional support and guidance to all our students whenever, and from wherever they have chosen to study.a comprehensive learning platform that leverages technology, community, and best practices in literacy to support struggling readers in middle school, high school, and beyond. 
      <p class="w3-large w3-text-grey w3-hide-medium">Students are able to order Videos and Books by are library</p>
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Packages</h1><br>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">Bronze</th>
          <th scope="col">Silver</th>
          <th scope="col">Gold</th>
          <th scope="col">Platinum</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Number of Books per user</th>
          <td>3</td>
          <td>5</td>
          <td>7</td>
          <td>10</td>
        </tr>
        <tr>
          <th scope="row">Number of Videos per user</th>
          <td>5</td>
          <td>7</td>
          <td>9</td>
          <td>10</td>
        </tr>
        <tr>
          <th scope="row">Book lending duration </th>
          <td>3 weeks</td>
          <td>4 weeks</td>
          <td>4 weeks</td>
          <td>5 weeks</td>
        </tr>
        <tr>
          <th scope="row">Video lending duration </th>
          <td>5 Days</td>
          <td>1 weeks</td>
          <td>10 Days</td>
          <td>1 week</td>
        </tr>  
        <tr>
          <th scope="row">Book lending charges  </th>
          <td>50 LKR</td>
          <td>50 LKR</td>
          <td>50 LKR</td>
          <td>50 LKR</td>
        </tr>
        <tr>
          <th scope="row">Video lending charges  </th>
          <td>100 LKR</td>
          <td>80 LKR</td>
          <td>60 LKR </td>
          <td>40 LKR</td>
        </tr> 
        <tr>
          <th scope="row">Annual membership fee  </th>
          <td>1000 LKR</td>
          <td>2000 LKR</td>
          <td>3000 LKR </td>
          <td>5000 LKR</td>
        </tr>                        
      </tbody>
    </table>
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="https://cdnuploads.aa.com.tr/uploads/PhotoGallery/2020/02/17/thumbs_b2_742a38c5098fb9a088685fff6250d9b3.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">      
    </div>    
  </div>
<!--pacagers-->
<div class="row">
<div class="card" style="width: 18rem;">
  <img src="https://static.wixstatic.com/media/d9e4cf_4914d79b1d9e42cfb3c100618e12db17~mv2.png/v1/fill/w_350,h_309,al_c,q_90/9e4cf_4914d79b1d9e42cfb3c100618e12db17~mv2.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bronze</h5>
    <p class="card-text">1000 LKR</p>
    <a href="#home" class="btn btn-dark">Bronze</a>
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="https://crowdfunding.tol.org.in/wp-content/uploads/2019/09/Silver-Package-Graphics-Design.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Silver</h5>
    <p class="card-text">2000 LKR</p>
  <a href="#home" class="btn btn-secondary">Silver</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="https://theislandnow.com/wp-content/uploads/2018/01/gold-package-e1517317572725.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Gold</h5>
    <p class="card-text">3000 LKR</p>
  <a href="#home" class="btn btn-warning">Gold</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="https://crowdfunding.tol.org.in/wp-content/uploads/2019/09/Platinum-Package.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bronze</h5>
    <p class="card-text">5000 LKR</p>
  <a href="#home" class="btn btn-danger">platinum</a>  
  </div>
</div>
</div>
<hr>

</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered By <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Hakaa</a></p>
</footer>

</body>
</html>
