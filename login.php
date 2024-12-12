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

if ($conn -> connect_errno){
    echo "Error connecting";
    exit();
}

if ($conn){
    echo "Connected to database!";
}

$phone_number = $_POST['phone_number'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE `phone_number` = " . $phone_number . ";"

$result = mysqli_query($conn, $sql);

$num_rows = mysqli_num_rows($result);

echo "number of rows " . $num_rows;

?>