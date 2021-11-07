<?php


require_once('../model/productsModel.php');

$id = $_GET['id'];
$status = deleteProduct($id);
header('location: productList.php');
