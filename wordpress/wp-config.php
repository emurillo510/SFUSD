<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sfusd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'onlytimecantell1!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fL-q[]^XFf9|{{Qjp8Y;::_I@P|#jyU/B[c.pnRPKu&+DjP/v=xr- Xh+hYaWT6c');
define('SECURE_AUTH_KEY',  '&pk^j6NreN+/[r=ueUR9bUOMbBW9&p.)B t:@.PTe:dDrN`c+xwiY}~0fYyfzP8e');
define('LOGGED_IN_KEY',    'c4}Ip*hMZ~)?^(=dw1^jR>iz$W#M;#t+z;6Tp4iR^hlLTSr/Q-oyLm0os5@K`n:M');
define('NONCE_KEY',        'o%Rbi]yEv0 15]]M|DASqy=G/]gxv38e4}VrN[tS%@FOiV:U,Uh$*+PKR&kVM)-n');
define('AUTH_SALT',        '/M&h&[U1<rvGD)fIp,$|`LNiIezspO0wsd.+aBaAAS[$rKqA|;_TgmHVp.ncYLZZ');
define('SECURE_AUTH_SALT', 'Z7u;Wd3szxQ-Yv4:cJhu?-[L?t4;>Q+*/|,Bumaqk3LJ_?7=IKZHz2u=4|QojVfn');
define('LOGGED_IN_SALT',   'INxQ;qA/v-iWdv7yAWyFg>!!:Cm~[O>`{)B+*8N@ff5oK;9K-|{ENQJkjfz::5^b');
define('NONCE_SALT',       '&{T}x9Z0.~/~z|u4zF>yB!iHeH}MR+2|U%4dn_{scb,D4-^$l!QsL+?Bg^>+wi|^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

