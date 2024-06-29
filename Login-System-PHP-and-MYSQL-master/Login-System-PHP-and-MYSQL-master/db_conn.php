<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	ech "Connection failed!";
}
