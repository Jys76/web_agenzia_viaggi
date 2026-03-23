
<?php

function get_filtered_trips_query($city, $outbound_data, $inbound_data, $cont){

    $trips_query = "
        SELECT DISTINCT
            t.id as trip_id,
            t.name as trip_name, 
            n.name as natn_name,
            t.image_path as trip_image_path,
            t.flag_image_path as trip_flag_image_path,
            t.descr as trip_descr, 
            t.price as trip_price, 
            t.id_curr as trip_id_curr,
            tc.name as trip_catg_name, 
            s.name as seas_name

        FROM trip_avai ta
        JOIN trip t ON t.id = ta.id_trip
        JOIN trip_catg tc ON tc.id = t.id_trip_catg
        JOIN seas s ON s.id = t.id_seas
        JOIN loct l ON l.id = t.id_loct
        JOIN city c ON c.id = l.id_city
        JOIN prov p ON p.id = c.id_prov
        JOIN regn r ON r.id = p.id_regn
        JOIN natn n ON n.id = r.id_natn
        JOIN cont co ON co.id = n.id_cont
    ";

    $where_query = "";
    $chained = False;

    if($city !== ""){
        $where_query .= ($chained ? " AND " : "") . "t.name = '$city'";
        $chained = True;
    }
    if($outbound_data !== ""){
        $where_query .= ($chained ? " AND " : "") . "ta.start_date = '$outbound_data'";
        $chained = True;
    }
    if($inbound_data !== ""){
        $where_query .= ($chained ? " AND " : "") . "ta.end_date = '$inbound_data'";
        $chained = True;
    }
    if($cont !== ""){
        $where_query .= ($chained ? " AND " : "") . "co.name = '$cont'";
    }

    if($where_query !== ""){
        $trips_query .= "WHERE " . $where_query;
    }

    return $trips_query;
    
}




function get_all_trips_query(){
    return "
        SELECT 
            t.id as trip_id,
            t.name as trip_name, 
            n.name as natn_name, 
            t.image_path as trip_image_path, 
            t.flag_image_path as trip_flag_image_path,
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
    ";
}

