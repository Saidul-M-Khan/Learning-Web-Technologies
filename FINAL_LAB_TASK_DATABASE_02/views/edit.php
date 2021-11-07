<?php

require_once('../model/productsModel.php');

$id = $_REQUEST['id'];
//echo $id;
$product = getProductById($id);
//print_r($user);
?>

<html>

<head>
	<title>Edit Product</title>
</head>

<body>
	<!-- <center>
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php">logout </a>
	</center> -->

	<form method="post" action="../controller/updateProduct.php">
		<fieldset>
			<legend>Edit User</legend>
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="product_name" value="<?= $product['product_name'] ?>"></td>
				</tr>
				<tr>
					<td>Product Buying Price:</td>
					<td><input type="text" name="product_buying_price" value="<?= $product['product_buying_price'] ?>"></td>
				</tr>
				<tr>
					<td>Product Selling Price:</td>
					<td><input type="text" name="product_selling_price" value="<?= $product['product_selling_price'] ?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?= $product['id'] ?>"></td>
					<td><input type="submit" name="submit" value="update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>

</html>