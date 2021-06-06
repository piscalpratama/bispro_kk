<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'db_kkif' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4OlH6%OeZu<%$H5nL4!+EL,9TUPmkxKfyL385B>(sGEB$.?7=; }TKR4U{:P T;2' );
define( 'SECURE_AUTH_KEY',  'oZZs&D~AvZ7)h&MU_}i-Um2/LSI4(@Y9Z1O>]*Ex-mdI?-uxP?=yHl4w+O.e^!/V' );
define( 'LOGGED_IN_KEY',    'fRNKLT$Qb18}C,emN45L<m?^KGSXP{`bR*WCOB8Rk*~6Ml|TEiIK,K[Y+dyKOYuL' );
define( 'NONCE_KEY',        ':S!1[@v~9:t;|Ft5CvkoO^u40:m-Y2d)QTfPbAYDdB+/825!T$lQO9Mb?bo93&Ix' );
define( 'AUTH_SALT',        ';-[Zf_xxV:JRc2^bY=Ad^IzoQ64O8V^.O#J{^sF64LniE|^G883@cAMrJz@?7-GN' );
define( 'SECURE_AUTH_SALT', 'Qtef$tUHnurPS#>T&hlM1xhGHUEx;+%PVqmI&-T5l1ObNj/!LTchoT}g^t^<wW!v' );
define( 'LOGGED_IN_SALT',   'Prtj4T^%c^4}O+YKB2~<1E.Xs8xHU[<]`$D@];E{u,{W,1Q`p9h8C0]FrbecYYWe' );
define( 'NONCE_SALT',       '=9e$m_<r@Sm=BJ`L;444@l6kE7qm+P-qFElc&2/t5#`ilW:Pa:Nz3UANf-=>ut!^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
