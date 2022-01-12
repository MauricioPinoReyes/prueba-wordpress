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
define( 'DB_NAME', 'misitiowebdos' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '>@g,/hQ#3<|Km4p@-qS{0{GuT4*!Y3U8Dd42,[trNb.O$X]&s#0+y=#QZ,p2~hV[' );
define( 'SECURE_AUTH_KEY',  '=?Ff!q{`I5>X3q>z:OKwZ$N$A$g4[ZF-MDVVB,09wml@?;DRk6FV5mBtlX,Oo2(H' );
define( 'LOGGED_IN_KEY',    'fXeE.DpuEQ/udEnAtSUnrx{8wtQEAa?5m1wu;bn8vwwvpTkvP9?69if>!4zxZl^7' );
define( 'NONCE_KEY',        '!3-sT0A+RkR/(bJ+~$t$?RL,an657e04*xque5-.F<UfiOT[)T;EX8j`u-b? S8h' );
define( 'AUTH_SALT',        'qjI&r#j:L~ao,{$h3!Te&vwqL=b|gl8;|z[qnlQHf&Gau_H<%a&.H>o_A7q`}~Bi' );
define( 'SECURE_AUTH_SALT', 'VbZ4m^7y=+TV+;-nvBA3tg0+$^Ic7sS~5{g!R&= =>c=w^_*%`qoUqFAjRxW<fr{' );
define( 'LOGGED_IN_SALT',   '@pz61aSHe)}I|<R3!W|y;lmLLIPw/>[)bJ,3;<@Rn_x{H+u/M&x^>EG4p]2@H)Fc' );
define( 'NONCE_SALT',       '7Ei(-#pPPU&?fp+,*0 9L$Hg|o+[v4aI!pr:F|KR?3`!.{XQ!A#v=>`A5k2Sp4cK' );

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
