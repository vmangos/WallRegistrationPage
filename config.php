<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'enter your IP & port here - ex. 127.0.0.1:3306');
define('DB_USERNAME', 'enter your DB username here');
define('DB_PASSWORD', 'enter your DB password here');
define('DB_NAME', 'enter your realmd DB name here');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>