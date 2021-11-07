<?php

require_once('../model/productsModel.php');

$product_name = $_REQUEST['product_name'];
$product_buying_price = $_REQUEST['product_buying_price'];
$product_selling_price = $_REQUEST['product_selling_price'];
$id = $_REQUEST['id'];

$product = ['id' => $id, 'product_name' => $product_name, 'product_buying_price' => $product_buying_price, 'product_selling_price' => $product_selling_price];
$status = editProduct($product);

if ($status) {
    header('location: ../views/productList.php');
} else {
    header('location: ../views/edit.php?id={$id}');
}
