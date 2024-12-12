<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//need to class this out 
$host = 'localhost';
$db   = 'desktop_aquaponics';
$user = 'root';
$pass = 'Hoshyblob23!';

try{
    $conn = mysqli_connection($host, $user, $pass, $db);
}catch(mysqli_sql_exception){
    echo "Could not connect to database...";
}

if ($conn){
    echo "Connected to database!";
}
?>