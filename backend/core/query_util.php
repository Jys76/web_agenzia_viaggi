
<?php
    function execute_query($sql){
        try{
            $sql_result = mysqli_query(CONN, $sql);
        }
        catch(mysql_query_exception $e){
            $message = "[" . date('Y-m-d H-i-s' . "] Query select error: " . $e->GetMessage());
            file_put_contents(DEFAULT_LOG_FPATH, $message, FILE_APPEND);
        }

        return $sql_result;
    }
?>