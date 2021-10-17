<?php
//session_start();

if (isset($_POST['submit'])) {

	// $id 	= $_POST['id'];
	// $email 		= $_POST['email'];
	// $password 	= $_POST['password'];

	$id = $_POST['id'];
	$password = $_POST['password'];
	$repass = $_POST['repass'];
	$name = $_POST['name'];
	$userType = $_POST['type'];

	if ($id != "") {
		if ($password != "") {
			if ($email != "") {

				$myfile = fopen('user.txt', 'a');
				$myuser = $id . "|" . $password . "|" . $email . "\r\n";
				fwrite($myfile, $myuser);
				fclose($myfile);

				header('location: login.html');
			} else {
				echo "invalid email....";
			}
		} else {
			echo "invalid password....";
		}
	} else {
		echo "invalid id....";
	}
}
