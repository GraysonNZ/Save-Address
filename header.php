<?php
 //Force To Use HTTPS
 if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
require_once('session.php');
 ?>
<!DOCTYPE html>
<head>
<title>Save Address</title>
<link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../bootstrap/dist/js/bootstrap.min.js">
</script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
     data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <a class="navbar-brand" href="https://saveaddress.azurewebsites.net"> Save Address</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">

    <ul class="nav navbar-nav">

    <li> <a href='../home.php'> Home </a> </li>
    <li> <a href='../about.php'> About </a> </li>


    </ul>
    <ul class="nav navbar-nav navbar-right">

    <?php
	if (isset($_SESSION['login_user'])){
		print "	<li><a href='home.php'> $login_session </a> </li>
      <li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> LogOut</a></li>";
	}
	else {
	print ' <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log In </a> </li>
      <li><a href="register.php">SignUp</a></li>';
	}
	?>
    </ul>
    </div>
  </div>
</nav>
