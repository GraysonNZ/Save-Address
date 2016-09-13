<?php
require_once('config.php');
if (!isset($conn)){
  header("Location: setup.php");
}
require_once('session.php');
include('header.php');
?>
