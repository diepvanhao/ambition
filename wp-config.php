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
define('DB_NAME', 'ambitionvn');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'J-6|LpU*4+W&L_k a`JjjdYOanMys=T,M,KD(Ubtb~B{$maR+7D2:a8LA[-dG{;Q');
define('SECURE_AUTH_KEY',  'yinI(J6(p#@j|1d@1]b74HqrS<VZcKCK)I3^];!1=3B=fc|zbqS+8]GM{_uvWns|');
define('LOGGED_IN_KEY',    'Y|TPoh%+||n:lhVc >g+AWz|QQz{!_=zmpRL;vrAh1y5e:A)Eh#%sFaqn&tH`%h8');
define('NONCE_KEY',        '@GHJab(ld+Mpu1+rXc2AbXS-*cP&M^_Ezj@H([ki9Ptkp65_k1QI#8x1;s5l!||+');
define('AUTH_SALT',        '&oS=;{^oTfu~c[x9!9nM@T,O_6K?,[]In|A|f++V-+Q%/%&P? uL;?@`h03@7R5@');
define('SECURE_AUTH_SALT', 'M95-|$i1b~#/v/*;v+4or7|iBsUbzil!*4.f|a_+Cr6fA|Tq)OR1!*+Ake`KIq{X');
define('LOGGED_IN_SALT',   '~[Qf*VHPlI:-iowSBl/+ct%nU^-VBAqb-1Mg^>sG_t1CV(fY~RI#&T</e8[#*4oX');
define('NONCE_SALT',       ' WfOP9*O8osnjIT^g8+OgiQVHF^vtekT+EW#YJ(IVHdPKFvtH:v}g]d1fB4Ke}{ ');

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
