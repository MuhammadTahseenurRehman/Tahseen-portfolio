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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tahseen-portfolio_db' );

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
define( 'AUTH_KEY',         '51G>sxEgTuKRnM[oi(!477^]a(*$c;}fE[D70^8B6n|T^;g3ck<:L^GKI.tQo%sp' );
define( 'SECURE_AUTH_KEY',  'V3:Aw$e#r<cY!miJZvdEYkD?NfFNUF&KDW79UkV-.#MBbbP@,kld1r1*l9M6jS*s' );
define( 'LOGGED_IN_KEY',    'pS<O8t8Nvr.Unawg-A*xc|`!5J.wmHctR,;|_]AD?lug_kX0}^Uc8R0o%hBN$3F3' );
define( 'NONCE_KEY',        'DRkxtzC3<gH#L8Zd6bT9~3$|n;y~i.M#c1V{X9ke?vthX GkQq%P-/ 3(@G~uek<' );
define( 'AUTH_SALT',        '3K>Z%e!Rf,^9v*9,&rFUVo$Nz@kn[)G`<[{5KQm6GN,]ImToO>u>O425$o2C~P-s' );
define( 'SECURE_AUTH_SALT', ';}2S7jD[Jy)z5JTkml%Gc*uu<qA7k&oOd|7uC02=b-$TTj^eXZETW3O0`9lZm_M+' );
define( 'LOGGED_IN_SALT',   'n~Qtzd&d,:`#K:#_?rcB=:R*GeXuis[s?T7?z$e!9A:D|aa1v9v04>y9IplS+<@P' );
define( 'NONCE_SALT',       'Vcyq$~Pcbw7p&`T%C.s_2X-_xCa1@6#8k;YnbKu]ltdQu,%Tz2pe;2aW(Kr;89)L' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
