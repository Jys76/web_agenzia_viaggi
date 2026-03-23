
<?php
    require_once DB_CONFIG_PATH;
    require_once QUERY_UTIL_PATH;
    require_once CONSOLE_UTIL_PATH;

    session_start();

    if(!isset($_SESSION['username'])){
        $_SESSION['return_page'] = TRIP_PUBL_URL . "?trip_id=" . $_GET['trip_id'];
        header("Location: " . LOGIN_PUBL_URL);
    }

    