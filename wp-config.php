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
define('DB_NAME', 'bonniedoontemplate');

/** MySQL database username */
define('DB_USER', 'bonniedoon');

/** MySQL database password */
define('DB_PASSWORD', 'bonn918273');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pP# pKj ao5H;V|fr|uaS]4oLu}?@4}PcTQxBZE$:h<B=#E;iNtqj_U](p|$jO7K');
define('SECURE_AUTH_KEY',  'SbpN[p=Q*iG>,EG?SuxZp%3WO.GpJK494j~w*K*UjRTxf=UJ#=I,z!Ws;G^/^9gq');
define('LOGGED_IN_KEY',    ':KXm#4(,*4A.yYtuGS@Fmy{HfT,MxUWg7-pDBZm5yCl{ t(7=?:Wn_qR#]g88G-g');
define('NONCE_KEY',        'yc%[lqHE]GO$Re>%!v(8({3QeoWZ_5tb qC@D0[Hr.=mR^cw~)ipE0^G<`=.kxf1');
define('AUTH_SALT',        'n)07|I*]?xf~^87{tX@pu!k241E,X=gr49uUS.vsz:}exA^];gnhWkqy.yW %8rb');
define('SECURE_AUTH_SALT', '.8q&:w9_C|q1XkK}Sz*3~SQ,&G%Aao:&3lJQ%x +~KI6DtIDY9~b^h4h^[tso`tq');
define('LOGGED_IN_SALT',   'fueMosKY^8txUlt1q?Kl^,>{+c-UfvZfn`vq5hPSYwvFQeb?XbPS+Ar?U<F.b[,~');
define('NONCE_SALT',       'r~;a:!aR!vGrLGqu8C(<CK^5.?V;c(c4XH=hYWbU)z*>Ru}])tIexWkD+5hA~cJs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
