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
define('DB_NAME', 'patrocinio');

/** MySQL database username */
define('DB_USER', 'patrocinio');

/** MySQL database password */
define('DB_PASSWORD', 'TxzNw4fb');

/** MySQL hostname */
define('DB_HOST', 'mysql01.patrocinio.net.br');

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
define('AUTH_KEY',         'hAg-Jh]{V++] K+GyprQq4n($#J!Ib;gb{B-;:-:QDZ.Z%PyvZ/wv3k U3<L^7jc');
define('SECURE_AUTH_KEY',  '%O5VA,u[IF+9-Sn.|{6+VqhqVEyn[`9+4u)2wqTl]-^tOkNbP=1/% imT2>42@ZG');
define('LOGGED_IN_KEY',    'KxML?%c:*iNd-V._7Od,Z[qbR%;Z#uuu]h$9c&ks@|uuDLE rFxhS|$6lRzP$@[Z');
define('NONCE_KEY',        'n^c3s%UQ+pw3`mpw_KcsIav&+ !uApm4UfDsIGLR4U^7+R[dbb{tUb0m+;RR/2uN');
define('AUTH_SALT',        'J&qhexGw_biS]%{aS{ze(MA|*2(Cn)#D@6y.5rKRk$[@~W3+|iJisaA)nXW5V}MK');
define('SECURE_AUTH_SALT', '$^1tZY[b/!+y*dc% EgX(0zQ#1]{%yFsy_JTi8-_<{^,^R;}@lS^%2|j;h%u#@so');
define('LOGGED_IN_SALT',   'L#.O&3,+($.b}&>;OTI%_{{~x/>_p||R*8bgCR.<BWNv,WI)Xq mE^:X080|-(+Z');
define('NONCE_SALT',       'V|:T)c?-Twm9fGHwHxeG%ofG}/FSoJ*IKV^bsCwPLrJZT6q8hEpjJTV+PD=|H])N');

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
