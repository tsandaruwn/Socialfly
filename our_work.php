<!DOCTYPE html>

<head>
	<title>OUR WORK</title>
	<link rel="stylesheet" href="css/ourwork.css">
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
	<br>
	<br>
	<br>
	<?php

$servername = "localhost";

$username = "id21100346_root";

$password = "Socialfly@0";

$dbname = "id21100346_socialfly";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ads";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

?>
	<div class="works">
		<center>
			<h1>ADs</h1>
		</center>
		<div class="row">
		    <?php foreach ($data as $product): ?>
			<div class="col-lg-4">
				<div class="card col-md-4 col-lg-12"> 
					<img class="card-img-top" src="images/<?php echo $product['image']; ?>" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title"><?php echo $product['title']; ?></h5>
						<p class="card-text"><?php echo $product['description']; ?></p>
					</div><br>
				</div>
			</div>
			                            <?php endforeach; ?>
		</div>
	</div>
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
				SocialFly is a digital full-service, mobile-first marketing agency that helps companies to scale and
				become category leaders.
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