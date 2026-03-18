
<?php
    require_once CONSOLE_UTIL_PATH;

    function open_conn($action_name, $console_path){
        require ENV_FPATH;
        $conn = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DB_NAME);
        if($conn -> connect_error){
            die($action_name . " connection failed" . $conn -> connect_error);
        }
        write_console($action_name . " database connection established", $console_path);
        return $conn;
    }

    function close_conn($conn, $action_name, $console_path){
        $conn->close();
        write_console($action_name . " database connection closed", $console_path);
    }

?>
