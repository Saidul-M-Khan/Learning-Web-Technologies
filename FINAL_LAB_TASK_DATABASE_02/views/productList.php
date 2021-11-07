<?php

require_once('../model/productsModel.php');
$result = getAllProducts();
$count = mysqli_num_rows($result);

/*for($i=1; $i<=$count; $i++){
		$data = mysqli_fetch_assoc($result);
		print_r($data);
		echo "<br>";
	}*/

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Product List</title>
</head>

<body>

    <!-- <center>
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php">logout </a>
	</center> -->

    <table border="1" align="center">
        <tr>
            <!-- <th>ID</th> -->
            <th>NAME</th>
            <th>PROFIT</th>
            <th>&nbsp;</th>
        </tr>

        <?php while ($data = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $data['NAME'] ?></td>
                <td><?= $data['PROFIT'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $data['id'] ?>"> EDIT </a> |
                    <a href="delete.php?id=<?php echo $data['id']; ?>"> DELETE</a>
                </td>
            </tr>

        <?php } ?>
    </table>
</body>

</html>