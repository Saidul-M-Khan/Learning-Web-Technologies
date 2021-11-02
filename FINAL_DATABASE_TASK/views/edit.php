<?php
include('../model/db.php');
$id = $_GET['id'];
$query = mysqli_query($con, "select * from `users` where id='$id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit User</title>
</head>

<body>
    <h2>Edit</h2>
    <form method="POST" action="update.php?id=<?php echo $id; ?>">
        <label>Username:</label><input type="text" value="<?php echo $row['username']; ?>" name="username">
        <label>Password:</label><input type="text" value="<?php echo $row['password']; ?>" name="password">
        <label>Email: </label><input type="email" value="<?php echo $row['email']; ?>" name="email">
        <input type="submit" name="submit">
        <a href="../views/userlist.php">Back</a>
    </form>
</body>

</html>