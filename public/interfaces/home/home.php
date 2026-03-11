
<?php
    require __DIR__ . '/../../../settings/path_config.php';
    require HOME_BACK_URL;
?>

<html>
    <head>  
        <title> Viva la Cina</title>
        <link rel="stylesheet" href="style_home.css">
        <link rel="stylesheet" href="css_home/navbar.css">
        <link rel="stylesheet" href="css_home/operation.css">
        <link rel="stylesheet" href="css_home/slideshow.css">
        
        <link rel="stylesheet" href="../../core/utility/style_utils.css">
        
        <script src="js_home/navbar.js" defer></script>
        <script src="js_home/slideshow.js" defer></script>
        
    </head>
    <body>


        <div id="navbar" class="general_borders">

            <div id="title_box"><h1>WanderWave Travel</h1></div>

            <div id="links_box">

                <div id="links_box_1">
                    <div id="navbar_services" class="navbar_links general_borders">Servizi</div>
                    <div id="navbar_traver" class="navbar_links general_borders">Viaggia</div>
                    <div id="navbar_offers" class="navbar_links general_borders">Offerte</div>
                </div>

                <div id="links_box_2">
                    <a class="navbar_links general_borders" href= "<?=LOGIN_PUBL_URL?>" >Login</a></div>
                    <a class="navbar_links general_borders" href="../Register/Register.php">Register</a></div>
                </div>

            </div>
        </div>



        <div id="travel_drop_box" class="drop_box general_borders">
            <a href="#" class="drop_box_links general_borders">Per Continente</a>
            <a href="#" class="drop_box_links general_borders">Per Nazione</a>
            <a href="#" class="drop_box_links general_borders">Per Regione</a>
        </div>

        <div id="offers_drop_box" class="drop_box general_borders">
            <a href="#" class="drop_box_links general_borders">Viaggia in gruppo</a>
            <a href="#" class="drop_box_links general_borders">Offerte speciali</a>
        </div>





        <div id="slideshow_box" class="general_borders">
            <img class="slideshow_images" src="home_images/gray1.jpg" alt="gray1">
            <img class="slideshow_images" src="home_images/gray2.jpg" alt="gray2">
            <img class="slideshow_images" src="home_images/gray3.jpg" alt="gray3">
            <div id="slideshow_next"><div onclick="show_next_slide()"></div></div>
            <div id="slideshow_prev"><div onclick="show_prev_slide()"></div></div>
        </div>


    


        <form id="operations" class="general_borders" method="POST">
            
            <div id="reserch_city_box">  
                <label for="search_city">Dove vuoi andare?</label>
                <input id="search_city_input" type="text" placeholder="cerca città...">
            </div>

            <div id="outbound_box">
                <label for="outbound_data_input">Data Andata</label>
                <input id="outbound_data_input" type="date" >
            </div>

            <div id="inbound_box">
                <label for="inbound_data_input">Data Ritorno</label>  
                <input id="inbound_data_input" type="date" >
            </div>

            <button type="submit">Cerca</button>
        </form>
    



    </body>
</html>
