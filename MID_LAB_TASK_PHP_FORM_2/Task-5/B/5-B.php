<?php

if (isset($_REQUEST['submit'])) {
    $degree = $_REQUEST['myDegree'];
    if ($degree != "") {
        echo $degree;
    } else {
        echo "Null Value";
    }
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
            <input type="checkbox" id="SSC" name="myDegree" value="SSC">
            <label for="SSC">SSC</label>
            <input type="checkbox" id="HSC" name="myDegree" value="HSC">
            <label for="HSC">HSC</label>
            <input type="checkbox" id="BSc" name="myDegree" value="BSc">
            <label for="BSc">BSc</label>
            <input type="checkbox" id="MSc" name="myDegree" value="MSc">
            <label for="MSc">MSc</label>
            <hr>
            <input type="submit" name="submit" value="Submit">
        </form>
    </fieldset>
</body>

</html>