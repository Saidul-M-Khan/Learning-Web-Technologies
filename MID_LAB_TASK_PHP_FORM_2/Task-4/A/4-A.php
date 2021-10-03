<?php

$gender = $_GET['myGender'];

?>

<html>

<head>
    <title>Gender</title>
</head>

<body>
    <fieldset>
        <legend>GENDER</legend>
        <form method="get">
            <input type="radio" id="male" name="myGender" value="Male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="myGender" value="Female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="myGender" value="Other">
            <label for="other">Other</label>
            <br>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </form>
    </fieldset>
</body>

</html>