<?php
session_start();
define("botId", "5272843987:AAGx9zOYqggabh5vSoj9iTM7i9-mc5xw7Js");
define('chatId', '-1001754743983');

$title = $_SESSION['title'];

$message ='Страница отправки: ' . $title . '%0AИмя: ' . $client_name . '%0AEmail: ' . $client_mail . '%0AНомер телефона: ' . $client_phone . '%0AТема: ' . $topic . '%0AСообщение: ' . $text;

$query = curl_init('https://api.telegram.org/bot' . botId . '/sendMessage?chat_id=' . chatId . '&text=' . $message);
curl_setopt($query, CURLOPT_RETURNTRANSFER, true);
curl_exec($query);
curl_close($query);

?>