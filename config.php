<?php


$servername = "localhost";

$username = "id21100346_root";

$password = "Socialfly@0";

$dbname = "id21100346_socialfly";


 

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection


if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);

}

echo "Connected successfully";

?>