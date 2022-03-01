<?php

if(!empty($row['rating'])) {
    echo '
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.php">Главная</a></li>
                <li class="breadcrumb-item"><a href="../#products">Продукты</a></li>
                <li class="breadcrumb-item active" aria-current="page">' . $_SESSION['title'] . '</li>
            </ol>
        </nav>
        
        <div class="row">
            <div class="col-md-12">
                 <h1 id="title" class="display-5 text-center col-12">' . $row['title'] . '</h1>
            </div>
            <div class="col-md-12">
                <iframe src="slider.php" width="100%" height="600" seamless></iframe>
            </div>
        </div>  
        <div class = "row">
            <div class = "col-sm"></div>';
    if (!empty($row['price'])) { echo '
            <div class = "col-sm">
                <h1 class="display-4 col-12 text-center">' . $row['price'] . ' Р</h1>
            </div>';}
    echo '    
            <div class = "col-sm">
                <div class="Stars col-md-12 text-end" style="--rating: ' . $row['rating'] . ';"></div>
            </div>
        </div>
        ';
}
?>

<script>
    document.title = window.document.querySelector('#title').textContent;
</script>


