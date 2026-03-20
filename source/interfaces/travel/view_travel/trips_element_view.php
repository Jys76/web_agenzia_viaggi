<?php

function get_trips_element_view(
    $img_dpath,
    $trip_name,
    $natn_name,
    $trip_image_path,
    $trip_flag_image_path,
    $trip_descr,
    $trip_price,
    $trip_id_curr,
    $trip_catg_name,
    $seas_name
){
    ob_start();
    ?>
    <div class="trip_element">
        <div class="trip_element_title"><h2><?=$trip_name?> - <?=$natn_name?></h2> <img src="<?=$img_dpath . $trip_flag_image_path?>" alt=""></div>
        <div class="trip_element_info_box">
            <div class="trip_element_image"><img src="<?=$img_dpath . $trip_image_path?>" alt="<?=$trip_name?>"></div>
            <div class="trip_element_info">
                <div class="trip_element_info_descr"><?=$trip_descr?></div>
                <div class="trip_element_info_info">
                    <br><h3>Prezzo: <?=$trip_price?> <?=$trip_id_curr?></H3>
                    <br>Categoria: <?=$trip_catg_name?>
                    <br>Season: <?=$seas_name?>
                </div>
                <div class="trip_element_info_button">VIAGGIA QUI</div>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}