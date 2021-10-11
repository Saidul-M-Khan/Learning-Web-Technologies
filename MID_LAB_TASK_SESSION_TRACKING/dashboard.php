<?php
session_start();

if (isset($_SESSION['uname'])) {
    echo "<h1> Welcome " . $_SESSION['uname'] . "</h1>";
    echo "<a href='product.php'>Product</a>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    header("location:login.php");
}


?>




<?php

include 'top-navbar1.php';

?>

<html>
<title>Dashboard</title>
<!-- <link rel="stylesheet" type="text/css" href="../css/dashboard_styles.css"> -->

<body>
    <br><br>
    <div class="sign-up" style="font-family: Arial;">
        <?php
        // echo "<img src= " . $image_link . " height='150px' width='150px'><br><br>";
        echo "Welcome , " . $uname;
        ?>
        <br>
        <a action="<?php include("./logout.php"); ?>" target="_self" class="links">Log out</a>
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
                        <li><a href="#">Change Password</a></li>
                        <li><a href="login_page.php">Log out</a></li>
                    </ul>
                </td>
                <td>
                    &nbsp; &nbsp; &nbsp;
                    <?php
                    echo " <b>   Welcome , " . $uname . "<b>";
                    ?>

                </td>
            </tr>
        </table>
    </div>
</body>

</html>