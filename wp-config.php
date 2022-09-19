<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
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
define( 'DB_NAME', 'bmaksimovic_projekat' );
/** Database username */
define( 'DB_USER', 'bmaksimovic_projekat' );
/** Database password */
define( 'DB_PASSWORD', '=_J8.yg0b)]Z' );
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
define( 'AUTH_KEY',         '.RG1PG9Jxjl?PC,rG~= L#W<J|!dQ*]M0-+zXBX{lL=cbt#i:z?{|xW@&~**XI55' );
define( 'SECURE_AUTH_KEY',  'ZyL:E3|!88,!U1GIu6s)ku3z?*ZJ1G.G&0!H`#h@1_U`B{dxqnP{D?6e+q9>aOig' );
define( 'LOGGED_IN_KEY',    'TBf~ps(o)!&c @|?&k7V3mH{]%heuCuY|xW,`eH[=mZ8:Y? UqA|G>,T3kRV_ob@' );
define( 'NONCE_KEY',        '4ANs l_N] &`0cpqBvlU|w[F6]mMhX,A)3>P!}6NR60t>BlaxFM-3*}zu,.wu^0&' );
define( 'AUTH_SALT',        'd}FT~wr]UZADhbS5)6qnu44=w5@Q2vvT^eKz5KY!)l;$FIPrZkeR7#H _A|i_]M6' );
define( 'SECURE_AUTH_SALT', '<$gkZh)05wkK16L4%?=*+h2M;~*r!Z]aX<M=ps5$|z.BQp+2qN_c%l5Iu|yu$A-t' );
define( 'LOGGED_IN_SALT',   '^fY;j;8(O_.%hF:g+X:^m3lT/Ei5p}`7lb_dJS/]n0P,A ai7yeE=NpojQY61Yq6' );
define( 'NONCE_SALT',       '2Oz#2_]DZ<;P{w^%V%UIf<CuJ)*aY:<sS26}V/Xxw+k%F|w?!jifnyX>?Ft(Eu<z' );
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