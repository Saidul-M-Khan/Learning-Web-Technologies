<?php
$message = "";
if (isset($_POST['SubmitButton'])) {
    $input = $_POST['inputText'];
    $message = $input . "<br>";
}
?>

<html>

<body>
    <form action="" method="post">
        <?php echo $message; ?>
        <fieldset>
            <legend>NAME</legend>
            <input type="text" name="inputText" />
            <br>
            <hr>
            <input type="submit" name="SubmitButton" />
        </fieldset>
    </form>
</body>

</html>