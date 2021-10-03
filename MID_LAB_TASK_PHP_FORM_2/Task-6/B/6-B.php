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
            <select name="bloodGroup" value="<?php if (isset($group)) {
                                                    echo $group;
                                                } ?>">
                <option disabled selected value> Select An Option </option>
                <option value="A Positive">A+</option>
                <option value="A Negative">A-</option>
                <option value="B Positive">B+</option>
                <option value="B Negative">B-</option>
                <option value="B Negative">B-</option>
                <option value="AB Positive">AB+</option>
                <option value="AB Negative">AB-</option>
                <option value="O Positive">O+</option>
                <option value="O Negative">O-</option>
            </select>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </form>
    </fieldset>
</body>

</html>