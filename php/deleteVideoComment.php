<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'lendabook');
$video_comment_id=$_GET['id'];
$sql = "DELETE FROM tbl_video_comment WHERE video_comment_id =$video_comment_id";
mysqli_query($db,$sql);
header('location:../libViewVideoComment.php');
if($db->query($sql)==TRUE){}
else{
echo "Error:".$sql."<br>".$db->error;
}
?>