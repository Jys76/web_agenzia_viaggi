
<?php
    require_once __DIR__ . '/../../core/settings/path_config.php';
    require_once __DIR__ . '/view_travel/trips_element_view.php';
    require_once __DIR__ . '/query_travel/trips_query.php';
    require_once __DIR__ . '/backend_travel/load_trips.php';

?>  


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>WanderWave Travel</title>
        <link rel="icon" href="<?=IMG_DURL."wave.png"?>" type="image/png" sizes="32x32">
        
        <link rel="stylesheet" href="style_travel/travel.css">
        <link rel="stylesheet" href="style_travel/navbar_travel.css">
        <link rel="stylesheet" href="style_travel/select_travel.css">

        <script src="script_travel/trip_routing.js" defer></script>

        <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

    </head>
    <body>
        <div id="navbar_travel">
            <h1>Wanderwave Travel</h1>
            <div id="navbar_links">
                <a href="<?=HOME_PUBL_URL?>">HOME</a>
                <a href="<?=TRAVEL_PUBL_URL.'?city='.$city.'&outbound_data='.$outbound_data.'&inbound_data='.$inbound_data?>">AGGIORNA</a>
            </div>
        </div>

        <div id="select_travel_box">
            <div id="filter_box">
                <div id="research_info_box">
                    <h3>DATI RICERCA</h3>
                    <br>
                    <div class="research_name">CITY NAME</div>
                    <div class="research_value"><?= $city === "" ? "All cities" : $city ?></div>
                    <div class="research_name">OUTBOUND DATE</div>
                    <div class="research_value"><?= $outbound_data === "" ? "All dates" : $outbound_data ?></div>
                    <div class="research_name">INBOUND DATE</div>
                    <div class="research_value"><?= $inbound_data === "" ? "All dates" : $inbound_data ?></div>
                </div>
            </div>
            <div id="travel_scroll_box">
                <?php load_trips_elements($trips_query_result); ?>

                <div class="trip_element"></div>
                <div class="trip_element"></div>
                <div class="trip_element"></div>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function(){
                load_trips_event_listener("<?=TRIP_PUBL_URL?>");
            })
        </script>

    </body>
</html>