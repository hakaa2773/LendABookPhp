<!DOCTYPE html>
<html >
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
</style>
<body >


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
          <a class="nav-link active" aria-current="page" href="librareanHome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tabels
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
           <li><a class="dropdown-item" href="libViewBook.php">Lib View Book</a></li>
            <li><a class="dropdown-item" href="libViewBookReservation.php">Lib View Book Reservation</a></li>
            <li><a class="dropdown-item" href="libViewVideoReservation.php">Lib View Video Reservation</a></li>
            <li><a class="dropdown-item" href="libViewVideo.php">Lib View Video</a></li>
            <li><a class="dropdown-item" href="newBook.php">New Book</a></li>
            <li><a class="dropdown-item" href="newVideo.php">New Video</a></li>
            <li><a class="dropdown-item" href="libViewVideo.php">View Video</a>
            <li><a class="dropdown-item" href="libViewBook.php">View Book</a></li>
            <li><a class="dropdown-item" href="libViewBookBorrowing.php">View Book Borrowing</a></li>
            <li><a class="dropdown-item" href="libViewVideoBorrowing.php">View video Borrowing</a></li>
            <li><a class="dropdown-item" href="viewCustomer.php">View Customers</a></li>
            <li><a class="dropdown-item" href="libViewBookComment.php">View Book Comment</a></li>
            <li><a class="dropdown-item" href="libViewVideoComment.php">View Video Comment</a></li>
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



<br><br>
<div class="contact py-sm-5" style="opacity: 0.8;">
<div class="container py-xl-4 py-lg-2">
<h1 class="text-center" >View Book Reservation</h1>
<!-- <?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'lendabook');
$results = mysqli_query($db, "SELECT * FROM  tbl_book_reserve");
?> -->

<?php
$db = mysqli_connect('localhost', 'root', '', 'lendabook');
$results = mysqli_query($db, "SELECT  tbl_book.book_name, tbl_customer.email FROM tbl_book_reserve 
INNER JOIN tbl_book ON tbl_book_reserve.book_id=tbl_book.id 
INNER JOIN tbl_customer ON tbl_book_reserve.customer_id = tbl_customer.customer_id;");
?>



<div class="card-body">
<div class="table-responsive">
<table class="table table-dark table-striped" width="100%" cellspacing="0">
<thead>
<tr>
<!-- <th>Id</th> -->
<th>Customer Email</th>
<th>Book Name</th>
</tr>
</thead>
<tbody>
<?php while ($row = mysqli_fetch_array($results)) { ?>
<tr>
<!-- <td><?php echo $row['reserve _id']; ?></td> -->
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['book_name']; ?></td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>

</div>
</div>
</body>
</html>