<?php 
session_start();

$database = mysqli_connect('localhost', 'root', '', 'lendabook'); 

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM tbl_librarian WHERE email='$email' AND password='$password'"; 

$exe = $database->query($query);
if($exe->num_rows>0){
    while ($row = $exe->fetch_assoc()) {

    	$_SESSION["librarian_id"]=$row['librarian_id'];
    	$role = $row ['role'];

        // echo "login succesfully:";
        // header('location: ../librareanHome.php');
    }
    if ($role == "admin") {
    	 //header('location: ../librareanHome.php');
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