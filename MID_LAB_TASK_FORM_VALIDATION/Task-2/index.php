<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta email="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-2</title>
</head>

<body>

    <?php

    $Email = "";
    $emailError = "";

    if (($_SERVER["REQUEST_METHOD"] == "POST")) {
        if (empty($_POST["email"])) {
            $emailError = "Email is required";
        } else {
            $Email = validateInput($_POST["email"]);
            if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                $emailError = "Invalid Email Format Type it correctly";
            }
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

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <?php if ($emailError == "") {
                echo $Email;
            }
            ?>
            <fieldset>
                <legend><label>EMAIL &nbsp; </label></legend>

                <input type="text" id="email" name="email" value="" placeholder="EMAIL"><span class="red"> &#8505;
                    <?php if ($emailError != "") {
                        echo "&nbsp; &nbsp* - ";
                        echo $emailError;
                    }
                    ?>
                </span>

                <hr>
                <div style=margin-top:20px;>
                    <input type="submit" value="Submit">
                </div>
            </fieldset>
        </div>
    </form>
</body>

</html>