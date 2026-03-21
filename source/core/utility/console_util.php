
<?php

    function write_console($message, $path){
    
        if(!is_dir(dirname($path))){
            mkdir(dirname($path), 0777, true);
        }
        $message = "[" . date('Y-m-d H-i-s') . "] " . $message . "\n";
        file_put_contents($path, $message , FILE_APPEND);
    }
    
?>