<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'lendabook');
$book_coment_id=$_GET['id'];
$sql = "DELETE FROM tbl_book_comment WHERE book_coment_id =$book_coment_id";
mysqli_query($db,$sql);
header('location:../libViewBookComment.php');
if($db->query($sql)==TRUE){}
else{
echo "Error:".$sql."<br>".$db->error;
}
?>