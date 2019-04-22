<?php
require_once('config.php');

if($_POST) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $id = $_POST['id'];
 	$connect = mysqli_connect(DB_HOST, DB_USER);

 	if (!$connect) {
		die ('Failed to connect to server:'. mysqli_error());
	
	}
	
	$db = mysqli_select_db($connect, "system_arduino");
	if (!$db) {
		die ("Unable to select database");
	}

    $sql = "UPDATE accounts SET firstname = '$fname', lastname = '$lname', username = '$uname', email = '$email',password='$password' WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
        echo "<script> alert('Update Successfully! you need to Login to your updated Account'); window.location.href='../logout.php';</script>";
    
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}
?>