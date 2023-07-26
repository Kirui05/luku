<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'luku' );

/** Database username */
define( 'DB_USER', 'admin1' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'CK~?4c|GapaS.lC{FopFK,.ZM!GES5v])OU{*/KwUu72Bv@++{Ffe?j elSNK1H2' );
define( 'SECURE_AUTH_KEY',  'ux4k`iNST(5O$y[C ^[vU69eBoSV>QhNZmK@_V_p>q1g*bLP!Jqn%QvWmTxx#@] ' );
define( 'LOGGED_IN_KEY',    'MGE}~3O|Bieg0H*3!WQ1[d7`9Eg/>mfRmqV-Z#^C6{F-nI5uB2z$l{HJx.f=@Y_m' );
define( 'NONCE_KEY',        'w`AaV6-RHmbqvPPkOnxwq!am*./t7varjRjA;$x{sYc>ERTV@g!i`e~|N(3tz|_C' );
define( 'AUTH_SALT',        'E!]&ZT{{dA5Kgkg6qLK(w(X^aAxtt3dX:;PZ/Iw5=?65;>E4J9gQ!_l0Ac <7,TA' );
define( 'SECURE_AUTH_SALT', 'C)IzxF)d.~m]Js*DH=bn@,yS.luu+Jm :Y1=7 gMy#<qTY!mh|FnBRY81G=h ]<5' );
define( 'LOGGED_IN_SALT',   'k1M2O+miMsl*fcrpC<4N|UC^?{uYZ)<3(SC*Z~ 5:Ch!xf}WuTMxhvT/|jb~#5h%' );
define( 'NONCE_SALT',       '{)q^Y$gPJnNm@VH{{-jV=06XcEq:>2h~op>XRLhhqvsCwEBwdNAoD!I{dpkN>L5q' );

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
