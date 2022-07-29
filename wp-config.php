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
define('DB_NAME', 'safetynr_ilgdatabase');

/** MySQL database username */
define('DB_USER', 'safetynr_ilg');

/** MySQL database password */
define('DB_PASSWORD', 'zxASqw12!@');

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
define('AUTH_KEY',         '$sh&HkGWY pF+OAT,6urk1dym|%jtF~n0mN{*IC*X`E4:h0n/7D%Mz/mCmO*z:6%');
define('SECURE_AUTH_KEY',  '$J*^;&G.[RFu>YNe8t[8vL?TC:$mLzikr+A>4 K@n/v&9zev^uPF]tNw*9G_m[T!');
define('LOGGED_IN_KEY',    'i-Cra]S9,]0W5%pLxkf>[F!coDXu:{7ZHR|3e;yA|fu@BtxGuQ;c`#P1#&mEkl<y');
define('NONCE_KEY',        '^khqgodn>7s2j8|s0f}CC)S$LrP.^3ul(Nl{RZzm=aBqKc@@IL,bChhU3U@k@%bK');
define('AUTH_SALT',        'RCK]ZxVi,x,aANP,S]&=@fT+wn>5[U1~BJ~s9ah]AG26ES/,+mxz3@-^/hz6ym-3');
define('SECURE_AUTH_SALT', 'Utx+ra1cKJ&l;`8e<g8C,<ZpiSaLbtB|[nD0JrssN0R0pUiFo^ e(e{2OZKsZYzv');
define('LOGGED_IN_SALT',   '1PrR )_xxM~`V2G/8/JGzr,J@ZPMbC?_9?B<AuH(UTdmmnb`h,Dsfysq8Ya+{fqn');
define('NONCE_SALT',       '<O7p>!U/6Yy)WO._x=b8(D h/d8I>|SG|Ig}E2d@~i Y0m{Fftv|V#[|k2`0_^Ai');

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
