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
define('DB_NAME', 'a_test_db');

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
define('AUTH_KEY',         'Ra8 Dc(~%s ]tl6SEfHr&0)F]eGKy=@rV?bI-oD0eD~?Dze:7*co:eWnd72DY5cb');
define('SECURE_AUTH_KEY',  'O;>nu%m|okv3*_XAkh?=`}e=kP2[j.y,0t>CbpKfC{:(#/)ot2t|hV,FwG`ONn m');
define('LOGGED_IN_KEY',    'CMoy!K[A,5-_AppQ@/QIx:4p71R]7xWLT&xs5MT=({QV}AR1t!&8%bk.}n8bmKg@');
define('NONCE_KEY',        'U;Ng8j7fXUd MdlIGHvLq$tK =wU=G12IQrHRqbjp&#h[D`etZjDg^s$:TetB0EP');
define('AUTH_SALT',        'tj[RdvG`^>0)Rt0`:. &S9XCGzhglO<rqGnt~]+U?zjM~tdh>*c>h%m,X~ww}tnW');
define('SECURE_AUTH_SALT', 'daz4ul8P!{Jk:dOPc2>pO}W=&YPOZMV+bD[4Xe!0^y7qEB9EQj:JSyuK1Uk><US[');
define('LOGGED_IN_SALT',   '5%5Zg32r$O^~: ,XuaXCamm9H7D fOqhzX]vdSc9fteFBDff<N1yMH>r&AP0TSRJ');
define('NONCE_SALT',       '$% a}x.TV&pxKZD:E6Y4/zRNT`x8[p=3)*2Ve?&,g:${H/Ve*#l;*AdxE+y?sv9u');

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
