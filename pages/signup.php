<?php
$mysqli = new mysqli('localhost','root','','system_arduino') or die(mysqli_error($mysqli));

if (isset($_POST['signup'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$uname=$_POST['uname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$role=$_POST['role'];

	$mysqli->query("INSERT INTO accounts (firstname,lastname,username,email,password,role) VALUES('$fname','$lname','$uname','$email','$password','$role')") or die($mysqli->error);
	echo "<script> alert('Sign Up Success! Your can now login to your new account!'); window.location.href='index.php';</script>";
	}

?>