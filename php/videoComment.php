<?php 
session_start(); 
$customer_id = $_SESSION['customer_id'];
$video_id = $_GET['id'];

$sqldb = mysqli_connect('localhost', 'root', '', 'lendabook');


 if (isset($_POST['save'])) {
  $video_comment = $_POST['video_comment']; 

 }

 $sql= "INSERT INTO `tbl_video_comment` (`customer_id`, `video_id`, `video_comment`) VALUES ('$customer_id', '$video_id', '$video_comment')";

if($sqldb->query($sql)===TRUE){
echo "Sucsessfully Add";
header('location: ../viewVideoComments.php');
}
else{ 
echo "Error:".$sql."<br>".$sqldb->error;
}
 
?>