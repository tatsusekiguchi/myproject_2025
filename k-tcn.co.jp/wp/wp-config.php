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

/*ini_set('display_errors', 1);*/

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db1006339_sa31748_main');

/** MySQL database username */
define('DB_USER', 'u1006339_sa31748');

/** MySQL database password */
define('DB_PASSWORD', 'MCHApjiIBrtRGNrY');

/** MySQL hostname */
define('DB_HOST', '192.168.100.50');

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
define('AUTH_KEY',         'IlO1Z7LQCU@De)z5(qPyhXKMHey!EWR%vym!nNqxnBQMg3AuoWYEghhzc41y8y#S');
define('SECURE_AUTH_KEY',  'xAW#SLB8qWE6ZnbS^Br(PKfqp5%c5cTITy!^uGzbuaB2nE^fAeLaX9qmqK56bZ5#');
define('LOGGED_IN_KEY',    'qNGItf3rXpk94eTT^YqHT5&ybQDYWiuIGiLftxreuEbJroSh@53^8uyPEJ1Py%%X');
define('NONCE_KEY',        'a4m%csmZVmcaWPNeJGH)R&lv2dsgLBXcxR&F7J)@WEVxk1c(8Nh!Cs@3pBjwWAT7');
define('AUTH_SALT',        'x^CA&7So%F2SzOv@goF03qyOGUp0sUkkerWHEEY)DDPH7E%LRUjgrKOmVem4I@SR');
define('SECURE_AUTH_SALT', 'ezCKt^k*HVAmWZ7(gDZN9B2rXmBp&Z9tcQLnP^eC5G9V7zZy4zer4ylW9Kr9o3I*');
define('LOGGED_IN_SALT',   'h6yGiHQUR5bFzVhwMs4U5fZhpzau)8oSVrU0jqapBiVQ6kAE@YmXSicMXDIvtb^p');
define('NONCE_SALT',       '#mrl2j@*6Klst%41cEamm8^W)s5d^SKRW)fDZ%%XGIuBdV1AtD8wBr0NAj2nhTA6');
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

define ('WPCF7_AUTOP', false);
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
