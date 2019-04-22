<!DOCTYPE html>
<html>
<head>
	<title>Multi-purpose Student ID</title>
		<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"">	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,700">
	<link rel="stylesheet" href="../css/front.css">
	<link rel="stylesheet" href="../css/custom.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="../js/modernizr.js"></script>


<body>
<section class="cd-intro">
	<div class="cd-intro-content mask">
		<h1 data-content="Multi-purpose Student ID"><span>Multi-purpose Student ID</span></h1>
		<div class="action-wrapper">
			<p>
				<a href="#0" class="cd-btn main-action" data-toggle="modal" data-target="#modalLoginForm">Login</a>
				
				<a href="#0" class="cd-btn" data-toggle="modal" data-target="#modalRegisterForm">Signup</a>
			</p>
		</div>
	</div>
</section>

<!--Login Modal-->
          <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Login</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="login-exec.php" method="post">
        
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="defaultForm-email" class="form-control validate" maxLength="64" name="email" placeholder="Email" title="Please provide only a valid E-mail Address"  required>
          <label data-error="wrong" data-success="right" for="defaultForm-email">Enter Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="showpw" name="password" class="form-control validate">
          <input type="checkbox" onclick="show()"><label data-error="wrong" data-success="right" for="defaultForm-pass" required>Show password</label><br>
          <label data-error="wrong" data-success="right" for="defaultForm-pass" required>Enter Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn btn-block modbtn">Login</button>
      </div>
      </form>
      
    </div>
  </div>
</div>
<!--End of Login Modal-->
<!--Sign Up Modal-->
        <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign Up</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        
        <form action="signup.php" method="post">
          <div class="form-row">
            <div class="col-md-auto mb-3">
              <label for="validationDefault01">First name</label>
                    <input type="text" class="form-control" id="validationDefault01" name="fname" placeholder="First name"  required>
            </div>
            <div class="col-md-auto mb-3">
              <label for="validationDefault01">Last name</label>
                    <input type="text" class="form-control" id="validationDefault02" name="lname" placeholder="Last name"  required>
            </div>
            <div class="col-md-auto mb-3">
      <label for="validationDefaultUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">></span>
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername"  size="48" name="uname" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
          </div>
          <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationDefault03">Email</label>
          <input type="text" class="form-control" id="validationDefault03" maxLength="64" pattern=".+@.+.com" name="email" placeholder="Email" title="Please provide only a valid E-mail Address" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="validationDefault03">Password</label>
          <input type="password" class="form-control" id="show" placeholder="Password" name="password" required>
          <input type="checkbox" onclick="shows()"><label data-error="wrong" data-success="right" for="defaultForm-pass" required>Show password</label><br>
        </div>
         <div class="col-md-6 mb-3">
          <input type="hidden" value="user" name="role">
        </div>
    </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" name="signup" class="btn btn-block modbtn">Sign Up</button>
      </div>
        </form>
    </div>
  </div>
</div>
      <!--End of Sign Up-->
      <script type="text/javascript">
    function show() {
  var x = document.getElementById("showpw");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>   
   <script type="text/javascript">
    function shows() {
  var x = document.getElementById("show");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
  </script>
</body>
</html>