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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '<!A4}!w.aZgh ToGxjKgLERy[?u^|-eV}<;]g/k5QVs10Q4NeUtHVa,l%1=.-Pw_' );
define( 'SECURE_AUTH_KEY',  'J/zj8.D2JZbGXZLP24a~n*7UR1sGpIp?bgv[TZt{NK Kh1q7vHTEAeuy6vLaW7B ' );
define( 'LOGGED_IN_KEY',    'FOQJF3UTO+)ypF(id*QH8n<>< =z @bpDfu05[9$!s3NR~.H_LUEOqL.7>7c9N!_' );
define( 'NONCE_KEY',        'h=1ESOal-%>Ux_C?LSh.M&k*kQb2;QKocJhF9WRL+<jv6)!n^Bis3P`/!UaoP-wa' );
define( 'AUTH_SALT',        '@UL;#lTYNi_ooT37tqN}1*`ld{M<:xOJ51,/RI^ qU$reP%U!uEmw,ru66f1zfFl' );
define( 'SECURE_AUTH_SALT', '+|dwX1i PAx 5+p_,d2I+pU590q>r^Koy`!b_2!bU;8%=y9.x-D-2jc+=_[TJ8w(' );
define( 'LOGGED_IN_SALT',   '6xlttlf+ Hb$ x)Grpe/;XqlxXx$hBB-TR_jK,dm|2yemn)k>Q]?!7NY75el0@Z9' );
define( 'NONCE_SALT',       '#.]dJHIR(Gc!K1Eq_QAfY,5D!p-NBI(BS>&Una6-n3lJy lK;$jJy0P8}cB0K{xt' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */
// define( 'WP_DEBUG_LOG', true );
// define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
