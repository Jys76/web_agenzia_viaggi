
<?php
    require_once DB_CONFIG_PATH;
    require_once QUERY_UTIL_PATH;
    require_once CONSOLE_UTIL_PATH;

    if($trip_id_accm){
        
        $conn_action = "Load roms data";
        $conn = open_conn($conn_action, DEFAULT_LOG_FPATH);
        $trip_roms_query = get_roms_query($trip_id_accm);
        $trip_roms_result = execute_query($trip_roms_query, $conn, DEFAULT_LOG_FPATH);
        close_conn($conn, $conn_action, DEFAULT_LOG_FPATH);

        $conn_action = "Load accomodation data";
        $conn = open_conn($conn_action, DEFAULT_LOG_FPATH);
        $accm_query = get_hotel_query($trip_id_accm);
        $accm_result = execute_query($accm_query, $conn, DEFAULT_LOG_FPATH);
        $accm_data = $accm_result->fetch_assoc();
        close_conn($conn, $conn_action, DEFAULT_LOG_FPATH);

        $accm_loct_address = $accm_data['loct_address'];
        $accm_type = $accm_data['accm_type'];
        $accm_stars = $accm_data['accm_stars'];
    }

    function load_roms_select_data($trip_roms_result){
        $options = "";
        while($row = $trip_roms_result->fetch_assoc()){
            $options .= get_roms_options_view(
                $row['rom_id'],
                $row['rom_num'],
                $row['rom_beds'],
                $row['rom_status'],
                $row['rom_descr']
            );
        }
        return $options;
    }