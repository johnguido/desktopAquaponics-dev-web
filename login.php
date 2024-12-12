<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//need to class this out
$host = 'localhost';
$db   = 'desktop_aquaponics';
$user = 'root';
$pass = 'Hoshyblob23!';

$conn = mysqli_connect($host, $user, $pass, $db);

if(mysqli_connect_errno()){  
    echo mysqli_connect_error();  
    }  

if ($conn){
    echo "Connected to database!";
}

$phone_number = $_POST['phone_number'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE `phone_number` = " . $phone_number . ";"

//$result = mysqli_query($conn, $sql);


?>