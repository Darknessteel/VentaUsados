<?php
session_start();
date_default_timezone_set("America/Bogota");

define('ENVIRONMENT', 'development');

if (ENVIRONMENT == 'development' || ENVIRONMENT == 'dev') {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}



define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);


define('DB_TYPE', 'mysql');//tipo base de datos
define('DB_HOST', '127.0.0.1');//localhost o servidor
define('DB_NAME', 'cgx');//nombre de base de datos
define('DB_USER', 'root');//usuario root
define('DB_PASS', '');//contraseña
define('DB_CHARSET', 'utf8');//caracteres especiales del idioma en español

// define('DB_TYPE', 'mysql');//tipo base de datos
// define('DB_HOST', 'sql206.epizy.com');//localhost o servidor
// define('DB_NAME', 'epiz_24618822_cgx');//nombre de base de datos
// define('DB_USER', 'epiz_24618822');//usuario root
// define('DB_PASS', 'HE1z7RwuErH7');//contraseña
// define('DB_CHARSET', 'utf8');//caracteres especiales del idioma en español
