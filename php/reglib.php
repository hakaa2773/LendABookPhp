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
 	$role = "librarian";
 	$package = "Non";
 	
 }

 $sql= "INSERT INTO `tbl_customer` (`firstname`, `lastname`, `email`, `phone`, `address`, `dob`, `password`,`role`,`package`) VALUES ( '$firstname', '$lastname', '$email', '$phone', '$address', '$dob', '$password','$role','$package')"; 
if($sqldb->query($sql)===TRUE){
echo "Sucsessfully Add ";
header('location: ../viewCustomer.php'); 
}
else{

 
echo "Error:".$sql."<br>".$sqldb->error;
}
 
?>