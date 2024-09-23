<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u610243785_QTzh3' );

/** Database username */
define( 'DB_USER', 'u610243785_XPdMF' );

/** Database password */
define( 'DB_PASSWORD', 'zxYYXXCv1p' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '|c[sq<.XSI_~2G+6MkT=ACFo_fV_mG.J^5/o$u0SjP4Rb9Yu7p!/zDExmP=aA%[ ' );
define( 'SECURE_AUTH_KEY',   'yaneN;IEB_b=57n%?N|o-1(W@{F[)|QG{rxI3IMJTjdH8),uT08WR@wi:SJz >Mn' );
define( 'LOGGED_IN_KEY',     'sST*-5>`EaZBHhZm^=)Bpv<!4}?oMrtmc<.4/bX@tihTYpWkO|aMH^>5T DIVvkk' );
define( 'NONCE_KEY',         'Xqah<9nP/(w|bpNH77ljxg:j.ZlfxGZ5ViFj7b@/(Vjr>ZH>a49Dzeb4W+-!!0;]' );
define( 'AUTH_SALT',         '1UWQyn=0qLr>)ZOU j`^y!{2#MQ3KBYxR#=ddr3C,L^Sx$4a/h*Zs,3+QeIjTMdk' );
define( 'SECURE_AUTH_SALT',  '05*7t+L][4j*zd*m~Mp.dAw=%$i6~V-Kwt|f&)yw!(G`MA],5[=)VWL_s>H&Kkg~' );
define( 'LOGGED_IN_SALT',    'af?x_4w6mCq(GKUgca81qMJ>{}ux{BDB`aIm^[iN.CiHBbkp#<V$p&PvX+/)sLU(' );
define( 'NONCE_SALT',        'N H#B#2I/Tu(UX)U#@NDDPP:t~go#V{y?70:[_a+Dhlsm0pBVF._)A{S*mA7uz)s' );
define( 'WP_CACHE_KEY_SALT', '2r&z`s.c0D/Eu,;oX7 %K]:bZ=|k9p%OCkzOUOYW4mznWlR2AL!CIEAmEtdNlhf;' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
