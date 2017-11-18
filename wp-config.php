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
define('DB_NAME', 'blog');

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
define('AUTH_KEY',         'GxPii9b;9D7#vYJLe%m*~L_9.l&oUS$;Fr-0u e[`TC/)(y&Q|Tx10-igBL1b8 J');
define('SECURE_AUTH_KEY',  'M=SH<H0!E6vvfSY: lnK*>r$7WB_q[mV7Y5Wj$(ITxZizq_rf>d[m}Ak39DM0jT ');
define('LOGGED_IN_KEY',    '4s@}Ry7^q?xF~tp)/1na|AH%KW|~_IL[Ht{7>rD[/Q.qmkd7ESgn2H.CSV{}[m%M');
define('NONCE_KEY',        '`z*`?O/`bYTEY0eY!^W:iZfzGRoxaUZF{72,gedt~^qXZJrSk;5G`bE;S=S?2FiZ');
define('AUTH_SALT',        '%;M+izdf|q^X)5Js&amdyx<`GaEQV8?ACd.m8<=$=F)/9yCx,z_82>!78?D#L>%*');
define('SECURE_AUTH_SALT', '8Y~HU?pvA4/4I3U08WY~Ld@Pupxl?A}i/_=CS+j -0.yW1%G8>;*E3XfZ&Uz0.yG');
define('LOGGED_IN_SALT',   'zA:}X^8qr#bkg%:(I0o%k[mQX|E8%VLrw+%#w35ov:zEgDXIMIu{SvtNH_hD =!X');
define('NONCE_SALT',       '<x)3EdJ4.ZLkkVR}Otvv 4KZP7.`9MzL8Hf;90lLp_Ve]6Dw&HQv+&cY0!AAtr#1');

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
