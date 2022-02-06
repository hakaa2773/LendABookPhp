<?php 
session_start();
$video_id = $_GET['id'];

$sqldb = mysqli_connect('localhost', 'root', '', 'lendabook');


 if (isset($_POST['save'])) {
  $customer_id = $_POST['customer_id']; 
  $video_borrowing_date = $_POST['video_borrowing_date']; 
  $video_due_date = $_POST['video_due_date']; 
  $video_borrowing_status = $_POST['video_borrowing_status']; 



  $sql1 = "UPDATE `tbl_video` SET `number_of_copies` = `number_of_copies`-1 WHERE id='$video_id '";


   $sql2= "INSERT INTO `tbl_video_borrowing` ( `video_id`,`customer_id`,  `video_borrowing_date`, `video_due_date`, `video_borrowing_status`) VALUES ('$video_id', '$customer_id','$video_borrowing_date', '$video_due_date', '$video_borrowing_status')";


   $sql=$sql1.";".$sql2;
  $res= mysqli_multi_query( $sqldb,$sql);

 }



if($res===TRUE){
echo "Sucsessfully Add";
header('location: ../libViewVideoBorrowing.php');
}
else{ 
echo "Error:".$sql."<br>".$sqldb->error;
}
 
?>