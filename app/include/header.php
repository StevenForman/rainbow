<?php
session_start();
?>

<!doctype html>

<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- React -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/react/16.8.6/umd/react.production.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/react-dom/16.8.6/umd/react-dom.production.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/react-transition-group/4.2.1/react-transition-group.min.js'></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="../app/style/style.css">

    <title>Главная</title>
</head>

<body style="padding-top: 57px;">
<!-- HEADER -->
<header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="..">Главная</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample" aria-controls="navbarsExample" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarsExample">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li><a href="../#products" class="nav-link link-dark">Продукты</a></li>
                    <li><a href="../reviews" class="nav-link link-dark">Отзывы</a></li>
                    <li><a href="../contacts" class="nav-link link-dark">Контакты</a></li>
                    <li><a href="../about" class="nav-link link-dark">О нас</a></li>
                    <li><a href="../addProducts" class="nav-link link-dark">ДОБАВИТЬ ТОВАР</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container">