<?php

session_start();

if (isset($_SESSION['username'])) {
    echo "<h1> Welcome to product page Mr." . $_SESSION['username'] . "</h1>";
    echo "<a href='dashboard.php'>Dashboard</a>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    header("location:login.php");
}

?>

<html>
<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="../css/dashboard_styles.css">

<body>
    <br><br>
    <div class="sign-up" style="font-family: Arial; float: right">
        <?php
        echo "Logged in as , <a href='./profile.php'>{$Name}</a>";
        ?>
        </span>&nbsp;|&nbsp;
        <span>&nbsp;</span>
        <a href="login_page.php" target="_self" class="links">Log out</a>
    </div>
    <div>
        <table class="table">
            <thead>
                <th>Account
                    <hr>
                </th>
                <th> </th>
            </thead>
            <tr>
                <td>
                    <ul>
                        <ii><a href="dashboard.php">Dashboard</a></ii>
                        <li><a href="view_profile.php">View Profile</a></li>
                        <li><a href="#">Edit Profile</a></li>
                        <li><a href="#">Change Profile Picture</a></li>
                        <li><a href="change_password.php">Change Password</a></li>
                        <li><a href="login_page.php">Log out</a></li>
                    </ul>
                </td>
                <td>
                    <fieldset style="font-family: Arial, Helvetica, sans-serif; margin:50px;">
                        <legend style="color: royalblue; font-family:Arial, Helvetica, sans-serif"> MY PROFILE </legend>
                        <?php
                        echo "Picture <br>";
                        // echo "<img src= " . $image_link . " height='150px' width='150px'><br><br>";
                        echo "Username       : " . $Username . "<br><br>";
                        echo "Name           : " . $Name . "<br><br>";
                        echo "Gender         : " . $Gender . "<br><br>";
                        echo "Date of Birth  : " . $DOB . "<br><br>";
                        ?>
                    </fieldset>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>