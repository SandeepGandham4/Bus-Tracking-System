<?php

$sname= "localhost";
$uname= "id20946986_gireesh";
$password = "Gireesh@9";

$db_name = "id20946986_test_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}