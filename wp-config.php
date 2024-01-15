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
define( 'DB_NAME', 'db_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '200214' );

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
define( 'AUTH_KEY',         'U?+_]TRbnw4sU|tWF*>.x#b )OyA`8XIcF0tcur{D0NUFC{x[Jzt<qh*}NHljyK=' );
define( 'SECURE_AUTH_KEY',  'b9bo|j|HKX&ti4R@-?c)@H?bzxlTaIfp*-v5fmP*%bc4z:Kei>;ir!R4bZ}~)hOn' );
define( 'LOGGED_IN_KEY',    'z:K2(KU4`oF)]}}kIv!1sR X#AagAgqU0squ?67+Yry-J;FiB5`QeLT<<1G:k8O<' );
define( 'NONCE_KEY',        '(A+)ddBOEJ3p@~6%J!m^X^Yfdvse(e.,$.{!N!a>%g7^4G/&a!^H3,E>PD|HXk.d' );
define( 'AUTH_SALT',        '*8*sU3W#Tg~FOBqKnG?kEM+Qm+Z-!z@A$d`5T]If=q=_ao#9rujm!{h4|78V-JI)' );
define( 'SECURE_AUTH_SALT', 'oW_rKt~u*j>4X!xGf68_41,~@oKB8m4s%hz:>,T,%r8XJEJT[eByawW^&(73b5U}' );
define( 'LOGGED_IN_SALT',   'J3y*Z9rF+6K,frAQN+-WX pD|f>4dP!kIZ&y`s:!U7f)ZNZYDhB9h#(g({t~7+Cp' );
define( 'NONCE_SALT',       'y,ri.;CakLTwmAx85r(r ~eGY|`%`3Q!wT<)(0O;cq!h7i!G]{TO& ^Yfm_%m8/i' );

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
