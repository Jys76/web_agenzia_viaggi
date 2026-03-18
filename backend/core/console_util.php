
<?php

    function write_console($message, $path){
        $message = "[" . date('Y-m-d H-i-s') . "] " . $message . "\n";
        file_put_contents($path, $message, FILE_APPEND);
    }
    
?>