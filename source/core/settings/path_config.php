
<?php
    #ROOT
    #define('URL_ROOT', '/Sun/web_agenzia_viaggi');
    #define('URL_ROOT', '/web_agenzia_viaggi');
    define('URL_ROOT', '');
    define('PATH_ROOT', __DIR__ . '/../../..');

    #CORE
    define('ENV_FPATH', PATH_ROOT . '/env.php');
    define('DEFAULT_LOG_FPATH', PATH_ROOT . '/console/.log');
    define('DATA_LOG_FPATH', PATH_ROOT . '/console/data.log');
    define('DB_CONFIG_PATH', PATH_ROOT . '/source/core/settings/db_config.php');

    #UTILITY
    define('QUERY_UTIL_PATH', PATH_ROOT . '/source/core/utility/query_util.php');
    define('CONSOLE_UTIL_PATH', PATH_ROOT . '/source/core/utility/console_util.php');
    define('STYLE_UTIL_URL', URL_ROOT . '/source/core/utility/style_util.css');

    #LOGOUT
    define('LOGOUT_URL', URL_ROOT . '/source/interfaces/logout/logout.php');

    #HOME
    define('HOME_OPERATION_ROUTING', PATH_ROOT . '/source/interfaces/home/php_home/operation_routing.php');
    define('HOME_EVALUATE_LOGIN_FPATH', PATH_ROOT . '/source/interfaces/home/php_home/evaluate_login.php');
    define('HOME_GET_CITIES', URL_ROOT . '/source/interfaces/home/php_home/get_cities.php');
    define('HOME_PUBL_URL', URL_ROOT . '/source/interfaces/home/home.php');

    #LOGIN
    define('LOGIN_EVALUATE_LOGIN_FPATH', PATH_ROOT . '/source/interfaces/login/php_login/evaluate_login.php');
    define('LOGIN_PUBL_URL', URL_ROOT . '/source/interfaces/login/login.php');

    #REGISTER
    define('REGISTER_EVALUATE_REGISTER_FPATH', PATH_ROOT . '/source/interfaces/register/php_register/evaluate_register.php');
    define('REGISTER_DATA_LOAD_REGISTER_FPATH', PATH_ROOT . '/source/interfaces/register/php_register/data_load_register.php');
    define('REGISTER_PUBL_URL', URL_ROOT . '/source/interfaces/register/register.php');

    #TRAVEL
    define('TRAVEL_PUBL_URL', URL_ROOT . '/source/interfaces/travel/travel.php');

    #IMAGE PATH
    define('IMG_DURL', URL_ROOT . '/images/');

    #TRIP
    define('TRIP_PUBL_URL', URL_ROOT . '/source/interfaces/trip/trip.php');
    

?>