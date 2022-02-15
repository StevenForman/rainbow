<?php include ("../app/include/header.php"); ?>

<div class="bd-example">

    <?php include ("../app/db/getProduct.php"); ?>

    <iframe src="../app/include/productSlider.php" width="100%" height="500" seamless scrolling="no"></iframe>

    <div class="col-md-8 offset-md-2">
        <div class="row g-0 py-5">
            <a class="btn btn-outline-secondary btn-lg btn-block text-center" href="../index.php">Назад</a>
        </div>
    </div>

</div>

<?php include ("../app/include/footer.php"); ?>
