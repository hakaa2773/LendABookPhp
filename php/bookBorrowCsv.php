<?php
//export.php
if(isset($_POST["exportCsv"]))
{
$connect = mysqli_connect("localhost", "root", "", "lendabook");
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=bookBorrowing.csv');
$output = fopen("php://output", "w");
fputcsv($output, array('book_borrowing_id','book_id ','customer_id','book_borrowing_date','book_due_date','book_borrowing_status'));
$query = "SELECT * FROM `tbl_book_borrowing` WHERE book_borrowing_date >= CURDATE()
AND book_borrowing_date < CURDATE() + INTERVAL 1 DAY";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_assoc($result))
{
fputcsv($output, $row);
}
fclose($output);
}
?>