<?php

 
session_start(); 
$customer_id = $_SESSION['customer_id'];
$video_id = $_GET['id'];


$sqldb = mysqli_connect('localhost', 'root', '', 'lendabook');

 $sql="";

 if (isset($_POST['save'])) {
  $customer_id = $_POST['customer_id']; 
  $book_id = $_POST['video_id']; 
 }

 $sql= "INSERT INTO `tbl_favorite_video` ( `customer_id`, `video_id`) VALUES ( '$customer_id', '$video_id')";

if($sqldb->query($sql)===TRUE){
echo "Sucsessfully Add";
//header('location: ../viewMyavorites.php');
}
else{ 
echo "Error:".$sql."<br>".$sqldb->error;
}
 
?>