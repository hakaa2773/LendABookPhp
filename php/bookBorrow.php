<?php 
session_start();
$book_id = $_GET['id'];

$sqldb = mysqli_connect('localhost', 'root', '', 'lendabook');

 if (isset($_POST['save'])) {
  $customer_id = $_POST['customer_id']; 
  $book_borrowing_date = $_POST['book_borrowing_date']; 
  $book_due_date = $_POST['book_due_date']; 
  $book_borrowing_status = $_POST['book_borrowing_status']; 


  $sql1 = "UPDATE `tbl_book` SET `number_of_copies` = `number_of_copies`-1 WHERE id='$book_id'";


  $sql2= "INSERT INTO `tbl_book_borrowing` ( `book_id`,`customer_id`,  `book_borrowing_date`, `book_due_date`, `book_borrowing_status`) VALUES ('$book_id', '$customer_id','$book_borrowing_date', '$book_due_date', '$book_borrowing_status')";

  $sql=$sql1.";".$sql2;
  $res= mysqli_multi_query( $sqldb,$sql);

 } 

if($res===TRUE){
echo "Sucsessfully Add";
header('location: ../libViewBookBorrowing.php');
}
else{ 
echo "Error:".$sql."<br>".$sqldb->error;
}
 
?>