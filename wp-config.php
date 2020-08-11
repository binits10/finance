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
define( 'DB_NAME', 'finance' );

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
define( 'AUTH_KEY',         '{ r9_OV`LT8]#9i#12tzI#}ZapSoT.Ux#q`*JdE~~ej}S!-9/^KP@8`S}Hyh=8qf' );
define( 'SECURE_AUTH_KEY',  'cX-z)j|AD ]V p4Rj_FkbL*SqX=jJ6}vFVLUD~k)%>1l^o#IxZn+da6vwfJpvcM_' );
define( 'LOGGED_IN_KEY',    'O`8B0iaj{y!ev@1~$n<I`hmx~nr58V`Iv=y%:L(qAbIf;5CB=xd7K=I<os?AGb,$' );
define( 'NONCE_KEY',        'A!|K$P:C>PaS+sYZ6(tQnUh5UT9uJB6MfLE@-< UfiFMWlnWY}ob3nIbhvaZCw#u' );
define( 'AUTH_SALT',        '[y[8]%?[`U1E_L$fok+QBXs-%.P:rVa2y$wHfUN?1w#3cDi?r.i~Iu>@{dz2o=$J' );
define( 'SECURE_AUTH_SALT', '(tRnOCU1V?,[UJ2f{agv)hw*9u}(Upn`?e9wy:Cr]8s90T>Dzk*!$r=oik#F$L=K' );
define( 'LOGGED_IN_SALT',   '-R]sVYm!iUHDPkK( oL0b!zt%<:#(~z@LN9)i~!5-DMHfH)K,l[Svv5^=&Q~bzdd' );
define( 'NONCE_SALT',       '$keu4sEphySAN}%|0>Ic|}I,0VlH-<_TF1)O5+1nHe-o?Az@6#B Gf<&d$ ayU;r' );

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
