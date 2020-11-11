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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'q=nOtBGn&wwk!^EW]?GW+QOU|)0g00^gwij{.c5<g|4W3g/>lGv>wbeTIA,u+rx]');
define('SECURE_AUTH_KEY',  's{#E]fhs7~` 7kW|xwB]92ezHmS2||fJ}W:K|c3}CbZA/L:2Up-a[xbw3TR3zj=%');
define('LOGGED_IN_KEY',    '!|V^`qR!,ryYopz-|uJ+K+63pmCT7]E{Tws4S3nxOUq@Va8VC?bOb%]@;00-$Sak');
define('NONCE_KEY',        '.w>E/z]Xing@8@n+S:boRa&Wr6vHbGIW,ixjUP!rI#M.xE3,z3@7Ivs3zFGBDn,w');
define('AUTH_SALT',        '|VQ4;^ig#J}d)bLv+,hV<3t,!T&U| [+q7vOmvYSxg9n_w|+,4I9MXvL2v5C{AaX');
define('SECURE_AUTH_SALT', 'YF;FNBw|Nb=H.Vj5N._f66]e1|{$*5ZgXkl9c#T7~bg$`nOBB[[ i{lsik]?I6T5');
define('LOGGED_IN_SALT',   '|`Rm(,|+}p)dTA/j%3k`4gD+mZT<5|yu:jXe!K A+6jVRa%jk6Ew-^*l|sk58!m=');
define('NONCE_SALT',       ' &$-H|MM RUfWKn[H$iP.0Uig*;&#wjZ0?DY)Iqbf-ADTq7R.6&7+3}=[$rB9vwD');

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
