<form action="product/index.php" method="get">
    <div class="col">
        <div class="card h-100">
            <img src="' . $row['photo'] . '" class="card-img-top">
            <div class="card-body d-grid">
                <h1 class="card-title">' . $row['title'] .'</h1>
                <input type="hidden" name="idProduct" value="' . $row['id'] . '">
                <input type="submit" class="btn btn-light btn-lg btn-block" value="Перейти">
            </div>
        </div>
    </div>
</form>