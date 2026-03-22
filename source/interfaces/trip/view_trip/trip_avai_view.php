
<?php 
    
    function get_trip_avai_view($start_date, $end_date, $trip_avai_id){
        ob_start();
        ?>
        <tr class="trip_avai_row">
            <td><?=$start_date?></td>
            <td><?=$end_date?></td>
            <td 
                class="trip_avai_table_selector" 
                data-trip_avai_id="<?=$trip_avai_id?>"
            >[Seleziona]</td>
        </tr>
        <?php
        return ob_get_clean();
        
    }