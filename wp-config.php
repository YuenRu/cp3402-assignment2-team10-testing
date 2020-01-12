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
define( 'DB_NAME', 'database_cms' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'thong_12092000' );

/** MySQL hostname */
define( 'DB_HOST', 'database-cms.cguny8ss7nh0.us-east-1.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '5u%g&f,vb2uhUvR?5vy+LX$/%j$x$3_0`|~5  ^i?(iE0j(C~_Z?/.6K9|UxdPMG' );
define( 'SECURE_AUTH_KEY',   'x<<h;|n#uNr9&N#Z/(81!W!F^kr%e(xZDgSG45^PcNv[q@nCEkA+Q=fgd{WT4niJ' );
define( 'LOGGED_IN_KEY',     '(YT7T^Ti?#r~wF@:{P.nV~b!+OeXZ<q?E^qef?B_53wWrEh$s{ImXr)Yfv>eNK9k' );
define( 'NONCE_KEY',         '`iS vE>/cxE.m)Nb/{<AnF %(KlfjWOoDdt~q%]xa>d*S[[c07w0y)L}eguavNW|' );
define( 'AUTH_SALT',         'DHYfCLhh1fgi(%M[XWe@qbpP}+-E/u)hP,VZ-btC^Ub1JKBq$,A0^68J+|El)zR<' );
define( 'SECURE_AUTH_SALT',  '%K6zUpI16R.#YQ6iu7>{-,N[?y,bYV]`~!;%U}&37jyH%DXpT6F8A1Mkkf|W9(:b' );
define( 'LOGGED_IN_SALT',    '`#A^V{;ab_LXM0]^{4wW*>KwcKr9P/g{28?NGeb[16l|:(]/gED=SDLSM:_?Qm6E' );
define( 'NONCE_SALT',        'EAM kXpLbe# 1!Wrj<T*C37ZgGP/A.g Vv+Q.DffoWKpuK4ekd#ANj,vK-#oa>^;' );
define( 'WP_CACHE_KEY_SALT', 'BS&HV@P&L+n|A$D>vels2tmlQR8$w q<o5)s-.3~&2,$2p5rdcbq>v@(| R%[t;V' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
