<?php 
session_start();
$video_id = $_GET['id'];

$sqldb = mysqli_connect('localhost', 'root', '', 'lendabook');


 if (isset($_POST['save'])) {
  $customer_id = $_POST['customer_id']; 
  $video_borrowing_date = $_POST['video_borrowing_date']; 
  $video_due_date = $_POST['video_due_date']; 
  $video_borrowing_status = $_POST['video_borrowing_status']; 

 }

 $sql= "INSERT INTO `tbl_video_borrowing` ( `video_id`,`customer_id`,  `video_borrowing_date`, `video_due_date`, `video_borrowing_status`) VALUES ('$video_id', '$customer_id','$video_borrowing_date', '$video_due_date', '$video_borrowing_status')";

if($sqldb->query($sql)===TRUE){
echo "Sucsessfully Add";
//header('location: ../viewMyavorites.php');
}
else{ 
echo "Error:".$sql."<br>".$sqldb->error;
}
 
?>