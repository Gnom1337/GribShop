<?php
$login = $_POST['login'];
$pas = $_POST['password'];
if ($login == 'grib' && $pas == 1337)
  {
  session_start();
  $_SESSION['admin'] = true;
  $script = 'admin.php';
  }
else
$script = 'auth.php';
header("Location: $script");
?>