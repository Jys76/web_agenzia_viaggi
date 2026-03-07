
<?php
    require ENV_FPATH;

    define('CONN', mysqli_connect($HOST, $USERNAME, $PASSWORD, $DB_NAME));

    if(CONN -> connect_error){
        die("Connection failed" . $conn -> connect_error);
    }

    $message = "[" . date('Y-m-d H:i:s') . "] Database connection established\n";
    file_put_contents(DEFAULT_LOG_FPATH, $message, FILE_APPEND);

?>

