<?php
include 'components/header.php';
  // unset($_SESSION['user']);
  session_destroy();
  var_dump($_SESSION);
  header('location: index.php');
?>