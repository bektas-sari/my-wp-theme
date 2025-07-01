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
define( 'AUTH_KEY',          'uz9qycvKY@A~=#]NMd/&| 3_qdCR[obE7mzvoAw<]Y5C_JQ#@l_Dp&j*$hOV(=-m' );
define( 'SECURE_AUTH_KEY',   'UJ3CY/19}CBf5?H#qmwhyr1^KivL]wr[gi,uTu|hJgwxDZ Ep_G%)IW|*iSggd6m' );
define( 'LOGGED_IN_KEY',     'p|+d9oY+!<7|St|7v:S4v`Cdg:-UBRg@Bvx=F4-O29*4Z@R9WSgB?ZaTyD-Ph3 N' );
define( 'NONCE_KEY',         '^az}/!e*kHjGl:?{2g+Q0hX*M^VcD>MNe9L~yEIWh0A%?b{LSK|a:iE 8`&U`D@Y' );
define( 'AUTH_SALT',         '_e<LC=1/,hFcJ,wJO>CgUzIn:e[4@H|j*NX1#NUETp}I_/HixJSJ$$c%PN)$BM&6' );
define( 'SECURE_AUTH_SALT',  'Q7OA-ahB[|,V>pwQtvqbiKrAfwgo.03LuXq8,Gt`.Qnlqb7vC BbM,!Wb&Tn(={]' );
define( 'LOGGED_IN_SALT',    '>sj8aF/&!e( igak_P;5>?z[$Ia^*TsMU}^cd~,k|yc/]}5lHTi-$ RSo}$B!IhW' );
define( 'NONCE_SALT',        'Oa#W~E*NZM-yAyY]9:CGen:DLyLPH+QjTEp:+w.JzGF)cvLL#ZwW6v5l<aJ:,3.f' );
define( 'WP_CACHE_KEY_SALT', '*l!KZ|6{>hN(rDK~h]&XnB j5xik9kmGMv;HG$5(K)6FN(>|G[nf`>I y=O|AQCS' );


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
