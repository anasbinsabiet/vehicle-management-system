<?php
session_start();
function base_url(){
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI']
  );
}

$_SESSION['base_url'] = base_url();
$_SESSION['user_id'] = 1;

header("LOCATION: ".base_url()."/login.php");
?>
