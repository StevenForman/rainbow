<?php include ("../app/include/header.php"); ?>

<div class="bd-example">

    <?php include ("../app/db/getProduct.php"); ?>

    <hr class="my-4">

    <div class="col-md-12">
        <div class="d-grid gap-2 col-6 mx-auto">
            <a class="btn btn-light btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal">Отправить заявку</a>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <h1 class="display-5 text-center">Отправить заявку</h1>
                        <?php include ("../app/include/callback.php"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">

    <div>
    <?php include ("../app/include/productsSlider.php"); ?>
    </div>

    <hr class="my-4">

</div>

<?php include ("../app/include/footer.php"); ?>
