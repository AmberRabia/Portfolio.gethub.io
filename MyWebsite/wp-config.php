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
define( 'DB_NAME', 'MyWebsite' );

/** Database username */
define( 'DB_USER', 'Amberr' );

/** Database password */
define( 'DB_PASSWORD', 'A1234567890@' );

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
define( 'AUTH_KEY',         '2fJRQJ*Blg~K}>>cbD*5U|5al>fQn@T-RdtReF*,{{SH-pvXq7=>Q0~o8N=]pePF' );
define( 'SECURE_AUTH_KEY',  'we`j<22e@eT-p85j>cjg<l[jl@vqLCgoY,R[(/H?nBl*Ff4X$c>O?6,9Dg#UC?_%' );
define( 'LOGGED_IN_KEY',    'r[j4&4{nH_?:x9WyhfY[(0@ifBv+guJMb]yRkz^y`8WcD2|1d0t{rTJM^AnJH!?w' );
define( 'NONCE_KEY',        '8>Qy[P3E3A}Y&_pq(yN~vrW ,]XAnJw]:<iR6:pDk?Y3&=Hyl|y,7.M4NT[O~BV[' );
define( 'AUTH_SALT',        ' y:bTkYv7(e#`#;=ZyeJzcu:BD?|GT0`Bd#.:?ytWWfl*kR(<[}Ye!j{d.M]mr3_' );
define( 'SECURE_AUTH_SALT', 'kMsh(9D`iKpK@P9qLC]b98`E^+Mv$?Cd~:y~p,7a!$&:)w9{/6rkR@$,0$U~&Q+%' );
define( 'LOGGED_IN_SALT',   ';ZcUAoDv|b*wFEmv<cmmYh8AQ&N2=hu1qYLXpK6ta)}[9oFrS-UU=;Y)uXw}b)wJ' );
define( 'NONCE_SALT',       '@k<)S[!1pLab3XLo)|DV{!+VqV)&,z4;wwNK_{W?wDD@ZJ[F!P&6:^7yad>ZFyDS' );

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
