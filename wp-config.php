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
define( 'AUTH_KEY',         'HdwY!`BH*Hd8-eCo}_I5`x7a16$b8?Kx8!wti/v9W*vBTC;+[eCiQ6)Y=EN3`hQ[' );
define( 'SECURE_AUTH_KEY',  'XrAJ;>(^%Ky{wDt?Ine:-cqfr)hQh#`4Ld589B@G@C#=bg%&>{KlwkZzuU2PR15c' );
define( 'LOGGED_IN_KEY',    '}}Hi|{}NUf?od@!C{oO4BA]*vi^}(:~zdXkWlut?Wg}O~lYE:DriD: Da&0%Do5.' );
define( 'NONCE_KEY',        '$^Mne(Ro5VuT{%V~x6:B#Lb<0?*i[V4c4C%<Y_E[R1A(agL8b[.L@26Ul#ab|M/Y' );
define( 'AUTH_SALT',        'm]e:`VpUt_U?v)Tg:8Hx=7ka81HkG0+^%ArX?=]^IZ5`L&jdu)2V:&?O*BXBU wF' );
define( 'SECURE_AUTH_SALT', 'Y>:bTST(hSl%75YK.)2+3-O~cCL-.E[b/{4_ 061_~=#HXE~.1,d6: @I/~Pp0?0' );
define( 'LOGGED_IN_SALT',   'b {)JtjY]`VDp$M~F`kux*<B&GqCFPoF<4D+CBz4$p|D|i3b;NyCmP?2AY_(plBX' );
define( 'NONCE_SALT',       '[Or} ?95tN!^ o7eI`~K@{)_,5c}ka[oTD671QnI]R3Q%sUU/-8sk!f!rby$])^B' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

//define('WP_HOME','http://localhost/WordPress/');
//define('WP_SITEURL','http://localhost/WordPress/');