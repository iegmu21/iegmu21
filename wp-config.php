<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('FS_METHOD', 'direct');

define( 'DB_NAME', 'iegmu21_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZQD2}3At8WSD)K5D)a`({wQ|@#`P=z>MG#Ie~`h,Hz9Nln|/&Jliw|A(1IR386@8' );
define( 'SECURE_AUTH_KEY',  'TMySl8B$yE8J0ExM6a<oGGSB,NU+-Du3IT_jsCrHFmF_mn@kZR}e-HQByrLE8om4' );
define( 'LOGGED_IN_KEY',    ',U8V~ !hox]WHd,dj9+)1po3g=-^EbKJDgZVZsL?6<?P6y$hy}`H)*Xy!Hd+^sIj' );
define( 'NONCE_KEY',        'c!g4T@Vz=#4;B}`E/qKU$|bZfmfvu[1><zkpQ`Hv^pL44L[6K:Gjjs7sm7(nm*6Z' );
define( 'AUTH_SALT',        'xtfZaGk?zgckUQ/.J^u%;^eL!($T~1j8ub#S9LhX[tkU$2i)z_Uwg/=1vdDDIHPH' );
define( 'SECURE_AUTH_SALT', '-[du}hc4v04O]H#>X}T.x=?-?:U+huA0Ynrq1noul*nv)EJv8>r@8[[_v xnMiS-' );
define( 'LOGGED_IN_SALT',   'YsCblGK;}28;K9ifS3*dz])ovj^52Eoo]-<0Na#Z^EGWLq6D{:4ltE2uK doWYGO' );
define( 'NONCE_SALT',       'gYQp#}L9HdPZZZ;.%*UGoZ9#2@<}qKh2+Wyy5?!=OQ7;4hY{5* Sl$Nx,6HRlJ;d' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
