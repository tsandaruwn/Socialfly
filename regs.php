<?php
include_once 'confi.php';
?>
 
<?php
 
$fist_name = $_POST["fName"];
$last_name = $_POST["lname"];
$address = $_POST["address"];
$dob = $_POST["dob"];
$email = $_POST["email"];
$phone_number = $_POST["phoneno"];
$business_name = $_POST["bname"];
$mobile_number = $_POST["mnumber"];
$bussines_reg_number = $_POST["bregno"];
$password = $_POST["password"];
 
$sql = "INSERT INTO register_table(first_name,last_name,address,dob,email,phone_number,business_name,mobile_number,businnes_reg_number,password) VALUES( '$fist_name','$last_name','$address','$dob','$email','$phone_number','$business_name','$mobile_number','$bussines_reg_number','$password')";
 
if(mysqli_query($conn, $sql)){
    
	echo"<script>function display_alert(){alert('Payment Sucessfully...!');}</script>";
	
}
else{
    echo "<script>alert('Error: Records not added!')</script>";
}
 
mysqli_close($conn);
header("Location: register.html");
 
?> 
<!DOCTYPE html>
    <head>
    <link rel="stylesheet" href="css/advertisingform.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    </head>
  <body>
<header>
	<div class="wrapper"> 
			<nav class="navbar">
				<img class="logo" src="images/logo1.png">
				<ul>
					<li><a class="active" href="home.html">Home</a></li>
					<li><a href="Services.html">Services</a></li>
					<li><a href="abtus.html">About Us </a></li>
					<li><a href="contact.html">Contact us</a></li>
					<li><a href="login.html">My Acoount</a></li>
					<li><a id="login" href="login.html">Login</a></li>
					
				</ul>
				</nav>	
    </div>				
</header>
<link rel="stylesheet" href="style2/adsetting.css">
<script src="js/Accountsettings.js"></script>

<br><br><br><br>
<div class="doc3">
<h1><center>Your ACCOUNT <br><br>has been <br><br><b>CREATED</b></center></h1>
</div>
<br><br><br><br>

<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Social<span>Fly</span></h3>

				<p class="footer-links">
				<a href="home.html" class="link-1">Home</a>
					
					<a href="job.html">Careers</a>
				
					<a href="Services.html">Services</a>
				
					<a href="abtus.html">About</a>
					
					
					<a href="contact.html">Contact Us</a>
				</p>

				<p class="footer-company-name">SocialFly © 2023.</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p>48, Rosa Gaha Waththa,<br>Pitipana North, Homagama,<br> Sri Lanka</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+94760 035 086&nbsp;&nbsp;</p>
				</div>
                <div>
					<i class="fa fa-phone"></i>
					<p>+94762 568 438</p>
					
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:socialfly@gmail.com">socialfly@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					SocialFly is a digital full-service, mobile-first marketing agency that helps companies to scale and become category leaders.
             
				</p>

				

			</div>

		</footer>
</body>

</html>
