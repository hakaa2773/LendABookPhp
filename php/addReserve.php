<?php

 
session_start(); 
$customer_id = $_SESSION['customer_id'];
$book_id = $_GET['id'];


$sqldb = mysqli_connect('localhost', 'root', '', 'lendabook');

 $sql="";

 if (isset($_POST['save'])) {
  $customer_id = $_POST['customer_id']; 
  $book_id = $_POST['book_id']; 
 }

 $sql= "INSERT INTO `tbl_book_reserve` ( `customer_id`, `book_id`) VALUES ( '$customer_id', '$book_id')";

if($sqldb->query($sql)===TRUE){
echo "Sucsessfully Add";
header('location: ../customerViewBookReservation.php');
}
else{ 
echo "Error:".$sql."<br>".$sqldb->error;
}
 
?>