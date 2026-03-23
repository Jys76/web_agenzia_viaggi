
<?php
    require_once DB_CONFIG_PATH;
    require_once QUERY_UTIL_PATH;
    require_once CONSOLE_UTIL_PATH;

    $payment_first_name = $_POST['payment_first_name_input'] ?? "";
    $payment_last_name = $_POST['payment_last_name_input'] ?? "";
    $payment_card_number = $_POST['payment_card_number_input'] ?? "";
    $payment_expiration_date = $_POST['payment_expiration_date_input'] ?? "";
    $payment_cvv = $_POST['payment_cvv_input'] ?? "";

    if(
        $payment_first_name !== "" &&
        $payment_last_name !== "" &&
        $payment_card_number !== "" &&
        $payment_expiration_date !== "" &&
        $payment_cvv !== ""
    ){

        $conn_action = "Insert payment";
        $conn = open_conn($conn_action, DEFAULT_LOG_FPATH);

        $card_type_query = "
            SELECT id 
            FROM card_type
            WHERE name = 'Debit'
        ";

        $card_type_id_result = execute_query($card_type_query, $conn, DEFAULT_LOG_FPATH);
        $card_type_id = $card_type_id_result->fetch_assoc()['id'];

        $card_query = "
            INSERT INTO card (
                id_card_type, 
                first_name, 
                last_name, 
                card_number, 
                expiration_date, 
                cvv
            ) VALUES
                (
                    '$card_type_id', 
                    '$payment_first_name', 
                    '$payment_last_name',
                    '$payment_card_number',
                    '$payment_expiration_date',
                    '$payment_cvv'
                )
        ";
        execute_query($card_query, $conn, DEFAULT_LOG_FPATH);
        
        header("Location: " . HOME_PUBL_URL);
        
    }



