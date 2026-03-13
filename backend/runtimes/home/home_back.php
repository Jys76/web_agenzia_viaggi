
<?php
    session_start();

    function evaluate_login(){

        if(isset($_SESSION['username'])){
            echo "<p id='navbar_username'>User: " . $_SESSION['username'] . "</p>";
            echo '<a class="navbar_links general_borders" href="'.LOGOUT_URL.'">Logout</a>';
        }
        else{
            ob_start();
            ?>
            <div id="links_box_2">
                <a class="navbar_links" href="<?=LOGIN_PUBL_URL?>">LOGIN</a></div>
                <a class="navbar_links" href="<?=REGISTER_PUBL_URL?>">REGISTER</a></div>
            </div>
            <?php
            echo ob_get_clean();
        }
    }


?>