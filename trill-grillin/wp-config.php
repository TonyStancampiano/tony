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
define('DB_NAME', 'burgerdb');

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
define('AUTH_KEY',         'CooDY.Cr@ha[S?mxH:&d:/a8QO+7%jQkI`UF%.P#]y:~Z096O:wt]_!]:RCioyHn');
define('SECURE_AUTH_KEY',  'NLBRcJx#HHfRoC[|{RQi5B<;Ighhz<1-[Ayc|Evw9Q~i&uMH.vDH%{3XAmy(!=wk');
define('LOGGED_IN_KEY',    '&:.P!5($mtl6D$TXY4i83~Da)U<}LaA[.MW5UB=04=VE4RL5&%QEo-Rfx7^^V>!z');
define('NONCE_KEY',        '@YhZ`BX}_Ge!m?Q*6A0ZX?}/SzLY!$0LmL2gHnMqMT{!*&Vl^h`NPp7>N?EbX8G#');
define('AUTH_SALT',        '&pdx=a2s[Aj$JJxKgTAl-)~5nY$zK!NRk+]&tLHx@q{e3B{|-)oNLgVe%g3B9g)B');
define('SECURE_AUTH_SALT', 'z@WG: iX8d[FQ/K*fe,A)~N#}M}|Sj}}j~I6+)CA=5|#tuJ|OhQ9S~y`D =,,~0,');
define('LOGGED_IN_SALT',   'U-`U%%-cStiDt.b/2!G9LgvdG7@X$QZ2kG, S ]y,UQ$a6ZR@aV E4u>%71}y|oD');
define('NONCE_SALT',       'v)%r O?S{BlkW&k_f[;_Q{fY} O^hBR]^fuCELUufc&:)v0@ 5B-p*I*Ca8PZ][c');

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
