<?php

$sname= "localhost";
$uname= "root";
$password = "";

$db_name = "test";

$conn = mysqli_connect($sname, $uname, $lname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}


