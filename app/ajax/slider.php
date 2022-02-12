<?php

include("../db/connect.php");

$idProduct = $_POST['idProduct'];

$query = "SELECT * FROM products WHERE id = '$idProduct'";
$result = $pdo->query($query);
$fetched = ($result->Fetch());
$images =  (unserialize($fetched['slides']));
echo json_encode(array('images'=>$images));
?>