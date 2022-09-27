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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define ('FS_METHOD', 'direct' );
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

define('AUTH_KEY',         '@jyGcUVf~-Gk,|U|t354~NvQ)7i~P(iS1^qA*It|,Xn cUQV]F9BH)vzRNM*Vr82');
define('SECURE_AUTH_KEY',  '1YJ&m`8PQ[?:Ac!q?C}u1^.KaI*K`vufbl <f1=5C>BFkTiU-mwn[7D*S~.+5;-=');
define('LOGGED_IN_KEY',    'oHS80!r-E[#/K6&iR6P6%nj1XY+lQ6V9Kbyl*RMYJ 3,fO?jAWBx}1aoD6=^k%rr');
define('NONCE_KEY',        'zp5#QZ|,Yfw!W0W{f*,cI%0#+++}fD`I^5DO z}kA0+B,>DB6RbH^=Is(8  r}9Y');
define('AUTH_SALT',        ':oH@qE7#mVz&BFH-)RAqQ*M/P^z2Y)qKa`)L?cE-Eh/zvt#<%<G/b-vzb*S_>(!g');
define('SECURE_AUTH_SALT', 'a)jDswF}:@^ ?DJ8]sBa|RL<X<&!@Q$z8+~eP2D$p?`FG0 &TvR,RajF-7*Bw#Sv');
define('LOGGED_IN_SALT',   'h+m[0m;,<-V7*LXpo[XYjX!{p>z=T1uPm1Gb!Jyntl(2(d*6gtHL1p8Hr>4/w4F>');
define('NONCE_SALT',       'zSEps4R~>,~zz8Nxxe!h)!n!3S2LTf%kt|#:}VSdwNl810<M7t1dMtpc?%uW-|Jr');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
