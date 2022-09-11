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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bmaksimovic_trpkovic' );

/** Database username */
define( 'DB_USER', 'bmaksimovic_trpkovicKorisnik' );

/** Database password */
define( 'DB_PASSWORD', 'ShKQ)pFs8#8w' );

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
define( 'AUTH_KEY',         'Veq<lF/+JzF01]eoJ925v(S9cr4x^S]yLOfjx96=PgT,fEC3] ${ne);s`|D02M`' );
define( 'SECURE_AUTH_KEY',  'X>R~X:G#Na}B21]/tQ4)/FwW]s%NYbk%lEksP8~2I$%!Cd%t*,e0M(AUl=.W&d>H' );
define( 'LOGGED_IN_KEY',    'TpO?Bm64^[GV(4llQb^yv}GUb^-yrbS4S6~ZA|r,B~dp*g=0imfB-kuydPE6*$8m' );
define( 'NONCE_KEY',        'uQX6nUeI%6$5%t[f8CL.n~v+wr>BkF)^84B:kftKJB OS,hLU@^hRgT^PCY){=fB' );
define( 'AUTH_SALT',        'J$Y=0 >?yE?q`qK<dgK_wTsEH`opbOGlK#c_L&JCRZm+Rc9OnKBxm9=IhuP+RENt' );
define( 'SECURE_AUTH_SALT', '2NY[k2Poi]E%m]:WY7z3P,F);A|t^*IShaoyaRv?$hn`BcG(gg)y#4S~EjBxIRk+' );
define( 'LOGGED_IN_SALT',   'nKR}r+&tN(ug?n;|,YUFy|l-);3FZN_ #{>-KsJ~W~y+H4)A{eERoDyd[vAe7$i;' );
define( 'NONCE_SALT',       '-<{Fj)fg5G5BVF8:5jsNy[,vaq;M80&4$DTxT3 t_Wq`y_X>c0E(_Qh`H#S=d?6B' );

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
