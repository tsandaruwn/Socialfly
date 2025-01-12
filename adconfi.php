<?php

$servername = "localhost";

$username = "id21100346_root";

$password = "Socialfly@0";

$dbname = "id21100346_socialfly";




$conn = new mysqli($servername, $username, $password, $dbname);




if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);

}
else{
echo "Connected successfully";
header("Location: contact us.html");
}
?>