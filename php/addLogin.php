<?php 
session_start();

$database = mysqli_connect('localhost', 'root', '', 'lendabook'); 

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM tbl_customer WHERE email='$email' AND password='$password'"; 

$exe = $database->query($query);
if($exe->num_rows>0){
    while ($row = $exe->fetch_assoc()) {

    	$_SESSION["customer_id"]=$row['customer_id'];

        echo "login succesfully:";
    }

}
else{
    if($database->query($query)==TRUE){}
        else{
            echo "Error:".$query."<br>".$database->error;
        }
}
?>