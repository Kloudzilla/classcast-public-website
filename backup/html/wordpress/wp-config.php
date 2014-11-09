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

// ** Classcast Environment Settings ** //

/** Environment Name (DEVELOPMENT, STAGING, PRODUCTION) */
define('CC_ENVIRONMENT', 'PRODUCTION');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db160366_classcast_wordpress');

/** MySQL database username */
define('DB_USER', 'db160366_classca');

/** MySQL database password */
define('DB_PASSWORD', 'J77xFE#K');

/** MySQL hostname */
define('DB_HOST', 'internal-db.s160366.gridserver.com');

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
define('AUTH_KEY',         '(u=t]26%-IKUJ-;_re;!N_W~t+uC@oYM8U]rP%!EO46c`cKeH$NB |2}-FkI_#<W');
define('SECURE_AUTH_KEY',  '#B#q@ZGB1FDI*3;aeyWny0cu)We7SC>I#~zpWe(  buAV-|GATg$bmx~h/zt{:[E');
define('LOGGED_IN_KEY',    '?@jpR#pl+HyEQ.$JM/7(+,RPH@y/kHBlj`vCZ+5.+j+f-U1CKnRP_#n`0T+z{Lf+');
define('NONCE_KEY',        't:%2 !e~:EWhVLia6bA+!H$udOn|GOLwfx|}^YYy9My}&r.HwWpCLSsLk;yi)::r');
define('AUTH_SALT',        'WP,Nv;%VhvT*o}8^X4wxK]C`kw8fg~&4M:LSOkU,=KP.5NxIHxY`@;7 _,2-l|dN');
define('SECURE_AUTH_SALT', 'mrpFu96-o9bQ5]!kye;o<6+_>/WGb,d7?G]!Dn7h+-zeS6~o:Y *pX8H,C[7)xd*');
define('LOGGED_IN_SALT',   'A^6BvG|8p=j`T!I|CqL=z?[HEcu8[ZHiv=luXsY-[)y{GjuBqSr/u%LIBIt+QZ4+');
define('NONCE_SALT',       'G<-EkJAn|@qVY5Q|LqPnZQ{]s|}-Ch%?[a-v8wsSw/3@bt[)!/7Sw/v`ay7u{w1x');

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

