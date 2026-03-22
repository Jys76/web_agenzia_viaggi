
<?php

    function get_trip_avai_query($trip_id){
        return "
            SELECT id 
                as trip_avai_id, 
                start_date, 
                end_date
            FROM trip_avai
            WHERE id_trip = '$trip_id'
        ";
    }