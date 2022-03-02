<!-- Header -->
<?php include ("../app/include/header.php"); ?>

<!-- Breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Главная</a></li>
        <li class="breadcrumb-item active" aria-current="page">Отзывы</li>
    </ol>
</nav>

<!-- Button add reviews -->
<div class="d-grid gap-2 col-6 mx-auto">
    <a class="btn btn-light btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal">Оставить отзыв</a>
</div>

<!-- Modal add reviews -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h1 class="display-5 text-center">Оставить отзыв</h1>

                <!-- Form -->
                <form name="review-form">
                    <div class="row g-3">

                        <div class="col-12">
                            <label class="form-label">Имя</label>
                            <input type="text" class="form-control" required name="client_name">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" required name="client_mail">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Телефон</label>
                            <input type="text" class="form-control" required name="client_phone">
                        </div>

                        <div class="col-12">
                            <label class="form-label">Комментарий</label>
                            <textarea class="form-control" type="text" name="text"></textarea>
                        </div>

                        <div class="row justify-content-md-center pt-3 justify-content-center">
                            <label class="form-label text-center">Оценка</label>
                            <div class="col-auto">
                                <div class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <!-- Send reviews -->
                    <div class="d-grid gap-2 col-6 mx-auto pb-3">
                        <button class="btn btn-light btn-lg btn-block" onclick="reviewSend()" id="reviews-btn" type="button">Отправить</button>
                    </div>
                </form>

                <!-- Ajax -->
                <script>
                    function reviewSend(){


                        let volume = document.forms['review-form'].length - 6;
                        for (let i = 0; i < volume; i++){
                            let x = document.forms['review-form'][i].value;
                            if (x == "") {
                                $('#falsed').modal('show');
                                return false;
                            }
                        }

                        if ($("input[name='rating']:checked").length > 0){
                        } else {
                            $('#falsedRating').modal('show');
                            return false;
                        }

                        let form = document.forms['review-form'];
                        let $form = $(form);
                        let data = $form.serialize();

                        $.ajax({
                           url: "../app/ajax/review.php",
                           type: "post",
                           dataType: "html",
                           data: {'data': data},
                           success: function (response) {
                               for (let i = 0; i <volume; i++) {
                                   document.forms['review-form'][i].value = '';
                               }
                               document.querySelector('input[name="rating"]:checked').checked = false;
                               $('#truth').modal('show');
                           }
                        });
                    }
                </script>

                <!-- Modal falsed -->
                <div class="modal fade" id="falsed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h1 class="display-6 text-center">Заполните все поля<h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal falsed rating -->
                <div class="modal fade" id="falsedRating" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h1 class="display-6 text-center">Поставьте оценку<h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal true -->
                <div class="modal fade" id="truth" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <h1 class="display-6 text-center">Заявка отправлена<h1>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Other products -->
<div class="bd-example">

    <?php include ("../app/include/productsSlider.php"); ?>

</div>

<script>
    document.title = 'Отзывы';
</script>

<!-- Footer -->
<?php include ("../app/include/footer.php"); ?>
