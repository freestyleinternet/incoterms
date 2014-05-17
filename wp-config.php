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
define('DB_NAME', 'incoterms');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '3j2E{;#wsHy3*?w?F[(gSOPG|r<Zn<oIR7C%V>?K~S&8ag>7KX9FwjkNZZ]nT)G[');
define('SECURE_AUTH_KEY',  'hhy>8TKV.il?;1Ih<baJK@m_eb+?e{F]?m,qoK-Z>H7KWv%tqMHO8]dTO?-:9hjN');
define('LOGGED_IN_KEY',    '1A)ZlgQ!(9&pUvh;Yze5|TE(wST,AV(.2^cmDyTwk6H2MrV?,f(:`e%9SjimPl){');
define('NONCE_KEY',        'e<T39 `15RE*?KX_( !3-2.vhy=0(uHR4r<5LN7I{@#T=yn.KhXoQe^&qC#R*6[L');
define('AUTH_SALT',        'hSch=3]sC@V1jCw*VG=$or%I~c6Q`)G>Wpyy vyd7G[Ulb5}[IjYs;H8KSgS5+3a');
define('SECURE_AUTH_SALT', 'ivL <nN$1;yW_d.Ex~>#d.B3_bo(^BOuzoxF%tBviD-A7^Au~)<_1!_chHG^UB5p');
define('LOGGED_IN_SALT',   'l:!>{CTKS4Kt`n&uu!rSjK+rc2=LwiioXYiEgwzdFFwJ,uW_32AE0/v-S1&GDK<<');
define('NONCE_SALT',       'mqQ|#l;!KHN|9R_grR;(D.CWiO^ZABd*b2k[vdQDzzdYE;TMa2E%}2CJJ#?J+vPs');

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
