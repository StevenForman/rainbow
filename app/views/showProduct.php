<?php

echo '
        <div class="row g-0 py-5">
            <div class="col-md-4">
                <div class="row gy-5">
                    <h1 class="display-5 text-center col-12">' . $row['title'] . '</h1>
                </div>
            </div>
            <div class="col-md-8">
                <iframe src="slider.php" width="100%" height="600" seamless></iframe>
                  <h1 class="display-4 col-6">Цена: ' . $row['price'] . ' Р</h1>
                  <h1 class="display-4 col-6 text-end">' . $row['rating'] . '</h1>
                  <h1 class="display-4 col-6 text-end">' . $_SESSION['idProduct'] . '</h1>
            </div>
        </div>
';