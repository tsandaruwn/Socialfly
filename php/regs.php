<?php
include_once 'confim.php';
?>
 
<?php
 
$name = $_POST["fName"];
$address = $_POST["address"];
$phoneNo = $_POST["PhoneNo"];
$email = $_POST["Email"];
$bussinesRNo = $_POST["BreNo"];
$password = $_POST["Pwd"];
 
$sql = "INSERT INTO users(name,address,phoneNo,email,bussinesRNo,password) VALUES( 'Uname', 'Address' , 'PhoneNo','Uemail','BussinessRNo','password')";
 
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Records added successfully!!')</script>";
	echo"?<script>function display_alert(){alert('Payment Sucessfully...!');}</script>";
}
else{
    echo "<script>alert('Error: Records not added!')</script>";
}
 
mysqli_close($conn);
 
?> 