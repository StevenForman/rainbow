<?php

echo '
        <div class="row g-0 py-5">
            <div class="col-md-4">
                <div class="row gy-5">
                    <h1 class="display-5 text-center col-12">' . $row['title'] . '</h1>
                    <h1 class="display-4 col-6">' . $row['price'] . ' Р</h1>
                    <h1 class="display-4 col-6 text-end">' . $row['rating'] . '</h1>
                    
                </div>
            </div>
            <div class="col-md-8">
                <svg class="bd-placeholder-img" width="100%" height="400" xmlns="http://www.w3.org/2000/svg" aria-label="Заполнитель: изображение" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Слайдер</text></svg>
            </div>
        </div>
';