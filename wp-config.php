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
define( 'DB_NAME', 'sitio' );

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
define( 'AUTH_KEY',         'ya:YkSUG4^8E<q(1m9~vLr^dMI_Nc!/fp,&cj_[qxfPdFulFH2s/.$/WqUqK#l3~' );
define( 'SECURE_AUTH_KEY',  ':/YC.b.!d?4Hebu:nr=8o>c/*!Y!$U:am*T1{Y(.lQmpoSXE`Uas eW4+r`KMIMN' );
define( 'LOGGED_IN_KEY',    'I17zT=e1<K~YqSmEj$5xrz@EUZ@1.VI_J5YGtgXE4oG93lpkFp`o@$4I!q[9!.#z' );
define( 'NONCE_KEY',        '-kC2w?W,zcE*Gr6,h2/:|4uvKiIucK;Kxad)</h%Z>ND<S<eSe<>s0kk%*}o~*z ' );
define( 'AUTH_SALT',        'MsT:6]YE~m$2D_8XGVb(U5#{wm7_buuTq>;8u@c?@1l<Md.]ywj2xR_$ AAg$;c-' );
define( 'SECURE_AUTH_SALT', 'g,0hx%=o&GSm$[Y_+ngK5f$;%FhGde38V]NBB_~~}T)vKS&Nk{*-RDGX^koq9-3U' );
define( 'LOGGED_IN_SALT',   '#alr6h-ON8@7:1xQd+?t0_z[eCYoX4Y@((0r3?hp5~]4D&mmNNWiq7AZ,9k/0yi(' );
define( 'NONCE_SALT',       '_m<EE.+c;)M?Q;xrj[ul[ ;z[XXH}qT!8n&5)Ai=B-g<H+6yt&da5hbXxCuG[_Re' );

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
