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
define( 'DB_NAME', 'wp2cafe' );

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
define( 'AUTH_KEY',         'Ho&Qr$Fv#P1U#nj:=p?YHk2&LRHN7}bO4;w&1l-ft{8$7<kOWFi2F&X!kgZ)!xf:' );
define( 'SECURE_AUTH_KEY',  'Xha8HKH5%Dq0&u4;895yk;ANUYXA`m%4jF9OrX|cL;w4|INE67!oHs)C9xTfpyjF' );
define( 'LOGGED_IN_KEY',    '${:?I).b$AtcBdjp#+:h1]B5+J:&1n|!Lhm-9 OTzQ]#aW Z*z:2R^q<$FdnsXfD' );
define( 'NONCE_KEY',        'VXi&9U+?y-2 .[G9*TJP/_o|J,>t?4t(wOP! Cic1&`z-}j$:k3.I0B*Bh#&mzwu' );
define( 'AUTH_SALT',        '9+(w(%L<quLu[kQxML-kbT_9sjHx{PH_z2hrSdiKPV<e|jV8R{DWC9~u ;ibjkup' );
define( 'SECURE_AUTH_SALT', ',Zz(RwWbXUM<2qd,d;WQKA#b%YdfcOU8AGZo6]9I^(>i9;BrF+VYX~U3M.h,VZeC' );
define( 'LOGGED_IN_SALT',   'Q`<@.!jGWj Nh6fAdlB-K-;W)Qy$;SK6Nbm2C,*::v]YwE.biL-rQVRNJ@B$xqz:' );
define( 'NONCE_SALT',       'G;96m,+~n:G+FDZUcQG:,tt_qE.ZUEp2JR2M`=z9O%k)hVS^eg5cIW=tfA5{V&BL' );

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
