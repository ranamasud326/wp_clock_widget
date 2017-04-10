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
define('DB_NAME', 'wp_mysite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'w-I_z?OY8o`zD}CT9>6bV?QL&Kda.=F}D^ShrJ1{f=WLh4NP{LZl*?7j]R8UI@3u');
define('SECURE_AUTH_KEY',  'a+5ik,JvHtxpg(tKO.-^QJz+uhppSso71q3!}U)y=NVqul+,VquQ~^;,S-v$dSwu');
define('LOGGED_IN_KEY',    ':XVF/{Tae92<CALvr^#y$M-q9L+[-xsM==:-%a+-dkT^?[d3eF..cGFRtoiZ,/Zy');
define('NONCE_KEY',        'jS2a&gUHg>kb=#nC&99~cd<BiO-sdZ?dGV/t7~)U,tA8T7&8Iu/-+b&KURQsR96H');
define('AUTH_SALT',        'A0K/^%A-Ydi#p#~aRzyz{D7h2Su>j=W$P<Gjjjh&`R,C/_E?JGO+77BQhZsMR0E$');
define('SECURE_AUTH_SALT', 'oIA}$yKR~i-++ZF$V4v9VwAQ+{g1P:;exU3w#x<w:Jk{eynR;#r[H2>%Mn&+R!tN');
define('LOGGED_IN_SALT',   'Cx}?GXaDk4AIf T&?y:s)l5a`]Tr/sN3@-,  CU{]2!L|BhS] 5$^}dDR48M:(|R');
define('NONCE_SALT',       'qy!+s|7Hba=IUmF|c)kbZ+%bd)KNVQmlA dy&Tw5CR?4![&xCiX<Z*ph[;B:OX>(');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

//define('WP_ALLOW_MULTISITE', true);

//define('MULTISITE', true);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
