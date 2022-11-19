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
define( 'DB_NAME', 'nuevabd' );

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
define( 'AUTH_KEY',         '] {82UkeY77Vb_9Cobp7vb84nv%_&f<Z|qSP(O9O`6r@ %~TJ|*$r>3p6%yCIo~t' );
define( 'SECURE_AUTH_KEY',  '%j#0Kk.Q0eiwHE/hJ_#H`$rZ~wPm!|S^3[)Gk1vW~)M<_7d/l+qOq>q(Uto./+h2' );
define( 'LOGGED_IN_KEY',    '<#GWbDvCCP11hTCHG+O[}nUmw-I}a<1@e+F)/Cf.Fc];5?-*v6A8eL+Uxr=pV1%]' );
define( 'NONCE_KEY',        'R WMoJY <9T9~MxC*H>55U2:FP5L4K>(y9Vz7($#GA>:ymq[Y|ud{[&4<.|y~L%]' );
define( 'AUTH_SALT',        'p2ul:4,uTL@lE+Vf=-:kH|yJ/jko>6W6kLzBp:RWw^qy(1dC*uwkd?zXd+yasT%Z' );
define( 'SECURE_AUTH_SALT', 'oEm|a:L:Q<EVa@4?I<$R4IpLV[i);n:UmR4c^zk*cyIc?INZC(;;Rt0A^vCfK]rm' );
define( 'LOGGED_IN_SALT',   'qhNpE3N411+E0 #5}B4Qs]YG#=<aMZ<[0s0tcCg8D#Ylvs jn2Jyg/(]Fq*0`KFR' );
define( 'NONCE_SALT',       'zDQLEBeS]{a*rzJZ~c{X#_-MZ#/6ppvMNF,~VL#$j!D7m?[r;(3DAUorg,2Ix2Y2' );

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
