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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ORecettes' );

/** MySQL database username */
define( 'DB_USER', 'ORecettes' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ORecettes' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Cetpx%DVD*3QQ]D4E3J-{/6h^iZTcUFri5y`%3A~rjGo{#QW.9U[{tQ>KB0A/5n!' );
define( 'SECURE_AUTH_KEY',  '@0r]_L7KCc0m<_e_ORzZki]/nS9M8uL*?|Dro^4H]kgkSK}7!;@{_K/R1KvWySOW' );
define( 'LOGGED_IN_KEY',    'Tsd*d.Z3H~t`FX,mb3]qc)z{vH~1o!uF-6z* ir/Z4B;o9NCeVN}n,a}xb(4c:?4' );
define( 'NONCE_KEY',        '{C a+Rij8D@{U&kAWxk]ig[3u$XHKk*rJ /?v@bcdsh!>;Zt-qS|ma%KTtvbjCv7' );
define( 'AUTH_SALT',        ',@X+emC/S=K[$*y}G7jAmsG{[O1GYH=:feW?J<[%Y4CTzyan4R-?JC3$<#]FE!zL' );
define( 'SECURE_AUTH_SALT', '`v*d4FbSj9.q+xaZIMH2#E<aS:}NKJE(Lz7f`b_[QIQL;u]wWHHTc:nm.9J5Tx&=' );
define( 'LOGGED_IN_SALT',   'g4B-hXPAHy-De2_?S&8.mbX$4*(vN&ANBG(SD,/ia7s.f(8yF`}NK*>k@srnwnTq' );
define( 'NONCE_SALT',       'aEY3|<j =:%W!q)8RWQ`~_kIQ_$M8-LER,Ti(36!P204vu-M0Rt] bbf7<;uD??k' );

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

/* ajout de la traduction au site */
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
