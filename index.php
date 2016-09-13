<?php
require_once('config.php');
require_once('session.php');
if (!isset($conn)){
  header("Location: setup.php");
}
include('header.php');
?>
