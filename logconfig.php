<?php

$dbhost = "localhost";
$dbuser = "id21100346_root";
$dbpass = "Socialfly@0";
$dbname = "id21100346_socialfly";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

?>