<?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdrecicladora";

/*
$servername = "localhost";
$username = "marefu";
$password = "hitler09";
$dbname = "bdrecicladora";

$servername = "localhost";
$username = "marefu";
$password = "hitler09";
$dbname = "hyster-yale";
/**
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hyster-yale";
**/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
