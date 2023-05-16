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
define('DB_NAME', 'fpm.ebrio.groupcd5b51');

/** MySQL database username */
define('DB_USER', 'u8a922b');

/** MySQL database password */
define('DB_PASSWORD', '5mWyzP1w81lH');

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
define('AUTH_KEY',         'VcR(H)nSK(tX3xbI(e6JG^ugEdEMu!zq1hx4tGPSXFe6V!PPSU^7o3S&eXLf6ckv');
define('SECURE_AUTH_KEY',  'WB%Q7A#Q^&g1COC0YrG1PlHy8(vR^j1)HxoDDS4FXD04XdCEQF!%ue%c&zn%eZZA');
define('LOGGED_IN_KEY',    'iUvFPAIuV!VyjKRFnxET19il*zb!xDu1inRB!X1TV)hvrdWQ#51pmBEtOO9^6CLa');
define('NONCE_KEY',        'Y)yp)WJOgCOehVSyaZ@4Ozkh3IQh0DdYR0QMWrZ7SvIV9zr*v5)LbqzasLCn(#06');
define('AUTH_SALT',        '1XqbPHa1*c1&eQ@DrcpX@vtEwSlm4e3DX63r#i4&nu*cxqnPM^qJkrf8tn&%ohMZ');
define('SECURE_AUTH_SALT', 'fupdmy#3Y4mFFwdTh44b%QazHOqYCm4kzKenHp#yuot)oq5V^L^T3kEriVzVHgmx');
define('LOGGED_IN_SALT',   'q(aYQf9Ce)h2JR(dSsRvw6c2P%NWWJri*j45ghOMoTvu9V^3V&s%arhry!qJ6SAe');
define('NONCE_SALT',       '7qRBrJBCey5O(FtV54W@GC7cvBTLW(b8Q3(aOtxobzYF*lBJ47H&Z@Yy5&oj#Gwd');
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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
