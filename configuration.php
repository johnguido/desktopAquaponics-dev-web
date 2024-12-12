<?php

//1 = server 0 = local
$config = 0;

if($config == 1) {
    define("SQL_SERVER_NAME", "127.0.0.1");
    define("SQL_DB_USERID", "root");
    define("SQL_DB_PASSWORD", "Hoshyblob23!");
    define("SQL_DB_NAME", "desktop_aquaponics");
    define("SQL_DB_PORT", "3306");
}
else{
    define("SQL_SERVER_NAME", "127.0.0.1");
    define("SQL_DB_USERID", "root");
    define("SQL_DB_PASSWORD", "root");
    define("SQL_DB_NAME", "desktop_aquaponics");
    define("SQL_DB_PORT", "3306");
}