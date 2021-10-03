<?php

$name = $_GET['myEmail'];

?>


<html>

<head>
    <title>Email</title>
</head>

<body>

    <form method="GET">
        <fieldset>
            <legend>EMAIL</legend>
            <input type="email" name="myEmail" value="" id="email" required />
            <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>

    </form>


</body>

</html>