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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'p[tUv$_rp6ONAH{DNe~ EC=&$u(1jK~rE#M*&n 60?Vw.fqes3 M02I^dj+1BA|7' );
define( 'SECURE_AUTH_KEY',  '@a_C%>?6@Z<k1B3Y1x4mV`eV~2B#W5;4CLR(xbe/3v{zNF{/77,1gO]&*=60`vZ;' );
define( 'LOGGED_IN_KEY',    'dvsv3x8: 1>itfrkk2?75]j50OnT_aXj1G?mSo-IjI+fULl^dzpe4Qjn~AcZ.h9 ' );
define( 'NONCE_KEY',        '!xuo|Fo]mM]n_;y`D{dH-l=sGR%H)<co|S:lwH0v;wwZ~_;N&$8(AS=Xe>?}8@>.' );
define( 'AUTH_SALT',        'xCE<|[fK,Bn|#bge0`.vtY0B*vABA17PhNJcc(W4tM4tZo#%]$1 uDtat4#a2)*S' );
define( 'SECURE_AUTH_SALT', '|B|9=qLf_?flmiM:MY^M1{?X8rGvS;Tu-0$2fXwQj6G@hc=TvD6Oi4{-4CXx,m_d' );
define( 'LOGGED_IN_SALT',   'T5cJySXn;T5`K0;cY-Q46rEk!;9}e89kptNtOAiW5XDe-b37yeskAFQz39XDgZ[4' );
define( 'NONCE_SALT',       'oi@F3mku2d8Fk-j5VUMgQiO.N M=XVJr)srR jaG Qvv@(nYJ]%(;n;brJa}&B]5' );

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
