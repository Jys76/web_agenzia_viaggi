<?php
    require_once DB_CONFIG_PATH;
    require_once QUERY_UTIL_PATH;
    require_once CONSOLE_UTIL_PATH;




    /*=======================================
        FUNCTIONS
    =======================================*/

    function load_trips_elements($trips_query_result){
        $elements = '';
        while($row = $trips_query_result->fetch_assoc()){
            $elements .= get_trips_element_view(
                IMG_DURL,
                $row['trip_id'],
                $row['trip_name'],
                $row['natn_name'],
                $row['trip_image_path'],
                $row['trip_flag_image_path'],
                $row['trip_descr'],
                $row['trip_price'],
                $row['trip_id_curr'],
                $row['trip_catg_name'],
                $row['seas_name']
            );
        }
        echo $elements;
    }
    




    /*=======================================
        LOAD FILTERED DATA
    =======================================*/

    if(
        isset($_GET['city']) &&
        isset($_GET['outbound_data']) &&
        isset($_GET['inbound_data'])
    ){
        $city = $_GET['city'];
        $outbound_data = $_GET['outbound_data'];
        $inbound_data = $_GET['inbound_data'];

        if(
            $city === "" &&
            $outbound_data === "" &&
            $inbound_data === ""
        ){
            $conn_action = "Load all trips data";
            $conn = open_conn($conn_action, DEFAULT_LOG_FPATH);
            $trips_query = get_all_trips_query();
            $trips_query_result = execute_query($trips_query, $conn, DEFAULT_LOG_FPATH);
            close_conn($conn, $conn_action, DEFAULT_LOG_FPATH);
        }
        else{
            $conn_action = "Load filtered trips data";
            $conn = open_conn($conn_action, DEFAULT_LOG_FPATH);
            $trips_query = get_filtered_trips_query($city, $outbound_data, $inbound_data);
            $trips_query_result = execute_query($trips_query, $conn, DEFAULT_LOG_FPATH);
            close_conn($conn, $conn_action, DEFAULT_LOG_FPATH);
        }
    }
    

    
