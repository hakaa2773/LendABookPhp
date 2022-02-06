<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'lendabook');
$video_borrowing_id=$_GET['id'];
$sql = "UPDATE `tbl_video_borrowing` SET video_borrowing_status = 'Returned' WHERE video_borrowing_id = '$video_borrowing_id '";
mysqli_query($db,$sql);
header('location: ../libViewVideoBorrowing.php');
if($db->query($sql)==TRUE){}
else{
echo "Error:".$sql."<br>".$db->error;
}
?>
