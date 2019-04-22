<?php

require_once('auth.php');
require_once('crud_process.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>User Mnagement</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,700">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body class="con">
  <?php include("admin_nav.php"); ?>
    

      <h2 class="pb-2">USER MANAGEMENT </h2>
      <div class="pb-4">
        
      <a href="" class="btn btn-primary con" data-toggle="modal" data-target="#add_user">Add User</a>
      <a href="" class="btn btn-primary con " data-toggle="modal" data-target="#edit">Edit User<sup> <span class="badge badge-info"> <?php echo $fname; ?>  </span></sup></a>
  

      </div>
   
    <div class="col-xl pl-4 pr-4 pb-5
    ">
        <?php
  $mysqli = new mysqli('localhost','root','','system_arduino') or die(mysqli_error($mysqli));
  $result = $mysqli->query("SELECT * FROM accounts") or die($mysqli->error);
?>
    

        <table id="datatables" class="table con display nowrap" style="width:100%">
          <thead >
            <tr>
               <th scope="col">FIRSTNAME</th>
               <th scope="col">LASTNAME</th>
               <th scope="col">USERNAME</th>
               <th scope="col">EMAIL</th>
               <th scope="col">PASSWORD</th>
               <th scope="col">USER TYPE</th>
               <th scope="col">EDIT</th>
               <th scope="col">DELETE</th>
            </tr>
          </thead>
          <tbody class="con">
          <?php while ( $row = $result->fetch_assoc()): ?>
            <tr>
              <td> <?php echo $row['firstname'] ?> </td>
              <td> <?php echo $row['lastname'] ?> </td>
              <td> <?php echo $row['username'] ?> </td>
              <td> <?php echo $row['email'] ?> </td>
              <td> <?php echo $row['password'] ?> </td>
              <td> <?php echo $row['role'] ?> </td>
              
              <td>
                <a href="user_management.php?edit=<?php echo $row['id']; ?>" class="btn btn-info" name="edit">Edit</a>
                </td>
                <td>
                <a href="crud_process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
              </td>

            </tr>
          <?php endwhile; ?>
        </tbody>
        <tfoot>
           <tr>
               <th scope="col">FIRSTNAME</th>
               <th scope="col">LASTNAME</th>
               <th scope="col">USERNAME</th>
               <th scope="col">EMAIL</th>
               <th scope="col">PASSWORD</th>
               <th scope="col">USER TYPE</th>
               <th scope="col">EDIT</th>
               <th scope="col">DELETE</th>
            </tr>
        </tfoot>
        </table>
  

    </div>
  </div>

<!--Add User Modal-->
        <div class="modal fade con" id="add_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        
        <form action="crud_process.php" method="post">
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
        <input type="text" class="form-control" id="validationDefaultUsername"  size="45" name="uname" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
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
          <input type="password" class="form-control" id="validationDefault03" placeholder="Password" name="password" required>
        </div>
    </div>

          <div class="form-row">
            <div class="form-group col-md-4">
      <label for="inputState">User Type</label>
      <select id="inputState" class="form-control" name="role" style="width: 400px">
        
        <option selected>user</option>
        <option>admin</option>
      </select>
    </div>
          </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="submit" class="btn modbtn btn-block" name="add">ADD</button>
      </div>
        </form>
    </div>
  </div>
</div>
      <!--End of Add User-->

      <!--Edit form Modal-->
        <div class="modal fade con" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Edit User: <?php echo $fname; ?> <?php echo $lname; ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        
        <form action="crud_process.php" method="post">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="form-row">
            <div class="col-md-auto mb-3">
              <label for="validationDefault01">First name</label>
                    <input type="text" class="form-control" id="validationDefault01" name="fname" value="<?php echo $fname; ?>"  placeholder="First name"  required>
            </div>
            <div class="col-md-auto mb-3">
              <label for="validationDefault01">Last name</label>
                    <input type="text" class="form-control" id="validationDefault02" name="lname" value="<?php echo $lname; ?>" placeholder="Last name"  required>
            </div>
            <div class="col-md-auto mb-3">
      <label for="validationDefaultUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">></span>
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername"  size="45" name="uname" value="<?php echo $uname; ?>" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
          </div>

          <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationDefault03">Email</label>
          <input type="text" class="form-control" id="validationDefault03" maxLength="64" pattern=".+@.+.com" value="<?php echo $email; ?>" name="email" placeholder="Email" title="Please provide only a valid E-mail Address" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="validationDefault03">Password</label>
          <input type="password" class="form-control" id="validationDefault03" value="<?php echo $password; ?>" placeholder="Password" name="password" required>
        </div>
    </div>

          <div class="form-row">
            <div class="form-group col-md-4">
      <label for="inputState">User Type</label>
      <select id="inputState" class="form-control" name="role" value="<?php echo $role; ?>" style="width: 400px">
        
        <option selected>user</option>
        <option>admin</option>
      </select>
    </div>
          </div>
      </div>
      <div class="modal-footer d-flex justify-content-center">
    
        <button type="submit" class="btn modbtn btn-block" name="update">EDIT</button>


      </div>
        </form>
    </div>
  </div>
</div>
      <!--End of edit form-->
      <?php
   function pre_r($array)
  {
    echo '<pre>';
    print_r($array);
    echo '/<pre>';
  }

  ?>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    
    <script type="text/javascript">
   $(document).ready(function() {
    $('#datatables').DataTable( {
        "scrollY": 400,
        "scrollX": true
    } );
} );
    </script>
</body>
</html>