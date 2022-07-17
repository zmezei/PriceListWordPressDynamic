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
define( 'DB_NAME', 'price_list_dynamic_db' );

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
define( 'AUTH_KEY',         'S,53H~{$| *XSk9@e%W%h6emfl?[V B0AR%#Lc9vhbLYt1Pds0KN5RcSs]en15S=' );
define( 'SECURE_AUTH_KEY',  '@^L8mk*Cb-r,ssR]c6$]gyAGoxF61%ied#zq7y?/[tP}KKA*kRS:+i{eO-3(~o_N' );
define( 'LOGGED_IN_KEY',    '`5?)RwdUQ/r}P8s`Keg`]-s;k X@AL5jwKtUAx1Z{xmEJ`7qI!wsR:p3]Y$S4p^%' );
define( 'NONCE_KEY',        'J^>AW:j|*~zD|~-6-5L?ofy_z+N#_?g`>E02#pT!O}279iBs{ NX+ld7moSiU4^~' );
define( 'AUTH_SALT',        'w{WufM7UcVm=`EMlH3&&Quv)@V4m5sN0(W`syA(R4 JzzNV_vdj6`q|;tT> $V4&' );
define( 'SECURE_AUTH_SALT', 'Ms{[*U_Ik :y.#cJ=!~uE{IL!x}EkgSq3#)Bn]Mqh5A3ktcP&up2:@L`hk;z5OAx' );
define( 'LOGGED_IN_SALT',   '/},p]O2GrJIN:1rMxUC6$/dtVajCSbO`/)Jx/&Vja/Jh9A)Q*7=(L!(_I`]G*{tM' );
define( 'NONCE_SALT',       '{bJ#~OI;UcwSD&k>xeEeS`73,%~4W>B_HlW5W!*KIE-#H7SEW;Go^? *JG$IHSXm' );

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
