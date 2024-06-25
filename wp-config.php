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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         'Ac kG:+D-$[*Zsn5Pa@0m^<`Sn1_:bT,V|?ESKzt:h_gd.j#5X2WNwh:i.8d%,j(' );
define( 'SECURE_AUTH_KEY',  'Z!Ow {YU+FCE#xXYV`l@+vVR3<@pqe#>UsSdj[>}W)p?5s]dm7^mvfb<T;(^85P8' );
define( 'LOGGED_IN_KEY',    'P0t>-M710kk|3K1%Xf@*2x)>/lKb6X{j8J2Ue+$.9 su8xUG0U[_+b{&N|w3j0mQ' );
define( 'NONCE_KEY',        'zLGru8g-eD1jGro>BU0HSS=GWgaEiR+,lC=>TWpwxx]/Qxj~Jy%!C:db`~5<)Pp@' );
define( 'AUTH_SALT',        'K`?^Sqi9+EMpp4Cpc*tP)OFDHLr;NpHhcY] tf~5Po:MN3m6P1Wa3(_%B+a:@tCT' );
define( 'SECURE_AUTH_SALT', 'KbWb[/O,f0-JpeA@).9`s}4W.apQ$:{1h8;%.%05m+FLJD55Jdq4Jcd@zsy5w>s0' );
define( 'LOGGED_IN_SALT',   '}r`cZs]vIb+2SMvcesHbs~~Lxx%eV!*}![{h+cIa+n>8|Ah_3~r[kIdtn4!WL[{v' );
define( 'NONCE_SALT',       'jDLDTIvw]|h.N*MGpM1#j2oP%BMvk;zY_9*Kt]TM4ex8W$KM(I{H[XG2JX8V!-BZ' );

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
