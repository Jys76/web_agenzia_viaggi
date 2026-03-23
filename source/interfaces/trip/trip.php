
<?php
    require_once __DIR__ . '/../../core/settings/path_config.php';

    require_once __DIR__ . '/backend_trip/session_control.php';

    require_once __DIR__ . '/view_trip/trip_avai_view.php';
    require_once __DIR__ . '/view_trip/trip_roms_view.php';

    require_once __DIR__ . '/query_trip/trip_avai_query.php';
    require_once __DIR__ . '/query_trip/trip_data_query.php';
    require_once __DIR__ . '/query_trip/trip_hotel_query.php';

    require_once __DIR__ . '/backend_trip/load_trip_data.php';
    require_once __DIR__ . '/backend_trip/load_accm_data.php';
    require_once __DIR__ . '/backend_trip/insert_trip_data.php';
    require_once __DIR__ . '/backend_trip/insert_paym_data.php';
    
?>

<html>
    <head>
        <link rel="stylesheet" href="style_trip/trip.css">
        <link rel="stylesheet" href="style_trip/trip_info.css">
        <link rel="stylesheet" href="style_trip/trip_pren.css">
        <link rel="stylesheet" href="style_trip/paym.css">

        <script src="script_trip/roms_data.js" defer></script>
        <script src="script_trip/trip_avai_script.js" defer></script>
        <script src="script_trip/trip_pren_script.js" defer></script>
        <script src="script_trip/roms_script.js" defer></script>

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
        <script>
            if(<?=$add_payment?> == 1){
                window.addEventListener('load', () => {
                    const body_element = document.body;
                    body_element.style.height = "300vh";
                    
                    document.getElementById("payment_content").style.display = "flex";

                    window.scrollTo({
                        top: window.innerHeight * 2,
                        behavior: 'smooth'
                    });
                    
                });
            }

        </script>
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

                <div id="trip_pren_box">

                    <h1>Prenota viaggio</h1>
                    
                    
                    <form id="trip_pren_form" action="" method="POST">
                        <input type="text" id="trip_avai_id_input" name="trip_avai_id">
                        <input type="text" id="roms_id_input" name="roms_id">
                        <button type="submit" id="trip_pren_submit">submit</button>
                    </form>
                        
                    <div id="trip_pren_box_content">

                        <div id="trip_avai_box">
                            <h3>Seleziona data</h3>
                            <table id="trip_avai_table">
                                <tr>
                                    <th>Data andata</th>
                                    <th>Data ritorno</th>
                                    <th>Azione</th>
                                </tr>
                                <?= load_trip_avai($trip_avai_result) ?>
                            </table>
                        </div>

                        <div id="hotel_roms_info_box">

                            <div id="hotel_info_box">
                                <h3>Hotel info</h3>
                                <table>
                                    <tr>
                                        <td>Indirizzo hotel: </td>
                                        <td><?=$accm_loct_address?></td>
                                    </tr>
                                    <tr>
                                        <td>Tipologia: </td>
                                        <td><?=$accm_type?></td>
                                    </tr>
                                    <tr>
                                        <td>Numero stelle: </td>
                                        <td><?=$accm_stars?> &#x2B50</td>
                                    </tr>
                                    
                                </table>
                            </div>

                            <div id="rom_select_box">
                                <h3>Prenota camera</h3>

                                <div id="rom_select_box_input">
                                    <label for="num_roms_input">Seleziona numero camera</label>

                                    <select name="num_roms_input" id="num_roms_select">
                                        <option value="">Seleziona</option>
                                        <?=load_roms_select_data($trip_roms_result)?>
                                    </select>
                                </div>

                                <table>
                                    <tr>
                                        <td>Stato camera: </td>
                                        <td id="status_td">Vuoto</td>
                                    </tr>
                                    <tr>
                                        <td>Numero letti: </td>
                                        <td id="num_beds_td">Vuoto</td>
                                    </tr>
                                    <tr>
                                        <td>Descrizione</td>
                                        <td id="descr_td">Vuoto</td>
                                    </tr>
                                </table>

                            </div>
                            <div id="trips_submit_box">
                                <p id="trips_submit_message"></p>
                                <div id="trips_submit">Acquista +</div>
                            </div>
                        </div>

                    </div>

                </div>

                <div id="payment_content">
                    <h1>Pagamenti</h1>
                    <br>
                    <p>Quantità da pagare: <?=$trip_price . " " . $trip_id_curr?></p>
                    <h3>Inserisci carta</h3>
                    <form action="" method="POST" id="payment_form">
                        <table>
                            <tr>
                                <td>Nome: </td>
                                <td><input 
                                    type="text" 
                                    name="payment_first_name_input" 
                                    id="payment_first_name"
                                    placeholder="inserisci">
                                </td>
                            </tr>
                            <tr>
                                <td>Cognome: </td>
                                <td><input 
                                    type="text" 
                                    name="payment_last_name_input" 
                                    id="payment_last_name"
                                    placeholder="inserisci">
                                </td>
                            </tr>
                            <tr>
                                <td>Numero carta</td>
                                <td><input 
                                    type="text" 
                                    name="payment_card_number_input" 
                                    id="payment_card_number"
                                    placeholder="inserisci">
                                </td>
                            </tr>
                            <tr>
                                <td>Data scadenza</td>
                                <td><input 
                                    type="text" 
                                    name="payment_expiration_date_input" 
                                    id="payment_expiration_date"
                                    placeholder="inserisci">
                                </td>
                            </tr>
                            <tr>
                                <td>CVV</td>
                                <td><input 
                                    type="text" 
                                    name="payment_cvv_input" 
                                    id="payment_cvv"
                                    placeholder="inserisci">
                                </td>
                            </tr>
                        </table>
                        
                        <button>Paga</button>
                    </form>
                </div>

            </div>



        </div>


        

    </body>
</html>