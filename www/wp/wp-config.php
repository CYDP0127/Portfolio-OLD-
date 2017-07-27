<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cydp0127');

/** MySQL database username */
define('DB_USER', 'cydp0127');

/** MySQL database password */
define('DB_PASSWORD', 'ejrrn12066!!');

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
define('AUTH_KEY',         'G1^R@lfI-OFUo@Wp^)Lczm/#Q@uR1P;bIOjhbF84=E#B%#_[.mo60u@hS+bup|dc');
define('SECURE_AUTH_KEY',  'OadDb}D>~j}jxD7?0 @+j5[bow`gY++qCw;}#b9Bk>7=[oK[wvz*Q#pD@<Hi;m2&');
define('LOGGED_IN_KEY',    '_=2cq72l#G/D,/E,C<-&|4<##LOqET^[!*9fvAn81qo<u>#]H,C$RNMQ$g,B^#5f');
define('NONCE_KEY',        't_;#u/9*-~B|g..`,A`LLW2v)1Z^,8Y9s^^K-Wc-Ye+MNbR>H-5Bg!w!#-&|1c^M');
define('AUTH_SALT',        '~@p9K%-F:J%p6|v#xd4!s1N?}#E I_Ygj4]E=@]ofsdqK6q@}f#:?FRyisg9^W8p');
define('SECURE_AUTH_SALT', '_F 418`h<ut_mc2Q$AXcW/ay@P6lNk#,j_P0E=PetKDz-4GFXfmVYalI;]21|HW]');
define('LOGGED_IN_SALT',   'x6sGu7 o+~ JPL!G|r /q_H7|<[c!zs+94Q_V}xyi-U,7ll0&/V.`d|i}_)+;){E');
define('NONCE_SALT',       '^?] j>fw}0l!3_qTZxJc$-nu8yI;E/e8|>Ls*j/S32W|)=y%Q_Fg5K${z[ns=^)M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
