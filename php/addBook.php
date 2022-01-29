<?php

 
session_start(); 

$sqldb = mysqli_connect('localhost', 'root', '', 'lendabook');

 $sql="";

 if (isset($_POST['save'])) {
  $book_name = $_POST['book_name']; 
  $ISBM = $_POST['ISBM']; 
  $number_of_copies = $_POST['number_of_copies']; 
  $author = $_POST['author']; 
  # code...
 }

 $sql= "INSERT INTO `tbl_book` ( `book_name`, `ISBM`, `number_of_copies`, `author`) VALUES ( '$book_name', '$ISBM', '$number_of_copies', '$author')";

if($sqldb->query($sql)===TRUE){
echo "Sucsessfully Add";
header('location: ../viewBook.php');
}
else{ 
echo "Error:".$sql."<br>".$sqldb->error;
}
 
?>