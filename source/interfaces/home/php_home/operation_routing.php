
<?php
    require_once DB_CONFIG_PATH;
    require_once QUERY_UTIL_PATH;
    require_once CONSOLE_UTIL_PATH;

    if(
        isset($_GET['city_input']) && 
        isset($_GET['outbound_data_input']) &&
        isset($_GET['inbound_data_input'])
    ){
        $city = $_GET['city_input'];
        $outbound_data = $_GET['outbound_data_input'];
        $inbound_data = $_GET['inbound_data_input'];

        $data_get = '?city=' . urlencode($city) . 
            '&outbound_data=' . urlencode($outbound_data) . 
            '&inbound_data=' . urlencode($inbound_data);
        header('Location: ' . TRAVEL_PUBL_URL . $data_get);
    }

?>