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
define( 'DB_NAME', 'newprojectphp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'A(rN&,}Bw8XI*xNTf3 :@e<V6q(A[ ktBzoS`qin^YiZ0;.!Y&{ZxZkns(_p33#$' );
define( 'SECURE_AUTH_KEY',  'g8i:9[XPBAnyan]01>!SLl MgTPxEo:[9jA1!QE$>aW=jLn)2R}Yyq!3}p@]_*h5' );
define( 'LOGGED_IN_KEY',    'F0oa1kYaXb`[$ ?Xub#ki}!gyfANY=oV)chOay~1w}[8o6wI#X}&7j,/@z4Eg0M1' );
define( 'NONCE_KEY',        '[|q;T}%P?w699 A7Vlod [XFW*og+|UtJ_DhrEnU/B(?^;zlcd%(xbejkkjpq+=;' );
define( 'AUTH_SALT',        ')Td2c%atPIENXzNYh9%={yoG[E$+f;5Yqu?N/Ktyea>])MEJ}i@~Q%@Q$]#C<>+6' );
define( 'SECURE_AUTH_SALT', 'V>/&U;sBa|^AquVP-V[H;#+6rd}&;*0~>{gGpP{GP9-0M(bJIK{A&(rJdu <w{^&' );
define( 'LOGGED_IN_SALT',   'r4o*s%thd,*yrVs{dH#s}{GG@pMCrFyf.*qcOdNa!Y_->[0O9ZDhGh0^$[</#1Qz' );
define( 'NONCE_SALT',       'ph*pSJlCXKU~L8!X<b`o}#1Zsx(Yum|J^Djb7_:.`Q5GD}vk*<s0Ki2>e=IOT,@7' );

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
