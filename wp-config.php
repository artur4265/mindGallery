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
define('DB_NAME', 'md');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'S4PMQ^lYzgOdq^$4H~7{,o^yf)|TQIZu8q=E^rzOWqj-RC|m~~A3V[+NH!1ZnrlQ');
define('SECURE_AUTH_KEY',  'rf>=0fz):$9[G#8kbgXe-Y&@ug+a`A{jH.,FE;:}dh9Z!|my)-id,arBLXBV/Nrj');
define('LOGGED_IN_KEY',    'lJ[:]?n72XCfvO*EJ|jNZyOvCCX]oNIv>GpEd-)4VQ_>$$ziueZY49I-*H.4VO{X');
define('NONCE_KEY',        ')IX<Tg:LIgrxuqp/*(j:pP!wjZhuo/P,fO/Tu_C:9WY;E!gguN-~mV6W!zYTu*%#');
define('AUTH_SALT',        '4U<~py[u]E5Nq0*AXna,l$ebV;[(ElII$w3qOlt-<AZYl}).c{L#ma%0>0U037R ');
define('SECURE_AUTH_SALT', '~{X uOy_S%X,<[cF3Sff0SqM6uELx@Ba6!{C]94H+9nxf!d?=`E|i&Q]xKZp2iKD');
define('LOGGED_IN_SALT',   'd(wX*AVZ&9*411{takV_SD/UaKd5r0)a2:)+Y[ygoAFe{w[wG;E{,;_nGJp %G/@');
define('NONCE_SALT',       ',JU2^=6:~o^TG8~]Dp1w%-b&K_N0T.),N.e)04qgm)=()]IM~5^jt]H!}Q= IgC ');

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
