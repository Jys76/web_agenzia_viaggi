
<?php

    function get_trip_data_query($trip_id){
        return "
            SELECT
                t.name as trip_name, 
                t.image_path as trip_image_path, 
                t.flag_image_path as trip_flag_image_path,
                t.descr as trip_descr, 
                t.price as trip_price, 
                t.id_curr as trip_id_curr, 

                t.id_accm as trip_id_accm,
                
                tc.name as trip_catg_name, 
                s.name as seas_name,

                l.address as loct_address,
                c.name as city_name,
                p.name as prov_name,
                r.name as regn_name,
                n.name as natn_name,
                cn.name as cont_name

            FROM trip t

            JOIN trip_catg tc ON tc.id = t.id_trip_catg
            JOIN seas s ON s.id = t.id_seas
            
            JOIN loct l ON l.id = t.id_loct
            JOIN city c ON c.id = l.id_city
            JOIN prov p ON p.id = c.id_prov
            JOIN regn r ON r.id = p.id_regn
            JOIN natn n ON n.id = r.id_natn
            JOIN cont cn on cn.id = n.id_cont


            WHERE t.id = '$trip_id'
        ";
    }