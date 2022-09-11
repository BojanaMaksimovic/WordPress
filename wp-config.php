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
define( 'DB_NAME', 'bmaksimovic_roman' );

/** Database username */
define( 'DB_USER', 'bmaksimovic_roman' );

/** Database password */
define( 'DB_PASSWORD', '!9zISzb2v%e)' );

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
define( 'AUTH_KEY',         '#_k,:.7x7bklRz8v1^?d@@+lXHp2y0B^wH0lyP4+`]2OZ~i>G-,:xW!T/#x:9azo' );
define( 'SECURE_AUTH_KEY',  '.8ep~-I$PdaqWYjdqvwf_rGfZ*BywrWwLM*8H2G1zrD,n8?I=zxDboK^d>T4IM3b' );
define( 'LOGGED_IN_KEY',    ';PY:Y7VFQs%%tl82SyS<`=doU%%W<ho$ d+Q+yhbU Q|iG&BY+sT9N$4M_IqkgIF' );
define( 'NONCE_KEY',        'q*Ln*Yd?ZC^]j^f||H=SS[<:J!@/e|[Ts`^XygG&r%Y,+.3k9zR%6Vo=SIA+C!yE' );
define( 'AUTH_SALT',        'qI,`#7V#{5XQ%?lQ(G~%O[xHPqj*:QcJt}:o?%jWke%%>u!ps-8^O[Q=LE(mnP{$' );
define( 'SECURE_AUTH_SALT', 'tlJ{4dj!0$!`g3w0YSO@6.0?kBNG !g0GgYAqWv%Iux{6~(X 3R`*l?&u0nj+hd$' );
define( 'LOGGED_IN_SALT',   '0$>KZM/qM@`m/X$[+-]jaed}^Q#XKh868-EqM.rBU7egqX.ML|#6Do7M%F)ZvFwY' );
define( 'NONCE_SALT',       'FkC<NL(v~nD;f05MIh0H$HqoCE/8SJw-XxjKxv./b$IB}nmzT=lQh$gm,alC;u[/' );

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
