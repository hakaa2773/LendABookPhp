<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'lendabook');
$book_borrowing_id=$_GET['id'];
$sql = "UPDATE `tbl_book_borrowing` SET book_borrowing_status = 'Returned' WHERE book_borrowing_id = '$book_borrowing_id '";
mysqli_query($db,$sql);
header('location: ../libViewBookBorrowing.php');
if($db->query($sql)==TRUE){}
else{
echo "Error:".$sql."<br>".$db->error;
}
?>

