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
define('DB_NAME', 'andco');

/** MySQL database username */
define('DB_USER', 'webandco');

/** MySQL database password */
define('DB_PASSWORD', 'andco2018');

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
define('AUTH_KEY',         'pbrSW:5=IN>U{,ZX Tpqacx1t<7d(fG|oD{``;0mgv_Yo3ueGYt=]fT5qnN)E[g-');
define('SECURE_AUTH_KEY',  '8TBJffDjov[XV*eSR3CR2xaB!~Hy(d#_$=]27Z.YH4eJD-.Q9[d-qDaC8J58%_yi');
define('LOGGED_IN_KEY',    'cQC#3b kud!oz!XFo;SsMWTt6py9SAji:H4C_d$MW%gC>4+n[B(o+#Y0<5x:p au');
define('NONCE_KEY',        'i><^]u5k+PfsgR8,FpC#Hmen JO8n&@G2UB,%~%C0<id[+a,Zo6v]w^8@i~tq~`[');
define('AUTH_SALT',        'JRw3UeeI(_k=&MO_}udS0dt2`Uqcz*=Z&Y:vaGZt/Ansor}Xn:Wpb{=[2Z>kSG@_');
define('SECURE_AUTH_SALT', 'Z_p (C345nfJ1%<b6Cv&~L4iJ=HrTo7uUI7z6a}Ht+QL}2(^g5Vv&;LlL9M=C.`V');
define('LOGGED_IN_SALT',   '3z@iJ(0TGXLX;A/+(%]mxCibU&?J4#t!_SjqY7onY.wK>#k,EoB)#U2;Wh]cjQ< ');
define('NONCE_SALT',       'FfaDtFbBt,v5`qv0%#fyZi~iXms$(4a{+c_8ej| qy0ka8mfaoNx7-F-G)#]:!lN');

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
