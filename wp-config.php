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
define('DB_NAME', 'fkatelyedb');

/** MySQL database username */
define('DB_USER', 'rustem');

/** MySQL database password */
define('DB_PASSWORD', '1215fuck');

/** MySQL hostname */
define('DB_HOST', 'fk2.cfzijt5thno3.us-west-2.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         '6U-#)ek#meASJ_)U!ifW:E7l]%!kyQQ[wdmaijMe6>Y[Utbea)QhaN78QWXw6UPi');
define('SECURE_AUTH_KEY',  '7`TnTd?q)NZ4+b*GPl>VEV;H*!|w3<VW,{FU`BsIl;>>J.pZ} :t&9.~V}ZB(#qo');
define('LOGGED_IN_KEY',    ';!m 5fvb?_vkfyDt#NYW$2~:mbdv*28x0PnSOvP_i(Dp@hhm(0.$8dgB[m/kX-%&');
define('NONCE_KEY',        '9c0n%51;_4;ZPPV$:&_#~u!_#T`>12~qFM[I0(a-!D/GiTEXMZ0ADu*;}4H*9nN)');
define('AUTH_SALT',        '(hc[,cxZya5PI@^qOlvk:,vTt</*/o?5_zy5~eGs/C<=4CGXdt(^u3_0]27Ev-u+');
define('SECURE_AUTH_SALT', 'cJ3$<#sgX$tLI&+lcZ}^YMr:LD*z j]6L!zAJysW8<_y`$=oW1n<];{`:k$RCbio');
define('LOGGED_IN_SALT',   'ILDmcjm#%@!wv1*+vdQ.XO5V<dUiPX!OEpfoh5u:B}r_9Ul?6@q.h`W8*0f5bry(');
define('NONCE_SALT',       'URXuP8mBMc}e^f+V.={_,yPl|,M>vG+kq}e?R.^bc.vOd.) 3RRS.(<Z,g3&V{%s');

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
