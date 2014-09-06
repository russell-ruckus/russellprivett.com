<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'russellprivett.com');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '`arQ_Dx=d(MSn1PpqPCWWou:Rc4[R{Ms0)X1#7;bB+PZ^,jcoM13E7e_.QYwwzD7');
define('SECURE_AUTH_KEY',  'Vpb*zw*x;?1<Uij5!fEhA. ON+dg -^Xs:UTYH4I/E,x?l#,_llN4#2|Y!8+vnIA');
define('LOGGED_IN_KEY',    'j|!42!]q}}2B^>w?L@;RbbT^Fsm+sSRt6$~(b>/&_U8+Y|ne@7L_(+|$%-y) q(b');
define('NONCE_KEY',        'r~?3`{VMJ=n+!O3,Bgm%:Vw1P` jA%Sy)9@+|=~]06[88,|TYEaQ6,3k/H&?u(ic');
define('AUTH_SALT',        '% C*=])?Ru4S6`UvbQDT|F&Ru$@ss7cr9/aHASdA) XYOuhptA-ES3+0Q,yRgr]E');
define('SECURE_AUTH_SALT', 'kZu@qp*&{+2&ldr[} 6Ca~Dv*;LsseTW_)|Nb4laYa[a >d>U`hD evyBny8zXgN');
define('LOGGED_IN_SALT',   ':oz~wU<rvC<>v`G<V`L?w;=J<!2@N#PU9M<V]+#-VM*WPSlVb^4p!;|P8<&lVrnF');
define('NONCE_SALT',       '$YZo7)N3j)7 |60[40b>QrPXz($=l8ORIihK-1.d4[}|Jp,#;=q!5UwUx%YB<Qb&');

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
