<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "socialfly";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

?>