<?php
include("connect.php");

$query = "SELECT * FROM products";
$result = $pdo->query($query);
while ($row = $result -> fetch()){
    include ("app/views/showProducts.php");
}