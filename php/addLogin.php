<?php 
session_start();

$database = mysqli_connect('localhost', 'root', '', 'lendabook'); 

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM  tbl_customer WHERE email='$email' AND password='$password'"; 

$exe = $database->query($query);
if($exe->num_rows>0){
    while ($row = $exe->fetch_assoc()) {

    	$_SESSION["customer_id"]=$row['customer_id'];
    	$role = $row ['role'];

        // echo "login succesfully:";
        // header('location: ../librareanHome.php');
    }
    if ($role == "admin") {
    	 header('location: ../adminHome.php');
    }
    elseif ($role == "librarian") {
    	header('location: ../librareanHome.php');
    }
    else{
    	header('location: ../customerHome.php');
    }

}
else{
    if($database->query($query)==TRUE){}
        else{
            echo "Error:".$query."<br>".$database->error;
        }
}
?>