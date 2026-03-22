
<?php

    function get_roms_query($accm_id){
        return "
            SELECT 
                r.id as rom_id, 
                r.rom_num as rom_num, 
                r.beds as rom_beds, 
                rs.name as rom_status, 
                r.descr as rom_descr
            FROM roms r
            JOIN roms_stat rs ON rs.id = r.id_roms_stat
            WHERE
                r.id_accm = '$accm_id'
        ";
    }

    function get_hotel_query($accm_id){
        return "
            SELECT 
                l.address as loct_address,
                at.name as accm_type,
                a.stars as accm_stars
            FROM accm a
            JOIN loct l ON l.id = a.id_loct
            JOIN accm_type at ON at.id = a.id_accm_type
            WHERE a.id = '$accm_id'
        ";
    }