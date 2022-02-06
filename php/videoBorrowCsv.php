<?php
//export.php
if(isset($_POST["exportCsv"]))
{
$connect = mysqli_connect("localhost", "root", "", "lendabook");
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=videoBorrowing.csv');
$output = fopen("php://output", "w");
fputcsv($output, array('video_borrowing_id ','video_id ','customer_id','video_borrowing_date','video_due_date','video_borrowing_status'));
$query = "SELECT * FROM `tbl_video_borrowing` WHERE video_borrowing_date >= CURDATE()
AND video_borrowing_date < CURDATE() + INTERVAL 1 DAY";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_assoc($result))
{
fputcsv($output, $row);
}
fclose($output);
}
?>