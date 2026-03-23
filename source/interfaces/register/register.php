<?php
    require_once __DIR__ . '/../../core/settings/path_config.php';
    require_once REGISTER_EVALUATE_REGISTER_FPATH;
    require_once REGISTER_DATA_LOAD_REGISTER_FPATH;
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>WanderWave Travel</title>
        <link rel="icon" href="<?=IMG_DURL."wave.png"?>" type="image/png" sizes="32x32">
        
        <link rel="stylesheet" href="style_register.css">
        <link rel="stylesheet" href="<?=STYLE_UTIL_URL?>">

        <script src="script_register/register.js" defer></script>

        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="center">

            <div id="register_navbar">
                <h2>WanderWave Travel</h2>
                <div>
                    <a href="<?=HOME_PUBL_URL?>">Home</a>
                    <a href="<?=LOGIN_PUBL_URL?>">Login</a>
                </div>
            </div>
                
            <form action="" method="POST">

                <div id="identity_register_box" action="">

                    <h2>Register</h2>

                    <div class="double_input_box">

                        <label for="input_username">Username</label>
                        <input type="text" name="input_username" placeholder="Inserisci">

                        <label for="input_sex">Sesso</label>

                        <div id="sex_selector">
                            <input id="input_sex_input" name="input_sex" type="text" style="display: none">
                            <div id="sex_box">Seleziona <</div>
                            <div id="sex_dropdown">
                                <?php echo load_sex_data($sex_query_result); ?>
                            </div>
                        </div>

                    </div><br>

                    <div class="double_input_box">
                        <label for="input_first_name">First name</label>
                        <input type="text" name="input_first_name" placeholder="Inserisci">

                        <label for="input_last_name">Last name</label>
                        <input type="text" name="input_last_name" placeholder="Inserisci">
                    </div><br>

                    <div class="double_input_box">
                        <label for="input_email">Email</label>
                        <input type="text" name="input_email" placeholder="Inserisci">
                        <label for="input_password">Password</label>
                        <input type="password" name="input_password" placeholder="Inserisci">
                    </div><br>

                    <div class="double_input_box">
                        <label for="input_cod_fisc">Cod. Fiscale</label>
                        <input type="text" name="input_cod_fisc" placeholder="Inserisci">
                    </div>

                </div>


                <div id="location_register_box" action="">

                    <div class="double_input_box">
                        <label for="input_address">Indirizzo</label>
                        <input type="text" name="input_address" placeholder="Inserisci">
                    </div><br>

                    <div class="double_input_box">
                        <label for="input_city">Città</label>
                        <input type="text" name="input_city" list="cities" placeholder="Inserisci">
                        <datalist id="cities">
                            <?php echo load_cities_data($city_query_result); ?>
                        </datalist>
                    </div><br>

                    <div class="double_input_box">
                        <label for="input_phone">Telefono</label>
                        <input type="text" name="input_phone" placeholder="Inserisci">
                        <button id="register_button" type="submit">Register</button>
                    </div>
                    
                </div>
                <?php
                    if($register_message !== ""){
                        echo "<p style='margin-left: 5%'>" . $register_message . "</p>";
                    }
                ?>

            </form>



        </div>
    </body>
</html>