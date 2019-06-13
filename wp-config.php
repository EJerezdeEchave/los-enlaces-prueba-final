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
define( 'DB_NAME', 'ernesto-jerez-pf' );

/** MySQL database username */
define( 'DB_USER', 'ernesto-jerez-pf' );

/** MySQL database password */
define( 'DB_PASSWORD', 'erp13fj' );

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
define( 'AUTH_KEY',         ')K=EY?].y?}f88O{t~c.gZshUC%f.696>5]f`RKt|1-=TC!aE%lW@xbQ{ 5mugpQ' );
define( 'SECURE_AUTH_KEY',  'dEd1-/%AGSNA:uw,5o%W.F20)g|#{H>CTzP;UWBe<Idq+F2T7J|y>)-xg4&Yq}Cl' );
define( 'LOGGED_IN_KEY',    '>R;8_p=dhhP8<O^9c|W]f!,!?}mO@@F=pCV@Ud|kW9u3!`|r%@|F,CM-11f9x]9=' );
define( 'NONCE_KEY',        '#x]sj61KV!b[[x k,dstSiH_L/-wbc/l9Z$1o5yKVGtB2n{V!;Qh:D[#vJ4Ae,Vv' );
define( 'AUTH_SALT',        'r~nq_8vk8G!(zG=wQ,WQf]z8jud{ikaqEIZa=&`emU.M)E9bu~JbBv;%/H6L6RmX' );
define( 'SECURE_AUTH_SALT', '#-!m*+(LzhE1k6[Eu ?d?^92Kt}|)y4AB{ayOL|p/vNrAtiQ{X(aG$0NC5D?c]:&' );
define( 'LOGGED_IN_SALT',   '+vG7A*& YQpQ1.qQ`5uBo;@>j&?G=p]{D{mW:BFNnF]jkF*B1KM4X<bc/8YRH-CJ' );
define( 'NONCE_SALT',       '-E[(Mc~g*xwF>T/Kg;_APO;H%$0-=&Y~DG^Z-O&.yyH1|6BS0vr_Ms WS9|MB6`w' );

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
