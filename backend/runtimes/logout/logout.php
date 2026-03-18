
<?php
    require_once __DIR__ . "/../../../settings/path_config.php";
    require_once CONSOLE_UTIL_PATH;

    session_start();
    session_destroy();
    write_console('USER: ' . $_SESSION['username'] . ' LOGOUT', DEFAULT_LOG_FPATH);
    header("Location: " . HOME_PUBL_URL);
    exit;
?>