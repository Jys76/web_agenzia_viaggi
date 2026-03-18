
<?php
    require_once __DIR__ . '/../../core/settings/path_config.php';
    require_once HOME_EVALUATE_LOGIN_FPATH;
    require_once HOME_OPERATION_ROUTING;
?>

<html>
    <head>  
        <title> Viva la Cina</title>
        <link rel="stylesheet" href="style_home.css">
        <link rel="stylesheet" href="css_home/navbar.css">
        <link rel="stylesheet" href="css_home/operation.css">
        <link rel="stylesheet" href="css_home/slideshow.css">
        
        <link rel="stylesheet" href="<?= STYLE_UTIL_URL ?>">

        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        
        <script src="js_home/navbar.js" defer></script>
        <script src="js_home/slideshow.js" defer></script>
        <script src="js_home/operations.js" defer></script>
        
    </head>
    <body>
        <div id="navbar">
            <div id="title_box"><h1>WanderWave Travel</h1></div>
            <div id="links_box">
                <div id="links_box_1">
                    <div id="navbar_services" class="navbar_links">SERVIZI</div>
                    <div id="navbar_traver" class="navbar_links">VIAGGIA</div>
                    <div id="navbar_offers" class="navbar_links">OFFERTE</div>
                </div>
                <?php evaluate_login() ?>
            </div>
        </div>

        <div id="travel_drop_box" class="drop_box">
            <a href="#" class="drop_box_links">EUROPA</a>
            <a href="#" class="drop_box_links">AMERICA</a>
            <a href="#" class="drop_box_links">AFRICA</a>
            <a href="#" class="drop_box_links">ASIA</a>
            <a href="#" class="drop_box_links">AUSTRALIA</a>
        </div>
        <div id="offers_drop_box" class="drop_box">
            <a href="#" class="drop_box_links">VIAGGIA IN GRUPPO</a>
            <a href="#" class="drop_box_links">VIAGGI SPECIALI</a>
        </div>

        <div id="slideshow_box">
            <img class="slideshow_images" src="images_home/slide1.jpg" alt="gray1">
            <img class="slideshow_images" src="images_home/slide2.jpg" alt="gray2">
            <img class="slideshow_images" src="images_home/slide3.jpg" alt="gray3">
            <img class="slideshow_images" src="images_home/slide4.jpg" alt="gray4">
            <div id="slideshow_next" onclick="show_next_slide()"></div>
            <div id="slideshow_prev" onclick="show_prev_slide()"></div>
        </div>

        <form id="operations_box" class="general_borders" method="GET">
            <div id="reserch_city_box">  
                <label for="search_city">Dove vuoi andare?</label>
                <div id="search_city_input_box">
                    <input id="search_city_input" type="text" placeholder="cerca città..." autocomplete="off" name="city_input">
                    <div id="city_input_dropdown"class="city_input_dropdown city_input_hidden" data-cities="Hellow"></div>
                </div>         
            </div>
            <div id="outbound_box">
                <label for="outbound_data_input">Data Andata</label>
                <input id="outbound_data_input" type="date" name="outbound_data_input">
            </div>
            <div id="inbound_box">
                <label for="inbound_data_input">Data Ritorno</label>  
                <input id="inbound_data_input" type="date" name="inbound_data_input">
            </div>
            <button type="submit">Cerca</button>
        </form>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                operations_init("<?php echo HOME_GET_CITIES ?>");
            });
        </script>
    
    </body>
</html>
