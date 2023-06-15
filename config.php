<?php
// Database credentials
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'authentication');

// Attempt to connect to the database
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check if the connection was successful
if($mysqli === false){
    die("ERROR: Could not connect to the database. " . $mysqli->connect_error);
}
?>