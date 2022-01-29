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
 	$age = $_POST['age']; 
 	$package_id = $_POST['package_id'];
 	$password = $_POST['password'];

 	# code...
 }

 $sql= "INSERT INTO `tbl_customer` ( `firstname`, `lastname`, `email`, `phone`, `address`, `age`, `package_id`, `password`) VALUES ( '$firstname', '$lastname', '$email', '$phone', '$address', '$age', '$package_id', '$password')";

 
 
if($sqldb->query($sql)===TRUE){
echo "Sucsessfully Add";
header('location: ../viewCustomer.php');

 
}
else{

 
echo "Error:".$sql."<br>".$sqldb->error;
}

 

 

 
?>