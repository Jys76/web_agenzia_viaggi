
<?php
    require DB_CONFIG_PATH;
    require QUERY_UTIL_PATH;

    $register_message = "";

    if(
        isset($_POST['input_first_name']) &&
        isset($_POST['input_last_name']) &&
        isset($_POST['input_username']) &&
        isset($_POST['input_email']) &&
        isset($_POST['input_password']) &&
        isset($_POST['input_sex']) &&
        isset($_POST['input_cod_fisc']) &&
        isset($_POST['input_address']) &&
        isset($_POST['input_city']) &&
        isset($_POST['input_phone'])
    ){
        $first_name = $_POST['input_first_name'];
        $last_name = $_POST['input_last_name'];
        $username = $_POST['input_username'];
        $email = $_POST['input_email'];
        $password = $_POST['input_password'];
        $sex = $_POST['input_sex'];
        $cod_fisc = $_POST['input_cod_fisc'];
        $address = $_POST['input_address'];
        $city = $_POST['input_city'];
        $phone = $_POST['input_phone'];

        if(
            $first_name !== "" &&
            $last_name !== "" &&
            $username !== "" &&
            $email !== "" &&
            $password !== "" &&
            $sex !== "" &&
            $cod_fisc !== "" &&
            $address !== "" &&
            $city !== "" &&
            $phone !== ""
        ){
            $city_exists_sql = "SELECT id FROM city WHERE name = ? LIMIT 1";
            
            try{
                $stmt = mysqli_prepare(CONN, $city_exists_sql);
                mysqli_stmt_bind_param($stmt, "s", $city);
                mysqli_stmt_execute($stmt);
                $city_exists_sql_result = mysqli_stmt_get_result($stmt);
            }
            catch(mysqli_sql_exception $e){
                $message = "[" . date('Y-m-d H-i-s') . "] Query select error: " . $e->GetMessage();
                file_put_contents(DEFAULT_LOG_FPATH, $message, FILE_APPEND);
            }
            
            if(mysqli_num_rows($city_exists_sql_result) != 0){

                $row = $city_exists_sql_result -> fetch_assoc();
                $loct_insert_sql = "INSERT INTO loct (id_city, address) VALUES (?, ?)";
                $clie_insert_sql = "INSERT INTO clie (id_loct, id_sexx, first_name, last_name, username, password, email, phone, cod_fisc) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                
                mysqli_autocommit(CONN, FALSE);

                try{
                    $stmt = mysqli_prepare(CONN, $loct_insert_sql);
                    mysqli_stmt_bind_param($stmt, "is", $row['id'], $address);
                    mysqli_stmt_execute($stmt);
                    $inserted_loct_id = mysqli_insert_id(CONN);

                    $stmt = mysqli_prepare(CONN, $clie_insert_sql);
                    mysqli_stmt_bind_param($stmt, "iisssssss", $inserted_loct_id, $sex, $first_name, $last_name, $username, $password, $email, $phone, $cod_fisc);
                    mysqli_stmt_execute($stmt);

                    mysqli_commit(CONN);
                    $register_message = "Registration completed";
                    
                }
                catch(mysqli_sql_exception $e){
                    mysqli_rollback(CONN);
                    $register_message = "Registration failed";
                    $message = "[" . date('Y-m-d H-i-s') . "] Query insert error: " . $e->GetMessage();
                    file_put_contents(DEFAULT_LOG_FPATH, $message, FILE_APPEND);
                }
                
                mysqli_autocommit(CONN, TRUE);
                
            }
            else{
                $register_message = "Not existing city";
            }
        }
        else{
            $register_message = "You must insert all the values";
        }
    }

    require "data_load_register.php";
?>