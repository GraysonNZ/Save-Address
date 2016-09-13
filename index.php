<?php
require_once('config.php');
if (!isset($conn)){
  header("location: setup.php");
}
else{
  include('header.php');

}


?>
