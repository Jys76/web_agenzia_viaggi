
<?php
    require_once DB_CONFIG_PATH;
    require_once QUERY_UTIL_PATH;
    require_once CONSOLE_UTIL_PATH;

    $add_payment = "0";

    $trip_avai_id = $_POST['trip_avai_id'] ?? "";
    $roms_id = $_POST['roms_id'] ?? "";
    $id_username = $_SESSION['id_username'] ?? "";

    if(
        $trip_avai_id !== "" && 
        $roms_id !== "" && 
        $_SESSION['id_username'] !== "" &&
        $trip_id_curr !== ""
    ){
        $add_payment = "1";

        $conn_action = "Insert trip data";
        $conn = open_conn($conn_action, DEFAULT_LOG_FPATH);

        $avai_pren_status_query = "
            SELECT id 
            FROM trip_avai_clie_stat
            WHERE name = 'Active'
        "; 

        $avai_pren_status_result = execute_query($avai_pren_status_query, $conn, DEFAULT_LOG_FPATH);
        $avai_pren_status_id = $avai_pren_status_result->fetch_assoc()['id'];

        $insert_trip_query = "
            INSERT INTO trip_avai_clie
                (id_trip_avai, id_clie, id_curr, id_trip_avai_clie_stat) 
            VALUES 
                 ('$trip_avai_id', '$id_username', '$trip_id_curr', '$avai_pren_status_id')
        ";

        $insert_trip_result = execute_query($insert_trip_query, $conn, DEFAULT_LOG_FPATH);
        close_conn($conn, $conn_action, DEFAULT_LOG_FPATH);
    }