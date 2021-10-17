<?php 
	session_start();

	if(isset($_POST['submit'])){

		$id 	= $_POST['id'];
		$password 	= $_POST['password'];

		if($id != ""){
			if($password != ""){
				
				$myfile = fopen('user.txt', 'r');
				//$data = fread($myfile, filesize('user.txt'));
				//fgets($myfile);
				//feof($myfile);
				
				while(!feof($myfile)){
					
					$data = fgets($myfile);
					$user = explode('|', $data);		
					
					if($id == trim($user[0]) && $password == trim($user[1])){
						setcookie('flag', 'true', time()+3600, '/');
						header('location: home.php');
					}
				}

				echo "invalid id/password";

			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid id....";
		}
	}
