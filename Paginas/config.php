<?php
//configura salida de error
error_reporting(E_ALL);
ini_set('display_errors', 1);

//DEFINIR DATOS DE LA PAGINA
define('SITE_URL', 'http://localhost/PaginaWeb2.0/Paginas/');
define('SITE_TIMEZONE', 'America/Asuncion');
define('SITE_LANG', ['es', 'spa', 'es_ES']);


// Conexión a Base de Datos
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'opdatabase');
define('DB_PORT', '3307');

define( 'ADMIN_USER', 'sergiolugo1995@gmail.com' );
define( 'ADMIN_PASS', 'administrador' );