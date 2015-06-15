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
define('DB_NAME', 'number_cortex');

/** MySQL database username */
define('DB_USER', 'numbercortex');

/** MySQL database password */
***REMOVED***

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_SITEURL','http://www.numbercortex.com');
define('WP_HOME','http://www.numbercortex.com');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~$M`$8?*vOMUjlxdUuj|^LfSv(_*--(:oGs_u06{k?](pn5]+BsEHZUKzS9tIENt');
define('SECURE_AUTH_KEY',  'W|&yT`UBff!TpYM0o|[ jDcS&w*,bLgCy9{WGl/`~f..*psei4 |)^`2{^,w73F+');
define('LOGGED_IN_KEY',    ')`qPQ$1O{@nB;:S%QG9bSo2@<5_duV:?Sg/tp$W;17-)54IiDXl@7aUq#4U#@cNX');
define('NONCE_KEY',        'AlLLhGB*cb!(`M0y:i IJU|8.:++|Mz$g@gK(-IuO-w~-iLl8w;qm`R5iB{L;hi+');
define('AUTH_SALT',        'c3OL1F37cY!++x#n!eqsH~v6r;@$I4|s(A(8898M>?5)+UeegT2(|!-2k>k.no`{');
define('SECURE_AUTH_SALT', '-`e79kokBlv^6dvl1++$+4B^G)@!p]O`O$1ohX-Lnk[Yq*a30*H}/i/-|.=F9JF-');
define('LOGGED_IN_SALT',   ',$[OTvJx~Lxf^@Uj[# 5S`H-^eu~{40.;T^bm%x(=f/uek|x-+^h)<M,]6+e2m}Z');
define('NONCE_SALT',       'V#*rJ+F;:,2[JI$x`T4S|3tys3ztc~|-yXcb_pQ?xMRlOsJ)sV[!yPqJ:=ECzuO}');

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
