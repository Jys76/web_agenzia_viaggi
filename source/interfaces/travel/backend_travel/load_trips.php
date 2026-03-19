<?php
    require_once DB_CONFIG_PATH;
    require_once QUERY_UTIL_PATH;
    require_once CONSOLE_UTIL_PATH;
    
    if(
        !isset($_GET['city']) &&
        !isset($_GET['outbound_data']) &&
        !isset($_GET['inbound_data'])
    ){
        $conn_action = "Load all trips data";
        $conn = open_conn($conn_action, DEFAULT_LOG_FPATH);
        $trips_query = '
            SELECT 
                t.name as trip_name, 
                n.name as natn_name, 
                t.image_path as trip_image_path, 
                t.descr as trip_descr, 
                t.price as trip_price, 
                t.id_curr as trip_id_curr, 
                tc.name as trip_catg_name, 
                s.name as seas_name
            FROM trip t
            JOIN loct l ON l.id = t.id_loct
            JOIN city c ON c.id = l.id_city
            JOIN prov p ON p.id = c.id_prov
            JOIN regn r ON r.id = p.id_regn
            JOIN natn n ON n.id = r.id_natn
            JOIN trip_catg tc ON tc.id = t.id_trip_catg
            JOIN seas s ON s.id = t.id_seas
        ';
        $trips_query_result = execute_query($trips_query, $conn, DEFAULT_LOG_FPATH);
        close_conn($conn, $conn_action, DEFAULT_LOG_FPATH);
    }

    function load_trips_elements($trips_query_result){
        $elements = '';
        while($row = $trips_query_result->fetch_assoc()){
            $elements .= get_trips_element_view(
                IMG_DURL,
                $row['trip_name'],
                $row['natn_name'],
                $row['trip_image_path'],
                $row['trip_descr'],
                $row['trip_price'],
                $row['trip_id_curr'],
                $row['trip_catg_name'],
                $row['seas_name']
            );
        }
        echo $elements;
    }