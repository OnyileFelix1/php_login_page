<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test";

$conn = mysqli_connect($sname, $unmae, $lname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

