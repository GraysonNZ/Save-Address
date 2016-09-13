<?php

   include('config.php');
   session_start();
   $session_status = false;

   $user_check = $_SESSION['login_user'];

   $ses_sql = sqlsrv_query($db,"select username from login where username = '$user_check' ");

   $row = sqlsrv_fetch_array($ses_sql,SQLSRV_FETCH_ASSOC);

   $login_session = $row['username'];

   if(isset($_SESSION['login_user'])){

	   $session_status= true;
   }
?>
