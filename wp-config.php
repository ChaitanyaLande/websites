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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         'p5Avp?I0jn4uCLoprlU,rIg(%C3g1qSKL90DZ>S8#K*ws4-4v9&/^agd6XPgDp5y' );
define( 'SECURE_AUTH_KEY',  'akT-Ud{XQ$f:&]Ncb?9r4nvk}.?boe5og*QN+^g;3)y_TA=B}*@&f-Aqa5~]Ay9#' );
define( 'LOGGED_IN_KEY',    '~v?<3U)}5 y6gxp~S2cF^5n-(c8H{z@,fB :/OO)ff|Wf0*nuwThaAT_x=QSZBac' );
define( 'NONCE_KEY',        'X>&qVPUTPN?GNc0U+:+(P)d[U7NrFI)&D5KW97<_T.*aCBoA{398=G^e*g}mF[*#' );
define( 'AUTH_SALT',        '%Pb, 3JOlDW-95=cD?iP[=Qz@G4iwdH[+lT5|}]A#@5fj/dM)Wr&/K#h{Xo0dS]J' );
define( 'SECURE_AUTH_SALT', 'sg7PU(U4o#,$9_O>5L,JYW,{060c-k[#8}nBehV>+cR_stmD8)zJ$M{NVdIi_OxE' );
define( 'LOGGED_IN_SALT',   'm)a^Ol_SoldbO0PDi2uI/@pIHz],<74^rthc~>8WEx$a&{]tYY?p#Mhwa:]GWE=}' );
define( 'NONCE_SALT',       'ikW0X;EP:4##M]OJy1Tf~obeJB7p2rH~js0|$/8[@sQqjVxA)=N!.Gst!mnKUNHM' );

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
