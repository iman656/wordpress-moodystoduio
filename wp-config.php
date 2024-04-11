<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'wordpress-moody' );

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
define( 'AUTH_KEY',         'QR#f=nreZWE4qiVYW=TtnMH/;zZ~GA-?9>psJ-XM8qkTgfP4hC=+o3>gU@+`!A51' );
define( 'SECURE_AUTH_KEY',  'WtUr$>7arJUcwJ7:zi;;`shfB;T6Aud.d8krnUWjweB%W&-Hpa;wFRGH4]U8hU4f' );
define( 'LOGGED_IN_KEY',    '9iW*_btK`Qcp0&ew@6W&Pp.?ON/Rw#1xyg)o`d#!wH{1?S(R!mm?]vTJ;&;yxlU/' );
define( 'NONCE_KEY',        '> /sJmcF%[wu`9IRuY%mbtJqea6sJi!hxQX#U!wB@Knnc`tKw9+]]Xu4@ [I-&MA' );
define( 'AUTH_SALT',        'MmZ6I;Qb-rTGv/t}E=a*rd?_)rO/k)]k/kmeO;+?Yg&*_t<jkspY$Tr8&x6`Tl9q' );
define( 'SECURE_AUTH_SALT', '*4^D-h:~KU,h.QdTD@d-JixOASxj|M|kG`)X9amYf8pUMNPE s7Vbo_e9Is{MN6f' );
define( 'LOGGED_IN_SALT',   'm>_2aEg@.F@W%80LU/[j>|G5%:<9]+;xk~(G;[+K1.|KHtJgQyeaU*f(!0ju^.EX' );
define( 'NONCE_SALT',       '8|^^ss#yNU&J=gKGX8tcQ^f}jn*A869zUu[D(ziI~Wz7%g{x`sRH<L/=Bc R%!|<' );

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

