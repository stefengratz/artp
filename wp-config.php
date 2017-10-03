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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/admin/web/artpuzzle.vn/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'admin_artpuzzle');

/** MySQL database username */
define('DB_USER', 'admin_artpuzzle');

/** MySQL database password */
define('DB_PASSWORD', 'QdiFlMGwEX');

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
define('AUTH_KEY',         '<WsCKy;1AlB7T,W}l_:d}PcZZ|v1|8E5`t))69{E0H3yoZA+by%dAZnaC*A6`6V-');
define('SECURE_AUTH_KEY',  ']bMP8TPbx_~A74Z.F.UTpL:2) g$ |!:BP,Nmd@HdLU]s!<h~{#G+U9DSTG9G5L@');
define('LOGGED_IN_KEY',    '-C!AIW:_-dc:&#Y$]W0C]-_ Qzm<!.A15m?p8(7?wIjY/8pz}P&>qqdvTeE-|||[');
define('NONCE_KEY',        '9OnI^J vq=ElA?N-dhy$bif+1? `bh.k<`aJLUZ+E4peJ=xix%Iinl*K1sR6ekk8');
define('AUTH_SALT',        '0C.mPH2s(|pVUj.l:$)++-Xzxu3E-*,J;Ke)%G,VY7U68df-Rz&_rX{(^p#P:d=`');
define('SECURE_AUTH_SALT', '42WqvA)S?q-V_^sO|4EVu:U[(% |QoiSFqTje`M4Q69!o+F[)k{:g)x0{+Jm|~Pn');
define('LOGGED_IN_SALT',   'P^OE!II2ij<7$va^chmdkrom.c2iw_Z IEIZ#3a&*R@8T&u<{I+TykG$v+$aA!A:');
define('NONCE_SALT',       'ys_uH2Q[R.$fmG-prO;+_DAPEe@gM@+]4!U kjd-cIe-CVJ-gw:7q}-@ZyH+Ru?S');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ap_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
