<?php include ("../app/include/header.php"); ?>

<div class="bd-example">

    <?php include ("../app/db/getProduct.php"); ?>

    <hr class="my-4">

    <div>
        <div class="row md-12">
            <div class="col-10"><h1>Описание товара</h1></div>
            <div class="col"><a class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Задать вопрос</a></div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h1 class="text-center">Задать вопрос</h1>
                            <?php include ("../app/include/callback.php"); ?>
                        </div>
                    </div>
                </div>
            </div>



        </div>

        <div class="py-5">
            <p class="card-text">Не следует, однако, забывать о том, что реализация намеченного плана развития играет важную роль в формировании дальнейших направлений развития проекта?
                Не следует, однако, забывать о том, что социально-экономическое развитие играет важную роль в формировании новых предложений. Соображения высшего порядка, а также новая
                модель организационной деятельности позволяет выполнить важнейшие задания по разработке существующих финансовых и административных условий.
            </p>
        </div>
    </div>

    <hr class="my-4">

    <?php include ("../app/include/productsSlider.php"); ?>

    <div class="col-md-8 offset-md-2 py-5 gy-5">
        <div class="row g-0 py-5">
            <a class="btn btn-outline-secondary btn-lg btn-block text-center" href="../index.php">Назад</a>
        </div>
    </div>

</div>

<?php include ("../app/include/footer.php"); ?>
