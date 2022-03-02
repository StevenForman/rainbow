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
        </div>';
 /*
    if (!empty($row['price'])) { echo '
        <div class = "row justify-content-center">
            <div class = "col-lg-4"></div>
            <div class = "col-lg-4">
                <h1 class="display-4 col-12 text-center">' . $row['price'] . ' Р</h1>
            </div>
            <div class = "col-lg-4 col-auto">
                <fieldset class="rating-dis">';
    for ($i = 5; $i > 0; $i-- ) {
        if ($i == $row['rating']){
            echo '<input type="radio" id="star' . $i . '" name="rating" value="' . $i . '" checked disabled/><label class = "full" for="star' . $i . '"></label>';
        } else {
            echo '<input type="radio" id="star' . $i . '" name="rating" value="' . $i . '" disabled /><label class = "full" for="star' . $i . '"></label>';
        }
    }
    echo'
                </fieldset>
            </div>
        </div>
        ';
    } else {  */ echo '
        <div class = "row justify-content-center">  
            <div class = "col-auto">
                <fieldset class="rating-dis">';
        for ($i = 5; $i > 0; $i-- ) {
            if ($i == $row['rating']){
                echo '<input type="radio" id="star' . $i . '" name="rating" value="' . $i . '" checked disabled/><label class = "full" for="star' . $i . '"></label>';
            } else {
                echo '<input type="radio" id="star' . $i . '" name="rating" value="' . $i . '" disabled /><label class = "full" for="star' . $i . '"></label>';
            }
        }
        echo'
                </fieldset>
            </div>
        </div>
        ';
    /*  } */
}
?>

<script>
    document.title = window.document.querySelector('#title').textContent;
</script>


