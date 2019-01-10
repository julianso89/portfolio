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
define('DB_NAME', 'julianblog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'CDG;2P:PDpUgddXy\'wg?');

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
define('AUTH_KEY',         '*16>Nl])9HYbq[A+<3z-|:b@7GE>@Td@c6t7O(+8M#%STN@rGza_q9I^B}Kz)ec-');
define('SECURE_AUTH_KEY',  '5TRB^pc][V>3>XtUceQIb5Jqbu%[Bf-2x#z4dX7+2Wv>BgZxsse]cpMG-0J2kk2k');
define('LOGGED_IN_KEY',    'P3l5]]~]V M!p~5b@/OP^+V(yxu%OKdU)`3ymT7pFO,ykLsxhWflqQc>cXc1:^{R');
define('NONCE_KEY',        '$F~2bqBXJq<yIBUokqoYjDUR8: J~nHp+P6RnnaZRz/{?/,Y)DALzqqKIpYVIJMX');
define('AUTH_SALT',        'EIQ;X6MDA,@k_1XHEA9xI`jqBj1u4-8cH]Y7h:!Zn:vTQ`;=:tHzOfo:BPoc.0~c');
define('SECURE_AUTH_SALT', 'd)U4zD^DZb9gNUtndCf10LE6Aw^ux61+$QcW;/UW.s10k=w1p=xM(Q7j,d6NR{)o');
define('LOGGED_IN_SALT',   'Fm=k 0c8zX9S&gm{& 6:%0-h`/!B.GD=V<@kNwd[Ae5TfaxNQz)[T5Ss/rJ%Qy~U');
define('NONCE_SALT',       '9e8;zFq(R-ZDqu!0-p.!;/kKety_qxtRlu6p|vZ/qt$YtKZ4k$Sn(T4K$34/E*`;');

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
