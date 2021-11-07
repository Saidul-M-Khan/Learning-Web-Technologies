
<?php

$host = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "product_db";

function getConnection()
{
	global $host;
	global $dbname;
	global $dbpass;
	global $dbuser;

	$con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
	return $con;
}


?>