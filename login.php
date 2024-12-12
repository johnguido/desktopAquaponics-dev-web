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

if ($result = mysqli_query($$conn, "SELECT * FROM users WHERE `phone_number` = " . $phone_number . ";")) {
    echo "Returned rows are: " . mysqli_num_rows($result);
    // Free result set
    mysqli_free_result($result);
}
?>