<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "shoutit-project";

$connection = new mysqli($hostname,$username,$password,$dbname);

if ($connection->connect_error) {
    die("connection failed" . $connection->connect_error);
}











?>