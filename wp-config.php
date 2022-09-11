<?php

/** Enable W3 Total Cache */
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
define( 'DB_NAME', 'bmaksimovic_portfolio' );
/** Database username */
define( 'DB_USER', 'bmaksimovic_portfolio' );
/** Database password */
define( 'DB_PASSWORD', 's52%102T@qjf' );
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
define( 'AUTH_KEY',         ';-{d0P?JBKUYhrD)m8Cxc6pbyy&.K)I74L<3i>!E{Ev8/gB2W.DtlKA3X9Yfa0-2' );
define( 'SECURE_AUTH_KEY',  '_c<y#3z;pdT=gn+HlSKxutBDqLt_5$[i1.+;{&Lw;2_$~rE t_cs0Dg cz5;)>zH' );
define( 'LOGGED_IN_KEY',    'o@W -}@ZwSD2oDU)k?c:X1:OK,/}k_fe/3hwB$>Vk7+pOL`~EP5G%;X32@@>1~zi' );
define( 'NONCE_KEY',        '&1VplBqAl24`n]x<xL@O|z[yXhQ2D.gWbTtJV0 ,([@4_)(2,~ufp6SYgz87B/ti' );
define( 'AUTH_SALT',        '~Y6AHW4i-b]kq;/V<H)&Jpcv5Jkzx9G ul)YOm<_W:Q+2h1Z17&,&TO1[a3s0,0X' );
define( 'SECURE_AUTH_SALT', 'gEXU(I2X .K9#iDFoB6Mr(lI8tq:La2~e#%0%Hm|DIN)Nc3xdyOEdZ<Dd}|7L{2H' );
define( 'LOGGED_IN_SALT',   '}gU<pR|)`[%(=<,c?<-LISh8AR2X8mfB{W7hu;StotBGqX=Rzv_o,(/=AtKklCc0' );
define( 'NONCE_SALT',       'j*Z:++Np@lS,*{T]._i$DrNL|KgS)+9 !%zF&2J[sLs%4<y4l,Xx9%tk?UK.crP3' );
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