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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '2!ckrU=~(a# $hQU_0x,$y4F-mUp4aL`j^mH%B|YJDviAWa8v?p,MbFHctA/nfTG' );
define( 'SECURE_AUTH_KEY',  'Apky{_n+d#E@<`yvY=Jx:DmLkqIf7Xwx#t(0*.Oh$kWX.=mQMjw`JZu YR?:E.j(' );
define( 'LOGGED_IN_KEY',    'gLBvPT:(b4=LBG;aG9k#}n,B07o5eA.#B828@djw:+ESxuH@c7-E3@-6{0`hN^d8' );
define( 'NONCE_KEY',        'QUl(x2*S9YyE3)[~Xh9NElXbPua})gubh LFG@yhnk@dE(WMa9HJPETOH1oF4TfJ' );
define( 'AUTH_SALT',        'z$H,[Je67vHcGvPH`LcXo..~$|]<%x$YwE*dk28_|EP{tNBwYv,*jy&u}h~VFq{j' );
define( 'SECURE_AUTH_SALT', 'qlvlw+f#KGAdt;86j],4~0i5IG=}@I^Q@q.Od>zE4jcZs_DVcqx$zz,#,yjU^#i!' );
define( 'LOGGED_IN_SALT',   '74j#I%RrNi5wKF9fiL%QMD(jq7`=:-_=4#dJ+N;c#8f8NW&3Z.%vlw~0G0FkM{?r' );
define( 'NONCE_SALT',       '.Pg{* {4Ts[pB;VD!$ Piu|;Sz6fQ8 Yl|Tl;%PlX1DewqrkaV%t#x`AS)6N+E[Z' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
