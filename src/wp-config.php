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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '1Wordpress*' );

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
define( 'AUTH_KEY',         'Q<iK<Z%MJ*MR<]/~ap52;<>N9uiFiO*]l(=n^UzROAu.7OAN{:!!,F@6h{^N;;hF' );
define( 'SECURE_AUTH_KEY',  'p)wO^fVLH0MW[y88BeD4NPqpnU1|Y>Wi l>X[L)OjNoH-X%)w3(@~x*7mm.Uo$wx' );
define( 'LOGGED_IN_KEY',    'KDu-/6=/XoU_O):lJQ:;Rop:uh7zS:ee$G(7[uuA#tWM:O@5CSN${[=F1v-Ly?c`' );
define( 'NONCE_KEY',        '>z][>,+a.TlMCv71VN$sG^CBoIw2OKs:KgXbV8ev,<?!cvD%k=um*3TzdD-W__(X' );
define( 'AUTH_SALT',        '@HkX:tIWZhKrA -5zx[m#Yp;<-?`/>-<6qW@[$e8i)?V/C^&:)0[E,0:p]Pcm&R*' );
define( 'SECURE_AUTH_SALT', 'XR$J>k&KpiIunfP:@kQBh7IoW93_8i`zVREaiY|*/+LRjpcT}PDQ.e&7sb4~~@$!' );
define( 'LOGGED_IN_SALT',   'W(yb64 /`(EqYSnT0JDspc#K/w=MqE{Ila~&o?35G7o|wa&b9%7MM=R)QLPZN |I' );
define( 'NONCE_SALT',       '[r<i~In7u4p(eGE{v1T~=Gt#B2r60dBtc!}Z pgd_7c_i_@bS-iuAlt E[vr6%6u' );

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
