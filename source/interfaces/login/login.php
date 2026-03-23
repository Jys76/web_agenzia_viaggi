
<?php
    require __DIR__ . '/../../core/settings/path_config.php';
    require LOGIN_EVALUATE_LOGIN_FPATH;
?>

<html>
    <head>
        <link rel="stylesheet" href="style_login.css">
        <link rel="stylesheet" href="<?=STYLE_UTIL_URL?>">

        <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    </head>
    <body>

        <div id="center">

            <div id="navbar" class="">
                <h2>WanderWave Travel</h2>
                <div>
                    <a href="<?=HOME_PUBL_URL?>">Home</a>
                    <a href="<?=REGISTER_PUBL_URL?>">Register</a>
                </div>
            </div>

            <div id="login_box">
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