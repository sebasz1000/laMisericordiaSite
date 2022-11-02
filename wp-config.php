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
define('DB_NAME', 'misericordia_db');
//TODOS ESTOS DATOS DEBEN ESTAR CONNFIGURADOS DE ACUERDO A SU MYSQL!!
//LA PÁGINA SE DAÑA, 
/** MySQL database username */
define('DB_USER', 'root');  

/** MySQL database password */
define('DB_PASSWORD', 'root');  //ESTA CONFIGURACIÓN SÓLO LA SABE EL GESTOR DE BASE DE DATOS!
//Listo, la página se arregla!

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
define('AUTH_KEY',         'k5)sf?76M2tuw[EQP:WC]+FEig]wj.d3Nw5Xydx-#DRJ1br_qOzXhz-<aw:fokb-');
define('SECURE_AUTH_KEY',  '<PI%T[~<RsYX( b[1B=)b$nE6A}3sY9|)YK7{==Ijh!5v}E<F2<8L_WtuA>-.`0Q');
define('LOGGED_IN_KEY',    '^m3 trr<w*4W-@Dza7]H&MXm)RBTijmL7?-6a.@B>9 Lvl;Hr+z/.bq>v;;)@W^@');
define('NONCE_KEY',        'v9o{1qu2M`|VDCVLVe=.P&2D)gJp$-#X?h&Kw@N 1o1vL%sjFG2.=QQeEY}QqU7>');
define('AUTH_SALT',        'V<{Z5M.8X%Ha5SMXcnB6S-zehwRC&!Fj0m1wE=l>u2DUEa_:S|-ax}k_t&TPFV5p');
define('SECURE_AUTH_SALT', 'e#.1_(AIuCp5S i[c06fq4 T#Y|JJns&`rJo0*%%3?Qfuc3v/Fo0ceVkDB5x&;]C');
define('LOGGED_IN_SALT',   'uAK:Wg#@z?DgGJVy0snZ~~[#(i[T?4}K2DYZ}M?dwgaaU5oe+0g7S&XwCF35F+>;');
define('NONCE_SALT',       '_3xMxk>0YlhJe@pW:]=&]c$_zo9!U@AogE.<<,s-b5d&e,T2;_/r!Wh^bJ<@J/?#');

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
