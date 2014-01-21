<?php
/*
 * Archivo de configuración y definición de constantes
 */

/** Nombre de la base de datos */
define('DB_NAME', 'vivelatina');

/** Usuario de la base de datos */
define('DB_USER', 'root');

/** Password de la base de datos */
define('DB_PASSWORD', 'c83af90KAl1');

/** Host (si se separa la bd del apache) */
define('DB_HOST', 'localhost');

/** Carpeta base del sistema (para imports, includes y demás) */
define('FILES_BASE', '/Applications/XAMPP/xamppfiles/htdocs/vivelatina/webpanel/');

/** Carpeta base del sistema de la parte publica (para imports, includes y demás) */
define('FILES_BASE_SITE', '/Applications/XAMPP/xamppfiles/htdocs/vivelatina/site/');

/** URL Base del webpanel */
define('URL_BASE','http://localhost/vivelatina/webpanel/');

/** URL Base del sitio */
define('URL_BASE_SITE','http://localhost/vivelatina/site/');

/** @name SESSION_ID Nombre de la variable principal de sesión */
define('SESSION_ID', 'editor');

/** @name LOG_DIR Carpeta para almacenar los logs */
define('LOG_DIR','logs/');

?>
