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
define('DB_NAME', 'tenshoku_journal');

/** MySQL database username */
define('DB_USER', 'tj_user_0001');

/** MySQL database password */
define('DB_PASSWORD', 'awE_M1Y@Xp>xUW(s');

/** MySQL hostname */
// define('DB_HOST', '10.0.3.10');
define('DB_HOST', '192.168.70.12');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** enable use host.prefPane **/
// define('WP_HOME','http://54.238.227.163/knowhow');
// define('WP_SITEURL','http://54.238.227.163/knowhow');
define('WP_HOME','http://dev.tenshoku-journal.com/knowhow');
define('WP_SITEURL','http://dev.tenshoku-journal.com/knowhow');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wQED9TZPBRUuV}-w~gYvClrzdI$%os5,wP3b[P3Ah+d/AT!J,p&7.d(/Q+:nQB0C');
define('SECURE_AUTH_KEY',  'nxp$/B^{!{h{=:?qky++SZ|!^%u1g+mZtkI^><a{MRw$S=9+)8lGm}Ce+7xe$|*Z');
define('LOGGED_IN_KEY',    '$vWvMC8=BTJ<50 Rf=A2w/L#+-^J<si,B+Rm;E#Xw3DP$#FN%t{,(LXJ6_O?x3A ');
define('NONCE_KEY',        'p-e+B`R-X(VN~(=M{2Jw@4?9?*Lerv#FaY~|4G1qebV:hkIT[@/;7>|SifGV_FPc');
define('AUTH_SALT',        'v2pAMCq,bxf5/.qW4}1Hasqk*^Z/(d tE|j`nK+faLGzdn`H1$mpG[);F@iY$x~o');
define('SECURE_AUTH_SALT', 'CQz=u_I<n4bir-tC`DO.C~zW@_-cEUvM,&|;g#1m6!,Qf%$Gs5:b&D7Cu^b3ynO$');
define('LOGGED_IN_SALT',   '[*2DQ(6:e8cS*N!yCzY%^4P>o9s@j|--C]=|tJjV~$/|gcuNbdby/07Lalz.s?Y]');
define('NONCE_SALT',       'H:/%5Vx]}}hCdo4?o8-&kAI<+X9]pefgS-y?o/j <VWmO8C,D,;gQ4Ex2R](ArYn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tj_';

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
