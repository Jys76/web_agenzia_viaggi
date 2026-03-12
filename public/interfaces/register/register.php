<?php
    require __DIR__ . '/../../../settings/path_config.php';
    require REGISTER_BACK_PATH;
?>

<html>
    <head>
        <link rel="stylesheet" href="style_register.css">
        <link rel="stylesheet" href="<?=STYLE_UTILS_URL?>">
    </head>
    <body>
        <div id="center" class="inverted_general_borders">

            <div id="register_navbar" class="general_borders">
                <h2>Register</h2>
                <div>
                    <a href="<?=HOME_PUBL_URL?>" class="general_borders">Home</a>
                    <a href="<?=LOGIN_PUBL_URL?>" class="general_borders">Login</a>
                </div>
            </div>
                
            <form action="" method="POST">

                <div id="identity_register_box" class="general_borders" action="">

                    <div id="first_name_box">
                        <label for="input_first_name">First name</label>
                        <input type="text" name="input_first_name" placeholder="Inserisci">
                    </div><br>

                    <div id="last_name_box">
                        <label for="input_last_name">Last name</label>
                        <input type="text" name="input_last_name" placeholder="Inserisci">
                    </div><br>

                    <div id="username_box">
                        <label for="input_username">Username</label>
                        <input type="text" name="input_username" placeholder="Inserisci">
                    </div><br>

                    <div id="email_box">
                        <label for="input_email">Email</label>
                        <input type="text" name="input_email" placeholder="Inserisci">
                    </div><br>
                        
                    <div id="password_box">
                        <label for="input_password">Password</label>
                        <input type="password" name="input_password" placeholder="Inserisci">
                    </div><br>

                    <div id="sex_box">
                        <label for="input_sex">Sesso</label>
                        <select name="input_sex" id="sex_selector">
                            <option value="">--scegli--</option>
                            <?php echo load_sex_data($sex_query_result); ?>
                        </select>
                    </div><br>

                    <div id="cod_fisc_box">
                        <label for="input_cod_fisc">Codice Fiscale</label>
                        <input type="text" name="input_cod_fisc" placeholder="Inserisci">
                    </div><br>

                </div>


                <div id="location_register_box" class="general_borders" action="">

                    <div id="address_box">
                        <label for="input_address">Indirizzo</label>
                        <input type="text" name="input_address" placeholder="Inserisci">
                    </div><br>

                    <div id="city_box">
                        <label for="input_city">Città</label>
                        <input type="text" name="input_city" list="cities" placeholder="Inserisci">
                        <datalist id="cities">
                            <?php echo load_cities_data($city_query_result); ?>
                        </datalist>
                    </div><br>

                    <div id="phone_box">
                        <label for="input_phone">Telefono</label>
                        <input type="text" name="input_phone" placeholder="Inserisci">
                    </div><br>
                    
                </div>

                <button id="register_button" type="submit">Register</button>
                
                <?php
                    if($register_message !== ""){
                        echo "<p style='position: absolute; bottom: 1px'>" . $register_message . "</p>";
                    }
                ?>

            </form>



        </div>
    </body>
</html>