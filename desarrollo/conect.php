<?php 

$servername = "localhost";
$username = "marefu";
$password = "hitler09";
$dbname = "bdrecicladora";
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdrecicladora";
*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
