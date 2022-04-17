<?php
    // Database Settings
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '01664464657');
    define('DB_NAME', 'gymnasium');
    
    //define('DB_HOST', 'localhost');
    //define('DB_USER', 'root');
    //define('DB_PASS', '');
    //define('DB_NAME', 'MyDataBase');
    
    // APP ROOT
    define('APP_ROOT', dirname(dirname(__FILE__)));
    
    // URL ROOT
    if(strpos($_SERVER['HTTP_HOST'], 'localhost') !== false || strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false){
        define('URL_ROOT', 'http://'.$_SERVER['HTTP_HOST'].str_replace('/public/index.php', '', $_SERVER['SCRIPT_NAME']));
    } else {
        define('URL_ROOT', 'https://'.$_SERVER['HTTP_HOST'].str_replace('/public/index.php', '', $_SERVER['SCRIPT_NAME']));
    }
    //define('URL_ROOT', 'https://Gymasium.com');
    
    // Nom du site
    define('SITE_NAME', 'Gymasium');
    
	//Meta
    define('CARD_DESCRIPTION', 'Gym products store');
    define('CARD_IMAGE', 'https://');