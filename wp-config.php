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
define('DB_NAME', 'beta_monteverdichorale_o_1');

/** MySQL database username */
define('DB_USER', 'psgzmyp');

/** MySQL database password */
define('DB_PASSWORD', 'pzZELe9a');

/** MySQL hostname */
define('DB_HOST', 'mysql.beta.monteverdichorale.org');

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
define('AUTH_KEY',         'PBRWPBtE5CVk"!ohS/w%c+_X"X&z!J4bj8TiY~12)&a6zsPiIUx83rGFH:oaWG`k');
define('SECURE_AUTH_KEY',  'IH|UsuP1VD^d#_qFiYrHl|_b71&drXqd^#?zWmQA_aa$&5nl7|tur`_!sUX_f3PW');
define('LOGGED_IN_KEY',    'j:w!**#mm3g6Ltb+dViqAgRB8Q%;E?I"TAOvz;~m1ib)$c)zb0bns(A7z#kV"0F2');
define('NONCE_KEY',        '&q%AEIzU6+|M8qEZ!2EJmwnkqWdAarT5@*BcSgj;a)Z6:P+o?FpxjvfgwfLXTc;w');
define('AUTH_SALT',        ';f$T2`2yKMyJOA5`y&|!|%S~Q6sW?#u@7;qzF)AHuGT3Bx$TmskKjP6l#8?/?r"%');
define('SECURE_AUTH_SALT', '|n2?un56yMO7Roh`qZe8x*IS`K/~*zyTyQk#!t@/xq*3^6~paUfOHe6r|+j;9`2&');
define('LOGGED_IN_SALT',   'L:5&zSJ6;w~Oc3Z#u7"m"7Kj9+s?Cq/*#lE2lDqZ0K14E"eCi9j7462?AO:~h4qp');
define('NONCE_SALT',       'gb0:*DIHD%gY+|UGaH^5KxBu%M2C0ODEVt;wAihCyrmXN4;u6r_G(L9IKT&?8w1H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_gih3ir_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

