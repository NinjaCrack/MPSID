
<?php

	session_start();
	require_once('config.php');
	$link = mysqli_connect(DB_HOST, DB_USER);
	
	
	if (!$link) {
		die ('Failed to connect to server:'. mysqli_error());
	
	}
	
	$db = mysqli_select_db($link, "system_arduino");
	if (!$db) {
		die ("Unable to select database");
	}
	

	$email = $_POST['email']=filter_var($_POST['email']); 
	$password = $_POST['password']=filter_var($_POST['password']);
	
	
	
	$qry="SELECT * FROM accounts WHERE email='$email' AND password='$password' ";
	
	$result = mysqli_query($link, $qry);
	
	
	if($result) {
		
			if(mysqli_num_rows($result) == 1) {
				session_regenerate_id();
				$member = mysqli_fetch_assoc($result);
				$_SESSION['SESS_ID'] = $member['id'];
				$_SESSION['SESS_FIRST_NAME'] = $member['firstname'];
				$_SESSION['SESS_LAST_NAME'] = $member['lastname'];
				$_SESSION['SESS_USER_NAME'] = $member['username'];
				$_SESSION['SESS_EMAIL'] = $member['email'];
				$_SESSION['SESS_PASSWORD'] = $member['password'];
				$_SESSION['SESS_ROLE'] = $member['role'];

				if ($member['role'] == 'admin') {
				session_write_close();
					//echo "<script> alert('You logged as Admin!'); window.location.href='admin_page/admin_index.php';</script>";
				header("location: admin_page/admin_index.php");
				exit();
				}
				else{
					session_write_close();
				//	echo "<script> alert('You logged as User!'); window.location.href='user_page/user_index.php';</script>";
						
				header("location: user_page/user_index.php");
				exit();
				}

			}
	
	else {
		echo "<script> alert('Login Failed! Check your email and password'); window.location.href='index.php';</script>";
		
		exit();
		}
	}
	else {
		
		die ("Query Failed");
	}
	
	?>

