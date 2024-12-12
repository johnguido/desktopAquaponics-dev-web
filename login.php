<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//need to class this out 
$db_server = "localhost";
$db_user = "root";
$db_pass = "Hoshyblob23!";
$db_name = "desktop_aquaponics";
$conn = "";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);;


$phone_number = $_POST['phone_number'];
$password = $_POST['password'];

?>