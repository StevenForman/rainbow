<?php

include("../db/connect.php");

$data = $_POST['data'];
parse_str($data, $array);

$client_name = $array['client_name'];
$client_mail = $array['client_mail'];
$client_phone = $array['client_phone'];
$text = $array['text'];
$rating = $array['rating'];

$query = "INSERT INTO comments (client_name, client_mail, client_phone, text, rating) VALUES ('$client_name', '$client_mail', '$client_phone', '$text', '$rating')";
$sql = $pdo->query($query);

?>