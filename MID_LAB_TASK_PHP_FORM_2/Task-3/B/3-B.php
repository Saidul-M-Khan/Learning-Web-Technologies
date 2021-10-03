<?php
$DOB = "";
if (isset($_POST['SubmitButton'])) {
    $input = $_POST['inputText'];
    $DOB = $input . "<br>";
}
?>

<html>

<body>
    <form action="" method="post">
        <?php echo $DOB; ?>
        <fieldset>
            <legend>DATE OF BIRTH</legend>
            <input type="date" name="inputText" />
            <br>
            <hr>
            <input type="submit" name="SubmitButton" />
        </fieldset>
    </form>
</body>

</html>