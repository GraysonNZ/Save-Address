<?php
include ('config.php');
if ($connectionInfo["UID"]== "" || $connectionInfo["pwd"]=="" || $connectionInfo["database"] = "" || $serverName=""){
  header("location: setup.php");
}
else{
  include('header.php');

}


?>
