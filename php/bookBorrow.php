<?php 
session_start();
$book_id = $_GET['id'];

$sqldb = mysqli_connect('localhost', 'root', '', 'lendabook');


 if (isset($_POST['save'])) {
  $customer_id = $_POST['customer_id']; 
  $book_borrowing_date = $_POST['book_borrowing_date']; 
  $book_due_date = $_POST['book_due_date']; 
  $book_borrowing_status = $_POST['book_borrowing_status']; 

 }

 $sql= "INSERT INTO `tbl_book_borrowing` ( `book_id`,`customer_id`,  `book_borrowing_date`, `book_due_date`, `book_borrowing_status`) VALUES ('$book_id', '$customer_id','$book_borrowing_date', '$book_due_date', '$book_borrowing_status')";

if($sqldb->query($sql)===TRUE){
echo "Sucsessfully Add";
//header('location: ../viewMyavorites.php');
}
else{ 
echo "Error:".$sql."<br>".$sqldb->error;
}
 
?>