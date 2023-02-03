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
define( 'DB_NAME', 'mj' );

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
define( 'AUTH_KEY',         'GtB }MH>l`fRw1-S0j3ojS;o?+1g+yB6bFX_krw</re/`o 3_ i&Kq`4.c%MMRp#' );
define( 'SECURE_AUTH_KEY',  '}U5;pVmTO/Ar:R1s8tBd3R.cS^HAVN_l~oS|Z_P&-)#[dRDl]Ju:mTwVkG>g&3S2' );
define( 'LOGGED_IN_KEY',    'f1iZkKlWdDjpiuOe!/<F0UF FcG?0c7=~SX@T0}i*O1BXm/f+bXoEGWq^XPM.g<h' );
define( 'NONCE_KEY',        ')~M4=s+o6oxO:[/ A1dDOtbB!izlIoZ/B56K|te}t ^{j> B;9];t%mY.fu9S$}2' );
define( 'AUTH_SALT',        'k.TTs>8d()P&a1SF/nF^,yc8/d7Yk@!cfKVC}lkCCr(Ez<Ss|d<{[wKekDH+2p,S' );
define( 'SECURE_AUTH_SALT', 'n}P5[x!k5Y=dkS2&^e,G6NAT<a7}8NVX+!MHO|?Mq4V)>:+-hiaBc|P<b=nPRAmS' );
define( 'LOGGED_IN_SALT',   'sOn+VOA;@A5R!<:k6Q$|)=^^v-D3QJ^X7XUC:ycYi[+SBm&Jy<6Wnok]7zkOgGEw' );
define( 'NONCE_SALT',       '438:2gD5EFLmdLYumT!GyQ`J}xC3%nbt`7MKmQWH3S>p=B>TQRB!~ixBRAs:i+Y^' );

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
