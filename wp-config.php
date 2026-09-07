<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         'J$^aO>pzb0MlEhhty*Wba!hLxWv7Jv7$N?{f}{wm~h2!QM ~V3#gGzml&>L#C^/4' );
define( 'SECURE_AUTH_KEY',  'P2XeZ! R;B(W|[c61J~T|-)k-H/a6MLxYt2=ewo?@cnJ<%+sRA3v:H4({9a+8)=A' );
define( 'LOGGED_IN_KEY',    ')%NU.du.!YhAl|&fXbFwAH4J`OCy<kT4*ZRrr|mH<`:h@[2ai{ATHsTn<Og+uT~U' );
define( 'NONCE_KEY',        '~a657KO{A-KJ;Y9MvNK*.tly)meb4DH~r]W<aZJ9gD2W,fG-:J[>})W:4U]Ku^U;' );
define( 'AUTH_SALT',        'WKuuH|@VZOz3.#r19Ay?:4Dq`nH=lFz06t]X{;R5Ri~dWXo}5<sG{tXBCo$n(o$_' );
define( 'SECURE_AUTH_SALT', 'J@W3I,1UORMct&BIZUhoMo7-,{BsXB5.{wvUpg>I~I&$+i^z.+$,n{ G(G~1;:f=' );
define( 'LOGGED_IN_SALT',   '?@`?{cK~YW?pXZn(_l`JrI5YA,WY1_t%Im;dhX<f|>VpnlIe/`? qam2JUJ@,)e6' );
define( 'NONCE_SALT',       '>=sqzvapb|d/;il_yNE&kh.-&:TRUdX-0?EK)(eWb`z|f+,SG^O&,#QcEbAgMdVv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
