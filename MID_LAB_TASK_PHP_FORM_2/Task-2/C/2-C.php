<?php

if (isset($_REQUEST['submit'])) {
    $email = $_REQUEST['myEmail'];
}

?>


<html>

<head>
    <title>Email</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>EMAIL</legend>
            <input type="email" name="myEmail" value="<?php if (isset($email)) {
                                                            echo $email;
                                                        } ?>" />
            <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>