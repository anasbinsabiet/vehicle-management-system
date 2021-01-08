<?php

//local
session_start();
$username = 'root';
$password = '';
$connect = new PDO('mysql:host=localhost;dbname=fleet', $username, $password);



if(!$connect)
{
  echo $connect->errorInfo();
}

//session_start();
//$username = 'zaimahtechcom_fleet';
//$password = 'hF_UMN35D!c)';
//$connect = new PDO('mysql:host=localhost;dbname=zaimahtechcom_fleet', $username, $password);
//
//if(!$connect)
//{
//  echo $connect->errorInfo();
//}



?>
