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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '0987654321@' );

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
define( 'AUTH_KEY',         'aqyRD 9#W5n~dvNk$&qO/9FZiGL1^^cmL3 =HUB?TH_>nDEG.b-E-pU&B:^I*Q*h' );
define( 'SECURE_AUTH_KEY',  '%2XDTpDCwO_ &2[,_kpZKpWralha$@/!?mNum$5x{lOdEzQw(<uPueQ{::N;lUh.' );
define( 'LOGGED_IN_KEY',    'Vw]zK$4[1Pv]A#@ }|?K2J&.NuFzdV=Hvi#20$]a;AtBpOk{Z/c`/MmNL2BO_hm`' );
define( 'NONCE_KEY',        'rM3fW{Ceu6<iG|<s/@3dY-rPAcwecJ;K2Ffxt|sA{R?5O%#8st}p-)hHAsOG|x!d' );
define( 'AUTH_SALT',        '9m:hqR3%X#Jqe~|#PguTE=.w vV1Z0~$6u<8|%4-_zl8|TO<ijPq}wC06kn{.VgO' );
define( 'SECURE_AUTH_SALT', 'v.|}un33/2V+xBm{egN,4qp:t[D)s_^c>PQMyRczFz4$RnYLN?_vKtEesaK:|]b^' );
define( 'LOGGED_IN_SALT',   'pB[%VPQYH`dTNHuUW &sittHn?hvK<@)ZhR8nslRc1JMEbLj)cn?dm3*c:k.X6uK' );
define( 'NONCE_SALT',       'YKecCpqFELze@KbK<[R;2(9j[VZH&%6[~MzTzQ;kCKYlA@gDu%C-~hm5 nrt<1|E' );

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
$table_prefix = 'tp_';

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
