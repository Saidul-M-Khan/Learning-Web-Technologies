<?php

if (isset($_REQUEST['submit'])) {
    $group = $_REQUEST['bloodGroup'];
    if ($group != "") {
        echo $group;
    } else {
        echo "Null Value";
    }
}

?>

<html>

<head>
    <title>BLOOD GROUP</title>
</head>

<body>
    <fieldset>
        <legend>BLOOD GROUP</legend>
        <form method="post">
            <select name="bloodGroup[]">
                <option disabled selected value> Select An Option </option>
                <option name="bloodGroup[]" value="A Positive" <?php if (isset($_POST['bloodGroup']) && in_array("A Positive", $_POST['bloodGroup'])) echo 'selected="selected"'; ?>>A+</option>
                <option name="bloodGroup[]" value="A Negative" <?php if (isset($_POST['bloodGroup']) && in_array("A Negative", $_POST['bloodGroup'])) echo 'selected="selected"'; ?>>A-</option>
                <option name="bloodGroup[]" value="B Positive" <?php if (isset($_POST['bloodGroup']) && in_array("B Positive", $_POST['bloodGroup'])) echo 'selected="selected"'; ?>>B+</option>
                <option name="bloodGroup[]" value="B Negative" <?php if (isset($_POST['bloodGroup']) && in_array("B Negative", $_POST['bloodGroup'])) echo 'selected="selected"'; ?>>B-</option>
                <option name="bloodGroup[]" value="AB Positive" <?php if (isset($_POST['bloodGroup']) && in_array("AB Positive", $_POST['bloodGroup'])) echo 'selected="selected"'; ?>>AB+</option>

            </select>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </form>
    </fieldset>
</body>

</html>