
<!DOCTYPE html>
<head>  
    <title> Viva la Cina</title>
    <link rel="stylesheet" href="style_home.css">
    <link rel="stylesheet" href="css_home/navbar.css">
    <link rel="stylesheet" href="css_home/operations.css">
    <link rel="stylesheet" href="../../core/utility/style_utils.css">
</head>
<body>


    <div id="navbar" class="general_borders">

        <div id="title_box"><h1>WanderWave Travel</h1></div>

        <div id="links_box">

            <div id="links_box_1">
                <div class="links_div general_borders"><a href="#">Home</a></div>
                <div class="links_div general_borders"><a href="../services/services.php">Servizi</a></div>
                <div class="links_div general_borders"><a href="../travel/travel.php">Viaggia</a></div>
                <div class="links_div general_borders"><a href="../offers/offers.php">Offerte</a></div>
            </div>

            <div id="links_box_2">
                <div class="links_div general_borders"><a href="../login/login.php">Login</a></div>
                <div class="links_div general_borders"><a href="../Register/Register.php">Register</a></div>
            </div>
        </div>
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