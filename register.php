<?php

	//include('session.php');
  require_once('config.php');

	 if($_SERVER["REQUEST_METHOD"]== "POST"){


      	$username =$_POST['username'];
      	$password =$_POST['password'];
	  	$email=$_POST['email'];
	  	$fname=$_POST['first_name'];
	  	$lname=$_POST['last_name'];
	  	$confirmation_password=$_POST['password_confirmation'];
	  	$date = date('Y/m/d H:i:s');

	  	if ( $password == $confirmation_password ) {





			       $sql = "INSERT INTO sa_login (user_name, user_pass, email) VALUES ('".$username."', '".$password."', '".$email."' )";

	  	  	    if ( sqlsrv_query($conn,$sql) ){

			  	          $result = sqlsrv_query($conn,"SELECT user_id FROM sa_login WHERE user_name= '".$username."'");

      		  	         $row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC);
	          	           $userID = $row['user_id'];
			  	                   $sql1 = "INSERT INTO user_details (user_id, f_name, l_name) VALUES ('".$userID."' , '" .$fname."', '".$lname."' )";

				if ( sqlsrv_query($conn,$sql1) ){
				  	$msg_type= 1;
				  	$message=" You have registered successfully. ";

			  	}
			  	else {
            sqlsrv_query($conn,"DELETE FROM sa_login WHERE user_id= '".$userID."'");
				  $msg_type= 0;
				  $message=" Registration Failed . An error Occured.";

        }
		  	}


		  	else {
			  $msg_type= 0;
			  $message=" Registration Failed . An error Occured.";
		  	}


    }
	  	else {
		   $msg_type= 0;
			$message=" Password do not Match";
	  	}
	 }
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration|Save Address</title>
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
			    		<h3 class="panel-title">Please sign up to save addresses <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form id= "register" role="form" action="" method="post">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
			    					</div>
			    				</div>
			    			</div>

                            <div class="form-group">
			    				<input type="username" name="username" id="username" class="form-control input-sm" placeholder="Username">
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
			    					</div>
			    				</div>
                                </div>




			    			<?php
							 if(isset($message)){
								print "<label>".$message."</label>";
								}
							?>
			    			<input type="submit" value="Register" class="btn btn-info btn-block">

			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

</body>
</html>
