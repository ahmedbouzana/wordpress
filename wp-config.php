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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define( 'AUTH_KEY',         'oT$DrJ}N.1O`DuwQ463(HAcy3 8xmS.rFH`g]o&.68@`yQ/sl;jC#%[[crLEE:>z' );
define( 'SECURE_AUTH_KEY',  '^xG22w#ta*Em;zKQ0isu|]QxN@bIEQw0kWK=LuD,}uUdYNb9VVki{6,l142=Rib0' );
define( 'LOGGED_IN_KEY',    'ki>+Kn4+3TmLstYu8/jM[ls Ig@94QRPg#Fh^?<Q>B7Px#@S5;Q[HfI{~B T7%7|' );
define( 'NONCE_KEY',        'Pzu_hvLk~[EmP0k|{I9pk_aN5z8)bzt3(plX@X*`rGOaudGSl:(23=)ITbc*)?GC' );
define( 'AUTH_SALT',        '3jpH<8HhN$OA +}.D6;(1@75xI4T~j~qqlbcJ,fzSRLN!^{a[OCEvXg6FGvII3HJ' );
define( 'SECURE_AUTH_SALT', 'rnj<K/K:?9c4FiG*_8b0t.}[6u^g7-P7@+N3cM>kMLHHh9i]]2$F!(?Y}>,1?4ST' );
define( 'LOGGED_IN_SALT',   '[.w1pS%&0r[1CUbZ+FclZDikv[CU[gz.OPcRI%QO&UDkkiL~*`uW_z?L5$NAc^*_' );
define( 'NONCE_SALT',       '#J3Oq)?lm4#LXLKm1<9Tj4~3Cb5U+}.v)YB@&D::3+p~#[rTP(Hn$UXw(9MHdry4' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
