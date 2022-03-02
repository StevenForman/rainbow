<?php include ("../app/include/header.php"); ?>

<div class="bd-example col-md-8 offset-md-2">
    <h1 class="display-6 text-center">Добавление товара</h1>

    <form action="../app/db/addProduct.php" enctype="multipart/form-data" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Название</span>
            <input name="title" type="text" class="form-control" placeholder="Название" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Цена</span>
            <input name="price" type="text" class="form-control" placeholder="Цена" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Рейтинг</span>
            <input name="rating" type="text" class="form-control" placeholder="Рейтинг" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="mb-3">
            <span class="input-group-text" id="inputGroupFileAddon01">Главная фотография</span>
            <input name="photo" type="file" class="form-control" id="inputGroupFile01" />
        </div>

        <div class="mb-3">
            <label class="input-group-text">Фотографии для коллажа</label>
            <input name="slides[]" type="file" class="form-control" id="inputGroupFile01" multiple>
        </div>

        <p><input type="submit" class="btn btn-light border"></p>
    </form>
</div>

<script>
    document.title = 'Добавить товар';
</script>

<?php include ("../app/include/footer.php"); ?>
