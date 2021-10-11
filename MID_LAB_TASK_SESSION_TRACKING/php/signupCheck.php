<?php

if (isset($_POST['submit'])) {

    $username     = $_POST['username'];
    $password     = $_POST['password'];

    if ($username != "") {
        if ($password != "") {
            header('location: login.php');
        }
    } else {
        echo "invalid password....";
    }
} else {
    echo "invalid username....";
}
