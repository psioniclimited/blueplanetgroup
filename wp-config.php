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
define('DB_NAME', 'blueplanetgroup');

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
define('AUTH_KEY',         '%tGTL7kYp5fIl~31wbe=ps,x^.hX-`.}6BLx-?gd+(8a+oX)ixFX]:o@&5M6$>m$');
define('SECURE_AUTH_KEY',  'r@: (~);/{f0Z=]&oaenr?V(MtO:`N%ToKg/d<ji x%YY,JD,6F@|!Z-%kCnLor&');
define('LOGGED_IN_KEY',    '2bUalvgwgwaNq>RPGM.sH`u4s;!:[)FHNKSlZ.n4D-c0YSP$ajl{(<goUF$Ku5:<');
define('NONCE_KEY',        'Z_3QmJrlk23LPYbFe.MOXUQyMbZ}nr4T?.}l4+chWbiml5j,z5eDRm|r{:A*`3y8');
define('AUTH_SALT',        'vqn$&sW#Vlq[5Bx=LtDJA}xR=K^9wH&opX(of~QB&$G-KUbkq5I(IHPP-d?JM-(r');
define('SECURE_AUTH_SALT', 'Lk2B-j0=U)NPlnnsph0RQpLZBMh65DB38#;JXJ~vBBgqwlV3K4AGROA0,rd6O7|]');
define('LOGGED_IN_SALT',   '==C6sXQ9:~Gdgdo?F1bQtK~O,Zbo=v[{kr*wK5<;vT};^!Go*u#f&uNKl^sy(%iC');
define('NONCE_SALT',       '1rG@#X^HhV^8duh>JIONlUySDus9FmHH10DH Sg`$171x7lFy6ZdqhDHx|VLMj8[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bpg_';

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
