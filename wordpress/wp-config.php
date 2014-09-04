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
define('DB_NAME', 'classcast_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ':WmF:TrYI3(cfVdG+mfygOcb`<&B/?E%-X-9O@_0dVs#pkUwr~|>P!vYLkaw-m~=');
define('SECURE_AUTH_KEY',  'VeYojKW$B|CNX&W.8hK5fkQ>Z/sT&RHUiqa~%81UO|?R%(w`[>$NH3tm-P 4I`#P');
define('LOGGED_IN_KEY',    '6V~$t,:jW#l^9/Qd%-z(^Fr^c<AUj(G|s P-IxR-Spjym/u/$u?IRy~+z74Z(=lp');
define('NONCE_KEY',        'wa]Y)>F@}Wu<QM|f-%~#@-/>(.PwbpY_5{,OD_iP^y8QYL=$n)p7@xPIvB9K~v+.');
define('AUTH_SALT',        'nbS=7p10+j1wx7ET[b&rt); )Jhw#7j$plH+OJp,[-|fhy3Lfs>edCCz`RFp7A|v');
define('SECURE_AUTH_SALT', '&fFj[-ZW<.UJLc/`E->CwB}n%JrTyezn$+1>6r6gP{$aX8_V$~KNW>^_GC|>Avvq');
define('LOGGED_IN_SALT',   '}TMw(8-*esb wQe^TkfZupxx%cooKF+;1V|aE?XMfXO2fyfA9&s8rKRP0cC4#uj]');
define('NONCE_SALT',       '=|_V:)]+<^$fm)=mV,0hq>N;0w-hu:k0CQ#.ZiFPqx4jyXyCL#uk~gCK)dDf@dGc');

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
