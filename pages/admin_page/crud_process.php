<?php 

$mysqli = new mysqli('localhost','root','','system_arduino') or die(mysqli_error($mysqli));


$update = false;
$id=0;
$fname='';
	$lname='';
	$uname='';
	$email='';
	$password='';
	$role='';

if (isset($_POST['add'])) {
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$uname=$_POST['uname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$role=$_POST['role'];

	$mysqli->query("INSERT INTO accounts (firstname,lastname,username,email,password,role) VALUES('$fname','$lname','$uname','$email','$password','$role')") or die($mysqli->error);
	header("location: user_management.php");
	}


	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$mysqli->query("DELETE FROM accounts WHERE id=$id") or die($mysqli->error());
		header("location: user_management.php");
	}

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update =true;
		$result = $mysqli->query("SELECT * FROM accounts WHERE id=$id") or die($mysqli->error());
		if (count($result)==1) {
			$row = $result->fetch_array();
			$fname= $row['firstname'];
			$lname= $row['lastname'];
			$uname= $row['username'];
			$email= $row['email'];
			$password= $row['password'];
			$role= $row['role'];
		}
	}

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$uname=$_POST['uname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$role=$_POST['role'];

	$mysqli->query("UPDATE accounts SET firstname='$fname',lastname='$lname',username='$uname',email='$email',password='$password',role='$role' WHERE id=$id") or  die($mysqli->error);

	header("location: user_management.php");
}

 ?>