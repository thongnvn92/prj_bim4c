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
define('DB_NAME', 'kientrucnamhai');

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
define('AUTH_KEY',         '8@CJXTBDljHu@=Y.aZ#>E5`<S(cxf#kOZX]!Z#&yPX7vW[dj|8<0!;eh&eyLzL[X');
define('SECURE_AUTH_KEY',  '_17ep9*$xH{K_+*PeL@F6r.40]ms8q-HD!LtQo%JvbS!FrrQ^GR:VyBba#70ZQ?r');
define('LOGGED_IN_KEY',    '$|bF;3EJSy8* dkNG]>~pj 5*[-YM,e43:=!FFOtMswMkL8*tOpS>+Wnp&FDyI.R');
define('NONCE_KEY',        'H#A1NW&a}Qr^^+1;<*A$!=!@gR3X$STDmgDgiUMVC&;!I5 &Cg*ijC!<_^/KH6lq');
define('AUTH_SALT',        'O-_*Q)}6 GPJ&0:aagJLowJAEH~Flp5qL{L0m?N]}^6?&]vQ,-q6@e1qH8#+2^mC');
define('SECURE_AUTH_SALT', '.`O^3,.#Q)aCshs[eJTws//RWj=f76gxUYY^JdK`_tjQJSJQH3m5RX!%WR Nb:el');
define('LOGGED_IN_SALT',   'M[{A{)e;IGWA*e6p5H;0l_IYQW<mUUs[d^3b6k9b!|(Ls(!eO7OWeh,>LVHmAw# ');
define('NONCE_SALT',       'z{U/qY^A1SPTXF44EM}[C!fJn-)^2Dg?cd*I**QsRa&{Z2]Xw6|UVf1Am/v<ij$S');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vf_';

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
