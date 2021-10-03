<?php

if (isset($_REQUEST['submit'])) {
    $degree = $_REQUEST['myGender'];
}

?>

<html>

<head>
    <title>DEGREE</title>
</head>

<body>
    <fieldset>
        <legend>DEGREE</legend>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="radio" name="myGender[]" value="Male" <?php if (isset($_POST['myGender']) && in_array("Male", $_POST['myGender'])) echo 'checked="checked"'; ?> /> Male
            <input type="radio" name="myGender[]" value="Female" <?php if (isset($_POST['myGender']) && in_array("Female", $_POST['myGender'])) echo 'checked="checked"'; ?> /> Female
            <input type="radio" name="myGender[]" value="Other" <?php if (isset($_POST['myGender']) && in_array("Other", $_POST['myGender'])) echo 'checked="checked"'; ?> /> Other

            <hr>
            <input type="submit" name="submit" value="Submit" />
        </form>
    </fieldset>
</body>

</html>