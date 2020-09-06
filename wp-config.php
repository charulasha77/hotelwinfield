<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'hotelwinfield' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q><:{6^N:coKUgp<.H=_CyKzB=f9hPl:9z}9LdrTOW1ZT8@d~&0 Fl01~S_nP!YF' );
define( 'SECURE_AUTH_KEY',  'QnA5n&&!*R8Vu*8qJjavDM$m+ZYA~GA0_,6]-o8wu~f_E#,Fo#nx=Ln-qv%dV445' );
define( 'LOGGED_IN_KEY',    'X[G;]f*y_`Mz5XNE[r:=Y@%tY (u9d-Z!d;wWfKw>Uf7?Hq8eNoU>?/+Rny?a)`}' );
define( 'NONCE_KEY',        'i_7+P;3XhqW>9Sgu?*.H3H`A<UpTC|Xpk6jRZT Ub6tutpmR(4[80HE0C:8M;wTz' );
define( 'AUTH_SALT',        'v&*)!`i[:J9=IwQz?8I^xi.wF{!)2Bc}x?qBe9S4|{N!/~gy,V~RK7y)fF2Qb[qA' );
define( 'SECURE_AUTH_SALT', 'tgdE Z0]<.W{qy]pzx<fZ6k?-)~S=+d]DzY7yrCq4v@00tHoB`h(]$VLL*<c@HEE' );
define( 'LOGGED_IN_SALT',   '[yu`Nf52`W#l(nJ?N?z4CZrZ fnR $,1@rh!LBFUBr*Ys:x:*O{H,<`.}Vo$sAz1' );
define( 'NONCE_SALT',       'k=Q@2-dbMLpt=T#,H0P4I[LoI`X06LA28+:qQ@4>Z#d2/QuQv]@Gug6Rm}/j6v{M' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
