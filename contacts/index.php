<?php include ("../app/include/header.php"); ?>

<div class="container">

    <div class="py-5 text-center">
        <h1 class="h2">Обратная связь</h1>
    </div>

    <div class="row g-3">
        <div class="col-md-6 offset-md-3">

            <form name="contacts-form">
                <div class="row g-3">
                    <div class="col-12">
                        <label class="form-label">Имя</label>
                        <input type="text" class="form-control" id="firstName" required name="client_name">
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
                        <label class="form-label">Тема письма</label>
                        <input type="text" class="form-control" required name="topic">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Текст сообщения</label>
                        <textarea class="form-control" type="text" name="text"></textarea>
                    </div>
                </div>
                <hr class="my-4">
                <button class="btn btn-secondary btn-lg btn-block" onclick="callback()" id="callback" type="button">Отправить</button>
            </form>

        </div>
    </div>
</div>

<?php include ("../app/include/footer.php"); ?>
