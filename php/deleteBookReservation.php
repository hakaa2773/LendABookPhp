<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'lendabook');
$favorite_books_id =$_GET['id'];
$sql = "DELETE FROM tbl_favorite_books WHERE favorite_books_id  =$favorite_books_id ";
mysqli_query($db,$sql);
header('location:../customerViewBookReservation.php');
if($db->query($sql)==TRUE){}
else{
echo "Error:".$sql."<br>".$db->error;
}
?>