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
define( 'DB_NAME', 'acadexchange' );

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
define( 'AUTH_KEY',         'UJY Gvp2fqKCNZ8i~#a-X8~bJ)lp4_USB !aYvr3g|BG_#GX~$bwZw9[Lfz:RMR*' );
define( 'SECURE_AUTH_KEY',  '&e/VbjX[x<z-+_}C)cswq+M}JdXWG`%~&{1U#hZLuPEXpw5Yqrk&&/LyZo:<Zp5X' );
define( 'LOGGED_IN_KEY',    ';ZXbmJ3#$C5dv?r59|ktKhyxg.`/mYr;@Ol! ji-a>_5w,x/?AdhL(n=y?j`LQc&' );
define( 'NONCE_KEY',        ':`ih_.~7|V9nEzZ|.eS:+R4m,c$yeKX#U{;Dx6C^W9QI.oT%~,04Nj$jZo{z7auy' );
define( 'AUTH_SALT',        'B!>>q/3AD`hRk~CW^6whTECdMeh;=iC5<e&!MO/96FB<AVa`E#@X~Pmtg9dK{e~v' );
define( 'SECURE_AUTH_SALT', 'y16{Cg%A,YsnzC*|Ubn#`2.3`E?_/+B9Ye3h[&,(U:K$?)MwFh;{eXVJOQ.xQZR#' );
define( 'LOGGED_IN_SALT',   ';&U4,%}n`.My<a!ml)kNiYBDm?Qa?sZD8)TCod>)Q*FyEgG.fxw[N&KRGT%6KS8B' );
define( 'NONCE_SALT',       'vDmfcd2n&&e0YJp;2%U)-utI6Y1Pp+n^:4-/iI|<hIMw]TjuP J9vG%RqA+Stgf>' );

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
