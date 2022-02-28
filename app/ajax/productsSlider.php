<?php

include("../db/connect.php");

$query = "SELECT * FROM products";
$result = $pdo->query($query);
$arr = $result->fetchAll();
$randRows = array_rand($arr, 5);
$response = array();
$key = 0;
foreach ($randRows as $value){
    $responseArr[$key] = $arr[$value];
    $key++;
}
$response = json_encode($responseArr);
echo $response;
?>
