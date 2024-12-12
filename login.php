<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//need to class this out 
$host = 'localhost';
$db   = 'desktop_aquaponics';
$user = 'root';
$pass = 'Hoshyblob23!';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);

$phone_number = $_POST['phone_number'];
$password = $_POST['password'];

$stmt = $pdo->prepare('SELECT * FROM users WHERE 'phone_number' = ?;');
$stmt->execute([$phone_number]);
$user = $stmt->fetch();

echo $user;
?>