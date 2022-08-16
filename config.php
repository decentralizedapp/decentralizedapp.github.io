<?php

error_reporting(0);
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'u191827762_fixdapps');
define('DB_PASSWORD', '123Admin...');
define('DB_NAME', 'u191827762_fixdapps');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>