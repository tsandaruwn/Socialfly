<?php
include_once 'adconfi.php';
?>
 
<?php
 
$name = $_POST["name"];
$email = $_POST["email"];
$ID = $_POST["ID"];
$description = $_POST["description"];
 
$sql = "INSERT INTO adsetting(name,email, contact_no, description) VALUES('$name', '$email', '$ID' , '$description')";
 
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Records added successfully!!')</script>";
	
}
else{
    echo "<script>alert('Error: Records not added!')</script>";
}
 
mysqli_close($conn);
 
?>