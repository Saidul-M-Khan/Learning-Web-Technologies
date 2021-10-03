<?php
$email = "";
if (isset($_POST['SubmitButton'])) {
    $input = $_POST['inputText'];
    $email = $input . "<br>";
}
?>

<html>

<body>
    <form action="" method="post">
        <?php echo $email; ?>
        <fieldset>
            <legend>EMAIL</legend>
            <input type="email" name="inputText" value="" id="email" required />
            <br>
            <hr>
            <input type="submit" name="SubmitButton" />
        </fieldset>
    </form>
</body>

</html>