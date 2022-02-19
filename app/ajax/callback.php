<?php

include("../db/connect.php");

$data = $_POST['data'];
parse_str($data, $array);

$client_name = $array['client_name'];
$client_mail = $array['client_mail'];
$client_phone = $array['client_phone'];
$topic = $array['topic'];
$text = $array['text'];

$query = "INSERT INTO feedback (client_name, client_mail, client_phone, topic, text) VALUES ('$client_name', '$client_mail', '$client_phone', '$topic', '$text')";
$sql = $pdo->query($query);

include ("../tg/sendRequest.php");

?>
