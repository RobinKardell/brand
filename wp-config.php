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
define( 'DB_NAME', 'valet_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Theodore13!' );

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
define( 'AUTH_KEY',         'o(W!]wqV,>uVc0Gl@+hcTMi:1E}`c1kGj(vEul3y#yGU,+p2^#SFfspw;JpwfysL' );
define( 'SECURE_AUTH_KEY',  '>BK] >tF]4FWL[,h9bk ,8Gd _!_mPuJ-e-F!p(HIr>Q`,Aw9x]g{|f/pipcp$>s' );
define( 'LOGGED_IN_KEY',    '-W}KJ[s[dQ*y1e<2j2Uf`{cSN{Z(~87,]1#p1%V{wIr8vu1hZ}OSM{`F7h?9,Wsk' );
define( 'NONCE_KEY',        '] RXtLho4xv!uAB*]$!1(&Mj^m~y.G+0-QLZ+/{vq~I}}PN8LPfXF2C3mXlR(mL_' );
define( 'AUTH_SALT',        'bH4&MSdySB/`H{z4-G^R,1BJka`,(FyD&SY8zU{.zZvc -<!6#/NO23q6e!jn}H.' );
define( 'SECURE_AUTH_SALT', '.vYtpGl%Fb6[k;AE5S,^=D;|&?1V.{@3xHAEV#NPPo={+~%G5LPuP>guvh3`R9x?' );
define( 'LOGGED_IN_SALT',   'u8;h=ypg1*X_meD-SU]j7Ge)peL{faIp!iKLse4Ra[75c2^wBx%24iXK+2s=-h*q' );
define( 'NONCE_SALT',       'g/NNN6%EQ[UuxxW,Ss`~p5^vO?aus;7J]v?[x[&1W[~4^,Y6,q({+p,gC|M&OSsZ' );

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
