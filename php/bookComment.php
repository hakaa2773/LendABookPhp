<?php 
session_start(); 
$customer_id = $_SESSION['customer_id'];
$book_id = $_GET['id'];

$sqldb = mysqli_connect('localhost', 'root', '', 'lendabook');


 if (isset($_POST['save'])) {
  $book_comment = $_POST['book_comment']; 

 }

 $sql= "INSERT INTO `tbl_book_comment` (`customer_id`, `book_id`, `book_comment`) VALUES ('$customer_id', '$book_id', '$book_comment')";

if($sqldb->query($sql)===TRUE){
echo "Sucsessfully Add";
header('location: ../viewBookComments.php');
}
else{ 
echo "Error:".$sql."<br>".$sqldb->error;
}
 
?>