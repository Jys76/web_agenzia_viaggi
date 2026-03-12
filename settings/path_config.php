
<?php
    define('URL_ROOT', '/web_agenzia_viaggi');
    define('PATH_ROOT', __DIR__ . '/..');

    define('ENV_FPATH', PATH_ROOT . '/env.php');
    define('DEFAULT_LOG_FPATH', PATH_ROOT . '/console/.log');
    define('STYLE_UTILS_URL', URL_ROOT . '/public/core/utility/style_utils.css');
    define('DB_CONFIG_PATH', PATH_ROOT . '/settings/db_config.php');
    define('QUERY_UTIL_PATH', PATH_ROOT . '/backend/core/query_util.php');

    define('HOME_BACK_PATH', PATH_ROOT . '/backend/runtimes/home/home_back.php');
    define('HOME_PUBL_URL', URL_ROOT . '/public/interfaces/home/home.php');

    define('LOGIN_BACK_PATH', PATH_ROOT . '/backend/runtimes/login/login_back.php');
    define('LOGIN_PUBL_URL', URL_ROOT . '/public/interfaces/login/login.php');

    define('REGISTER_BACK_PATH', PATH_ROOT . '/backend/runtimes/register/register_back.php');
    define('REGISTER_PUBL_URL', URL_ROOT . '/public/interfaces/register/register.php');
    

?>