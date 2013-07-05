<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'newdb');

/** MySQL database username */
define('DB_USER', 'newuser');

/** MySQL database password */
define('DB_PASSWORD', 'newpassword');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '00qjY[4:%&&OBjL4v`uI._ruC$b ~XKC`3pzn#swd2jl`oh%>|?CCc2~^-#5u==_');
define('SECURE_AUTH_KEY',  '2endDE0<Ou->UBNn8)bT}Y<{[`S!I+@_XJS]01xTdtHi7:?*)+24U2_05!>GK4O(');
define('LOGGED_IN_KEY',    '44k}a_T3q:iBg=!IluPAu]bxa&chh~7)>S57oB-0>iX`pL1cyODHcR{I[g<U$]36');
define('NONCE_KEY',        'cpqb!(2_w|&aX }l^HPsgSf4u9N<V.ro(O_a7-5dLcUz|M]BPR)G$5J=u4.kB?L}');
define('AUTH_SALT',        'LcF2nE_-5p2G#h^a~?>!,3mm?|0(Q9g4Ft#17yuT)X B!FES#[E1ikCl`*0AV0+o');
define('SECURE_AUTH_SALT', 'z3hHlWYm/7-W]cNN{2qeZ7l?nf+qJvVp#uY|Lm2j<6Zn<=xLsLY_~$?HV$n/xwdO');
define('LOGGED_IN_SALT',   '[p>d~&ND:<%1KS>`AB%-.$%`N*C(5#k.4Gt#j1REB; ^_>f|gI|YIM[RTNnb`Bdp');
define('NONCE_SALT',       ':&RI]%%?}GXKSlfH!G%ITC<`a@qze+,j@E2Jps.M/nlUojsspXdN.[#G!X l/-UH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define( 'WPLANG', 'ar' );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
