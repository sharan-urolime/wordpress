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
define( 'DB_NAME', 'wordpress1' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin#321' );

/** MySQL hostname */
define( 'DB_HOST', 'wordpress1.cltdtugpj88s.us-east-2.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'tZq#Lf$uS&.dMqv:#MK}+[ramzR`x%G;#vAwMb7y+|! <D8Xdf/sDUC]fh=.&{1]' );
define( 'SECURE_AUTH_KEY',  'r_x24H)wE^KOis;o$Ufe:XBa_*g6#@gFAGg4 8ka/%f6zIvZCQ!pdFFo`ZlZ3&os' );
define( 'LOGGED_IN_KEY',    ')haB0~DAn/>A^bODHz@:qx%^?Xw9(.Dffjxx@Dp]O!-2*cMH#P<,dOT!]I4OjeS-' );
define( 'NONCE_KEY',        'B/_2RK92[!E 02.+]^}MVmk64STd/_J@Vr<jf&z,Mj/^e1pPp3?8$[T($gGWp(x/' );
define( 'AUTH_SALT',        'XN&|5/P)R;YeR+zr 7AQB*T?AUR$hVhpMKB;}8uRE%ZV B_4&uVBqX)Ls?^caVoQ' );
define( 'SECURE_AUTH_SALT', 'a21n0xj?oarrjLtS8cuS$I}jmvF?JFZK ^cM;(,G1X<izLY-pNPU)67d=XP5,BT.' );
define( 'LOGGED_IN_SALT',   'av$C*,iH?*6%ckHtw&!wF>unX,4`BDFH+9DS{o;tRO.iTL9B,VRCzhSx/=I7@k)P' );
define( 'NONCE_SALT',       'jNC&q}*g%Tv8>W57?}aZT3+DR~*I`Sgu`b{}eki:;3u2du.;D8lXRp=B?6rLbZ;2' );

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
