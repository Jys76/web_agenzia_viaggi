
<?php
    session_start();
    require_once DB_CONFIG_PATH;
    require_once CONSOLE_UTIL_PATH;

    $login_message = "";
    $conn = null;
    
    if(isset($_POST['email_input']) && isset($_POST['password_input'])){
        $email = $_POST['email_input'];
        $password = $_POST['password_input'];

        if($email !== "" && $password !== ""){
        
            $conn = open_conn("LOGIN", DEFAULT_LOG_FPATH);
            $login_sql = "SELECT id, username FROM clie WHERE email = ? AND password = ?";

            $stmt = mysqli_prepare($conn, $login_sql);
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);
            mysqli_stmt_execute($stmt);
            $login_sql_result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($login_sql_result) != 0){

                $login_sql_data = $login_sql_result->fetch_assoc();

                $_SESSION['username'] = $login_sql_data['username'];
                $_SESSION['id_username'] = $login_sql_data['id'];
                
                write_console('USER: ' . $_SESSION['username'] . ' LOGIN', DEFAULT_LOG_FPATH);
                
                if($_SESSION['return_page']){
                    header("Location: ". $_SESSION['return_page']);
                }
                else{
                    header("Location: " . HOME_PUBL_URL);
                }
            }
            else{
                $login_message = "Not existing account";
            }
        }
        else{
            $login_message = "You must insert all the data";
        }
    }

    if($conn !== null){
        close_conn($conn, 'LOGIN', DEFAULT_LOG_FPATH);  
    }

    
    

?>