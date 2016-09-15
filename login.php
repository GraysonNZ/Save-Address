<?php
	if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
include("config.php");
session_start();



   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername =$_POST['username'];
      $mypassword =$_POST['password'];

      $sql = "SELECT * FROM sa_login WHERE user_name= '".$myusername."' and user_pass = '".$mypassword."'";
      $result = sqlsrv_query($conn,$sql);
      $row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC);
	  $user = $row['user_name'];
	  $pass = $row['user_pass'];

	  if ( $user == $myusername && $pass== $mypassword) {
		  $_SESSION['login_user'] = $myusername;

         header("location: home.php");
   		}
		else
	 {
		 $error="Wrong username or password. Please try again";
	 }
   }
?>


<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login|CarpoolNZ</title>
<link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js">
</script>
<script src="../bootstrap/dist/js/bootstrap.min.js">
</script>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please Login with your Login Details</h3>
			 			</div>
			 			<div class="panel-body">
	          <form id = "signin" role = "form"
            action = "" method = "post">
              <?php
             if (isset($error)){
	              print "<p align='center' class='alert alert-danger'><strong>" . $error . "</strong> </p> <br />";
             }
              ?>
               <div class="form-group">
			    				<input type="username" name="username" id="username" class="form-control input-sm" placeholder="Username" required autofocus>
			    			</div>

            <div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password"  maxlength="15"  required>
			    					</div>

            <input type="submit" value="Login" class="btn btn-info btn-block"
               name = "login">
    </form>
  </div>
</div>
</div>
</div>
</div>
</body>
</html>
