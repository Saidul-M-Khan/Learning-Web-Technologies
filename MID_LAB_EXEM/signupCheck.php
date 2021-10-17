<?php
//session_start();

if (isset($_POST['submit'])) {

	// $id 	= $_POST['id'];
	// $name 		= $_POST['name'];
	// $password 	= $_POST['password'];

	$id = $_POST['id'];
	$password = $_POST['password'];
	$repass = $_POST['repass'];
	$name = $_POST['name'];
	$userType = $_POST['type'];

	if ($id != "") {
		if ($password != "") {
			if ($name != "") {
				$myfile = fopen('user.txt', 'a');
				$myuser = $id . "|" . $password . "|" . $name . "|" . $userType . "|" . "\r\n";
				fwrite($myfile, $myuser);
				fclose($myfile);

				header('location: login.html');
			} else {
				echo "invalid name....";
			}
		} else {
			echo "invalid password....";
		}
	} else {
		echo "invalid id....";
	}
}
