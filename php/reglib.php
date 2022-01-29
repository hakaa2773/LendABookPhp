<?php

 
session_start(); 

$sqldb = mysqli_connect('localhost', 'root', '', 'lendabook');

 $sql="";


 if (isset($_POST['save'])) {
 	$firstname = $_POST['firstname']; 
 	$lastname = $_POST['lastname']; 
 	$email = $_POST['email']; 
 	$phone = $_POST['phone']; 
 	$address = $_POST['address']; 
 	$dob = $_POST['dob']; 
 	$password = $_POST['password'];
 }

 $sql= "INSERT INTO `tbl_librarian` ( `firstname`, `lastname`, `email`, `phone`, `address`, `dob`, `password`) VALUES ( '$firstname', '$lastname', '$email', '$phone', '$address', '$dob', '$password')";
 
if($sqldb->query($sql)===TRUE){
echo "Sucsessfully Add ";
header('location: ../viewLibrarean.php'); 
}
else{

 
echo "Error:".$sql."<br>".$sqldb->error;
}
 
?>