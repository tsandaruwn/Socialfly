<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "socialfly";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM adformtable";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
  
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="css/payment_css.css" rel="stylesheet" type="text/css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" >
		 
</head>


<body>
<header>
	<div class="wrapper"> 
			<nav class="navbar">
				<img class="logo" src="images/logo1.png">
				<ul>
					<li><a class="active" href="home.html">Home</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="abtus.html">About Us </a></li>
					<li><a href="contact us.html">Contact us</a></li>
					<li><a href="login.html">My Acoount</a></li>
					<li><a id="login" href="login.html">Login</a></li>
					
				</ul>
				</nav>	
    </div>				
</header>

   
  </div><br/><br/><br/>
<center><table width="500" border="">
  <tbody>
    <tr>
	<th>ID</th>
      <th>Title</th>
      <th>Service type</th>
      <th>Pricing Plan</th>
      <th>Email</th>
	  <th>Phone no</th>
	  <th>Address</th>
    </tr>
	<?php foreach ($data as $product): ?>
	<tr>
	<td><?php echo $product['id']; ?></td>
	<td><?php echo $product['title']; ?></td>
	<td><?php echo $product['service_type']; ?></td>
	<td><?php echo $product['pricingpPlan']; ?></td>
	<td><?php echo $product['email']; ?></td>
	<td><?php echo $product['phoneno']; ?></td>
	<td><?php echo $product['address']; ?></td>
	<tr>
	<?php endforeach; ?>

  </tbody>	
</table>
<br><br>
  
  	<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Social<span>Fly</span></h3>

				<p class="footer-links">
				<a href="home.html" class="link-1">Home</a>
					<a href="services.html">Careers</a>
					<a href="services.html">Services</a>
					<a href="abtus.html">About</a>
					<a href="contact us.html">Contact Us</a>
				</p>

				<p class="footer-company-name">SocialFly © 2021</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>125,agro road</span> rathnapura, sri lanka</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+9470 234 6242</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@socialfly.com">support@socialfly.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>

</body>
</html>
