        <form name="callback-form">
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

            <button class="btn btn-secondary btn-lg btn-block" onclick="callbackSend()" id="callback-btn" type="button">Отправить</button>
        </form>

<script>
    function callbackSend(){

        let volume = document.forms['callback-form'].length - 1;
        for (let i = 0; i < volume; i++){
            let x = document.forms['callback-form'][i].value
            if (x == "") {
                $('#falsed').modal('show');
                return false;
            }
        }

        let form = document.forms['callback-form'];
        let $form = $(form);
        let data = $form.serialize();

        $.ajax({
            url: "../app/ajax/callback.php",
            type: "post",
            dataType: "html",
            data: {'data': data},
            success: function (response) {
                for (let i = 0; i < volume; i++) {
                    document.forms['callback-form'][i].value = '';
                    $('#truth').modal('show');
                }
            }
        });
    }
</script>

<div class="modal fade" id="falsed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h1 class="display-6 text-center">Заполните все поля<h1>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="truth" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h1 class="display-6 text-center">Заявка отправлена<h1>
            </div>
        </div>
    </div>
</div>