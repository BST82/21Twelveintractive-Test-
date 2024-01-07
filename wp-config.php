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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '@D$nQ1DVoP8zD_tBHGX[$;jjny;d<q+P/9~Lxsgz&$86~Vn+kuP{0hK{KOlLb$s=' );
define( 'SECURE_AUTH_KEY',  'GS%hg@=m=~VWlPC#vEqT]Q^=O_I6{1e7&vpDOTTcD_4@fmGf5SmYJ<_i5h_nMW;G' );
define( 'LOGGED_IN_KEY',    'b7pJS!(b#[1QRkZ/BaWDyF(Ch&-n!N5K/a`xL>URbE2p:p|.iG7 oAiX#u/U7=JF' );
define( 'NONCE_KEY',        '5T3zlGRY+ET(T USadh%G^VcZ#,^OLX6 {5iV/viFS3HWT~Wc#$/4anF)<+2P[]L' );
define( 'AUTH_SALT',        '!mrnDflR07CXEFUlukDa:#K3Hy`jWEy^+sj9{;bg2xV >KNbZb^hB!93]vN8E2 @' );
define( 'SECURE_AUTH_SALT', 'ww9gP[+3m0J6>- l2:y_oe! 4MPp86aTF]DTUiy[7NfIr*vmD%#(j7]}Bd_5Hl0j' );
define( 'LOGGED_IN_SALT',   'NGCD _-W87.m$0K(#z4sv0ehHlYG.F) 4o*wW]3X-zcP03 S4l=x4+cV`(_<2oQQ' );
define( 'NONCE_SALT',       '(}cl|GDe_X1:GG5+/U;[A?&*2>r@P(ONG5;sZA*QC{ioqQ&_ dh!aLOd#Uj+]eFs' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
