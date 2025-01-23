<?php
include_once 'config.php';
?>
 
<?php
 
$Cno = $_POST["cardnumber"];
$Cname = $_POST["cardname"];
$Exd = $_POST["date"];
$cvv = $_POST["cvv"];
 
$sql = "INSERT INTO payment(CardNo,Uname, Ex_date, cvv) VALUES('$Cno', '$Cname', '$Exd' , '$cvv')";
 
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Records added successfully!!')</script>";
}
else{
    echo "<script>alert('Error: Records not added!')</script>";
}
 
mysqli_close($conn);
 
?>