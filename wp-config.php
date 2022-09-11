<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'bmaksimovic_digitel' );
/** Database username */
define( 'DB_USER', 'bmaksimovic_digitelKorisnik' );
/** Database password */
define( 'DB_PASSWORD', 'mmw!*AyqGig6' );
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
define( 'AUTH_KEY',         'w}]NFE^/80^P7os6)K,p/|[8TIX|SZeErjJ{`C-4VpRu2q#-]=080:6x$Y6CNY^#' );
define( 'SECURE_AUTH_KEY',  'atxb1&ZnFZU`Dghm-){r&lpAt8LX*F02x[_P6ZmhEF,%S-05l5xHi }Q gs(it_e' );
define( 'LOGGED_IN_KEY',    '^&V+61:0AwNO/B^gvMdAv|!kCD/ya$P7.4=9H9VD3I#:Hpp:u(IDTO5Q;7T!~hb^' );
define( 'NONCE_KEY',        'D*_pbaDU:.D8xo/X>o30VNm-+&zuhFIsw,w&$KK|uwJlEp!z$4~WmVPndMZ<N@c&' );
define( 'AUTH_SALT',        ',HJ0?WO0WfY>VJ@T.4`GX}Z-Y!OY($,j:l`v;i4Pd6osEs063i+ck .Wzc*$J|2R' );
define( 'SECURE_AUTH_SALT', 'gsg3V3#40V 36H%$f9xKZr}T1K/{`-{(3iM04T2O7c`%~rO*%.`Mp7Y6<%~4|?3F' );
define( 'LOGGED_IN_SALT',   'a4U-Y-+rS0~gDfH/p~kudy 4Qc2e6[dZ2,1c:P(G803M^7)F;ZQ,Pf5Pl+R-SE~c' );
define( 'NONCE_SALT',       '<^:lg+}L8Je$u+#DmU~aUo`XH/Ioy[`}L._G0>_YqRnac8H Sh>VH7}4I* FxQf8' );
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