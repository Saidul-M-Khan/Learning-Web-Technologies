<?php

if (isset($_REQUEST['submit'])) {
    $DOB = $_REQUEST['date'];
}

?>


<html>

<head>
    <title>Date of Birth</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>DATE OF BIRTH</legend>
            <input type="date" name="date" value="<?php if (isset($DOB)) {
                                                        echo $DOB;
                                                    } ?>" />
            <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>