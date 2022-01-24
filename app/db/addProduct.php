<?php

include("connect.php");

$path = '../../assets/images/';
$title = $_POST['title'];
$price = $_POST['price'];
$rating = $_POST['rating'];

$query = "INSERT INTO products (title, price, rating) VALUES ('$title', '$price', '$rating')";
$sql = $pdo->query($query);

$query = "SELECT * FROM products WHERE title = '$title' AND price = '$price' AND rating = '$rating'";
$sql = $pdo->query($query);
while ($row = $sql -> fetch()){
    $id = $row['id'];
}

move_uploaded_file($_FILES['photo']['tmp_name'], $path . $id .'.jpg');
$pathphoto = $path . $id .'.jpg';

$query = "UPDATE products SET photo = '$pathphoto' WHERE id = '$id'";
$sql = $pdo->query($query);


$dir = $path . $id;
mkdir("$dir", 0700);
$totalfiles = count($_FILES['slides']['name']);
for ($key = 0; $key < $totalfiles; $key++){
    //print_r($_FILES['slides']['name'][$key]);
    move_uploaded_file($_FILES['slides']['tmp_name'][$key], $dir . '/' . $key.'.jpg');
    $pathslides[] = $dir . '/' . $key.'.jpg';
}
$slides = serialize($pathslides);
$query = "UPDATE products SET slides = '$slides' WHERE id = '$id'";
$sql = $pdo->query($query);

header('Location:../../index.php');