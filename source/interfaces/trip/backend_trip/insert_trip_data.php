
<?php
    require_once DB_CONFIG_PATH;
    require_once QUERY_UTIL_PATH;
    require_once CONSOLE_UTIL_PATH;

    $add_payment = "0";

    $trip_avai_id = $_POST['trip_avai_id'] ?? "";
    $roms_id = $_POST['roms_id'] ?? "";

    if($trip_avai_id !== "" && $roms_id !== ""){
        $add_payment = "1";
    }