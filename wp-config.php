<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tap_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1111');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'WPCF7_AUTOP', false );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'J7^b!g<E<zEzR(*im6DMSWG$$T>=..nocK5B){enS@%`~>_]9c9<@yF4T-p8tg+q');
define('SECURE_AUTH_KEY',  '&$>lV%K la0UJ;(UvCsFy_3r}sp3?d=DJblWRni![&x(S8]68nI[W~ZGP>LfPH2g');
define('LOGGED_IN_KEY',    '&IiG(Bl_-KV@_]IC`O)U^Z`oW/ZpQ!IIFDv}OD>,w=Q|uOMNc7#ienA:Z.Pca{I)');
define('NONCE_KEY',        '7>CRYXzp)Bp!6Le@!LBga$(Q194#e9?PGCn)E;7f^tp_h[^(qdMPaXRVU(3K:yA[');
define('AUTH_SALT',        '-(~UT0pT={%0X;{Z3DnaDo2-?pF04|M>osa+n>6gBZH{dr.f~gqYiO_OQte;)zm^');
define('SECURE_AUTH_SALT', '3|-dZiFzsXp=O?8~Y )G&xq|oel]CQ =9x}^Lse0:P^Ld#Z9]bj~t((GA_Xk]VmF');
define('LOGGED_IN_SALT',   '+7<~>IX6<lvdpH#Ef hrSlVFnb{Q.k!X|.I,$Z>fvi+eX^+u+,~+OdNep[/#fyj(');
define('NONCE_SALT',       '0`I4Rh{%[75Xw7O!U,~.)=37-N7(#4t0Apex+D>/G$!)A%yY7(~<ujO}G]aAJ4C4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
