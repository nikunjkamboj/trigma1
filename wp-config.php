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
define( 'DB_NAME', 'task' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'EAllk(GQh8G#%gKCs3(Z^vB1Lt4^j(Cd7sHW8+MlJ#:/zrX 4^I)^7cNuYr8GSG4' );
define( 'SECURE_AUTH_KEY',  '9uIIk*Ze:W$dj$k<bsXV-jVt%2hv!d:f/fv`Q{_)~LzEz]%7rRU5-2BZ`O?mz#V0' );
define( 'LOGGED_IN_KEY',    '/alv*yTP|M,||rd/:D9C4yO H^D0THVY3e5#`C7,f>I3/v^+EpUR^xLO%kHL~w3P' );
define( 'NONCE_KEY',        '.5U[UC0=LCHC2r(T4CK6I?N-f,;v,f`#DGHJqgwt{t!ZGSg:U.gcqDwx!Sf=[peW' );
define( 'AUTH_SALT',        '!Pju)#7|S^.n?<p:RM1`bnYHZW,7u(wV2WBJ*Hz&xwrcEm_1NCq8+v@KFSad%/fb' );
define( 'SECURE_AUTH_SALT', ']E9L/CbPXY*!AKMy1/_SKcXh6>yA%,{EzE)|fo]Y(8^Wu8`2v;d)nAM+NN~DM4ec' );
define( 'LOGGED_IN_SALT',   '&@)gG^E-b#hTr9x6:$fx]).n:ncG>azFW(gNR%fiVVI7~F.C0]5CJtX6Bz(2Hy}c' );
define( 'NONCE_SALT',       '{lhh>$LzQC{Y2F!s -eXy[YpX=ay@^Nvx)#%SJ{b*r?#M%1aY.EpQ4S^?q@f)#pS' );

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
