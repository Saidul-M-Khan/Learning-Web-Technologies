<?php

if (isset($_REQUEST['submit'])) {
    $degree = $_REQUEST['myDegree'];
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
            <input type="checkbox" name="myDegree[]" value="SSC" <?php if (isset($_POST['myDegree']) && in_array("SSC", $_POST['myDegree'])) echo 'checked="checked"'; ?> /> SSC
            <input type="checkbox" name="myDegree[]" value="HSC" <?php if (isset($_POST['myDegree']) && in_array("HSC", $_POST['myDegree'])) echo 'checked="checked"'; ?> /> HSC
            <input type="checkbox" name="myDegree[]" value="BSc" <?php if (isset($_POST['myDegree']) && in_array("BSc", $_POST['myDegree'])) echo 'checked="checked"'; ?> /> BSc
            <input type="checkbox" name="myDegree[]" value="MSc" <?php if (isset($_POST['myDegree']) && in_array("MSc", $_POST['myDegree'])) echo 'checked="checked"'; ?> /> MSc

            <hr>
            <input type="submit" name="submit" value="Submit" />
        </form>
    </fieldset>
</body>

</html>