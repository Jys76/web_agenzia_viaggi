
<?php
    require __DIR__ . "/../../../settings/path_config.php";

    session_start();
    session_destroy();
    header("Location: " . HOME_PUBL_URL);
    exit;
?>