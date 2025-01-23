<?php
include_once 'advertising.php';
?>
 
<?php
 

$title = $_POST["Title"];
$pricingPlan = $_POST["pPlan"];
$email = $_POST["Email"];
$phoneno = $_POST["pNo"];


 
$sql = "INSERT INTO names(title,pricingPlan,email,phoneno) VALUES('Title', 'Pricingplan', 'Email' , 'PhoneNo')";
 
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Records added successfully!!')</script>";
	echo"?<script>function display_alert(){alert('Payment Sucessfully...!');}</script>";
}
else{
    echo "<script>alert('Error: Records not added!')</script>";
}
 
mysqli_close($conn);
 
?> 