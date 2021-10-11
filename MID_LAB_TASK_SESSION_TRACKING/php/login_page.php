<?php
session_start();

$username = "admin";
$password = "admin";

if (isset($_POST['uname'])) {
    if ($_POST['uname'] == $username && $_POST['pass'] == $password) {
        $_SESSION['uname'] = $username;
        header("location: dashboard.php");
    } else {
        $msg = "username or password is incorrect";
    }
}


?>


<!DOCTYPE html>
<html>
<title>Login</title>
<!-- <link rel="stylesheet" type="text/css" href="../css/login_styles.css"> -->

<body>
    <header>
        <!-- top-navbar1.php include -->
        <?php include("./top-navbar1.php"); ?>
    </header>

    <center>
        <main class="center">
            <h1>Log into the system</h1>
            <fieldset style="width:25%;">
                <legend>LOGIN</legend>
                <form method="POST" action="loginCheck.php" enctype="multipart/form-data">
                    <span><?php if (isset($msg)) {
                                echo $msg;
                            } ?></span>
                    <br>
                    <div class="text-field">
                        <label>Username :&nbsp;</label>
                        <input type="text" id="username" name="uname">
                    </div>
                    <br>
                    <div class="text-field">
                        <label>Password :&nbsp;</label>
                        <input type="password" id="password" name="pass">
                    </div>
                    <hr>
                    <div>
                        <input type="checkbox" id="remember" name="remember"> Remember Me
                    </div><br>
                    <span>
                        <a href="forget_password.php" style="text-decoration: none;">
                            <div class="pass">Forgot Password?</div>
                        </a>
                    </span>&nbsp;<br>
                    <input type="submit" name="login" value="Submit">

                </form>
            </fieldset>

        </main>
    </center>


    <footer>
        <!-- footer include -->
        <?php include("./footer.php"); ?>
    </footer>
</body>

</html>