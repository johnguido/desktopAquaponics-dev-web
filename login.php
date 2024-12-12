<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include_once ("./configuration.php");
include_once ("./helper.php");

//need to class out database
if(!isset($database))
{
    $database =  mysqli_connect(SQL_SERVER_NAME, SQL_DB_USERID, SQL_DB_PASSWORD, SQL_DB_NAME)
    or die ("[no connection possible: " . mysqli_error($database) ."]");
}

$authenticated = false;
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE `phone_number` = 6069392383;";

if ($result = $database->query($sql)){
    if ($result->num_rows){
        while($row = $result->fetch_assoc()){
            if ($row['password'] == $password){
                $authenticated = true;
                break;
            }
        }
    }
}

if ($authenticated){
    echo file_get_contents("./controlPanel.html");
}else{
    echo "Bad pass";
}
?>