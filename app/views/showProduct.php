<?php

if(!empty($row['rating'])) {
    echo '
        <div class="row py-5">
            <div class="col-md-4">
                 <h1 class="display-5 text-center col-12">' . $row['title'] . '</h1>';

    if (!empty($row['price'])) {
        echo '   <h1 class="display-4 col-12">' . $row['price'] . ' Р</h1>';}

    echo'
                 <div class="Stars col-md-12 text-center" style="--rating: ' . $row['rating'] . ';"></div>
            </div>
            <div class="col-md-8">
                <iframe src="slider.php" width="100%" height="600" seamless></iframe>
            </div>
         </div>
    ';
}



