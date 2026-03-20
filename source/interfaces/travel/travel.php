
<?php
    require_once __DIR__ . '/../../core/settings/path_config.php';
    require_once __DIR__ . '/backend_travel/load_trips.php';
    require_once __DIR__ . '/view_travel/trips_element_view.php';
?>


<html>
    <head>
        <link rel="stylesheet" href="style_travel/travel.css">
        <link rel="stylesheet" href="style_travel/navbar_travel.css">
        <link rel="stylesheet" href="style_travel/select_travel.css">

        <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

    </head>
    <body>
        <div id="navbar_travel">
            <h1>Wanderwave Travel</h1>
            <div id="navbar_links">
                <a href="<?=HOME_PUBL_URL?>">HOME</a>
                <a href="<?=TRAVEL_PUBL_URL?>">AGGIORNA</a>
            </div>
        </div>

        <div id="select_travel_box">
            <div id="filter_box">
                
            </div>
            <div id="travel_scroll_box">
                <?php load_trips_elements($trips_query_result); ?>

                <div class="trip_element"></div>
                <div class="trip_element"></div>
                <div class="trip_element"></div>
                <div class="trip_element"></div>
            </div>
        </div>

    </body>
</html>