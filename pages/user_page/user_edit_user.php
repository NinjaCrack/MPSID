<?php
require_once('auth.php');
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,700">
<link rel="stylesheet" type="text/css" href="../../css/custom.css">
</head>
<body>
	<?php include("user_nav.php"); ?>

<div class="container con pt-4 mb-4 pb-5">
		<div class="row">
			<div class="col-sm">
				
					
			<h1>EDIT PROFILE</h1>
			
			    <form action="user_update_profile.php" method="post">
          <div class="form-row">
            <div class="col-md-auto mb-3">
              <label for="validationDefault01">First name</label>
                    <input type="text" class="form-control" id="validationDefault01" size="71"  name="fname" placeholder="First name" value="<?php echo $_SESSION['SESS_FIRST_NAME'];?>"  required>
            </div>
        </div>
         <div class="form-row">
            <div class="col-md-auto mb-3">
              <label for="validationDefault01">Last name</label>
                    <input type="text" class="form-control" id="validationDefault02" size="71"  name="lname" placeholder="Last name"  value="<?php echo $_SESSION['SESS_LAST_NAME'];?>"  required>
            </div>
        </div>
         <div class="form-row">
            <div class="col-md-auto mb-3">
      <label for="validationDefaultUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">></span>
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername"  size="66" name="uname" value="<?php echo $_SESSION['SESS_USER_NAME'];?>" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
          </div>
          <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationDefault03">Email</label>
          <input type="text" class="form-control" id="validationDefault03" maxLength="64"  pattern=".+@.+.com"  value="<?php echo $_SESSION['SESS_EMAIL'];?>" name="email" placeholder="Email" title="Please provide only a valid E-mail Address" required>
        </div>
    </div>
         <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationDefault03">Password</label>
          <input type="password" class="form-control" id="showpass" placeholder="Password" value="<?php echo $_SESSION['SESS_PASSWORD'];?>" name="password" required>
          <input type="checkbox" onclick="showpw()"><label data-error="wrong" data-success="right" for="defaultForm-pass" required>Show password</label><br>
        </div>
         <div class="col-md-6 mb-3">
          <input type="hidden" value="user" name="role">
        </div>
        <div>
           <input type="hidden" name="id" value="<?php echo $_SESSION['SESS_ID'];?>" />
        </div>
    </div>
				
				 <button type="submit" class="btn btn-primary" name="update">Update</button>
				</form>
					
			</div>
		</div>
		
	</div>
<script type="text/javascript">
    function showpw() {
  var x = document.getElementById("showpass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>
</body>
</html>