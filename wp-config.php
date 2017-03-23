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
define('DB_NAME', 'myblog');

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
define('AUTH_KEY',         'zSU-~>lq,z>vl?S{W9ur@Qa+8{2wVMo)||A|oBEcfi,>*@U%?<t??2{o;a[uU*!t');
define('SECURE_AUTH_KEY',  '63?@Ej;8y9@/m!!-:4$0<t&+}#xV <*P$v^Cn~xwr;1awsm-WRO~t1Pl0q4ez*T|');
define('LOGGED_IN_KEY',    ']&M:@35XZR#q$ZBIRXQlh$yO@j|-W9*w(g&W}h>(N/.hT+j+.A7g54ZL_l BoZ1j');
define('NONCE_KEY',        'l&{;MA_I9Fj+ncg;AsS:V:$%qNs%a#5,P<Woh/dCgym?m4vz.-7S3GBnkf(o5-O1');
define('AUTH_SALT',        'ye2D8|`B$.%iAJAE;Z:Pa:N* >hM-cWcwj]I!:=MJ&jae@d,RD.HI6i(<6&f)H}#');
define('SECURE_AUTH_SALT', 'S}_B%L(6L2{Bv~Nm}q-]O E-CpvNUt$@-P(K=+HE87tshGyxIH sQ0}ajB(,#MDM');
define('LOGGED_IN_SALT',   'P0.Xx{0Xw?u1P(o3W_Msu6r-OQFs^.oLRROg=%&K]6Ra#0<}_m+A0V%^rG|(:X11');
define('NONCE_SALT',       '7|/& H,z`H11ETk27SX@u3Zv*>s)x-4M;QHi2JRq$6CF&Hd:;SpJX$n83$XHn4yP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'blog';

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
