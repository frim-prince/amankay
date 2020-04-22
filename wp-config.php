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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'e2)C!3d+XDncP8bfkx2UzQ[JT@$jRk-pYV!8R{Ohbj2W6K3F:I@^ghew%]v$6G=$' );
define( 'SECURE_AUTH_KEY',  '^QF#`O^I!NSgn~aa;bTwVbuPL xsn_C9N;AVev_Jan~|~Lx~k`BUmYFeYVJUoEgq' );
define( 'LOGGED_IN_KEY',    'k(uZaJSw8B!V91WiQH$nV,]q> <;ZQ1SN*YTDl#RW-$-R!$a>60pG^XVCte ?d k' );
define( 'NONCE_KEY',        '-v:A)R.#C`Bs#w}{1&*bDXZa**()8$47-m.3E8zV_#U<#p]3/W_::3K[R>~i$n6x' );
define( 'AUTH_SALT',        'KjBC$}8BGVn&2lgWq~9hLW>8&Q?CWpU<|63MjXvR3QGw?0$oBw/*X1bpT~8{GAH)' );
define( 'SECURE_AUTH_SALT', '>u([#eDInWBkV2ZP?;$196G$t^Ce!Z38@uDi@C#g`;#);r&Po8_J)h+d[yE;`jIV' );
define( 'LOGGED_IN_SALT',   'NHI=+EcNG|OIFc(Wr$WbR .>m,,=[@zC+15J[iw5ac4N|@yI>_qWv&}FGN#!aWqY' );
define( 'NONCE_SALT',       'jX$]#x-BK)MUVEleO_Tfk0-]*hM-07`5!5.H&]o=YkH<>>4{D$WU(~?z)WMYWphM' );

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
