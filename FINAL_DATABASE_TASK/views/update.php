<?php
include('../model/db.php');
$id = $_GET['id'];

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

mysqli_query($con, "update `users` set username='$username', password='$password', email='$email' where id='$id'");
header('location:./userlist.php');
