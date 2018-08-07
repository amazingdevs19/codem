<?php
header('Access-Control-Allow-Origin: *'); 
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
define('DB_NAME', 'manny_L9aTi04b');

/** MySQL database username */
define('DB_USER', 'wam360');

/** MySQL database password */
define('DB_PASSWORD', 'mywslsoe2rd');

/** MySQL hostname */
define('DB_HOST', 'wam360.cozc4jphlqf5.us-east-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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

define('AUTH_KEY',         'Im@IX P}/3uq|E9ak,-*@Z!u!7vD77LOUh&$;J W,nUN&fa?(&:yZeDsmtj@A`L;');
define('SECURE_AUTH_KEY',  'EUwXyFC|JQy$3DjGQYQRT]Jp{K6tq~wkp_e87|_%);b;p9{}d:hC 6jC*BaQ-pq,');
define('LOGGED_IN_KEY',    'nOi0Di!.NkB+bSE|(ME7N:~+lBxT_Xif`w2iq2a+Q4coj?N-Ch4(.=a1IsoOtH+D');
define('NONCE_KEY',        '<m]<##UFig;(p|=#!wl,A.lZCSl}k`3u>=Uc4,%2qsKFbQNEA4AWI5J]o:j0tNkw');
define('AUTH_SALT',        '0b{;0yU`R{f*iT;g[/>SO%4Tk{gM7NdRi1n/b$_-f> hYo-OCAQoot~dx/yS(e.h');
define('SECURE_AUTH_SALT', 'W0{ZB4&V1nRmyYzf0vXp-]`N7u+1[6TZdM!]cw~0(TOp gS:IdO];K;{DbZk6k+Z');
define('LOGGED_IN_SALT',   'pJjX2KyLPY!T`KJU;aQ:g|h2@:%nM%TIedKBnfR6y>Gm1d|3?L8hgdog+55BPku]');
define('NONCE_SALT',       'q85LQn(-7#9nwVIK5h?9E ~asR>qSoYuCOuW>|b_><x2Kw;ZCfm$U8fRa^YUsw7:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
