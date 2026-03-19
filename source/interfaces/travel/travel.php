
<?php
    require_once __DIR__ . '/../../core/settings/path_config.php';
?>


<html>
    <head>
        <link rel="stylesheet" href="style_travel/travel.css">
        <link rel="stylesheet" href="style_travel/navbar_travel.css">
        <link rel="stylesheet" href="style_travel/select_travel.css">

        <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

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
                <div class="trip_element">
                    <img src="/web_agenzia_viaggi/images/kyoto.jpg" alt="">
                    <div id="info">
                        <h3>Kyoto</h3>
                    </div>
                </div>
                <div class="trip_element"></div>
                <div class="trip_element"></div>
                <div class="trip_element"></div>
                <div class="trip_element"></div>
            </div>
        </div>

    </body>
</html>