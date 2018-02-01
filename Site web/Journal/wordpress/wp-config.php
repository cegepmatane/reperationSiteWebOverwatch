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
define('DB_NAME', 'overwatch');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '!DW&?(R.&Zo^hW>,@Rx.]sFGWfF11,(;(6knN]Ttzn&Abs:ezD||5$D}w.a=+w5Q');
define('SECURE_AUTH_KEY',  'bEed:#XQ</x-Go?@Ql3R51lON7%$oT1!b!,#abMhvu=1Cs:GB}!lJ(5CG/?|ZE26');
define('LOGGED_IN_KEY',    'PR+yt%?d6@9T^e^%_1%QYZd1R!//@y&gx3JTANTDy1%Rc;A9((ijR+>[O} Qib`A');
define('NONCE_KEY',        ';}_)PnlZ?B9j[?Q)Je1|% 2Af{bDF-[CfA;T>H%nT3,3g4cgD%Ec)mP|q|]<`b*v');
define('AUTH_SALT',        'T?_5m${A`Laz_p06YDa[>m,5U+ES?$%=K*N]O88+haWH <xQuKA>f o/ t^;RaSL');
define('SECURE_AUTH_SALT', '4Y8;^hXDOagp)A<wdV$a]9?,M}mui};KjTpAsU283${)R!q`hOfc}zeT!)#ZNyHB');
define('LOGGED_IN_SALT',   'CnGbPoS,)]4(n!|+KyQ!7Y4hFueBTOyl4#NVtF766QxdEbr_xOz)m$B8M?w+TtZ<');
define('NONCE_SALT',       '%m4$><Rp(Ui42i/Sk}7mNa)g^Wn`%1&z-YZZg%Dr,YfG1iQCBT-U>zt&7vIe3B-h');

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
