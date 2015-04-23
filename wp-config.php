<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'muroscontencion');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'muroscontencion');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Vpyi-3zAJo7a.1s JQN=+[z~)vk7m% %g_1{wHb_0,){[]QzTT)(a$_~PA$x{|.|');
define('SECURE_AUTH_KEY', 'ZZC{Dt-)-:I#q/L~d*=B!>ueqEe+t`~hB@qfFB+Qs`USBiAWZ&_UsO-7KQ]wf8]i');
define('LOGGED_IN_KEY', 'VuHZJ3N~cGd5!|*;roZ:F;nE;sJTqMMq?&vI34ds9PG|$+RlR$s(+HDOFu3ZawUZ');
define('NONCE_KEY', '^8[BXMz:*>OK|XVko%y5jq&b?W_@1+R/Iw+8]&V}lP,g9**Zb6b5>]~v.xQs|_Iz');
define('AUTH_SALT', '@eg5U)(#UG~vpfu>Jlbe7LO^?y+sIe-;#d+jzEf+|xify}(h%4|hY7Yw>x+M^:]$');
define('SECURE_AUTH_SALT', 'g=$)osgZ 7<!n*RckTBLc@pIIt7H|;>o(?&-6ekWOR+`}/}!n*+v5s38}5zs +v3');
define('LOGGED_IN_SALT', '50uqp,^hz7&B/JT8E]E2YHgMIM|zy;(W^msZhI7iK!yA_CfZ{x#i,w4d|~+BF^7)');
define('NONCE_SALT', ' 1%?+;a3%jof#+y4<lYSP_rp@Aljb{F_muH}cY7oLl<?}p`{I1m ^b{x^w[-2mIV');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

