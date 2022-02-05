<?php

    echo '
    <form action="product/index.php" method="get">
        <div class="col">
            <div class="card h-100">
                <img src="' . $row['photo'] . '" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">' . $row['title'] .'</h5>
                    <input type="hidden" name="idProduct" value="' . $row['id'] . '">
                    <p><input type="submit" class="btn btn-outline-secondary" value="Перейти"></p>
                </div>
            </div>
        </div>
    </form>
    ';


