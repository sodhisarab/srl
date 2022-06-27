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
define( 'DB_NAME', 'mspeaks_srlootery' );

/** Database username */
define( 'DB_USER', 'mspeaks_srl' );

/** Database password */
define( 'DB_PASSWORD', 'M$.JNIc79+Vb' );

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
define( 'AUTH_KEY',         '|27mt]G$sfsas%efH8~O0rwF>D.2]J%lZu#|%6jd1HX+W8VG;xuX+1K]DSx`4c}q' );
define( 'SECURE_AUTH_KEY',  'ft-7}#=iiknbj+E2B+]8a(<Q_,=Ne &W7a7jles` [9n^KV<giA]B7a)ejuqk3g[' );
define( 'LOGGED_IN_KEY',    'CsZ4o;|&g4Yvk- 1>}k3cI.jaYF2 .`uJ98v U;~rTT8?`0Q>FbF@1ev:?CGx&_=' );
define( 'NONCE_KEY',        'pO|4q*U=:_M(4}:fBhw8}7jr$a]M1nu;Fs3OKVFZz3f5L&&/fica-sZKUz.oz5[?' );
define( 'AUTH_SALT',        'o6oqzy$w_4^P#[<4>5=B)3-CRiYnba={;a<s4+U#W[:MgLL-vY=@k_[$L9Lg,c+4' );
define( 'SECURE_AUTH_SALT', '7O7ZmxQIV*2?uFF`pOrZ%_`cIm}o}k`4:RdY^3~*mc$pc<+98|JrgZ/a)q(C6a73' );
define( 'LOGGED_IN_SALT',   '[F3PTa8)c2+G`ub^`1&C#!vCLu}Vop6h0F(5Y?0~c4$O+ERO6O@>]TwO!/ot`7_^' );
define( 'NONCE_SALT',       ':;:@21*[`}B5M|]S%mDT[3*VY>zTUnngJF.O-ebNkb:]n`,$^Et/5Ixhce_j[~Yw' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
