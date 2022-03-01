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
define( 'AUTH_KEY',         '/bP?7w.y{flwSE ldyB[8JBd15/E5}hFCs9<B@{nR}rN =9;o5=dG3~L2{DQog{c' );
define( 'SECURE_AUTH_KEY',  'x^Nj&>S!DN!7/:JXn=3-NbYQoG}Lp9/0EuW&k<XV1nj81V8plAu<@BA8&~SE0T(;' );
define( 'LOGGED_IN_KEY',    'j]z!)PG9,cR<gHT5?J11SNvhUi=*#I:?RTprvh}zjkf?*Bu?;JVQQhc1jDC#g)I_' );
define( 'NONCE_KEY',        '0z-~,)PRuQu0ep&Wd?,*RhZEivZ3M?tC=r7vl `=:]fvj%2DT9FiG&s|?>IO)N|3' );
define( 'AUTH_SALT',        '~Tg?eG#3az<:x>+%4%J&-!4 9S V-:)d{-bTaO|(0,-.GB`TstUJix{`*!j_XfDz' );
define( 'SECURE_AUTH_SALT', 'smi_g3-EFE|hx892k]r{-+}5agehFKmpJy6;[=7QU$UgqjA*}Wv(X={/>n{ezMT$' );
define( 'LOGGED_IN_SALT',   '-)v7BJ;*=DRMK3Dk$YYAxws3 bu$oK7%/GO4eLb=mZ/i77N+2^y$kO06C3lFdJ[4' );
define( 'NONCE_SALT',       'PjxA.cQ(7%qHNvlb<FXJyg*cYz](6iQT5f]{0<gDr]+$IEQOOF:LYAT&)@Xh.+t;' );

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
