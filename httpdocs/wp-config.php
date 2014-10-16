<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_benchmark');

/** MySQL database username */
define('DB_USER', 'wp_benchmark');

/** MySQL database password */
define('DB_PASSWORD', 'wp_benchmark');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '[{v$9W#&FbJ#L^.!<]j37L{<Pe+6F|[:/3^i]?myg9,)+Cg,xka.?^TD1+Hwsc5T');
define('SECURE_AUTH_KEY',  '>|-(`8;`RcsLxsUUR-cVj0I,.Sd$*<YS^(mA5+VER) |8FxL-htp0K<,ft0<@/tu');
define('LOGGED_IN_KEY',    '6dVmw^KGb5#oK^2Bk:ZT+Zo>sT[cb`[dnraL+V-x87g^6|ez)?ol/OcjQ/ZPB=f+');
define('NONCE_KEY',        '0k1Rjoau+fWh,q86,=mU_uq-0d^MR+|[<I~y/AKM(+6Bl,IlJfYt5GM;?CX8Zf.6');
define('AUTH_SALT',        '@Uo]+3G57|]8~Mo-C(89]^39e,hAXpfk&GM:MRT6,J3A2(AZ+A3Sq7zb=(`|[`.D');
define('SECURE_AUTH_SALT', ' =H5Z,o[ePMgVoA79IO=Fw`<%)[2F<xJ+^]lE|}Py.pSC`y}yF?htA5x;<2 Qy9H');
define('LOGGED_IN_SALT',   ';MjL&9S!LfHFwD;C :`L{Ye VE[y+Dadv G-,_!f[@%.!63{2ylYoa>`19< PsC$');
define('NONCE_SALT',       '%s|7h05A:]@zqe!7b~ 32gy=g-4Rw%?=?Fq~1b:EIlx[P#LS__xL^%%?`K)-S`+i');


$table_prefix = 'wp_';

define('WPLANG', '');




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
