<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// modify these settings according to the account on your database server.
$host = "ro2padgkirvcf55m.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$port = "3306";
$username = "msvgktcdpssoty2c";
$user_pass = "o5jbhjz73i097fx7";
$database_in_use = "y21yk2ccq6cwuwc5";


$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);
if ($mysqli->connect_error) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";

?>