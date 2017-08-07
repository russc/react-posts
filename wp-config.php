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
define('DB_NAME', 'WP_database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '3EziY=]+YQs*[oBGN`aTw:]zE9-&+fMKtvG0TnXM<YkNWH#8 ~dKw_|YDfbfww!A');
define('SECURE_AUTH_KEY',  'soue.aup@|p*}FMZIUTW02xk#r;_g:e(SyI9xo{;Ume2!cGze,Q*bTi6PK>e7x1B');
define('LOGGED_IN_KEY',    '!A[]C:XycRVCTWe)7NW9>8.SP{i||HWQTpW;&bYcqkceJ#mJX7t`SC2PJ3J4X AV');
define('NONCE_KEY',        '^enbub4;$**lTRR0VC4T<5vWH=l>zZ*^UPq>;PoJg@*0(O 5`ME@WG^=nVDE*m+N');
define('AUTH_SALT',        'q/w`$>:0hdrrB{JO&i< 9UWQ.ucjW9g#|GdEuV1PLK[oX!i,}OV.%g4X5}twL7?/');
define('SECURE_AUTH_SALT', 'NMN^?*<C7sd0CrE{@IRrJf..wi2(m{VP{jtY`jC)K!IwOT-~%0<URqA&H4|Q:Hft');
define('LOGGED_IN_SALT',   'v:NTt)U3%@N!c%EZk,&ByTrubu|> 7[~w9j63G(?>hUvV9y>- eDw`l2MA/*zgA}');
define('NONCE_SALT',       'L+JZT7GmbpoqNX`[5-NVbt(Os~{}Qgb{<@~N]ny$Cz2Y=fx&[?C-T>3ZRUBNCBgR');

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
