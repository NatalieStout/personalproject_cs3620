<?php
require 'setenv.php';

$SERVER_NAME = 'ntdbcs.mysql.database.azure.com';
$DATABASE_USER = $_SESSION['SQLUSER'];
$DATABASE_PASS = $_SESSION['SQLPW'];
$DATABASE_NAME = 'cs3620_project1';

$con = mysqli_connect($SERVER_NAME, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if(mysqli_connect_errno()) {
  exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>