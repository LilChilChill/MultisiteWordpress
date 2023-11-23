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
define( 'DB_NAME', 'hypebeas_hypebeast' );

/** Database username */
define( 'DB_USER', 'hypebeas_hypebeas' );

/** Database password */
define( 'DB_PASSWORD', 'hx=3]FVyhGYf' );

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
define( 'AUTH_KEY',         '.x)I%-Qbd$OKg$P5s=n|PFQEFW W%IZl|Q4jINR$&1s4;4e&Z 6R $EYWdl],ch,' );
define( 'SECURE_AUTH_KEY',  'oKUe+``F`O#NRa|1Rf3XY:g#0;Iq~W~fno2a0@!4^BD8<R9_Gt^b*tr(-/yZExqh' );
define( 'LOGGED_IN_KEY',    'Rz;ik>qIG^4qRJ@JCmS`Gd p,mF&#W0}/mxEvx!l?n{Ced4I&p}Pi|n8d/^!(Cw7' );
define( 'NONCE_KEY',        '.|Ugr*Py9-Ia*:Hx`9/I=!MYSO/`kw*30`=MkHs~8mY@|Feh;.`qD9XVK,T{kIH@' );
define( 'AUTH_SALT',        'Ql7x-UW~jj)/J6`^GK8HqHsqCIU^W9]~XfL;zXK~k<;]L<N@q213JCz/3*uR#2g*' );
define( 'SECURE_AUTH_SALT', 'tD00LqmdO}tnFF<nBxUB &bxh$5?6Gk>JvAy2HF%T_5@{D;nh/rmuUpY~d:ub;Ai' );
define( 'LOGGED_IN_SALT',   'K!(!_Bq$3.`A[}Fk84,^;!_~e)T[@eFa;?Ja*oP;*n89NiHUx4{p:RE!hI^neEt]' );
define( 'NONCE_SALT',       'ltz9:5POsY/s` t.c.)GThp:wLRI_D^+/+EG?;4R]^I}QkeY/)Ljd<z[n7x<g)JW' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hb_';

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

