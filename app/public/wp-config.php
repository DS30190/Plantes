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
define( 'AUTH_KEY',          'jaiw)HXq8kEr>5PT!y0^TCi]H6r<X<D|Np(cA[!y|>Lf:i9;n*dbS|1V!(a,k xH' );
define( 'SECURE_AUTH_KEY',   'MJ{E,S-OE2wn;~~C.cVr+9*<|h.^m/dk.4+z|Fwg{jZ$hw8(s_)%KJ/}9^vvu`]^' );
define( 'LOGGED_IN_KEY',     'Uec~w_ 4MWH(T*bDQAW1n7RB15lc;Se?ywJ)Ei~qEpRJ;+>mE5/do*Mq!,b2dxX/' );
define( 'NONCE_KEY',         '6puv}c;E4ksySUx9bFu6rEL_B%kf+@~hPN>@P(.2bSy^Q?^}+IIJA&lSaiNn(fI5' );
define( 'AUTH_SALT',         '=90#`P7a9JoMXhw>!uWxDV2+DF_73KX#$ZE>7>k)4U)iJTGjuo[tx+eaKxwDuMq9' );
define( 'SECURE_AUTH_SALT',  '{#VFt1%aQ?e:W8)P-Z>aMnRPKS&Scd4nv5&-q.3kU#WXYUu&xRlK%>|h>tT9.e[G' );
define( 'LOGGED_IN_SALT',    'Q%H9e_|pV&}x5}GDa4l>Rm&S5%(N,m/ jo.~R<~9fq._u9#0k(o_aS3=)IdFiv7T' );
define( 'NONCE_SALT',        'JBojs,}X)a#PBLrUFzX9s5`5Xi=8yr?q@$AuWaC!,@XtZhlmOG6(tY?*?DkqB/sX' );
define( 'WP_CACHE_KEY_SALT', '7yL*He7mxHRYg`&MQzoQH&PG <?GHMT]55m|W#rI,S{Z%}aRwk*.Y<8tX=]s>O(_' );


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
