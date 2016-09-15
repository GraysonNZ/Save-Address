<?php

   require_once('config.php');
   session_start();
   $session_status = false;

   $user_check = $_SESSION['login_user'];

   $ses_sql = sqlsrv_query($conn,"select user_name from sa_login where user_name = '$user_check' ");

    $row = sqlsrv_fetch_array($ses_sql,SQLSRV_FETCH_ASSOC);

   $login_session = $row['user_name'];

   if(isset($_SESSION['login_user'])){

	   $session_status= true;
   }
?>
