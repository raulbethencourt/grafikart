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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&e($h|W(Qn#l&7B:}/lA~e+wP|y<;ohOw}*%`mxukWf&=g>th=)S9*Pao`?{/=D8' );
define( 'SECURE_AUTH_KEY',  'nVEy^m6AM-VWuyNSOeD!Nz~x``O!i[}eSW)9d|:C8=o-M$&u3xt-.|W-w$SNPtfj' );
define( 'LOGGED_IN_KEY',    'zma2x^sgW>MHr_K,OvYBNM625bZ(mL`7xh,N7ieA=^Y}f*tFX6wQE|MN[USuK1T9' );
define( 'NONCE_KEY',        'jD`:.Rq&@uT;0D0;W.c9+]-lMnq#8|kUz_w^q20x,~%~fO=0z/#=+sNZPltsw_+{' );
define( 'AUTH_SALT',        '3&4We@RF(g1YxiHc3V9$7qo,` 2KpW>je#`=t1@BT!Kckj^x|NY$!avLBLhD6k!s' );
define( 'SECURE_AUTH_SALT', '[k2%4{~3GN.E59^jbvULS6enCSP:8Er5F8B$HhAaN`>(U91G<wE8{*r69[h>k3pX' );
define( 'LOGGED_IN_SALT',   ']:ji{?5hU{doNA? XQ`b8%0gsh#i%zo h9Z)>:G9?tO0|-:)N}?: 7QQz{iuv&qB' );
define( 'NONCE_SALT',       '6*8={#^[:S;;#.#PUyi0Iu,J$ivrxp0dbf?)zWSC#Ratmt._iA1P#aBh1}eWS5y9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
