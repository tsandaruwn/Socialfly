<?php

$servername = "localhost";

$username = "id21100346_root";

$password = "Socialfly@0";

$dbname = "id21100346_socialfly";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['uid'])) {
    $id = $_GET['uid'];

    $sql = "DELETE FROM contactus  WHERE uid = $id";
       
if ($conn->query($sql) === TRUE) {
         $conn->close();
    } else {
        echo "Error deleting data: " . $conn->error;
    }
    
}



// Redirect back to the original page after deletion
header("Location:tables.php");
exit();
?>
