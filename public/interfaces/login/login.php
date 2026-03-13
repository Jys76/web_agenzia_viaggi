
<?php
    require __DIR__ . '/../../../settings/path_config.php';
    require LOGIN_BACK_PATH;
?>

<html>
    <head>
        <link rel="stylesheet" href="style_login.css">
        <link rel="stylesheet" href="<?=STYLE_UTILS_URL?>">
    </head>
    <body>

        <div id="center">

            <div id="navbar" class="general_borders">
                <h3>WanderWave Travel</h3>
                <div>
                    <a href="<?=HOME_PUBL_URL?>" class="general_borders">Home</a>
                    <a href="<?=REGISTER_PUBL_URL?>" class="general_borders">Register</a>
                </div>
            </div>

            <div id="login_box" class="general_borders">
                <h1>Login</h1>
                <form id="login_form" action="" method="POST">

                    <label for="email_input">Email</label>
                    <input type="text" name="email_input" placeholder="Insert here"><br>

                    <label for="password_input">Password</label>
                    <input type="password" name="password_input" placeholder="Insert here"><br>

                    <button type="submit" >Login</button>
                </form>
            </div>

            <?php 
                if($login_message !== ""){
                    echo "<p style='position: absolute; bottom: 10px'>" . $login_message . "</p>";
                }
            ?>

        </div>

    </body>
</html>