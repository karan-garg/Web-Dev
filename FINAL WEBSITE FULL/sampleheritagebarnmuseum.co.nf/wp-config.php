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
define('DB_NAME', '1605478_4609');

/** MySQL database username */
define('DB_USER', '1605478_4609');

/** MySQL database password */
define('DB_PASSWORD', '044bcb');

/** MySQL hostname */
define('DB_HOST', 'fdb7.runhosting.com');

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
define('AUTH_KEY',         '~An2JU/&4reBjC-tCrNu{:prD7rE~Hr0RBiZL;Y~;Od/agO;E_`,0/Tn`Gp? Fh!');
define('SECURE_AUTH_KEY',  't|J(nZc[5>:V*@5-9]/<JHd q>:f?d7Qgn]*@Tbu%ZF*w|bkvzlIa/c2CH%=H;&g');
define('LOGGED_IN_KEY',    '4Rh<}|-qrOR~LV:A|&|1Cm(v^RJ|Vij<JuO#sg,9,Tlb:]9M]=lqedrs:B^B_T6s');
define('NONCE_KEY',        '9{f$G,k<23j+ qwNQtQP+~kIm8k2`Z2[0o0zWm=g3}9Xf2<;@,agh5mtL,VrFfkT');
define('AUTH_SALT',        'dD|-&S{{GZ@1X>;=}6)RYnW)=ovv_ u.Cx1AP0?-Gom(Z @9+)`pw*/!wUwoTboF');
define('SECURE_AUTH_SALT', 'kv;P{Ov@Nap-r`GzoT`Nq#f3s~{IVbB$j)M[s%/E`cg! !LOs;{Z;hO9`dl2w:iU');
define('LOGGED_IN_SALT',   'QtfCH8hIFSwdDcIKHY^6Rnn.DZG-u-]tSvZobPkjEeK@kF(,HJ?>qe-UbY-}qj<q');
define('NONCE_SALT',       'rVCoK(|?&=(0KSv[<ZViscQ_(fy0>OD^dUG;+zzW--B9[JHY8RvI.(xj!b#1<Do*');

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
define('WPLANG', '');

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
