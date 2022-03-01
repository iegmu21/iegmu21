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
define( 'AUTH_KEY',         'I-7p#?Z;Tfr ~nZEG[$YGqX~`M#Xfg9=r?y{d;wUb#wfuf:/h6:>F*xd$9[iTn$T' );
define( 'SECURE_AUTH_KEY',  'UCw^?ME+`/Ax]U]y4t8<yXk47*}@%3D_mn,d3&LIqKWttOlB7Z3s{fdeua}~Wdy;' );
define( 'LOGGED_IN_KEY',    ':3[xo.#7/f7CiU|3/Xw)u.K4wc{|b6I:cGCD,%uyK8%8Er6U>w%@#lsDi0G[=I{V' );
define( 'NONCE_KEY',        ']Cw4G5^][-$PjS$,vXVo-9}>nj[KYf!EJ;= 5F~(q57W5CeH7#/3$dpW%|_.z5E9' );
define( 'AUTH_SALT',        'un>zaR4WeRN%k4wx[POH/h?dW~n;ym>uyQKfa}QB93A_t<E*Pox.Q,7G?MI0!PGG' );
define( 'SECURE_AUTH_SALT', '9G8*[BwPHx4FSFs7dU,.@[g-P&>r5dcx8%M8AF` 6ZKdcB@@Vh+En32ti;#k@+(9' );
define( 'LOGGED_IN_SALT',   'c0o.@D{C!O:,ziQZ{}kxUU;`G,U73O+jB%4~KU+CCv)T,R4+~Cly+T{c{7sxPFD0' );
define( 'NONCE_SALT',       't/{x<Q09LpINMXU|&T%{lPc0-.NLh{6tE8w~?x.td?k~8/Roc^+<}LjX~#_=W9U}' );

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
