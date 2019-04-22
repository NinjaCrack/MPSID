<?php

session_start();

	if(!isset($_SESSION['SESS_ID']) || (trim($_SESSION['SESS_ID']) =='')) {
				header("location:../access-denied.php");
			
		exit();
		}
	?>