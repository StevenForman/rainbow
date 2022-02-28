<?php

include("connect.php");

$idProduct = $_GET['idProduct'];

$_SESSION['idProduct'] = $idProduct;

$query = "SELECT * FROM products WHERE id = '$idProduct'";
$result = $pdo->query($query);
while ($row = $result -> fetch()){
    $_SESSION['title'] = $row['title'];
    include ("../app/views/showProduct.php");
}