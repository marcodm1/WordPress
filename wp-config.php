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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'YEUClAX5A;-pe!2h|Zv5*07}hp5#ke1p3S}kb+@$rw$#A!~x!5 &ow0[B*EZESmb' );
define( 'SECURE_AUTH_KEY',  ';doZvr$B_W-Tpy{v8ZkJ)-z7DPqiEjE%EO)S<*J^yy{ISYrwK2Pjt!F/MLCcU$g8' );
define( 'LOGGED_IN_KEY',    ']z^?>ng>Z_W,7Z0>,e AWeNUK|C+ZhN#Y0UAyG:l0}<(i(5!Z=3d.PaUNA14;{2^' );
define( 'NONCE_KEY',        '!`<p6fph%-s(mRAy,V&uhnw?X*^^Sw1^.e[|AnBR_i~0*XT.0GIp$O;+x:w9)$GJ' );
define( 'AUTH_SALT',        ')S3sVL]+~m]a-Q65pT8<E2g`:TQED.XB4-@rg@v^Pwng;6!n%2%*C;Kat(p5^ >R' );
define( 'SECURE_AUTH_SALT', '_!!b,<C+3zrT!!Tyn}zNYjc8o*Ez;^6anl*>z/?<:J&B&4.7Y;*=f556tF2Ctick' );
define( 'LOGGED_IN_SALT',   '``1P{qVO(YJ*25%I#7mI&zp?c]`iFD[3UlS|;i]=;P|_MI/WY!em5zi 7Dqdyb U' );
define( 'NONCE_SALT',       '>rc6KF@I{Y9ypgEE6pg.?chRVSY-5Wmt<dA ~b0#>zq)E.E5eqg:x~K8x&8rS=>#' );

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
