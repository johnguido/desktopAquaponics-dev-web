<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();

if (isset($_SESSION['user_id'])){
    //logged in
    echo "hey";
    exit();
}

echo file_get_contents("./login.html");

?>