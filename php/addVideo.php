<?php

 
session_start(); 

$sqldb = mysqli_connect('localhost', 'root', '', 'lendabook');

 $sql="";

 if (isset($_POST['save'])) {
  $video_name = $_POST['video_name']; 
  $video_age_restrictions = $_POST['video_age_restrictions']; 
  $number_of_copies = $_POST['number_of_copies']; 
  # code...
 }

 $sql= "INSERT INTO `tbl_video` (`video_name`, `video_age_restrictions`, `number_of_copies`) VALUES ( '$video_name', '$video_age_restrictions', '$number_of_copies')";
 
if($sqldb->query($sql)===TRUE){
echo "Sucsessfully Add";
header('location: ../libViewVideo.php');
}
else{ 
echo "Error:".$sql."<br>".$sqldb->error;
}
 
?>