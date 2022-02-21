<?php 

session_start();



// cretae constans to store repreating values
define('SITE_URL','http://localhost/blessed/');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','farhy');


$conn = mysqli_connect('localhost', DB_USERNAME,DB_PASSWORD) or die (mysqli_error()); //database connection
$db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error()); // selection database




?>