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
define( 'DB_NAME', 'concierge' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'ilJ~ok zy#; %$cB*6B0pB$FN_-`/ELHm%wBHf9jIt+d;r8hzoGIJ 08;OQWZIB.' );
define( 'SECURE_AUTH_KEY',  'mWF?NQnyCXtg7.P]oG]W]^3oW1}>4p73uTl2:nAW@1hTwi;yQMUB`)qYh$_E uVD' );
define( 'LOGGED_IN_KEY',    'Wj2 BpEzftChTgwp*QBjS*Rf!lO^I.}[&%GnbQaR[P=lp%6AuB<,?46dxh-G}5{a' );
define( 'NONCE_KEY',        'n`2UG4Rfu044tG@sliv_mHkEgRm$x)^w7>E^g!7w!,vr*#cIP(I=Wz>$K%Ka#401' );
define( 'AUTH_SALT',        'J#+*tx=Hpt|f`l:(R1}Vh=k$5zkGBl5VpN%dlI`Xg6&E?ui{biU[L3O$_93{i=lI' );
define( 'SECURE_AUTH_SALT', '}j|}f.FC.)t/T5%oeTsNCn4[:8-Ixm_Jpv.o%$XOaBWsqt*JSYPALSv41Hd# Qw4' );
define( 'LOGGED_IN_SALT',   '8o@u1hwOJ/K^6S/@dG#,${Ya9IUDPE]ggTAc_g*9CJ!AYbt& +UmZY{pFI41%>w6' );
define( 'NONCE_SALT',       'vdG!{7qW*16&Bwbrd]! x4gh<Jp@N!z?ZElrED;jt&)|5Zw8os>QZIzFn}XWUwrU' );

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
