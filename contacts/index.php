<?php include ("../app/include/header.php"); ?>

<?php include ("../app/include/sliderNews.php"); ?>

<?php
    $_SESSION['title'] = 'контакты';
?>

<div class="container">
    <div class="py-5 text-center">
        <h1 class="h2">Обратная связь</h1>
    </div>
    <div class="row g-3">
        <div class="col-md-6 offset-md-3">

        <?php include("../app/include/callback.php"); ?>

        </div>
    </div>
</div>

<?php include ("../app/include/footer.php"); ?>
