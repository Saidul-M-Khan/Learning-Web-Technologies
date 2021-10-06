<?php

$Degree = "";
$degreeError = "";


if (($_SERVER["REQUEST_METHOD"] == "POST")) {
    $degreeCount = 0;
    if (!empty($_POST["degree"])) {
        foreach ($_POST["degree"] as $select) {
            $degreeCount++;
        }
    } else {
        $degreeError = "At Least two boxes needs to be checked";
    }

    if (empty($_POST["degree"])) {
        $degreeError = "No Degree Selected";
    }
    if ($degreeCount >= 2) {
        $Degree = $_POST["degree"];
    } else {
        $degreeError = "At Least two boxes needs to be checked";
    }
}
function validateInput($information)
{
    $information = trim($information);
    $information = stripslashes($information);
    $information = htmlspecialchars($information);
    return $information;
}
?>

<html>

<head>
    <title>Task-5</title>
</head>

<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <?php if ($degreeError == "") {
                print_r($Degree);
            }
            ?>

            <fieldset>
                <legend><label>DEGREE&nbsp;</label></legend>

                <input type="checkbox" id="degree" name="degree[]" value="SSC"> SSC
                <input type="checkbox" id="degree" name="degree[]" value="HSC"> HSC
                <input type="checkbox" id="degree" name="degree[]" value="BSc"> BSc
                <input type="checkbox" id="degree" name="degree[]" value="MSc"> MSc <span class="red">
                    <?php
                    if ($degreeError != "") {
                        echo "* - ";
                        echo $degreeError;
                    }
                    ?>
                </span>
                <div style=margin-top:20px;>
                    <input type="submit" value="Submit">
                </div>
            </fieldset>
        </div>
    </form>

</body>

</html>