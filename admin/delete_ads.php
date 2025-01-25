<?php

$servername = "localhost";

$username = "id21100346_root";

$password = "Socialfly@0";

$dbname = "id21100346_socialfly";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM adformtable  WHERE id = $id";


    if ($conn->query($sql) === TRUE) {
        $conn->close();
    } else {
        echo "Error deleting data: " . $conn->error;
    }
}



// Redirect back to the original page after deletion
header("Location:ads.php");
exit();
?>