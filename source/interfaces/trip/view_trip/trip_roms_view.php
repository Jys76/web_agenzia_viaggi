
<?php

    function get_roms_options_view($id_rom, $rom_num, $beds, $rom_status, $rom_descr){
        ob_start();
        ?>
        <option
            value="<?=$id_rom?>"
            data-status="<?=$rom_status?>"
            data-rom_num="<?=$beds?>"
            data-descr="<?=$rom_descr?>"
        ><?=$rom_num?></option>
        <?php
        return ob_get_clean();
    }