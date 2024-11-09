<?php

$sname= "localhost";
$uname= "d20887993_gireesh";
$password = "Gireesh@9";

$db_name = "d20887993_test_db";

$db = mysqli_connect($sname, $uname, $password, $db_name);

if (!$db) {
	echo "Connection failed!";
}
