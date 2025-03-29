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
define( 'DB_NAME', 'astrology' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'visys@123' );

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
define( 'AUTH_KEY',         '3tT@n5V67>poyu/I;Y7 eO^xk(kqIO(~u^Fe>P_1Y>,I}%i>-BNhTidN^Zo]Q+^~' );
define( 'SECURE_AUTH_KEY',  '>81=O8XhK+$Xd2as;TJDlXrv`HKxJGCc60Cx@xAo6QLcpFv:FjXr;CL2D+!b[E]T' );
define( 'LOGGED_IN_KEY',    '&NitKlU`<slU49q4ILmk+N(R%/]{V0[.lw&+7x6]1{n/9elG[UP1k[I)j8AMNWvO' );
define( 'NONCE_KEY',        'Vd[~YuWG$r@r>]Yocp%j!TlX9`)G1$/sK`%^OJIX$7@kVIIG&ko(i.!mc=L[Ec~&' );
define( 'AUTH_SALT',        'ft$b~+6{vuU*E048I)rFFf?Rz}]L@{Y[~pa.Crph<)i?=XBZkcz|Ik?zzTs!k.V=' );
define( 'SECURE_AUTH_SALT', '} hw{(|BAMIb&q|;#xgS-EuXKxN0gV_8Dg!7rtI)YRNpeM^fs|qz%U&IH1]sCAa^' );
define( 'LOGGED_IN_SALT',   'I|WGL:pCA&l;09JAZ~X}kNf}u||d`lz*3Ukz0)lr_ EoJ&._|S|Sx;{nA4[GEG&B' );
define( 'NONCE_SALT',       'Fcxx:HeqHrGY4T/%e!_Jm#R$dI{G[rDc]tja^1+b8}52zVg(Yqla;n40ufk3O%~b' );

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
