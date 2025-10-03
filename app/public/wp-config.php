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
define( 'AUTH_KEY',          'xxG#j^R>hh:a+ZLdGPd;cdYiAoU/wH<[KFiV44.|DThw&/,vw$OX6gpW!}/KA.O:' );
define( 'SECURE_AUTH_KEY',   'aDGwDIdsc#h;r!7{ g}L,1qK~zZBxJlAo]L&p<5$!J 8!>n#Q?fQ(Nuq0W:&3 m*' );
define( 'LOGGED_IN_KEY',     '.P<pb0uui&@.8Y8}x&Zo{5KMGnBopx!~aX[}7mw<*mQJzIV&N7 )6F`v;+C.},c0' );
define( 'NONCE_KEY',         'q$/i,N< nv=1ax[Aw[T^B:?e#GFgwsT]_+{eD=B.M|SSG`M6(.Cf!9$T;eOF(,{7' );
define( 'AUTH_SALT',         '&`CE:9)@T=ioWlpBT}ig!0My(H:yFt9~5>!FW__e%gKHIjjXL#qPDH T=cX)sgj8' );
define( 'SECURE_AUTH_SALT',  '@:%oi-e3gJFxE`}-y?#LMlg[=Pe#vP@nk.{Qy9P)W|f_eoL^61S7zO [xgnA0}4f' );
define( 'LOGGED_IN_SALT',    'Q=@cAYYk>+67k,4J8?W?^38Gu0o*A>j>bq|*3nF4cz#_-2+:D<`PX[33&H=n% [=' );
define( 'NONCE_SALT',        '=0VJ]Mk}~;mh0P(1QKWQe9GZ8)t)x{?znq-kynj&JtP,wvba+EX-VDkm]lEzWfVT' );
define( 'WP_CACHE_KEY_SALT', 'us.ol6h3y5->{m]j9Ij_7R XmVp^w=ls=K-i~z56}V6]<i|~.rQmm) CL4T2Z398' );


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
define('WPFC_CLEAR_CACHE_AFTER_THEME_UPDATE', true);
define('WP_MEMORY_LIMIT', '768M');
define('WP_MAX_MEMORY_LIMIT', '768M');

define('WPFC_CLEAR_CACHE_AFTER_PLUGIN_UPDATE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
