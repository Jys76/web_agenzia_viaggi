
<?php
    require_once __DIR__ . '/../../core/settings/path_config.php';
    require_once __DIR__ . '/query_trip/trip_data.php';
    require_once __DIR__ . '/backend_trip/load_trip_data.php';
    
?>

<html>
    <head>
        <link rel="stylesheet" href="style_trip/trip.css">
        <link rel="stylesheet" href="style_trip/trip_info.css">

        <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

        <style>
            body{
                height: 200vh;
            }
            body::before{
                background-image: url("<?=$trip_image_path?>");
                content: "";
                inset: -10px;
                position: fixed;
                background-size: cover;
                background-position: center;
                z-index: -1;
                filter: blur(5px);
            }
            #overlay{
                position: fixed;
                z-index: -1;
                inset: 0;
                background: rgba(0, 0, 0, 0.5);
            }
        </style>
    </head>
    <body>
        <div id="overlay"></div>

        <div id="content">
            <div id="navbar_travel">
                <h1>Wanderwave Travel</h1>
                <a href="<?=HOME_PUBL_URL?>">HOME</a>
                <a href="<?=TRIP_PUBL_URL.'?trip_id='.$_GET['trip_id']?>">AGGIORNA</a>
            </div>

            <div id="trip_content">

                <div id="trip_name_box">
                    <img src="<?=$trip_flag_image_path?>" alt="">
                    <?=$trip_name?> - <?=$natn_name?>
                </div>
                
                <div id="trip_all_info_box">
                    <div id="trip_info_box">

                        <h2 id="trip_info_location_title">Localizzazione</h2>

                        <table class="trip_info_tables">
                            <tr class="trip_info_table_row">
                                <td>Continente:</td>
                                <td><?=$cont_name?></td>
                            </tr>
                            <tr class="trip_info_table_row">
                                <td>Nazione:</td>
                                <td><?=$natn_name?></td>
                            </tr>
                            <tr class="trip_info_table_row">
                                <td>Regione:</td>
                                <td><?=$regn_name?></td>
                            </tr>
                            <tr class="trip_info_table_row">
                                <td>Provincia:</td>
                                <td><?=$prov_name?></td>
                            </tr>
                            <tr class="trip_info_table_row">
                                <td>Città:</td>
                                <td><?=$city_name?></td>
                            </tr>
                            <tr class="trip_info_table_row">
                                <td>Indirizzo:</td>
                                <td><?=$loct_address?></td>
                            </tr>
                        </table>




                        <h2 id="trip_info_category_title">Categorie</h2>
                        
                        <table class="trip_info_tables">
                            <tr class="trip_info_table_row">
                                <td>Categoria viaggio: </td>
                                <td><?=$trip_catg_name?></td>
                            </tr>
                            <tr class="trip_info_table_row">
                                <td>Stagione: </td>
                                <td><?=$seas_name?></td>
                            </tr>
                        </table>




                        <h2 id="trip_info_price_title">Prezzi</h2>

                        <table class="trip_info_tables">
                            <tr class="trip_info_table_row">
                                <td>Costo viaggio: </td>
                                <td><?=$trip_price?> <?=$trip_id_curr?></td>
                            </tr>
                        </table>

                    </div>
                    <div id="trip_img_descr_box">
                        <h2><?=$trip_name?></h2>
                        <img src="<?=$trip_image_path?>" alt="">
                        <p><?=$trip_descr?></p>
                    </div>
                    
                </div>

                <div id="trip_avai_box">
                    
                </div>
            </div>
        </div>


        

    </body>
</html>