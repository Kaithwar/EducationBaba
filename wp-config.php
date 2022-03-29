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
define( 'DB_NAME', 'smartbazzar_db' );

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
define( 'AUTH_KEY',         '^8OG}oW,awK^*nJBK21YxFiupBZF_9N[ZdMHs^kB-tCWgX&*`sNI{H2i%%94Vj: ' );
define( 'SECURE_AUTH_KEY',  '|Vi1{;cy_j4b<Yw#6+<HCsJOnDcm:ZG[>Bvr _GLBv+hPmKqq2bc4,w6C6>JuwVT' );
define( 'LOGGED_IN_KEY',    'Z?Ye{2^i9%+.7@y3(VZdp$jfU-G1]9sr=-XuVdh$sFZ[8Q#KfJZaWWSYIpdmDkl4' );
define( 'NONCE_KEY',        'F?ANUc(B&whqsjjf4zkjf;=aeXg4scd?aEXQAZYD#E&Prj5{c!~hAqT9[Hq/bU&q' );
define( 'AUTH_SALT',        ' E}<7%o~:PDr#o@.,sIPe&]O{+WlV(&`-q_1+)j].~j$_p,a)6=55zXy!U/r[vTM' );
define( 'SECURE_AUTH_SALT', 'YNecgA(sh}0N}BX?9Mv?eZSuZlLk6(=[F%V0ZGDW`}+k LmGEG*dwm7k~2RsxDL&' );
define( 'LOGGED_IN_SALT',   'e5ij`lCq,<p@~PyPHA^+`;/+So9)`_TGHBW8+eg+G~&C6pH5GG(T[psr<4G]]|(!' );
define( 'NONCE_SALT',       'CiR{|FuX1pYVKel9!(*]lSMILR<!~A;f5(M6IYhw`g99@x)Vpp xh/MS{u(&/:ZC' );

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
