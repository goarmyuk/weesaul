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
define('DB_NAME', 'weesaulco_cargo');

/** MySQL database username */
define('DB_USER', 'weesaulco');

/** MySQL database password */
define('DB_PASSWORD', 'jahj8akhka!');

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
define('AUTH_KEY',         ',Gc,fEWUkN#DB3AxQY9p^B|_zR*bGpX/#!>.Ghz{$7:I^kETBlA$(>^_ BVhmbAb');
define('SECURE_AUTH_KEY',  ':b_T&4xn{6){yjP5@4S/yqQC>/>aSY{E(sCUO*u ( |OgMRLnNI-;a-EG;X0PC&A');
define('LOGGED_IN_KEY',    '>h?g9R!$1RHt#deX1QC+oiE3TA`WdX{)E7Mig=^~ %_n)ir^t^lu-Cuc0/V<E?;c');
define('NONCE_KEY',        '.zy:>K5aH52#}Qg`)U;O =Bzw`fk5:_}u&.7 zR~a[i<L;#pz(wp,4AcTH24W+Lg');
define('AUTH_SALT',        '58a5H__S&}P>8:`Qn+E&]if[HJB9+|U:ejZ+*R(29+Mc7vc4%K~@s*<&]v.J3v11');
define('SECURE_AUTH_SALT', 'nh9K<!PEFb/8_^q3N6j RDqMs<Ww^hbCM+.g}e0>5k[f*I3Y37DVWnn,[maQ+@z{');
define('LOGGED_IN_SALT',   'pp*YX6i-/3Iz6(Mq&/Io=yy#wKq (wM& `Q(3{wZI/ifEjabzZ,Dl:2.m{&!GQb!');
define('NONCE_SALT',       'jlgxG>~r3j#6ezWio ?GlrC]A8`}oy1uk2q_M>R zyg}8F{P|$^@rF^mjWm3)-1{');

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
