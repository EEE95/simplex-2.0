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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'j+3>K}Gv}GxV#pCkPny(^;j-gOsSW 0G|q~QH6h#Li|]qzcKi]2%&~X+@!dfU6@]' );
define( 'SECURE_AUTH_KEY',   'ZhOVG;jT9qF&ynwra9Xaq6$f<G?r*{Oz}Y{vcU_3;E82|mSG/0w#mG}h5)ApJ#60' );
define( 'LOGGED_IN_KEY',     '%f]%:|)VQBf~hr|Por~Ohk]|tT^=gcUs*0HPWy=!&hI:PVN[u$~/};TH+zhJzy*M' );
define( 'NONCE_KEY',         'dMAgF>!FPby|*n&u,;uSrzvxG2deDL}bT}hQo[lur7[a2^iYh{V%vK91L)th*nnO' );
define( 'AUTH_SALT',         '!,8)yp*$*wIoF`?So/v.)i/{v:}P^i7!V8A[*r3+/${ad=C s|<eucvyjXs%ck>%' );
define( 'SECURE_AUTH_SALT',  '{Ls)&^*y6PLh@V%$e,*(ukB1}B@JP~;w=2LcNhxDe<kh{+rMP*>5m !E.~N7i`SB' );
define( 'LOGGED_IN_SALT',    'aB3Nsk>p7rCBU]Acq7x[Q t9-c#+%wLjP$euj1pCnhf.OdeYv5g58ij]p(R|{,#W' );
define( 'NONCE_SALT',        '[v|@RnQ7dug?V0wRhU^Ms35~^Z1*9qrYb;!JOkQ#WywyL&@=g_rDBnPZHApl#>j.' );
define( 'WP_CACHE_KEY_SALT', 'f{=e.dQX;1*d|c@n2QSe)MxS:S2s9{?V}y^hh,(-RJC|ys)<)$}sV</iWtI.zhf+' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
