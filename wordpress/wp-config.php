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
define( 'DB_NAME', 'projectphp' );

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
define( 'AUTH_KEY',         'hFb:s4w-9dLgi5AJRxiB^]+Sk8[R2ser?Q`1[RUmg,Ir{G(O>M%hE=ZGzShGh5gb' );
define( 'SECURE_AUTH_KEY',  'yn)1nb+p7iCJrADR!8cXoVKm+d}_UHT5<[BX~Pv% (G]#XK#F*tiJFuR7n2LFeke' );
define( 'LOGGED_IN_KEY',    'v(FK55Hqs6-OyJ zcChUEB>k<RtM> Z.eZH)N$`a|yQikD4;~=KR^[Btv(1[fjQE' );
define( 'NONCE_KEY',        '<GFvWn52aV7[V8!X$2q[Y~L5MPXV<wa,>l(^}1x*oz%j3|@yK;m+5o?hLZq5~If-' );
define( 'AUTH_SALT',        'fn((;9.ht>=:ajY]Uw0*/GmP>ima$@8h)6]!845d`s~wR9IZ]15YL%qlW!SPU`cP' );
define( 'SECURE_AUTH_SALT', '<l#I`EwViM;xQF XTUkW]9A^FF1p<0(5*M$D(a,Q{~j2@8`zRw=[n|,k(%TcHdJ-' );
define( 'LOGGED_IN_SALT',   '*d5!}K9TM#t-iq &k4;)>FkiC/,43Y|^>+j&-l}_WDz9>2)Ul0GvK@eZ%1Eyg#JZ' );
define( 'NONCE_SALT',       'F1XW>)jCt[@{g<A uBsWX>]db7t5By9B{@1UL-M0?@6|OW&<CK,;Op-8REE#a!t+' );

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
