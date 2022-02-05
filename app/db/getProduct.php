<?php
include("connect.php");

$idProduct = $_GET['idProduct'];

$query = "SELECT * FROM products WHERE id = '$idProduct'";
$result = $pdo->query($query);
while ($row = $result -> fetch()){
    include ("../app/views/showProduct.php");
}