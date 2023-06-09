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
define( 'DB_NAME', 'vimal_oils' );

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
define( 'AUTH_KEY',         'Ta3l}G35/qt8.n89J6/cjJXC}=,NV f9ea)~uW7O9d6Uo_E90enC,UI}$UL~*CeM' );
define( 'SECURE_AUTH_KEY',  'G|Khyz$vWZ^|l765eU5A#!hK4`++cUM@n-%Y/jA;Fh0%KI D}S5Dac#=f7TeUrWC' );
define( 'LOGGED_IN_KEY',    'LaSq2}4J%U2,W~+t4#&iU_Qzt:|gqRrr5@H%KONS`PJ!HPZ|pNAfV[?_vK,`wF87' );
define( 'NONCE_KEY',        '|Uvvrw!:_f |5){N8oI|WXOhf l-H`sAZN0]Dw; _l})s8y}EZT!|4}.@h)sxV55' );
define( 'AUTH_SALT',        '{zgd7C@i.a2@1xxWAjL<`(XtK(%PpRMKPoCHiqr{oNrjr6;*TW1dT/M[/lP:%Qe)' );
define( 'SECURE_AUTH_SALT', 'y4L+B#.kghp5vlTl:XTex6Uz^PSy=Mhhjx$[BJ^mzuUef,.hq2)A/]b#mlNZ82ZQ' );
define( 'LOGGED_IN_SALT',   'vw|M^X%P<O{xCG&R0H~N*1$?Y4vDXT-?X.3%x;nF/0ir[p)T%6EeBmF `== 3FrW' );
define( 'NONCE_SALT',       'KN.85^moN33acV3#x?l 2xS>cEQ!i1jT4f=tWot]1aqh)tO_tfcp8L!nR%/rUuc-' );

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
