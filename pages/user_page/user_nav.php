<?php

require_once('auth.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,700">	
  <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
    <!--js-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,700">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <!-- <link rel="stylesheet" type="text/css" href="../../css/custom.css">-->
  <link rel="stylesheet" type="text/css" href="../../css/header.css">
</head>

<body>
<nav class="navbar sticky-top navbar-expand-lg nav">
  <div class="container">

    <a class="navbar-brand mr-5" href="user_index.php"><img src="../../img/MPSID.png" height="50" width="220"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon mytoggler"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="nav navbar-nav navbar-right">
      <li class="navbar nav-item">
        <a class="nav-link" href="user_index.php">Home</a>
      </li>
     <!-- <li class="navbar nav-item">
        <a class="nav-link" href="user_rfid.php">RFID System</a>
      </li> -->
      <li class="navbar nav-item">
        <a class="nav-link" href="user_arduino_tutorials.php">Arduino Tutorials</a>
      </li>
       <li class="navbar nav-item mr-5">
        <a class="nav-link mr-5" href="user_about_us.php">About Us</a>
      </li>
      <li style="margin-left: 120px;">
        <div class="col-12 pt-2" >
          
        <!-- Default dropleft button -->
          <div class="dropdown ml-5">
            <button class="btn nav dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <a href="" class="drp" > <?php echo $_SESSION['SESS_USER_NAME'];?> (<i> <?php echo $_SESSION['SESS_ROLE'];?> ) </i> <img src="../../img/profile2.png"/>    </a><br>
            </button>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                
              <a href="user_edit_user.php" class="dropdown-item drp-link"> <img src="../../img/profile2.png"/>  <?php echo $_SESSION['SESS_FIRST_NAME'];?> <?php echo $_SESSION['SESS_LAST_NAME'];?>  </a><br>
             <a href="" class=" dropdown-item drp-link"> <img src="../../img/rfid_prof.png"/> RFID Profile</a> <br>
             <a href="../logout.php" class="dropdown-item drp-link"><img src="../../img/logout.png"/>Logout</a>
             
            </div>
            </div>

              </div>

              </li>

          </ul>
       </div>
  </div>
</nav>
</body>
</html>