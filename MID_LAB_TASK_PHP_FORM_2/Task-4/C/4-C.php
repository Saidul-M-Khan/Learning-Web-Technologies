<?php

if (isset($_REQUEST['submit'])) {
    $degree = $_REQUEST['mydegree'];
}

?>

<html>

<head>
    <title>DEGREE</title>
</head>

<body>
    <fieldset>
        <legend>DEGREE</legend>
        <form method="post">
            <input type="checkbox" id="SSC" name="mydegree" value="<?php if (isset($_POST['branch']) && $_POST['branch'] == 'SSC') {
                                                                        echo "checked";
                                                                    } ?>">
            <label for="SSC">SSC</label>
            <input type="checkbox" id="HSC" name="mydegree" value="<?php if (isset($_POST['branch']) && $_POST['branch'] == 'HSC') {
                                                                        echo "checked";
                                                                    } ?>">
            <label for="HSC">HSC</label>
            <input type="checkbox" id="BSc" name="mydegree" value="<?php if (isset($_POST['branch']) && $_POST['branch'] == 'BSc') {
                                                                        echo "checked";
                                                                    } ?>">
            <label for="BSc">BSc</label>
            <input type="checkbox" id="MSc" name="mydegree" value="<?php if (isset($_POST['branch']) && $_POST['branch'] == 'MSc') {
                                                                        echo "checked";
                                                                    } ?>">
            <label for="MSc">MSc</label>

            <hr>
            <input type="submit" name="submit" value="Submit">
        </form>
    </fieldset>
</body>

</html>