
<?php   

    function execute_query($sql, $conn, $console_path){
        try{
            $sql_result = mysqli_query($conn, $sql);
        }
        catch(mysql_query_exception $e){
            write_console("Query select error: " . $e->GetMessage(), $console_path);
        }
        return $sql_result;
    }
?>