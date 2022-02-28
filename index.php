<?php include ("app/include/header.php"); ?>

    <?php include ("app/include/sliderNews.php"); ?>

    <!-- LIST -->
    <div id="products" class="bd-example py-5">
        <div class="row row-cols-1 row-cols-md-4 g-4">

            <?php include ("app/db/getProducts.php") ?>

        </div>
    </div>

<?php include ("app/include/footer.php"); ?>