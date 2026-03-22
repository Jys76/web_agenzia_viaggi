
<?php
    require_once DB_CONFIG_PATH;
    require_once QUERY_UTIL_PATH;
    require_once CONSOLE_UTIL_PATH;


    if(isset($_GET['trip_id'])){
        
        $trip_id = $_GET['trip_id'];
        
        if($trip_id !== ""){

            $conn_action = "Load trip data";
            $conn = open_conn($conn_action, DEFAULT_LOG_FPATH);
            $trip_data_query = get_trip_data_query($trip_id);
            $trip_data_result = execute_query($trip_data_query, $conn, DEFAULT_LOG_FPATH);
            $trip_data = $trip_data_result->fetch_assoc();
            close_conn($conn, $conn_action, DEFAULT_LOG_FPATH);



            $trip_image_path = $trip_data['trip_image_path'] ? IMG_DURL . $trip_data['trip_image_path'] : "";
            $trip_flag_image_path = $trip_data['trip_flag_image_path'] ? IMG_DURL . $trip_data['trip_flag_image_path'] : "";

            $trip_name = $trip_data['trip_name'] ? $trip_data['trip_name'] : "";
            $trip_descr = $trip_data['trip_descr'] ? $trip_data['trip_descr'] : "";

            $cont_name = $trip_data['cont_name'] ? $trip_data['cont_name'] : "";
            $natn_name = $trip_data['natn_name'] ? $trip_data['natn_name'] : "";
            $regn_name = $trip_data['regn_name'] ? $trip_data['regn_name'] : "";
            $prov_name = $trip_data['prov_name'] ? $trip_data['prov_name'] : "";
            $city_name = $trip_data['city_name'] ? $trip_data['city_name'] : "";

            $trip_id_accm = $trip_data['trip_id_accm'] ? $trip_data['trip_id_accm'] : "";

            $loct_address = $trip_data['loct_address'] ? $trip_data['loct_address'] : "";

            $trip_catg_name = $trip_data['trip_catg_name'] ? $trip_data['trip_catg_name'] : "";
            $seas_name = $trip_data['seas_name'] ? $trip_data['seas_name'] : "";

            $trip_price = $trip_data['trip_price'] ? $trip_data['trip_price'] : "";
            $trip_id_curr = $trip_data['trip_id_curr'] ? $trip_data['trip_id_curr'] : "";



            $conn_action = "Load trip availability data";
            $conn = open_conn($conn_action, DEFAULT_LOG_FPATH);
            $trip_avai_query = get_trip_avai_query($trip_id);
            $trip_avai_result = execute_query($trip_avai_query, $conn, DEFAULT_LOG_FPATH);
            close_conn($conn, $conn_action, DEFAULT_LOG_FPATH);
        }
    }

    function load_trip_avai($trip_avai_result){
        $elements = "";
        while($row = $trip_avai_result->fetch_assoc()){
            $elements .= get_trip_avai_view(
                $row['start_date'], 
                $row['end_date'],
                $row['trip_avai_id']
            );
        }
        return $elements;
    }