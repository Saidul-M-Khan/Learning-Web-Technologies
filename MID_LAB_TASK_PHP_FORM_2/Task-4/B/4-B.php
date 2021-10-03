<?php
$gender = "";
if (isset($_POST['Submit'])) {
    $input = $_POST['myGender'];
    $gender = $input . "<br>";
}
?>

<html>

<head>
    <title>Gender</title>
</head>

<body>
    <?php echo $gender; ?>
    <fieldset>
        <legend>GENDER</legend>
        <form action="" method="post">
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