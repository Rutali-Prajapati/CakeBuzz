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
define( 'DB_NAME', 'waffOcakes' );

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
define( 'AUTH_KEY',         '0%cc/1)Tv#v{EqWTY&QwW$ke,B82m!ScC|p@Yxt2r%:M,?W8ZaJEH4zi=l7K*}p>' );
define( 'SECURE_AUTH_KEY',  '?@,4&]9y*u=V)GdG[tghT{O>PRNFCtzaojtNqdvhM5`ZFx4EKDV2kg2UV`HHFTI1' );
define( 'LOGGED_IN_KEY',    '}1xG?gVXy`>6~|Wfp&qE9@ffm|> %cPwa?,M/}MYhz8CXxWu3ER5bKA l~Lqu{-.' );
define( 'NONCE_KEY',        '}/q,<5qc31L>gQp)Yjz2ix>b8!c1e^IcJlG#6&-e<TJ+hYKxw|A]i 8(:Kg~ja0s' );
define( 'AUTH_SALT',        '#|&l]Q>eOce:)uU$Kit8DH;r9qyE:]!sQW`])yow~{;WE/;0:obSb?Y0Pm)OJ=jH' );
define( 'SECURE_AUTH_SALT', 'OBRWwZ|(xu%{I2.LZN+[`UO@:I|n058wHYsE`L-TLt5_n!5V;yD+Kpf1^Rv}w4xr' );
define( 'LOGGED_IN_SALT',   '9:6C84^iBdc5R5 aa/&oRtnX#gMc}#_hHM-UGo*m94M8MUInH`fu^di@gSd9uCG=' );
define( 'NONCE_SALT',       'Br!k=nKN4d!l=7$-RMr`9U>;qF8Wv),uTv@)j@TZx9B=>wwL[$_7WKBuzIjmA4w|' );

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
