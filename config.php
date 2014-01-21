<?php
/*
 * Archivo de configuración y definición de constantes
 */

/** Nombre de la base de datos */
define('DB_NAME', 'newsite');

/** Usuario de la base de datos */
define('DB_USER', 'root');

/** Password de la base de datos */
define('DB_PASSWORD', 'c83af91KAl1');

/** Host (si se separa la bd del apache) */
define('DB_HOST', 'localhost');

/** Carpeta base del sistema (para imports, includes y demás) */
define('FILES_BASE', '/Applications/XAMPP/xamppfiles/htdocs/newsite/webpanel/');

/** Carpeta base del sistema de la parte publica (para imports, includes y demás) */
define('FILES_BASE_SITE', '/Applications/XAMPP/xamppfiles/htdocs/newsite/site/');

/** URL Base del webpanel */
define('URL_BASE','http://localhost/newsite/webpanel/');

/** URL Base del sitio */
define('URL_BASE_SITE','http://localhost/newsite/site/');

/** @name SESSION_ID Nombre de la variable principal de sesión */
define('SESSION_ID', 'newsiteid_secret');

/** @name LOG_DIR Carpeta para almacenar los logs */
define('LOG_DIR','logs/');

?>
