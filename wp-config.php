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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'qPscvf31CihoDO]F]npf:>3xYFZL05r/k ?TfAtOu:dDbJ$Dn;v7W73o.Pi&Hm2y' );
define( 'SECURE_AUTH_KEY',   'lxwdm~)]3vLeS$b9t_WzHekS|+DX,GilD;H#hNa;M=MMq7!BGWUV>P.vv7iC&ASN' );
define( 'LOGGED_IN_KEY',     'uL*-,_bI2o3}pwB]1OO|38>,?]KK0sTw kYzoJ0%dK>O(6E6Tde{/T3Twwgm**[u' );
define( 'NONCE_KEY',         'X&){2CBE(W/b}SuRe]NcyWnI5Q5eMM_.+t20al~-HE]=>ill`(LA`TLsXzrgD?D.' );
define( 'AUTH_SALT',         'Z|l@Dc{1Z? 2~w:xU6CVMu#QpN+l*g*%?PvTiOc|:YV_mtpeq$4=/aAd^vpU%aL#' );
define( 'SECURE_AUTH_SALT',  'qa!M$BvxdnPe$x Wfk%#Bw@^Eb1mWQ`S8|7yDz?QL)tf4P$Vvzsr.h^U3WP/?Vt1' );
define( 'LOGGED_IN_SALT',    'tRGVv DJZ}BGFql_.#m[Ok(}=E~gr:U>&GqxUh|Wr)$Nf)+vc{nTw;uUt6qLN@yB' );
define( 'NONCE_SALT',        'm)f^Z@CtM@:R6$h<mm0gMvD%l4mb0(0GDvX?2sB]2%1/OvE;?,t.k(tZ*P!1**Aj' );
define( 'WP_CACHE_KEY_SALT', ']V+a=XJ}6Z-VqQ-;m5jC9N==EAiZ1wO#rP}WNfW)NI{&P,RORow|=-MXSN~]7GoT' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
