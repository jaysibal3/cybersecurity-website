<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cybersecurity";

$mysqli = new mysqli (hostname:$dbhost, 
username:$dbuser, 
password:$dbpass, 
database:$dbname);

if ($mysqli -> connect_errno) {
    die("Connection error: " . $mysqli ->connect_error);
}

return $mysqli;