
<?php
    require_once __DIR__ . "/../../../core/settings/path_config.php";

    require_once DB_CONFIG_PATH;
    require_once QUERY_UTIL_PATH;
    require_once CONSOLE_UTIL_PATH;



    $conn = open_conn("Home page cities data load", DEFAULT_LOG_FPATH);
    
    $city_query = "SELECT name from trip";
    $city_query_result = execute_query($city_query, $conn, DEFAULT_LOG_FPATH);

    $city_query_data = [];

    while($row = $city_query_result->fetch_assoc()){
        $city_query_data[] = $row;
    }

    echo json_encode($city_query_data);

    close_conn($conn, "Home page cities data load", DEFAULT_LOG_FPATH);