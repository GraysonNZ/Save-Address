<?php
require_once('config.php');
if (!isset($conn)){
  header("Location: setup.php");
}
header("Location: home.php");
?>
